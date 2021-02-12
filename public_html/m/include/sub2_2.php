<style>
.sub2_1_div1 { width: 100%; height: 129px; text-align: center; }
.sub2_1_div1 > p { font-size: 50px; padding-top: 35px; font-weight: 500; }

.sub2_1_div2 { width: 100%; height: 489px; }
.swiper-sub2-1 { width:600px; height:70%; position:relative; margin:0 auto; z-index:1; }

.sub2BtnArea > div { position: absolute; z-index: 2; bottom: 0; cursor: pointer; }
.sub2Right { right: 0; }
.sub2Left { right: 67px; }

.swiper-sub2-2 { width: 600px; height: 120px; box-sizing: border-box; padding-top: 15px; }
.swiper-sub2-2 .swiper-slide { height: 100%; }

.swiper-sub2-2 .swiper-slide > img { width: 100%; height: 100%; }
.black_cover { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); z-index: 8; }
.swiper-sub2-2 .swiper-slide-thumb-active .black_cover { opacity: 0; }

.sub2_div3 { background: url("/m/images/sub2_2/sub2_1.jpg") no-repeat center top; height: 311px; }

.sub2_div4 { width: 100%; height: 125px; }
.sub2_div4 > a > img { display: block; margin: 0 auto; padding-top: 40px; }

.sub2_div5 { background: url("/m/images/sub2_2/sub2_2.jpg") no-repeat center top; height: 808px; }
</style>

<div class="sub2_1_div1"><p>Family Twin</p></div>

<div class="sub2_1_div2">
	<div class="swiper-container swiper-sub2-1" >
		 <div class="swiper-wrapper">
			<?for($i=1; $i<=10; $i++){?>
				<div style="background:url('/m/images/sub2_2/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" ></div>
			<?}?>
		</div>
		
		<div class="sub2BtnArea">
			<div class="sub2Right"><img src="/m/images/sub2_1/right.png" alt="다음버튼" /></div>
			<div class="sub2Left"><img src="/m/images/sub2_1/left.png" alt="이전버튼" /></div>
		</div>
	</div>

	<div class="swiper-container swiper-sub2-2" >
		 <div class="swiper-wrapper">
			<?for($i=1; $i<=11; $i++){?>
				<div class="swiper-slide" >
					<img src="/m/images/sub2_2/<?=$i?>.jpg" alt="방 풍경" />
					<div class="black_cover"></div>
				</div>
			<?}?>
		</div>
	</div>
</div>

<div class="sub2_div3"></div>

<div class="sub2_div4">
	<a href="#menum" onclick="menum('menu04-1')"><img src="/m/images/sub2_1/reserve.jpg" alt="예약하기 버튼" /></a>
</div>

<div class="sub2_div5"></div>

<script>
	var swiper_sub2_1 = null;
	var swiper_sub2_1 = null;

	$(function(){
		swiper_sub2_2 = new Swiper('.swiper-sub2-2', {
				spaceBetween: 10,
				slidesPerView: 3,
				loop: true,
				freeMode: true,
				loopedSlides: 5,
				autoplay: {
					delay: 4000,
				},
				watchSlidesVisibility: true,
				watchSlidesProgress: true,
				on:{
					transitionStart:function(){ },
					transitionEnd:function(){
						this.autoplay.stop();
						this.autoplay.start();
					}
				},
		});

		swiper_sub2_1 = new Swiper('.swiper-sub2-1', {
				spaceBetween: 10,
				loop: true,
				loopedSlides: 5,
				autoplay: {
					delay: 4000,
				},
				on:{
					transitionStart:function(){ },
					transitionEnd:function(){
						this.autoplay.stop();
						this.autoplay.start();
					}
				},
				navigation: {
					nextEl: '.sub2Right',
					prevEl: '.sub2Left',
				},
				thumbs: {
					swiper: swiper_sub2_2,
				},
		});
	});
</script>