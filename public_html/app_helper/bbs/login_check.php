<?
include_once("./_common.php");

$mb_id       = $_POST[mb_id];
$mb_password = $_POST[mb_password];


if (!trim($mb_id) || !trim($mb_password))
    alert("회원아이디나 패스워드가 공백이면 안됩니다.");

/*
// 자동 스크립트를 이용한 공격에 대비하여 로그인 실패시에는 일정시간이 지난후에 다시 로그인 하도록 함
if ($check_time = get_session("ss_login_check_time")) {
    if ($check_time > $g4['server_time'] - 15) {
        alert("로그인 실패시에는 15초 이후에 다시 로그인 하시기 바랍니다.");
    }
}
set_session("ss_login_check_time", $g4['server_time']);
*/

$mb = get_member($mb_id);


function remove_local_storage(){
	echo "
		<script type='text/javascript'>
		if(window.localStorage != null){
			window.localStorage.removeItem('u_mb_id')
			window.localStorage.removeItem('u_mb_password');
		}
		</script>
	";
}

// 가입된 회원이 아니다. 패스워드가 틀리다. 라는 메세지를 따로 보여주지 않는 이유는 
// 회원아이디를 입력해 보고 맞으면 또 패스워드를 입력해보는 경우를 방지하기 위해서입니다.
// 불법사용자의 경우 회원아이디가 틀린지, 패스워드가 틀린지를 알기까지는 많은 시간이 소요되기 때문입니다.
if (!$mb[mb_id] || (sql_password($mb_password) != $mb[mb_password])) {
	remove_local_storage();
    alert("가입된 회원이 아니거나 패스워드가 틀립니다.\\n\\n패스워드는 대소문자를 구분합니다.");
}

// 차단된 아이디인가?
if ($mb[mb_intercept_date] && $mb[mb_intercept_date] <= date("Ymd", $g4[server_time])) {
	remove_local_storage();
    $date = preg_replace("/([0-9]{4})([0-9]{2})([0-9]{2})/", "\\1년 \\2월 \\3일", $mb[mb_intercept_date]); 
    alert("회원님의 아이디는 접근이 금지되어 있습니다.\\n\\n처리일 : $date");
}

// 탈퇴한 아이디인가?
if ($mb[mb_leave_date] && $mb[mb_leave_date] <= date("Ymd", $g4[server_time])) {
	remove_local_storage();
    $date = preg_replace("/([0-9]{4})([0-9]{2})([0-9]{2})/", "\\1년 \\2월 \\3일", $mb[mb_leave_date]); 
    alert("탈퇴한 아이디이므로 접근하실 수 없습니다.\\n\\n탈퇴일 : $date");
}

if ($config[cf_use_email_certify] && !preg_match("/[1-9]/", $mb[mb_email_certify])) {
	remove_local_storage();
    alert("메일인증을 받으셔야 로그인 하실 수 있습니다.\\n\\n회원님의 메일주소는 $mb[mb_email] 입니다.");
}

$member_skin_mpath = "$g4[mpath]/skin/member/$config[cf_member_skin]";
@include_once("$member_skin_mpath/login_check.skin.php");

// 회원아이디 세션 생성
set_session('ss_mb_id', $mb[mb_id]);
// FLASH XSS 공격에 대응하기 위하여 회원의 고유키를 생성해 놓는다. 관리자에서 검사함 - 110106
set_session('ss_mb_key', md5($mb[mb_datetime] . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']));


    // 3.27
    // 자동로그인 ---------------------------
    // 쿠키 한달간 저장
    $key = md5("APP" . $_SERVER[HTTP_USER_AGENT] . $mb[mb_password]);
    set_cookie('ck_mb_id', $mb[mb_id], 86400 * 9999);
    set_cookie('ck_auto', $key, 86400 * 9999);
    // 자동로그인 end ---------------------------


    $link = $g4[mpath];
?>




<script type='text/javascript'>
if(window.localStorage != null){
	if(window.localStorage.getItem("u_mb_id") != ""){
		window.localStorage.setItem("u_mb_id", "<?=$mb_id?>");
		window.localStorage.setItem("u_mb_password", "<?=$mb_password?>");
	}
}
</script>



<?
goto_url($link);
?>
