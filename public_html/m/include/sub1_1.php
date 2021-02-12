<style>
.sub1_div1 { width: 100%; height: 129px; text-align: center; }
.sub1_div1 > p { font-size: 50px; padding-top: 35px; font-weight: 500; }

.sub1_div2 { background: url("/m/images/sub1_1/sub1_1.jpg") no-repeat center top; height: 325px; }

.sub1_div3 { background: url("/m/images/sub1_1/sub1_2.jpg") no-repeat center top; height: 815px; }

.sub1_div4 { width: 100%; height: 505px; position: relative; }
.sub1_div4-1 { background: url("/m/images/sub1_1/sub1_3.jpg") no-repeat center top; height: 118px; }

.swiper-sub1 { margin:0 auto; width:600px; height:274px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }
.swiper-sub1 .swiper-slide { width: 404px; height: 100%; }

.sub1_bar { background: #cccccc; width: 600px; margin: 0 auto; height: 1px; position: absolute; left: 0; right: 0; bottom: 71px; z-index: 2; }

.swiper-sub1_pagination { position: absolute; bottom: 70px !important; }
.swiper-sub1_pagination > .swiper-pagination-bullet { margin: 0 !important; width: 128px; height: 3px; background: #d6bfa8; opacity: 0; border-radius: 0; }
.swiper-sub1_pagination > .swiper-pagination-bullet.swiper-pagination-bullet-active { opacity: 1; }

.sub1BtnArea { width: 122px; position: absolute; bottom: 0; left: 259px; z-index: 2; }
.sub1BtnArea::before { content:""; right: 60px; width: 1px; height: 22px; background: #d9d9d9; position: absolute; }
.sub1BtnArea > div { outline: none; cursor: pointer; }
.sub1Right { float: right; }
.sub1Left { float: left; }

.sub1_div5 { width: 100%; height: 977px; }
.sub1_div5-1 { background: url("/m/images/sub1_1/sub1_4.jpg") no-repeat center top; height: 127px; }
.sub1_div5-2 { width: 100%; height: 850px; background: #f9f4f2;  position: relative; }
.sub1_div5-2 > a { position: absolute; bottom: 55px; left: 198px; padding: 15px 45px; background: #805f4a; color: #fff; font-size: 18px; line-height: 25px; font-weight: 300; }
.sub1_div5-2 > a > span { font-weight: 500; }

.sub1_div5-2_1 { display: none; position: absolute; bottom: 150px; left: 20px; box-shadow: 10px 10px 15px 0px rgba(0,0,0,0.2); }
.showMap { display: block; }
</style>

<div class="sub1_div1"><p>Prologue</p></div>
<div class="sub1_div2"></div>
<div class="sub1_div3"></div>

<div class="sub1_div4">
	<div class="sub1_div4-1"></div>

	<div class="swiper-container swiper-sub1" >
		<div class="swiper-wrapper">
			<?for($i=1; $i<=5; $i++){?>
				<div style="background:url('/m/images/sub1_1/<?=$i?>.jpg'); background-position:center center;" class="swiper-slide" ></div>
			<?}?>
		</div>
	</div>

	<div class="sub1_bar"></div>

	<div class="swiper-sub1_pagination"></div>

	<div class="sub1BtnArea">
		<div class="sub1Right"><img src="/m/images/sub1_1/right.png" alt="다음버튼" /></div>
		<div class="sub1Left"><img src="/m/images/sub1_1/left.png" alt="이전버튼" /></div>
	</div>
</div>

<div class="sub1_div5">
	<div class="sub1_div5-1"></div>

	<div class="sub1_div5-2">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.3199580416704!2d126.25922661550845!3d33.414901758492825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x350c607795dbcbeb%3A0xc5b50c734a87261e!2z7J6Q66q97Zi47YWU!5e0!3m2!1sko!2skr!4v1610424304875!5m2!1sko!2skr" width="640" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		<div class="sub1_div5-2_1"><img src="/m/images/sub1_1/sub1_5.jpg" alt="연락처 및 위치" /></div>
		<a href="http://kko.to/rPCefR7Do" target="_blank" >kakao <span>map</span> 보러가기</a>
	</div>
</div>

<script>
	var swiper_sub1 = null;

	$(function(){
		swiper_sub1 = new Swiper('.swiper-sub1', {
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
							transitionStart:function(){ },
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
							el: '.swiper-sub1_pagination',
							type:'bullets',
						}
		});
	});
</script>

<script>
	$(function(){
		mapScroll();
	});

	$(window).scroll(function() {
		mapScroll();
	});
	
	function mapScroll(){
		var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();

		if(scrollBottom <= 300) {
			$(".sub1_div5-2_1").addClass("showMap");
		}
		else {
			$(".sub1_div5-2_1").removeClass("showMap");
		}
	}
</script>