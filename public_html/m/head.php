<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

include_once($g4[mpath]."/head.sub.php");
include_once($g4['path']."/lib/calendar.php");
set_session("ss_is_pc_view", "");

if($p){
$ppage=explode("_",$p);
	$pageNum=$ppage[0];
	$subNum=$ppage[1];
	$ssNum=$ppage[2];
	$tabNum=$ppage[3];
}

if($bo_table){
	$ppage=explode("_",$bo_table);
	$pageNum=$ppage[0];
	$subNum=$ppage[1];
	$ssNum=$ppage[2];
	$tabNum=$ppage[3];
}

$ca_temp = 0;
if(isset($it)){
	$ca_temp = 1;
	$ca_id = $it[ca_id2];
	if(!$it[ca_id2]) $ca_id = $it[ca_id];

}

if($ca_id){

	for($i=0; $i<strlen($ca_id); $i++) { 
		$str_cut[$i] = substr($ca_id,$i,1); 
	}
	if($str_cut[0] == "a") $str_cut[0] = 11;
	if($str_cut[0] == "b") $str_cut[0] = 12;
	if($str_cut[0] == "c") $str_cut[0] = 13;
	if($str_cut[0] == "d") $str_cut[0] = 14;
	if($str_cut[0] == "e") $str_cut[0] = 15;

	$pageNum = $str_cut[0]+1;
	$subNum = (strlen($ca_id) <= 2) ? 1 : $str_cut[2];
	$ssNum = (strlen($ca_id) <= 4) ? 1 : $str_cut[4];
	$tabNum = (strlen($ca_id) <= 6) ? 1 : $str_cut[6];

}


if($ca_temp == 1){
	unset($ca_id);
}

$tot=$pageNum."_".$subNum;
$tott=$pageNum."_".$subNum."_".$ssNum;

$cartcnt = get_cart_count(get_session("ss_on_uid"));

// 모바일 변수설정
$board_skin_mpath = $g4[mpath]."/skin/board/".$board[bo_skin];


//모바일 실시간채팅
$ninetalk_key = sql_fetch("SELECT site_key FROM ninetalk_site_key limit 0,1", false);
$talk_link = "location.href='".$g4["mpath"]."/ninetalk.php?site_key=".$ninetalk_key[site_key]."&return_url=".$_SERVER[HTTP_HOST].urlencode($_SERVER[REQUEST_URI])."'";



$menu = array();

$menu["pageNum"][1] = "Hotel Zamong";

$menu["pageNum"][2] = "Accommodation";
	$menu["tot"][2][1] = "Deluxe Double";
	$menu["tot"][2][2] = "Family Twin";

$menu["pageNum"][3] = "Facilities";
	$menu["tot"][3][1] = "Front";
	$menu["tot"][3][2] = "Business Center";

$menu["pageNum"][4] = "Reservation";

$menu["pageNum"][5] = "Photo Gallery";

?>


<?if(defined("__INDEX")){
//팝업관리
if(file_exists("$g4[path]/lib/popmng.mobile.lib.php")){ //모바일 팝업관리자 지원되는 셋팅버전인지 확인
	include_once("$g4[path]/lib/popmng.mobile.lib.php");
}
}?>


<script>
function gotoTop(){
	jQuery('html, body').animate( {scrollTop:0} ,300);
}
</script>

<!-- 전화걸기 스크립트 -->
<script type="text/javascript">

var callFlag = true;
function callNumber(num){   
   if(callFlag){
	   $.post("<?=$g4[mpath]?>/_ajax_call_log.php", null, function(){
		callFlag = false;
		location.href="tel:"+num;
	   });
   }
   setTimeout(function(){callFlag=true;}, 1000 * 3);
}
</script>

<div id="snsArea"><!-- right_q 열였을때 뒷배경 -->
</div>

<div id="MenuArea" onclick="menuclose()">
</div>

<style type="text/css">
#MenuArea {position:fixed; width:100%; height:100%; left:0; top:0; background-color:#000000;filter:alpha(opacity=50);opacity:.7; z-index:9999; display:none;}
#MenuZone {position:absolute; width:480px;background:#fff; z-index:99999; display:none; right:-480px;}
#MenuZone #Menu .smenu {display:none;}
#MenuZone #Menu .smenu.on {display:block;}

#Menu { padding-top: 66px; }
#Menu > li { text-align: center; }
#Menu > li > a { color: #000; font-size: 35px; line-height: 80px; }
</style>

<script type="text/javascript">
	function menu(){
		jQuery("#MenuZone").height(jQuery("#wrap").height());
		jQuery("#MenuArea").show();
		jQuery("#MenuZone").show();
		jQuery("#MenuZone").animate({right:"0"});
	}
	function menuclose(){
		jQuery("#MenuArea").hide();
		jQuery("#MenuZone").animate({right:"-450px"}, function(){jQuery("#MenuZone").hide();});
	}

	function smenuView(me){

		var isOpen = jQuery(me).parent().hasClass("on");

		$("#Menu > li").removeClass("on");
		$("#Menu > li > ul").stop().slideUp(0);

		if(isOpen){
			jQuery(me).parent().children("ul").slideUp(0, function(){
				$(me).parent().removeClass("on");
			});	
		}else{
			jQuery(me).parent().children("ul").slideDown(0);
			$(me).parent().addClass("on");
			
		}
	}
