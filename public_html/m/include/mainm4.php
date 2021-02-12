<style>
.MainList4 { width: 100%; height: 889px; background: url('/m/images/main/main4_1.jpg') no-repeat center top; position: relative; }

.MainList4_div1 { width: 100%; }
.MainList4_div1 p { color: #775844; font-size: 50px; font-weight: 500; line-height: 100px; padding: 25px 0 10px 20px; }
.MainList4_btnArea { width: 75px; position: absolute; top: 75px; right: 20px; z-index: 2; }
.MainList4_btnArea::before { content: ""; display: block; right: 37px; width: 2px; height: 25px; background: #c7c7c7; position: absolute; }
.MainList4_btnArea > div { outline: none; }
.MainList4_rightBtn { float: right; }
.MainList4_leftBtn { float: left; }
</style>

<div class="MainList4">
	<div class="MainList4_div1">
		<p>Photo Gallery</p>

		<div class="MainList4_btnArea">
			<div class="MainList4_leftBtn"><img class="MainList4Left" src="/m/images/main/left2.png" alt="이전버튼" /></div>
			<div class="MainList4_rightBtn"><img class="MainList4Right" src="/m/images/main/right2.png" alt="다음버튼" /></div>
		</div>
	</div>

	<?=latestm("gallery", "5_1_1_1", 12, 35); ?>

	
</div>

<script>

	var swiper_mainvisual = null;
	$(function(){

		swiper_mainvisual = new Swiper('.swiper-MainList4', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'slide',
						speed: 1000,
						loop:true,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: false,
						on:{
							transitionStart:function(){
								
							},
							transitionEnd:function(){
								this.autoplay.stop();
								this.autoplay.start();
							}
						},
						navigation: {
							nextEl: '.MainList4Right',
							prevEl: '.MainList4Left',
						},
		});
	});

</script>