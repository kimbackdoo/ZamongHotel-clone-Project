<style>
.sub3_div1 { width: 1200px; height: 314px; margin: 0 auto; }
.sub3_div1 > p { text-align: center; font-size: 50px; font-weight: 500; margin: 83px 0 52px 0; }

.sub3_div1-1_1 { float: left; font-size: 19px; line-height: 30px; }
.sub3_div1-1_1 > p { font-size: 25px; line-height: 55px; font-weight: 500; }

.sub3_div2 { width: 1200px; height: 650px; margin: 0 auto; padding-bottom: 50px; }

.swiper-sub3-1 { width:100%; height:80%; position:relative; margin:0 auto; z-index:1; }
.swiper-sub3-1 .swiper-slide { width:100%; height:100%; position:relative; margin:0 auto; }

.sub3RightArea { position:absolute; width: 84px; height: 100%; top:0; right:0; z-index:2; }
.sub3LeftArea { position:absolute; width: 84px; height: 100%; top:0; left:0; z-index:2; }

.sub3RightArea > img { position:absolute; top:50%; transform:translateY(-50%); opacity: 0.4; }
.sub3RightArea > img:hover { opacity: 1; }

.sub3LeftArea > img { position:absolute; top:50%; transform:translateY(-50%); opacity: 0.4; }
.sub3LeftArea > img:hover { opacity: 1; }

.swiper-sub3-2 { height: 20%; box-sizing: border-box; padding: 10px 0; }
.swiper-sub3-2 .swiper-slide { height: 100%; opacity: 0.4; }
.swiper-sub3-2 .swiper-slide-thumb-active { opacity: 1; }

.sub3_div3 { background: url("/res/images/sub3_2/sub3_2.jpg") no-repeat center top; height: 220px; }
</style>

<div class="sub3_div1">
	<p>Business Center</p>

	<div class="sub3_div1-1">
		<div class="sub3_div1-1_1">
			<p>비지니스 센터</p>
			호텔 이용객들만 이용이 가능한 비지니스 센터로 여행정보, 비지니스 업무 등 컴퓨터 용무가 필요한 고객분들이 편하게<br />
			이용할 수 있도록 호텔 내 한켠에 비지니스 센터공간을 마련해 드리고 있습니다.
		</div>
	</div>
</div>

<div class="sub3_div2">
	<div class="swiper-container swiper-sub3-1" >
		 <div class="swiper-wrapper">
			<?for($i=1; $i<=5; $i++){?>
				<div style="background:url('/res/images/sub3_2/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" ></div>
			<?}?>
		</div>
		
		<div class="sub3RightArea"><img class="sub3Right" src="/res/images/sub2/right.png" alt="다음버튼" /></div>
		<div class="sub3LeftArea"><img class="sub3Left" src="/res/images/sub2/left.png" alt="이전버튼" /></div>
	</div>

	<div class="swiper-container swiper-sub3-2" >
		 <div class="swiper-wrapper">
			<?for($i=1; $i<=11; $i++){?>
				<div style="background:url('/res/images/sub3_2/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" ></div>
			<?}?>
		</div>
	</div>
</div>

<div class="sub3_div3"></div>

<script>
	function reservOver() {
		$(".reservBtn").attr({"src" : "/res/images/sub2/reserv_on.jpg"});
		$(".reservBtn").attr({"onmouseout" : "reservOff()"});
	}

	function reservOff() {
		$(".reservBtn").attr({"src" : "/res/images/sub2/reserv.jpg"});
		$(".reservBtn").attr({"onmouseover" : "reservOver()"});
	}

	var swiper_sub3_1 = null;
	var swiper_sub3_2 = null;

	$(function(){
		swiper_sub3_2 = new Swiper('.swiper-sub3-2', {
				 spaceBetween: 10,
				 slidesPerView: 5,
				 loop: true,
				 freeMode: true,
				 loopedSlides: 5,
				 watchSlidesVisibility: true,
				 watchSlidesProgress: true,
		});

		swiper_sub3_1 = new Swiper('.swiper-sub3-1', {
						spaceBetween: 10,
						loop: true,
						loopedSlides: 5,
						navigation: {
							nextEl: '.sub3Right',
							prevEl: '.sub3Left',
						},
						thumbs: {
							swiper: swiper_sub3_2,
						},
		});
	});
</script>