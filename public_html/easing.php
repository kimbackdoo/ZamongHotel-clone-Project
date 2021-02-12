<?
include_once("./_common.php");
include_once("$g4[path]/lib/latest.lib.php");

define("__INDEX",TRUE);

$g4['title'] = "";
include_once("./_head.php");
?>

<style>
.test { position: relative; top: 200px; text-align: center; }
.test > img { width: 200px; height: 200px; position: relative; }
.test > span { font-size: 45px; position: relative; }

.moveDiv { position: absolute; top: 550px; left: 300px; border: 2px solid #000; background: #000; color: #fff; padding: 15px 50px; cursor: pointer; font-weight: 500; }
</style>

<div class="test">
	<img src="/res/images/test/test1.jpg" alt="테스트용 사진" onclick="testFunc(this, 'easeOutQuint')" />
	<img src="/res/images/test/test2.png" alt="테스트용 사진" onclick="testFunc(this, 'easeInCirc')" />
	<img src="/res/images/test/test3.png" alt="테스트용 사진" onclick="testFunc(this, 'easeInBack')" />
	<img src="/res/images/test/test4.png" alt="테스트용 사진" onclick="testFunc(this, 'easeOutBounce')" />
	<img src="/res/images/test/test5.png" alt="테스트용 사진" onclick="testFunc(this, 'easeInExpo')" />
	<span onclick="testFunc(this, 'easeOutQuint')">안</span>
	<span onclick="testFunc(this, 'easeOutQuint')">녕</span>
	<span onclick="testFunc(this, 'easeOutQuint')">하</span>
	<span onclick="testFunc(this, 'easeOutQuint')">세</span>
	<span onclick="testFunc(this, 'easeOutQuint')">요</span>
	<span onclick="testFunc(this, 'easeOutQuint')">!</span>
</div>

<div onclick="moveFunc('easeOutQuint')" class="moveDiv">Move</div>

<script>
	function testFunc(a, e){
		$(a).stop().css({top:600}).animate({top:10}, 2000, e);
    }

	function moveFunc(e){
		$('.test').stop().css({top:600}).animate({top:10, rotate:'90deg'}, 2000, e);
	}
</script>