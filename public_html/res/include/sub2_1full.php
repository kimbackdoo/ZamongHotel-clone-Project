<style>
.sub2_div1 { width: 1200px; height: 314px; margin: 0 auto; }
.sub2_div1 > p { text-align: center; font-size: 50px; font-weight: 500; margin: 83px 0 52px 0; }

.sub2_div1-1_1 { float: left; font-size: 19px; line-height: 30px; }
.sub2_div1-1_1 > p { font-size: 25px; line-height: 55px; font-weight: 500; }
.sub2_div1-1 a { float: right; }

.sub2_div2 { width: 1200px; height: 650px; margin: 0 auto; padding-bottom: 50px; }

.swiper-sub2-1 { width:100%; height:80%; position:relative; margin:0 auto; z-index:1; }
.swiper-sub2-1 .swiper-slide { width:100%; height:100%; position:relative; margin:0 auto; }

.sub2RightArea { position:absolute; width: 84px; height: 100%; top:0; right:0; z-index:2; }
.sub2LeftArea { position:absolute; width: 84px; height: 100%; top:0; left:0; z-index:2; }

.sub2RightArea > img { position:absolute; top:50%; transform:translateY(-50%); opacity: 0.4; }
.sub2RightArea > img:hover { opacity: 1; }

.sub2LeftArea > img { position:absolute; top:50%; transform:translateY(-50%); opacity: 0.4; }
.sub2LeftArea > img:hover { opacity: 1; }

.swiper-sub2-2 { height: 20%; box-sizing: border-box; padding: 10px 0; }
.swiper-sub2-2 .swiper-slide { height: 100%; opacity: 0.4; }
.swiper-sub2-2 .swiper-slide-thumb-active { opacity: 1; }

.sub2_div3 { background: url("/res/images/sub2/sub2.jpg") no-repeat center top; height: 497px; }
</style>

<div class="sub2_div1">
	<p>Deluxe Double</p>

	<div class="sub2_div1-1">
		<div class="sub2_div1-1_1">
			<p>디럭스 더블</p>
			비즈니스 고객, 관광객 등 구애받지 않고 편안하게 쉴 수 있는 공간으로 트렌디하고 모던한 인테리어가 돋보이는 객실입니다.<br />
			자몽호텔만의 특별한 분위기와 함께 내 방 같은 안락함을 동시에 느낄 수 있는 객실입니다.
		</div>

		<a href="#menulink" onclick="menulink('menu04-1')">
			<img src="/res/images/sub2/reserv.jpg" alt="예약 버튼" onmouseover="reservOver()" class="reservBtn" />
		</a>
	</div>
</div>

<div class="sub2_div2">
	<div class="swiper-container swiper-sub2-1" >
		 <div class="swiper-wrapper">
			<?for($i=1; $i<=11; $i++){?>
				<div style="background:url('/res/images/sub2_1/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" ></div>
			<?}?>
		</div>
		
		<div class="sub2RightArea"><img class="sub2Right" src="/res/images/sub2/right.png" alt="다음버튼" /></div>
		<div class="sub2LeftArea"><img class="sub2Left" src="/res/images/sub2/left.png" alt="이전버튼" /></div>
	</div>

	<div class="swiper-container swiper-sub2-2" >
		 <div class="swiper-wrapper">
			<?for($i=1; $i<=11; $i++){?>
				<div style="background:url('/res/images/sub2_1/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" ></div>
			<?}?>
		</div>
	</div>
</div>

<div class="sub2_div3"></div>

<script>
	function reservOver() {
		$(".reservBtn").attr({"src" : "/res/images/sub2/reserv_on.jpg"});
		$(".reservBtn").attr({"onmouseout" : "reservOff()"});
	}

	function reservOff() {
		$(".reservBtn").attr({"src" : "/res/images/sub2/reserv.jpg"});
		$(".reservBtn").attr({"onmouseover" : "reservOver()"});
	}

	var swiper_sub2_1 = null;
	var swiper_sub2_2 = null;

	$(function(){
		swiper_sub2_2 = new Swiper('.swiper-sub2-2', {
				 spaceBetween: 10,
				 slidesPerView: 4,
				 loop: true,
				 freeMode: true,
				 loopedSlides: 5,
				 watchSlidesVisibility: true,
				 watchSlidesProgress: true,
		});

		swiper_sub2_1 = new Swiper('.swiper-sub2-1', {
						spaceBetween: 10,
						loop: true,
						loopedSlides: 5,
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