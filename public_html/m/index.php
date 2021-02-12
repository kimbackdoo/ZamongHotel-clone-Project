<?
/*
 * author	: 김재훈
 * date		: 2021-01-08
 * desc	    : 모바일사이트
 */
include_once("./_common.php");
include_once("{$g4["path"]}/lib/thumb.lib.php");
define("__INDEX",TRUE);
include_once("./head.php");

?>

<section>
	<?include_once("{$g4["path"]}/m/include/mainvisual.php");?>
</section>

<style>
.Mainlist1 { width:100%; height:427px; background:url('/m/images/main/main1.jpg') no-repeat center top; position: relative; }
.Mainlist1 > a { display: block; position: absolute; color: #fff; border: 1px solid #fff; padding: 8px 71px; bottom: 20px; left: 190px; font-size: 25px; }
.Mainlist1 > a:active { border: 3px solid #000; border-radius: 5px; }

.swiper-Mainlist2 {margin:0 auto; width:100%; height:1000px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }

.main2Title { position: absolute; top: 28px; left: 20px; z-index: 2; color: #fff; font-size: 50px; font-weight: 500; line-height: 100px; }

.btnArea { width: 76px; position: absolute; top: 73px; right: 20px; z-index: 2;}
.btnArea::before { content: ""; display: block; right: 36px; width: 2px; height: 25px; background: #6e6665; position: absolute; }
.btnArea > div { outline: none; }
.right2Area { float: right; }
.left2Area { float: left; }

.main2More { position: absolute; bottom: 400px; right: 20px; border-bottom: 2px solid #fff; z-index: 2; }
.main2More > a { color: #fff; font-size: 20px; font-weight: 500; }

.main2Button { width: 592px; height: 55px; position: absolute; bottom: 85px; left: 24px; z-index: 2; }
.main2Button > a { display: block; color: #fff; font-size: 21px; line-height: 25.8px; border: 1px solid #6e6665; padding: 17px 108px; }
.main2Button > a:first-child { float: left; }
.main2Button > a:last-child { float: right; }
.main2Button > a:hover { background: #d6bfa8; }

.MainList3 { width: 100%; height: 382px; }
</style>

<div class="Mainlist1">
	<a href="#menun" onclick="menum('menu01-1')">Read More</a>
</div>

<div class="swiper-container swiper-Mainlist2" >
	<div class="main2Title">Accommodation</div>
	
	<div class="btnArea">
		<div class="right2Area"><img class="main2Right" src="/m/images/main/right.png" alt="다음버튼" /></div>
		<div class="left2Area"><img class="main2Left" src="/m/images/main/left.png" alt="이전버튼" /></div>
	</div>

	 <div class="swiper-wrapper">
		<?for($i=1; $i<=2; $i++){?>
			<div style="background:url('/m/images/main/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" ></div>
		<?}?>
	</div>
	
	<div class="main2More"><a href="#menun" onclick="menum('menu02-1')">Read More</a></div>

	<div class="main2Button">
		<a href="#menun" onclick="menum('menu02-2')">더보기</a>
		<a href="#menun" onclick="menum('menu04-1')">예약안내</a>
	</div>
</div>

<div class="MainList3">
	<a href="#menun" onclick="menum('menu03-1')"><img src="/m/images/main/main3_1.jpg" alt="프론트 바로가기" /></a>
	<a href="#menun" onclick="menum('menu03-2')"><img src="/m/images/main/main3_2.jpg" alt="비즈니스 센터 바로가기" /></a>
</div>

<?include_once("{$g4[path]}/m/include/mainm4.php");?>

<?
include_once("./tail.php");
?>

<script>

	var swiper_mainvisual = null;
	$(function(){
		swiper_mainvisual = new Swiper('.swiper-Mainlist2', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 1000,
						loop:true,
						loopAdditionalSlides:1,
						loopedSlides:1,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: false,
						on:{
						transitionEnd:function(){
							this.autoplay.stop();
							this.autoplay.start();
							}
						},
						touchRatio:1,
						navigation: {
							nextEl: '.main2Right',
							prevEl: '.main2Left',
						},
		});

	});

</script>