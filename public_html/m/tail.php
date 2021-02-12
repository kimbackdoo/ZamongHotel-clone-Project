<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$call = sql_fetch("SELECT COUNT(*) cnt FROM g4_call_log");
?>

<?if($bo_table){?>
	</div>
<?}?>

<style>
.copy { width: 100%; background: #d6bfa8; color: #775844; text-align: center; padding: 41px 0 55px 0; }

.copy_div1 { font-weight: 300; line-height: 33px; padding-top: 20px; font-size: 19px; }
.copy_div1 > span { font-weight: 500; }

.copy > p { color: #775844; font-weight: 250; font-size: 18px; line-height: 22px; padding: 20px 9px 0 0; display: inline-block; }
.copy > p > span { font-weight: 500; }

.quickArea { position: fixed; bottom: 252px; right: 0; z-index: 3; }
.noneQuick { display: none; }

.quickArea > img { display : block; margin: 10px 0; }

.visiter { position:relative;width:640px;height:40px;font-size:18px;background:#d6bfa8;color:#775844;text-align:center;z-index:20;margin-top:-2px; border-top: 1px solid #b59f88; border-bottom: 1px solid #b59f88; }

.bottom_banner { width:100%; height:58px; background: #cab197; }

.bottom_banner-div1 { width: 301px; height: 100%; margin: 0 auto; padding-top: 20px; position: relative; }
.bottom_banner-div1::before { content: ""; display: block; top: 25px; right: 141px; width: 1px; height: 15px; background: #b1967e; position: absolute; }
.bottom_banner-div1 > a { color: #775844; font-size: 19px; line-height: 22px; font-weight: 300; }
.bottom_banner-div1 > a > span { font-weight: 500; }
</style>

<footer class="copy">
	<img src="/m/images/bottom/ci.png" alt="하단 로고" />
	<div class="copy_div1">
		제주특별자치도 제주시 한림읍 한림해안로 136(한림리)<br />
		사업자등록번호 : 616-30-89302&nbsp;&nbsp;&nbsp;
		<span>T</span>&nbsp;064)796-1121&nbsp;&nbsp;&nbsp;
		<span>F</span>&nbsp;064))796-8070
	</div>
	<p>Copyright &copy; 2020 <span><?=$g4['title']?>.</span>All Rights Reserved.</p>
	<a href="javascript:m_it9()"><img src="/m/images/bottom/it9.png" alt="아이티나인 로고" /></a>

	<div class="quickArea">
		<img src="/m/images/call.png" alt="전화하기 버튼" onclick="callNumber('010-9557-1149')" />
		<img src="/m/images/top.png" alt="위로가기 버튼" onclick="gotoTop()" />
	</div>
</footer>

<?preg_match("/오늘:(.*),어제:(.*),최대:(.*),전체:(.*)/", $config['cf_visit'], $visit);settype($visit[0], "integer");settype($visit[1], "integer");settype($visit[2], "integer");settype($visit[3], "integer");?>
<div class="visiter">
	<div style="margin:6px 0 0;display:inline-block;">
		<span>Today</span>
		<span style="font-weight:bold;margin-left:8px;"><?=$visit[1]?></span>
	</div>
	<div style="margin:6px 0 0 30px;display:inline-block;">
		<span>Total</span>
		<span style="font-weight:bold;margin-left:8px;"><?=$visit[4]?></span>
	</div>
</div>

<div class="bottom_banner">
	<div class="bottom_banner-div1">
		<a href="javascript:info2()" style="padding-right: 16px;">개인정보처리방침</a></li>
		<a href="javascript:adm()" style="padding-left:16px;">
			<img src="/m/images/bottom/admin.png" alt="자물쇠 버튼" style="vertical-align:middle; display:inline-block; margin-top:-4px" />	
			<span>관리자페이지</span>
		</a>
	</div>
</div>


</div><!-- #menu_cover_area -->

</div><!-- #wrap -->

<?
include_once($g4[mpath]."/tail.sub.php");
?>

<script>
	$(function(){
		Scroll();
	});

	$(window).scroll(function() {
		Scroll();
	});
	
	function Scroll(){
		if($(document).scrollTop() <= 1) {
			$(".quickArea").addClass("noneQuick");
		}
		else {
			$(".quickArea").removeClass("noneQuick");
		}
	}
</script>