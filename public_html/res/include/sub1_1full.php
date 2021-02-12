<style>
.sub1_div1 { background: url("/res/images/sub1_1/sub1_1.jpg") no-repeat center top; height: 428px; }

.sub1_div2 { background: url("/res/images/sub1_1/sub1_2.jpg") no-repeat center top; height: 804px; }

.sub1_div3 { background: url("/res/images/sub1_1/sub1_3.jpg") no-repeat center top; height: 243px; }

.swiper-sub1 { width:100%; min-width:1200px; max-width:1919px; height:524px; position:relative; margin:0 auto; z-index:1; }

.sub1BtnArea { width: 122px; height: 22px; position: absolute; left: 50%; margin-left: -61px; bottom: 0; z-index: 2; }
.sub1BtnArea::before { content:""; display:block; left:61px; top:0px; width:1px; height:22px; background:#d9d9d9; position:absolute; }
.sub1BtnArea > div { position: absolute; width: 41px; height: 100%; top: 0; outline: none; }
.sub1BtnArea > div > img { position:absolute; transition:.2s linear; opacity:0.2; }
.sub1Right { right:0; }
.sub1Right > img { left:0; }
.sub1Right:hover > img { left:20px; opacity:1; }
.sub1Left { left:0; }
.sub1Left > img { right:0; }
.sub1Left:hover > img { right:20px; opacity:1; }

.swiper-sub1 .swiper-slide { width:590px; height:400px; position:relative; margin:0 auto; }

.slide_bar { background: #cccccc; width: 100%; height: 1px; position: absolute; left: 0; right: 0; bottom: 63px; z-index: 10; }

.swiper-pagination1 { position: absolute; bottom: 58px !important; text-align: center; }
.swiper-pagination1 > .swiper-pagination-bullet { margin: 0 !important; width: 271px; height: 3px; background: #d6bfa8; opacity: 0; border-radius: 0; }
.swiper-pagination1 > .swiper-pagination-bullet.swiper-pagination-bullet-active { opacity: 1; }

.sub1_div4 { background: url("/res/images/sub1_1/sub1_4.jpg") no-repeat center top; height: 226px; }

.sub1_div5 { position:relative; background: url("/res/images/sub1_1/sub1_5.jpg") no-repeat center top; height: 770px; font-size: 18px; line-height: 28px; font-weight: 300; }

.sub1_div5 > div { position : absolute; }
.sub1_div5-1 { top: 176px; left: 360px; }
.sub1_div5-1 > span { font-weight: 500; }

.sub1_div5-2 { top: 346px; left: 360px; }

.sub1_div5 .sub1_a { position: absolute; top: 500px; left: 359px; background: #000; color: #fff; font-weight: 400; padding: 17px 46px 17px 42px; }
.sub1_a:hover { background: #805f4a; }
.sub1_a > span { font-weight: 700; }

.sub1_div5-3 { right: 0; top: 85px; }
</style>

<div class="sub1_div1"></div>

<div class="sub1_div2"></div>

<div class="sub1_div3"></div>

<div class="swiper-container swiper-sub1" >
	<div class="sub1BtnArea">
		<div class="sub1Right"><img src="/res/images/right.png" alt="다음버튼" /></div>
		<div class="sub1Left"><img src="/res/images/left.png" alt="이전버튼" /></div>
	</div>

	<div class="swiper-wrapper">
		<?for($i=1; $i<=7; $i++){?>
			<div style="background:url('/res/images/sub1_1/<?=$i?>.jpg');background-position:center center;" class="swiper-slide" >
			</div>
		<?}?>
	</div>
	
	<div class="slide_bar"></div>

	<div class="swiper-pagination1"></div>
</div>

<div class="sub1_div4"></div>

<div class="sub1_div5">
	<div class="sub1_div5-1">
		<span>T</span>&nbsp;064)796-1121<br />
		<span>F</span>&nbsp;064)796-8070
	</div>

	<div class="sub1_div5-2">
		제주특별자치도 제주시<br />
		한림읍 한림해안로 136(한림리) 자몽호텔
	</div>
	
	<a href="http://kko.to/M5wrxs7Yj" class="sub1_a">
			kakao <span>map</span> 보러가기
	</a>

	<div class="sub1_div5-3">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.3201297532864!2d126.25922661519846!3d33.41489728078419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x350c607795dbcbeb%3A0xc5b50c734a87261e!2z7J6Q66q97Zi47YWU!5e0!3m2!1sko!2skr!4v1609997257936!5m2!1sko!2skr" width="1140" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</div>

<script>

	var swiper_mainvisual = null;

	$(function(){

		swiper_mainvisual = new Swiper('.swiper-sub1', {
						spaceBetween: 20,
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
							nextEl: '.sub1Right',
							prevEl: '.sub1Left',
						},
						pagination: {
							el: '.swiper-pagination1',
							type: 'bullets',
						},
		});
	});

</script>