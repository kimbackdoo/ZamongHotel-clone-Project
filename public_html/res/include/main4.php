<style>
.main4_div { background: url("/res/images/mainvisual/main4/main4.jpg") no-repeat center top; width: 100%; height: 1000px; position: relative; }

.main4_div-1 { width: 1200px; height: 600px; margin: 0 auto; }

.main4_div1 { padding-bottom: 20px; color: #775844; font-size: 50px; font-weight: 500; text-align: center; }
.main4_div1 a { padding: 37px 0 9px 0; border-bottom: 2px solid #baafa8; float: right; color: #775844; font-size: 16px; font-weight: 500; }

.swiper-bar .swiper-pagination-bullet { position: absolute; background: #775844; height: 3px; width: 1200px; margin: 0 auto; right: 0; left: 0; bottom: 54px !important; z-index: 4; border-radius: 0; }

.btnArea { width: 122px; height: 22px; position: absolute; left: 50%; margin-left:-61px; bottom: 0 !important; z-index: 3; }
.btnArea::before { content: ""; display: block; left: 60px; width: 1px; height: 22px; background: #d9d9d9; position: absolute; }

.btnArea > div { position: absolute; width: 41px; height: 100%; top: 0; cursor: pointer; outline: none; }
.btnArea > div > img { position: absolute; opacity: 0.2; transition: .2s linear; }

.main4Left { left: 0; }
.main4Left > img { right: 0 }
.main4Left:hover > img { right: 20px; opacity: 1; }

.main4Right { right: 0; }
.main4Right > img { left: 0; }
.main4Right:hover > img { left: 20px; opacity: 1; }

.main4_bar { background: #c9c9c9; width: 100%; height: 1px; z-index: 3; position: absolute; bottom: 55px; }
</style>

<div class="main4_div">
	<div style="width: 100%; height: 600px; position:absolute; left:0; right:0; top:19%;">
		<div class="main4_div-1">
			<div class="main4_div1">
				<span>Photo Gallery</span>
				<a href="#menulink" onclick="menulink('menu05-1')">Read More</a>
			</div>
				
			<?=latest("gallery", "5_1_1_1", 12, 35); ?>

			<div class="btnArea">
				<div class="main4Left"><img src="/res/images/left.png" alt="이전버튼" /></div>
				<div class="main4Right"><img src="/res/images/right.png" alt="다음버튼" /></div>
			</div>
		</div>

		<div class="main4_bar"></div>
		<div class="swiper-bar"></div>
	</div>
</div>

<script>

	var swiper_gallery = null;
	$(function(){
var no = null;
		swiper_gallery = new Swiper('.swiper-main4', {
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
							nextEl: '.main4Right',
							prevEl: '.main4Left',
						},
						pagination: {
							el: '.swiper-bar',
							type: 'bullets',
						}
		});
	});

</script>