</script>

<style>
#Menu > li > ul { display: none; }
#Menu > li.on > ul { display: block; }
#Menu > li.on > a { color: #967661; }

#Menu > li > ul > li > a { color: #555555; font-size: 25px; line-height: 45px; font-weight: 300; }
#Menu > li > ul > li.on > a { font-weight: 500; }
</style>

<div id="wrap">

	<div id="MenuZone">
		<img src="/m/images/menu/menu_off.png" style="position:absolute; left:-66px; top:42px;" onclick="menuclose()" alt="메뉴닫기">
		<div class="menu_top">
			<img src="/m/images/menu/ci2.png" alt="메뉴바 로고" onclick="home()"/>
		</div>

		<div class="menu_div1">
			<a href="#menum" onclick="menum('menu04-1')"><img src="/m/images/menu/reserve.png" alt="예약하기 버튼" /></a>
		</div>

		<ul id="Menu" >
			<?foreach($menu["pageNum"] as $pn=>$pnStr) {?>
				<li <?=$pageNum == $pn ? "class='on'" : ""?> >
					<? if($pn==2 || $pn==3) {?>
						<a href="#menum" onclick="smenuView(this)"><?=$pnStr?></a>
					<?} else { ?>
						<a href="#menum" onclick="menum('menu<?=sprintf("%02d", $pn)?>-1')"><?=$pnStr?></a>
					<?} if(count($menu["tot"][$pn]) > 0) {?>
						<ul>
							<? foreach($menu["tot"][$pn] as $sn=>$snStr) {?>
								<li <?=$tot == $pn."_".$sn ? "class='on'" : ""?> >
									<a href="#menum" onclick="menum('menu<?=sprintf("%02d", $pn)?>-<?=$sn?>')"><?=$snStr?></a>
								</li>
							<?}?>
						</ul>
					<?}?>
				</li>
			<?}?>
		</ul>
	</div>
	
	<header>
		<div style="height:120px; background: #000; position: relative; z-index:3; ">
			<img src="/m/images/top/menu_on.png" class="menu" onclick="menu()" alt="메뉴오픈" />
			<img src="/m/images/top/user.png" class="user" onclick="login()" alt="로그인" />
			<img src="/m/images/top/ci.png" class="ci" onclick="home()" alt="로고" />
		</div>
	</header>

<?
if(file_exists("{$g4['path']}/res/images/subvisual/s{$p}.jpg"))				$Svisual = "s{$p}";
else if(file_exists("{$g4['path']}/res/images/subvisual/s{$bo_table}.jpg"))	$Svisual = "s{$bo_table}";
else if(file_exists("{$g4['path']}/res/images/subvisual/s{$tott}.jpg"))		$Svisual = "s{$tott}";
else if(file_exists("{$g4['path']}/res/images/subvisual/s{$tot}.jpg"))		$Svisual = "s{$tot}";
else if(file_exists("{$g4['path']}/res/images/subvisual/s{$pageNum}.jpg"))	$Svisual = "s{$pageNum}";
else																		$Svisual = "s0";
?>	

	<div id="menu_cover_area">
	<?if(!defined("__INDEX")){?>

		<div class="subvisual" style="background-image:url('/m/images/subvisual/<?=$Svisual?>.jpg');" >
			<p class="subvi_p1" ><?=$menu["pageNum"][$pageNum]?></p>
			<p class="subvi_p2">
				<? foreach($menu["pageNum"] as $pn=>$pnStr) {
						if($pn == 100) continue;
						
						if($pageNum == $pn) {
							echo "Home - ", $pnStr;

							if(count($menu["tot"][$pn]) > 0) {
								foreach($menu["tot"][$pn] as $sn=>$snStr)
									if($subNum == $sn)
										echo " - ", $snStr;
							}
						}
					}
				?>
			</p>
		</div>

		<?if($pageNum==2 || $pageNum==3){?>
			<div class="sub_title">
				<ul class="subvisual_tab" >
					<?foreach($menu["tot"][$pageNum] as $sn=>$snStr) {?>
						<li <?=$tot == $pageNum."_".$sn ? "class='on'" : ""?> >
							<a href="#menum" onclick="menum('menu<?=sprintf("%02d", $pageNum)?>-<?=$sn?>')" ><?=$snStr?></a>
						</li>
					<?}?>
				</ul>
			</div>
		<?}?>

		<? if($pageNum==5) { ?>
			<p class="photo">Photo Gallery</p>
			<? if($bo_table){ ?>
				<div class="boardarea">
			<?}?>
		<?}?>
	<?}?>