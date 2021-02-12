<style>
.swiper-mainvisual { width:100%; min-width:1200px; max-width:1919px; height:1000px; position:relative; margin:0 auto; z-index:1; }
.swiper-mainvisual .swiper-slide { width:100%; min-width:1200px; max-width:1919px; height:100%; position:relative; margin:0 auto; }

.RightArea { position:absolute; bottom:239px; right:58px; z-index:2; outline: none; }
.LeftArea { position:absolute; bottom:239px; right:161px; z-index:2; outline: none; }

.scrollArea { position: absolute; left: 30px; bottom: 58px; z-index: 2; }
</style>


<div class="swiper-container swiper-mainvisual" >

	 <div class="swiper-wrapper">
		<?for($i=1; $i<=5; $i++){?>
			<div style="background:url('/res/images/mainvisual/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
				<div class="RightArea"><img class="MainRight" onmouseover="this.src='/res/images/mainvisual/right_on.png'" onmouseout="this.src='/res/images/mainvisual/right.png'" src="/res/images/mainvisual/right.png" alt="메인비주얼 다음버튼" /></div>
				<div class="LeftArea"><img class="MainLeft" onmouseover="this.src='/res/images/mainvisual/left_on.png'" onmouseout="this.src='/res/images/mainvisual/left.png'" src="/res/images/mainvisual/left.png" alt="메인비주얼 이전버튼" /></div>
				<div class="scrollArea"><img src="/res/images/mainvisual/scroll_down.png" alt="스크롤 다운" onclick="go_page(2)"/></div>
			</div>
		<?}?>
	</div>

</div>


<script>
	var swiper_mainvisual = null;
	function set_mainvisual() {
		swiper_mainvisual = new Swiper('.swiper-mainvisual', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'fade',
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
							nextEl: '.RightArea',
							prevEl: '.LeftArea',
						}
		});
	}
</script>

