<style>
.header_div3_1 { float: left; width: 100px; height: 100%; position: relative; top: 32px; right: 40px; cursor: pointer; }
.loginPerson { float: left; }
.loginBtn { float: right; margin-top: 11px; }
.header_div3_1 div { font-size: 16px; color: #bba793; text-align: center; }

.header_div3_1-1 { display: none; width: 100%; margin: 0 auto; position: absolute; top: 49px; background: rgba(0, 0, 0, 0.8); border-top: 3px solid #d6bfa8; }
.header_div3_1-1 > a { display: block; color: #ababab; font-size: 15px; line-height: 45px; border-bottom: 1px solid #484944; }
.header_div3_1-1 > a:hover { color: #fff; }
.header_div3_1-1 > a:last-child { border-bottom: 0px; }

.header_div3_1:hover .header_div3_1-1 { display: block; }

.header_div3_2 { float: right; }

@media screen and (min-width:1200px){
}
/* 화면크기가 1400px보다 클 때 */
@media screen and (min-width:1400px)  and  (max-width:1700px){
}
/* 화면크기가 1400px보다 작을 때 */
@media screen and (max-width:1400px) {
	.header_div3_1 { width: 23px; }
	.header_div3_1-1 { width: 100px; left: -37px; }

	.loginBtn,
	.header_div3_login { display: none; }
}
</style>

<div class="heaer_div3">
	<div class="header_div3_1">
		<img src="/res/images/top/login_person.png" alt="로그인 사람" class="loginPerson" />
		<img src="/res/images/top/login_btn.png" alt="로그인 버튼" class="loginBtn" />
		<div class="header_div3_login">Login</div>

		<div class="header_div3_1-1">
			<a href="javascript:login()">Login</a>
			<a href="javascript:register()">Join Us</a>
		</div>
	</div>

	<div class="header_div3_2">
		<a href="#menulink" onclick="menulink('menu04-1')"><img src="/res/images/reserve.jpg" alt="예약 버튼" /></a>
	</div>
</div>