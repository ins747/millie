$(document).ready(function(){
    // 주메뉴에 마우스오버이벤트 설정
    $('.menu1 nav').hover(function(){
        // 서브메뉴 내려옴
        $('.menu1 .sub').stop().slideDown();
        // 서브메뉴배경 내려옴
        $('.sub_bg').stop().slideDown();
    }, function(){
        // 서브메뉴 올라감
        $('.menu1 .sub').stop().slideUp();
        // 서브메뉴배경 올라감
        $('.sub_bg').stop().slideUp();
    });
    // 주메뉴에 마우스오버이벤트 설정
    $('.menu2 nav').hover(function(){
        // 서브메뉴 내려옴
        $('.menu2 .sub').stop().slideDown();
        // 서브메뉴배경 내려옴
        $('.sub_bg').stop().slideDown();
    }, function(){
        // 서브메뉴 올라감
        $('.menu2 .sub').stop().slideUp();
        // 서브메뉴배경 올라감
        $('.sub_bg').stop().slideUp();
    });

    // header영역 안에 있는 검색버튼을 클릭하면 검색영역이 내려옴.
    $('.search > a').click(function(){
        $('.search_area').stop().slideDown({
            duration:1000,
            easing:"easeOutBack"
        });
    });
    $('.search_area > a').click(function(){
        $('.search_area').stop().slideUp();
    });
    // swiper
    var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay:4000,
            disableOnInteraction: false
        },
        spaceBetween: 100,
        loop:true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    //section.tab 탭메뉴
    // 탭메뉴 영역의 버튼에 클릭이벤트 설정
    $('.tab_btn ul li a').click(function(e){
        e.preventDefault();
        // 클릭한 버튼(a태그)의 부모객체(li)의 인덱스 번호를 읽어서 변수 btnNum에 저장
        var btnNum=$(this).parent('li').index();
        // 만약 클릭한 버튼(a태그)에 active속성이 없다면
        // !:not(논리연산자):~가 아니면
        // hasClass():클래스 속성을 갖고 있는지 검사
        if(!($(this).hasClass('active'))){
            // 모든 버튼(a태그)의 active 제거
            $('.tab_btn ul li a').removeClass('active');
            // 클릭한 버튼(a태그)에만 active 설정
            $(this).addClass('active');
            // 이미지가 움직이는 기능을 가진 함수 호출
            // 인덱스번호(btnNum)을 함수의 매개변수로 넘김
            imgMove(btnNum);
            // 설명 영역의 li가 아래에서 위로 이동하는 기능을 가진 함수 호출
            desMove(btnNum);
        }
    });
    // 이미지 움직이는 기능을 가진 함수 선언
    function imgMove(btnNum){
        // 이미지(li)의 가로크기를 읽어서 imgWidth 변수에 저장
        var imgWidth=$('.tab_movie ul li').width();
        // 클릭한 버튼의 인덱스 번호*이미지의 가로길이만큼 왼쪽으로 이동
        var moving=-(btnNum*imgWidth)
        $('.tab_movie ul').stop().animate({
            left:moving
        });
    }
    // .tab_des ul li의 첫 번째 객체를 currentDes에 저장
    var currentDes=$('.tab_des ul li:first');
    // 이전 li객체를 저장하는 변수 선언
    var oldDes='';
    // 설명이 움직이는 기능을 가진 함수 선언
    // btnNum은 클릭한 a태그의 인덱스 번호를 전달받는 매개변수
    function desMove(btnNum){
        // 현재 눈에 보이는 설명(li)(currentDes)을 oldDes에 저장
        oldDes=currentDes;
        // desNum에 해당하는 설명(li)(클릭한 a태그의 인덱스 번호에 해당하는 설명부분)을 currentDes에 저장
        currentDes=$('.tab_des ul li').eq(btnNum);
        // oldDes에 있는 li객체는 위로 이동하면서 사라짐
        oldDes.stop().animate({
            opacity:0,
            top:-650
            // animate 실행(사라진) 후 function(){} 명령어 실행(아래쪽으로 이동)
        },500,function(){
            oldDes.css({
                opacity:0,
                top:650
            });
        });
        // currentDes에 있는 li객체는 아래에서 올라오면서 나타남
        currentDes.delay(500).stop().animate({
            opacity:1, top:200
        },500);
    } //desMove함수 끝

    // 신제품, 추천제품
    $('.t1').addClass('active');
    $('.t2').removeClass('active');
    $('.new').click(function(e){
        e.preventDefault();
        $('.t1').addClass('active');
        $('.t2').removeClass('active');
        $('.new').addClass('active');
        $('.best').removeClass('active');        
    });
    $('.best').click(function(e){
        e.preventDefault();
        $('.t1').removeClass('active');
        $('.t2').addClass('active');
        $('.new').removeClass('active');
        $('.best').addClass('active');        
    });
    // swiper2
    var swiper = new Swiper(".mySwiper2", {
        autoplay: {
            delay:4000,
            disableOnInteraction: false
        },
        spaceBetween: 50,
        loop:true,
        navigation: {
            nextEl: ".myNext2",
            prevEl: ".myPrev2",
        },
        scrollbar:{
            el: ".bar1"
        },
      });
      // swiper3
    var swiper = new Swiper(".mySwiper3", {
        autoplay: {
            delay:4000,
            disableOnInteraction: false
        },
        spaceBetween: 50,
        loop:true,
        navigation: {
            nextEl: ".myNext3",
            prevEl: ".myPrev3",
        },
        scrollbar:{
            el: ".bar2"
        },
      });
    // width()속성은 이미지(li)의 가로길이 인식하는 메서드
    // innerWidth()속성은 padding을 포함한 가로길이 인식하는 메서드
    //outerWidth()속성은 margin을 포함한 가로길이 인식하는 메서드
    var bannerWidth=$('.banner_img ul li').innerWidth();
    // banner버튼을 클릭하면 이미지가 좌우로 이동
    $('.banner_btn ul li a').click(function(e){
        e.preventDefault();
        $('.banner_btn ul li a').removeClass('active');
        $(this).addClass('active');
        // 클릭한 버튼의 인덱스번호를 bannerNum 변수에 저장
        var bannerNum=$(this).parent('li').index();
        // 인덱스번호에 이미지(li)의 넓이 곱해서 bannerMove변수에 저장
        var bannerMove=bannerNum*bannerWidth;
        // 이미지(ul)가 bannerMove 값만큼 왼쪽이나 오른쪽으로 이동
        $('.banner_img ul').animate({
            left:-bannerMove
        });
    });
    // top버튼을 클릭하면 body문서의 맨 위로 이동
    $('.top').click(function(){
        $('html,body').animate({
            scrollTop:0
        });
    });
    // .total_menu버튼 클릭이벤트 설정
    $('.total_menu').click(function(){
        // .site 나옴
        $('.site').animate({
            right:0
        }, 700, function(){
            // 함수 호출
            navAni1();
        });
    });
    // .site_close버튼 클릭이벤트 설정
    $('.site_close').click(function(){
        $('.site').animate({
            right:'-100%'
        }, 700, function(){
            // 함수 호출
            navAniEnd();
        });
    });
    // navAniEnd()함수 선언
    function navAniEnd(){
        $('body').removeClass('active');
        $('.site nav > ul > li').css({
            'opacity':0,
            'margin-top':'50px'
        });
        $('.site .site_nav > ul > li').css({
            'opacity':0,
            'margin-top':'90px'
        });
        $('.site .site_banner ul li').css({
            'opacity':0,
            'margin-top':'50px'
        });
    };
    // 함수 호출
    navAniEnd();
    // navAni1 함수 선언
    function navAni1(){
        $('body').addClass('active');
        // .site영역의 nav 주메뉴 애니메이션
        $('.site nav > ul > li').each(function(){
            var liNum=$(this).index();
            $(this).delay(100*liNum).animate({
                'opacity':1,
                'margin-top':0
            });
        });
        $('.site .site_nav > ul > li').each(function(){
            var siteliNum=$(this).index();
            $(this).delay(100*siteliNum).animate({
                'opacity':1,
                'margin-top':'40px'
            });
        });
        $('.site .site_banner ul li').each(function(){
            var bannerliNum=$(this).index();
            $(this).delay(200*bannerliNum).animate({
                'opacity':1,
                'margin-top':'0px'
            });
        });
    }
    $('.site_bg ul li').removeClass('active');
    $('.site_bg ul li:first').addClass('active');
    // .site영역의 .site_menu의 nav주메뉴에 마우스 오버하면 배경과 서브메뉴 나타남
    $('.site_menu nav > ul > li > a').hover(function(){
        // 만약 클릭한 메뉴(a태그)에 active가 없으면
        if(!($(this).parent('li').hasClass('active'))){
            // 모든 메뉴에서 active 제거
            $('.site_menu nav > ul > li').removeClass('active');
            // 클릭한 a태그만 active클래스 추가
            $(this).parent('li').addClass('active');
            var siteNum=$(this).parent('li').index();
            // 배경 바뀜
            $('.site_bg ul li').each(function(){
                if(siteNum==$(this).index()){
                    // $('.site_bg ul li').hide();
                    $('.site_bg ul li').removeClass('active');
                    // $(this).show();
                    $(this).addClass('active');
                }
            });
            // 라인 애니메이션
            $('.site_menu nav > ul > li > p').removeClass('active');
            $(this).next().addClass('active');
            // 서브메뉴 나타남
            $('.site_menu nav .sub').hide();
            $(this).next().next().slideDown();
        } //if문 끝
        
    });
    // .site_menu nav ul li a에서 마우스아웃했을 때
    $('.site_menu nav > ul > li').mouseleave(function(){
        $(this).removeClass('active');
        $(this).find('p').removeClass('active');
        $(this).find('.sub').hide();
        $('.site_bg ul li').removeClass('active');
        $('.site_bg ul li:first').addClass('active');
    });
    // top버튼이 아래쪽에서 조금 위쪽에 위치되어 있다가 홈페이지를 위로 올리면 (footer높이만큼) 브라우저 오른쪽 아래에 고정되도록 하는 코드
    // 윈도우에 스크롤 이벤트 설정
    $(window).scroll(function(){
        // 만약 윈도우 아래쪽에서 footer높이만큼 스크롤되면
        // $(window).scrollTop()는 body문서의 맨 위쪽 위치값
        // $(window).height():브라우저의 높이값
        // &('footer).offset().top:footer의 위쪽 위치값이 브라우저의 높이값과 떨어져 있는 거리
        if($(window).scrollTop()+$(window).height() >= $('footer').offset().top){
            $('.top').addClass('active');
        }else{
            $('.top').removeClass('active');
        }
    });
});