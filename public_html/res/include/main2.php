<style>
.main_div2 { background: url("/res/images/mainvisual/main2/main2.jpg") no-repeat center top; height: 1000px; position: relative; }

.main_div2-div { width: 1200px; margin: 0 auto; }

.main_div2-div1 { padding: 200px 0 80px 0; color: #fff; font-size: 50px; font-weight: 500; text-align: center; }
.main_div2-div1 a { padding: 37px 0 9px 0; border-bottom: 2px solid #b0aeae; float: right; color: #fff; font-size: 16px; font-weight: 500; }

.main_div2-div2 { width: 545px; display: inline-block; position: relative; text-align: center; }
.main_div2-div2::before { content:""; display:block; position:absolute; left:0px; top:0px; width:520px; height:302px; border:3px solid #d6bfa8; opacity:0; transition:all .3s ease-out; z-index:0; }
.main_div2-div2:hover::before { left:-18px; top:-18px; opacity:1; }
.main_div2-div2 > a { display:inline-block; }
.main_div2-div2 img { display:block; position:relative; box-shadow:10px 10px 15px 0px rgba(0,0,0,0.5); z-index:3; }
.main_div2-div2 p { font-size:25px; color:#fff; font-weight:500; line-height:41px; padding:35px 0 20px; }
.main_div2-div2 .boxLine { width:100%; height:3px; background:#d6bfa8; opacity:0; transition:all .2s ease-out; }
.main_div2-div2:hover .boxLine { opacity:1; }
.main_div2-div2 .roomInfo { padding-top:25px; line-height:28px; font-size:16px; color:#fff; font-weight:300; }
.main_div2-div2 .roomInfo > span { font-weight:500; }

.main_div2-div_1 { position: absolute; bottom: 228px; width: 100%; height: 1px; background: #615b5a; }
</style>

<div class="main_div2">
	<div class="main_div2-div">
		<div class="main_div2-div1">
			<span>Accommodation</span>
			<a href="#menulink" onclick="menulink('menu02-1')">Read More</a>
		</div>

		<div class="main_div2-div2" style="float: left;">
			<a href="#menulink" onclick="menulink('menu02-1')">
				<img src="/res/images/mainvisual/main2/main2_1.jpg" alt="디럭스 더블 방" />
				<p>Deluxe Double</p>
				<div class="boxLine"></div>
				<div class="roomInfo">
					<span>Bed Type</span>&nbsp;&nbsp;Double<br/>
					<span>Capacity</span>&nbsp;&nbsp;2People&nbsp;&nbsp;·&nbsp;&nbsp;<span>Maximum</span>&nbsp;&nbsp;2People
				</div>
			</a>
		</div>

		<div class="main_div2-div2" style="float: right;">
			<a href="#menulink" onclick="menulink('menu02-2')">
				<img src="/res/images/mainvisual/main2/main2_2.jpg" alt="패밀리 트윈 방" />
				<p>Family Twin</p>
				<div class="boxLine"></div>
				<div class="roomInfo">
					<span>Bed Type</span>&nbsp;&nbsp;Single+Double<br/>
					<span>2People</span>&nbsp;&nbsp;2People&nbsp;&nbsp;·&nbsp;&nbsp;<span>Maximum</span>&nbsp;&nbsp;3People
				</div>
			</a>
		</div>
	</div>

	<div class="main_div2-div_1"></div>
</div>