<style>
.position { width: 100%; height: 100%; color: #775844; }

.footer_div1 { width: 1200px; margin: 0 auto; padding-top: 36px; text-align: center; font-weight: 300; }
.footer_div1-1 { margin-top: 25px; font-size: 15px; line-height: 25px }
.footer_div1-1 > span { font-weight: 500; }

.footer_div2 { margin: 38px; }
.footer_div2-1 { float: left; font-size: 13px; font-weight: 300; }
.footer_div2-1 > span { font-weight: 500; }
.footer_div2-1 a { color: #775844; }

.footer_div2-2 { float: right; }

.topBtn { position: fixed; bottom: 40px; right: 50px; z-index: 3; }
.noneTop { display: none; }
</style>

<div class="wrap-footer">
	<footer class="layout">
		<div class="position">
			<!--하단 영역-->
			<div class="footer_div1">
				<img src="/res/images/bottom/logo.png" alt="로고" />
				<div class="footer_div1-1">
					제주특별자치도 제주시 한림읍 한림해안로 136(한림리)<br />
					사업자등록번호 : 616-30-89302<br />
					<span>T</span>&nbsp;064)796-1121&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>F</span>&nbsp;064))796-8070
				</div>
			</div>
			
			<div class="footer_div2">
				<div class="footer_div2-1">
					Copyright &copy; 2020 <span><?=$g4['title']?></span>.All Rights Reserved.
					&nbsp;&nbsp;ㅣ&nbsp;&nbsp;&nbsp;
					<a href="javascript:info()">PRIVACY POLICY</a>
				</div>

				<div class="footer_div2-2">
					<a href="javascript:it9()"><img src="/res/images/bottom/it9.png" alt="아이티나인 로고" /></a>
					&nbsp;&nbsp;&nbsp;
					<a href="javascript:adm()"><img src="/res/images/bottom/admin.png" alt="관리자 사진" /></a>
				</div>
			</div>

			<div class="topBtn">
				<a href="#top" onclick="go_page(1)"><img src="/res/images/bottom/top.png" alt="Top 버튼" /></a>
			</div>
		</div>
	</footer>
</div>

<script>

	$(function(){
		Scroll();
	});

	$(window).scroll(function() {
		Scroll();
	});
	
	function Scroll(){
		if($(document).scrollTop() <= 1) {
			$(".topBtn").addClass("noneTop");
		}
		else {
			$(".topBtn").removeClass("noneTop");
		}
	}
	
</script>