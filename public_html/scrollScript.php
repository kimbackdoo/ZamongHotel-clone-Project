<script>
	var cpage = 1;	// 현재 페이지
	var pageTopPos = new Array();	// 페이지당 높이 배열
    var is_onload = false;	// is_onload
    var lastPage = 0;	// 마지막 페이지

	$(window).load(function() {
		$(window).scrollTop(0);
		setTimeout("window_size_check()", 100);
        is_onload = true;
        lastPage = $(".page").index($(".page.last")) + 1;
		set_mainvisual();
		close_loading();
	});

	function window_size_check(){
		var page_w = $(".page").width();
		var window_w = $(window).width();

		if(page_w != window_w) set_first_page_size();

		setPosition();		
	}

	$(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });

	$(window).on('unload', function() {
        $(window).scrollTop(0);
    });

	$(window).resize(function(){
		set_first_page_size();
		setPosition();
		go_page(cpage);
	});

	$(window).scroll(function(){
		check_point3();
	});

	$(function(){
		loading();
		
		$("html, body").css("overflow", "hidden");
        
		set_first_page_size();
        
		$("#mainWrap").on('mousewheel DOMMouseScroll', function(e) {
			if(isScrollMoving){
                e.preventDefault();
			    return false;
			}
            
            var E = e.originalEvent;

            delta = 0;
			if (E.detail) delta = E.detail * -40;
			else delta = E.wheelDelta;

            if(lastPage != cpage)  {
                if(delta > 0) go_page(cpage-1);
                else go_page(cpage+1);

                e.preventDefault();
                return false;
            }
			else {
                if(delta > 0) check_point3();
            }
		});

		//페이지별 스크롤 탑 셋팅
		setPosition();
	});

	function setPosition(){
		pageTopPos = new Array();
		var idx = 0;
		$(".page").each(function(){
			pageTopPos.push($(this).offset().top + $("#mainWrap").scrollTop());
		});
	};
	
	//스크롤 변경시 처리
	function check_point3(){
        var scrollTop = $("#mainWrap").scrollTop();
        
          //마지막 페이지의 첫 지점을 통과시 스크롤    
          if(cpage == lastPage) {
                if(scrollTop <= pageTopPos[lastPage-1]){
                    go_page(lastPage-1);
                    return;
                }
         }
	}
	
	function set_first_page_size(){
		var winHeight = $(window).height();
        
		$(".page").each(function(){
			if( !$(this).hasClass("last") ){
				$(this).css({
					"height":winHeight+"px",
					"width":$(window).width()+"px",
					"overflow-y":"hidden",
					"overflow-x":"hidden"
                });
                
				$(this).children("div").css("height", winHeight+"px");
			}
		});
		go_page(cpage, true);
	}

	function go_page(page, isresize){
        page = parseInt(page);
        if(page > lastPage) page = lastPage;
        if(page < 1) page = 1;
        cpage = page;

		if(isresize === undefined) isresize = false;
		
		if(!isScrollMoving) {
			var pageObj = $(".Bg0"+page);
            if(pageObj.size() == 0) return;
            
            var page_pos = pageTopPos[parseInt(page)-1];

			$(".page").removeClass("on");
            pageObj.addClass("on");


			if(page > 1) $(".topBtn").show();
			else $(".topBtn").hide();
	
			if(isresize) $('#mainWrap').scrollTop(page_pos);
			else scroll_move(page_pos);
		}
	}
    
	var isScrollMoving = false;
	function scroll_move(pos){
		var scrollTop = $("#mainWrap").scrollTop();

		if(!isScrollMoving) {
			isScrollMoving = true;
			$('#mainWrap').animate({scrollTop:pos}, 800, "easeOutBack", function(){ 
				isScrollMoving=false;  
            });
		}
	}
</script>