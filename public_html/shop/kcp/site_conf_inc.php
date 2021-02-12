<?
    /* ============================================================================== */
    /* =   PAGE : 결제 정보 환경 설정 PAGE                                          = */
    /* =----------------------------------------------------------------------------= */
    /* =   연동시 오류가 발생하는 경우 아래의 주소로 접속하셔서 확인하시기 바랍니다.= */
    /* =   접속 주소 : http://kcp.co.kr/technique.requestcode.do                    = */
    /* =----------------------------------------------------------------------------= */
    /* =   Copyright (c)  2016   NHN KCP Inc.   All Rights Reserverd.               = */
    /* ============================================================================== */
	
	$isTest = false;

	//테스트결제시
	if($default['de_kcp_mid'] == "T0000" || $default['de_kcp_mid'] == "T0007") {

		$isTest = true;
	} 

    /* ============================================================================== */
    /* = ※ 주의 ※                                                                 = */
    /* = * g_conf_home_dir 변수 설정                                                = */
    /* =----------------------------------------------------------------------------= */
    /* =   BIN 절대 경로 입력 (bin전까지 설정                                       = */
    /* ============================================================================== */
    //$g_conf_home_dir  = "/data1/newpg/pay/kimhj/ax_hub_linux_jsp_add";       // BIN 절대경로 입력 (bin전까지)
	$g_conf_home_dir  = dirname($_SERVER['DOCUMENT_ROOT'])."/public_html/shop/kcp"; // ※ 쇼핑몰 모듈 설치 절대 경로 kcp전까지


	/* ============================================================================== */
    /* = ※ 주의 ※                                                                 = */
    /* = * g_conf_log_path 변수 설정                                                = */
    /* =----------------------------------------------------------------------------= */
    /* =   log 경로 지정                                                            = */
    /* ============================================================================== */
    $g_conf_log_path = dirname($_SERVER['DOCUMENT_ROOT'])."/public_html/shop/kcp/log"; //"./log";
    
    /* ============================================================================== */
    /* = ※ 주의 ※                                                                 = */
    /* = * g_conf_gw_url 설정                                                       = */
    /* =----------------------------------------------------------------------------= */
    /* = 테스트 시 : testpaygw.kcp.co.kr로 설정해 주십시오.                         = */
    /* = 실결제 시 : paygw.kcp.co.kr로 설정해 주십시오.                             = */
    /* ============================================================================== */
	if($isTest) {
	    $g_conf_gw_url    = "testpaygw.kcp.co.kr";
		$g_conf_pa_url    = "testpaygw.kcp.co.kr"; // ※ 테스트: testpaygw.kcp.co.kr, 리얼: paygw.kcp.co.kr
		$g_conf_pa_port   = "8090";                // ※ 테스트: 8090,                리얼: 8080
	} else {
	    $g_conf_gw_url    = "paygw.kcp.co.kr";
		$g_conf_pa_url    = "paygw.kcp.co.kr";
		$g_conf_pa_port   = "8080";
	}
	$g_conf_tx_mode   = 0;

    /* ============================================================================== */
    /* = ※ 주의 ※                                                                 = */
    /* = * 표준웹 결제창 g_conf_js_url 설정                                         = */
    /* =----------------------------------------------------------------------------= */
    /* = 테스트 시 : src="https://testpay.kcp.co.kr/plugin/payplus_web.jsp"         = */
    /* = 실결제 시 : src="https://pay.kcp.co.kr/plugin/payplus_web.jsp"             = */
    /* =----------------------------------------------------------------------------= */
    /* = * 플러그인 결제창 g_conf_js_url 설정                                       = */
    /* =----------------------------------------------------------------------------= */
    /* = 테스트 시 : src="http://pay.kcp.co.kr/plugin/payplus_test.js"              = */
    /* =             src="https://pay.kcp.co.kr/plugin/payplus_test.js"             = */
    /* = 실결제 시 : src="http://pay.kcp.co.kr/plugin/payplus.js"                   = */
    /* =             src="https://pay.kcp.co.kr/plugin/payplus.js"                  = */
    /* =                                                                            = */
    /* = 테스트 시(UTF-8) : src="http://pay.kcp.co.kr/plugin/payplus_test_un.js"    = */
    /* =                    src="https://pay.kcp.co.kr/plugin/payplus_test_un.js"   = */
    /* = 실결제 시(UTF-8) : src="http://pay.kcp.co.kr/plugin/payplus_un.js"         = */
    /* =                    src="https://pay.kcp.co.kr/plugin/payplus_un.js"        = */
    /* ============================================================================== */
	if($isTest){
	    $g_conf_js_url    = "https://testpay.kcp.co.kr/plugin/payplus_web.jsp";
	} else {
		$g_conf_js_url		= "https://pay.kcp.co.kr/plugin/payplus_web.jsp";
	}

    /* ============================================================================== */
    /* = 스마트폰 SOAP 통신 설정                                                     = */
    /* =----------------------------------------------------------------------------= */
    /* = 테스트 시 : KCPPaymentService.wsdl                                         = */
    /* = 실결제 시 : real_KCPPaymentService.wsdl                                    = */
    /* ============================================================================== */
    $g_wsdl           = "KCPPaymentService.wsdl";

    /* ============================================================================== */
    /* = g_conf_site_cd, g_conf_site_key 설정                                       = */
    /* = 실결제시 KCP에서 발급한 사이트코드(site_cd), 사이트키(site_key)를 반드시   = */
    /* = 변경해 주셔야 결제가 정상적으로 진행됩니다.                                = */
    /* =----------------------------------------------------------------------------= */
    /* = 테스트 시 : 사이트코드(T0000)와 사이트키(3grptw1.zW0GSo4PQdaGvsF__)로      = */
    /* =            설정해 주십시오.                                                = */
	/* = 에스크로 테스트 시: 사이트코드(T0007)와 사이트키(4Ho4YsuOZlLXUZUdOxM1Q7X__)= */
    /* =            설정해 주십시오.                                                = */
    /* = 실결제 시 : 반드시 KCP에서 발급한 사이트코드(site_cd)와 사이트키(site_key) = */
    /* =            로 설정해 주십시오.                                             = */
    /* ============================================================================== */
	if($isTest) {
	    $g_conf_site_cd   = "T0000";
		if($default['de_kcp_mid'] == "T0007") { //에스크로 테스트
			$g_conf_site_key  = "4Ho4YsuOZlLXUZUdOxM1Q7X__";
		} else {
			$g_conf_site_key  = "3grptw1.zW0GSo4PQdaGvsF__";
		}
	} else {
		$g_conf_site_cd   = $default['de_kcp_mid'];
		$g_conf_site_key  = $default['de_kcp_site_key'];
	}

    /* ============================================================================== */
    /* = g_conf_site_name 설정                                                      = */
    /* =----------------------------------------------------------------------------= */
    /* = 사이트명 설정(한글 불가) : 반드시 영문자로 설정하여 주시기 바랍니다.       = */
    /* ============================================================================== */
    $g_conf_site_name = $default["de_admin_company_name"];//iconv("UTF-8", "EUC-KR", $default["de_admin_company_name"]);

    /* ============================================================================== */
    /* = 지불 데이터 셋업 (변경 불가)                                               = */
    /* ============================================================================== */
    $g_conf_log_level = "3";
    $g_conf_gw_port   = "8090";        // 포트번호(변경불가)
    $module_type      = "01";          // 변경불가



	/* ============================================================================== */
    /* =   02. 쇼핑몰 지불 정보 설정                                                = */
    /* = -------------------------------------------------------------------------- = */
    // ※ V6 가맹점의 경우
    $g_conf_user_type = "PGNW";  // 변경 불가
	if($isTest) {
	    $g_conf_site_id   = "T0000"; // 리얼 반영시 KCP에 발급된 site_cd 사용 ex) T0000
	} else {
		$g_conf_site_cd   = $default['de_kcp_mid'];
		$g_conf_site_id   = $default['de_kcp_mid'];
	}

    // ※ V5 가맹점의 경우
    //$g_conf_user_type = "PG01";       // 변경 불가
    //$g_conf_site_id   = "MT31T08661"; // 리얼 반영시 KCP에 발급된 MID / TermID 사용 ex) MT31T00875
    /* ============================================================================== */


?>
