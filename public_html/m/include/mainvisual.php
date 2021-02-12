<style>

.swiper-mainm {margin:0 auto; width:100%; height:780px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }

.rightmArea { position:absolute; bottom:42px; right:210px; z-index:2; outline: none; }
.leftmArea { position:absolute; bottom:42px; left:210px; z-index:2; outline: none; }

.mainLetter { position: absolute; bottom: 143px; right: 22px; z-index: 2; }
.mainLetter > p { color: #fff; font-size: 80px; font-weight: 300; line-height: 85px; }
.mainLetter > p:first-child { text-align: end; }
.mainLetter > p:last-child { font-weight: 500; }
</style>

<div class="swiper-container swiper-mainm" >

	 <div class="swiper-wrapper">
		<?for($i=1; $i<=5; $i++){?>
			<div style="background:url('/m/images/mainvisual/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
				<div class="rightmArea"><img class="mainmRight" onmouseover="rightBtnOn()" src="/res/images/mainvisual/right.png" alt="메인비주얼 다음버튼" /></div>
				<div class="leftmArea"><img class="mainmLeft" onmouseover="leftBtnOn()" src="/res/images/mainvisual/left.png" alt="메인비주얼 이전버튼" /></div>
			</div>
		<?}?>
	</div>
	
	<div class="mainLetter">
		<p>Welcome</p>
		<p>Hotel Zamong</p>
	</div>
</div>


<script>

	function leftBtnOn() {
		$(".mainmLeft").attr({"src" : "/res/images/mainvisual/left_on.png"});
		$(".mainmLeft").attr({"onmouseout" : "leftBtnOff()"});
	}

	function leftBtnOff() {
		$(".mainmLeft").attr({"src" : "/res/images/mainvisual/left.png"});
		$(".mainmLeft").attr({"onmouseover" : "leftBtnOn()"});
	}

	function rightBtnOn() {
		$(".mainmRight").attr({"src" : "/res/images/mainvisual/right_on.png"});
		$(".mainmRight").attr({"onmouseout" : "rightBtnOff()"});
	}

	function rightBtnOff() {
		$(".mainmRight").attr({"src" : "/res/images/mainvisual/right.png"});
		$(".mainmRight").attr({"onmouseover" : "rightBtnOn()"});
	}	

	var swiper_mainvisual = null;
	$(function(){
		swiper_mainvisual = new Swiper('.swiper-mainm', {
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
							nextEl: '.mainmRight',
							prevEl: '.mainmLeft',
						},
		});

	});

</script>