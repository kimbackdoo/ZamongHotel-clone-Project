function home(){location.href="/m/index.php";} // 홈
function adm(){location.href="/adm";} //관리자
function login(){location.href="/m/bbs/login.php";} //로그인
function logout(){location.href="/m/bbs/logout.php?url=/index.php";} //로그아웃
function register(){location.href="/m/bbs/register.php";} //회원가입
function order(){location.href="/m/shop/orderinquiry.php";} //주문배송확인
function mypage(){location.href="/m/shop/mypage.php";} //마이페이지
function cart(){location.href="/m/shop/cart.php";} //장바구니
function m_it9(){window.open("http://it9.co.kr/m/bbs/board.php?bo_table=portfolio");} //아이티나인
function revision(){location.href="/m/bbs/member_confirm.php?url=register_form.php";} //회원정보수정

function guide2(){location.href="/m/pages.php?p=100_6_1_1";} //이용약관
function info2(){location.href="/m/pages.php?p=100_7_1_1";} //개인정보취급방침
function email2(){location.href="/m/pages.php?p=100_16_1_1";} //이메일무단수집거부

//function sand(){location.href="/bbs/login.php?url=..%2Fshop%2Forderinquiry.php";} //비회원배송조회

function menum(link_go) {
	switch ( link_go ) {

		//Hotel Zamong
		case 'menu01-1' : //Hotel Zamong
		location.href="/m/pages.php?p=1_1_1_1"; break;


		//Accommodation
		case 'menu02-1' ://Deluxe Double
		location.href="/m/pages.php?p=2_1_1_1"; break;
		case 'menu02-2' ://Family Twin
		location.href="/m/pages.php?p=2_2_1_1"; break;


		//Facilities
		case 'menu03-1' ://Front
		location.href="/m/pages.php?p=3_1_1_1"; break;
		case 'menu03-2' ://Business Center
		location.href="/m/pages.php?p=3_2_1_1"; break;

		//Reservation
		case 'menu04-1' ://Resesrvation
		location.href="/m/pages.php?p=4_1_1_1"; break;

		//Photo Gallery
		case 'menu05-1' ://Photo Gallery
		location.href="/m/bbs/board.php?bo_table=5_1_1_1"; break;

		//이용약관
		case 'menu07-1' : //이용약관
		location.href="/m/pages.php?p=7_1_1_1"; break;
		case 'menu07-2' : //개인정보취급방침
		location.href="/m/pages.php?p=7_2_1_1"; break;	
		
		}
}