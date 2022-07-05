<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>밀리의 서재</title>
    <!-- 파비콘 -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/icon">
    <!-- 스와이퍼(swiper) css를 cdn으로 연결 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <!-- 외부css -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- 제이쿼리 라이브러리 -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- easing 플러그인 -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- 스와이퍼(swiper) js를 cdn으로 연결-->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- 외부 js -->
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrap">
        <!-- header -->
        <? include "header.html"; ?>
        <!-- section -->
        <section class="visual">
            <!-- swiper플러그인 -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide s1">
                      <a href="#">
                          <img src="img/visual1.jpg" alt="당신의 일상을 1밀리+">
                      </a>
                  </div>
                  <div class="swiper-slide s2">
                    <a href="#">
                        <img src="img/visual2.jpg" alt="언제든 해지 가능! 첫 달 무료로 가볍게">
                    </a>
                  </div>
                  <div class="swiper-slide s3">
                    <a href="#">
                        <img src="img/visual3.jpg" alt="당신을 기다리는 100,000 권의 도서">
                    </a>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
        </section>
        <section class="tab">
            <div class="tab_container">
                <h1>밀리 이야기</h1>
                <div class="tab_in">
                    <div class="tab_btn">
                        <ul>
                            <li><a href="#" class="active"><h3>Audiobook</h3></a></li>
                            <li><a href="#"><h3>Millie viewer</h3></a></li>
                            <li><a href="#"><h3>Today</h3></a></li>
                        </ul>
                    </div>
                    <div class="tab_movie">
                        <ul>
                            <li><iframe width="1155" height="650" src="https://www.youtube.com/embed/iBKH54Jl_Cg?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                            <li><iframe width="1155" height="650" src="https://www.youtube.com/embed/g0DYMW6NjU8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                            <li><iframe width="1155" height="650" src="https://www.youtube.com/embed/MQgOEooRn0Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                        </ul>
                    </div>
                    <div class="tab_des">
                        <ul>
                            <li>
                                <h3>오디오북</h3>
                            <p>세상에서 가장<br>교양 있는 수면제</p>
                            <h4>하루의 시작과 마무리를 오디오북과 함께</h4>
                            <p>지하철에서도, 잠들기 전에도 독서하세요.</p>
                            </li>
                            <li>
                                <h3>밀리뷰어</h3>
                            <p>독서를 위한 가장<br>완벽한 도구</p>
                            <h4>시선 추적 기능</h4>
                            <p>눈동자로 페이지를 넘길 수 있어요.</p>
                            </li>
                            <li>
                                <h3>투데이</h3>
                            <p>쓱- 훑어만 봐도<br>독서 트렌드를 한눈에</p>
                            <h4>당신을 위한 추천</h4>
                            <p>키워드로 한눈에 정리한 추천 도서</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="collection">
            <h1>추천도서</h1>
            <div class="tab_slide">
                <div class="tab_title">
                    <a href="#" class="new active">신작</a>
                    <a href="#" class="best">인기작</a>
                </div>
                <div class="tab_slide_con">
                    <div class="tab_slide_list t1 active">
                        <!-- 신작 슬라이드 -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide new1">
                                    <h2>2022 제13회<br>젊은작가상 수상작품집</h2>
                                    <p>소설을 읽고 오래오래 행복하다</p>
                                    <span>온전한 일상을 꿈꾸는<br>일곱 편의 싱그러운 이야기</span>
                                    <div class="bttn">
                                        <a href="#"><span></span><i>View</i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide new2">
                                    <h2>저주토끼</h2>
                                    <p>2022 부커상 최종 후보 선정!</p>
                                    <span>환상적이고 초현실적으로 그려낸<br>자본주의의 참혹한 공포와 잔혹함</span>
                                    <div class="bttn">
                                        <a href="#"><span></span><i>View</i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide new3">
                                    <h2>전쟁으로 보는 한국 근대사</h2>
                                    <p>전쟁사를 중심으로 풀어내는<br>격동의 한국 근대사</p>
                                    <span>병인양요부터 청산리전투까지,<br>동북아역사재단 연구위원 신효승이 해석하는<br>한국 근대사에 대한 새로운 시각.</span>
                                    <div class="bttn">
                                        <a href="#"><span></span><i>View</i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- swiper 좌우 버튼 -->
                            <div class="swiper-button-next myNext2"></div>
                            <div class="swiper-button-prev myPrev2"></div>
                            <!-- swiper 스크롤바 -->
                            <div class="swiper-scrollbar bar1"></div>
                        </div>
                    </div>
                    <div class="tab_slide_list t2">
                        <!-- 인기작 슬라이드 -->
                        <div class="swiper mySwiper3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide best1">
                                    <h2>白의 그림자</h2>
                                    <p>그림자 같은 건 따라가지 마세요</p>
                                    <span>한국문학 대표작가의 첫걸음,<br>지금이 바로 이 소설을 읽어야 할 때</span>
                                    <div class="bttn">
                                        <a href="#"><span></span><i>View</i></a>
                                    </div>
                                    
                                </div>
                                <div class="swiper-slide best2">
                                    <h2>엄마의 마음이 자라는 시간</h2>
                                    <p>삼성서울병원 정유숙교수, 정용신부장판사 추천</p>
                                    <span>소아정신건강의학과 전문의가 알려주는<br>엄마의 모든 것</span>
                                    <div class="bttn">
                                        <a href="#"><span></span><i>View</i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide best3">
                                    <h2>하얀늑대들1</h2>
                                    <p>윤현승 작가의 대표작!<br>오랫동안 사랑 받아온 한국의 판타지 명작</p>
                                    <span>15년 만에 만나는 최신개정판<br>카셀의 모험이 시작된다!</span>
                                    <div class="bttn">
                                        <a href="#"><span></span><i>View</i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- swiper 좌우 버튼 -->
                            <div class="swiper-button-next myNext3"></div>
                            <div class="swiper-button-prev myPrev3"></div>
                            <!-- swiper 스크롤바 -->
                            <div class="swiper-scrollbar bar2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner">
            <div class="banner_in">
                <h1>오늘의 밀리</h1>
                <div class="banner_box">
                    <div class="banner_title">
                        <p>밀리의 서재<br>100% 활용하기</p>
                    </div>
                    <div class="banner_img">
                        <ul>
                            <li class="event1"><a href="#"></a></li>
                            <li class="event2"><a href="#"></a></li>
                            <li class="event3"><iframe width="1155" height="650" src="https://www.youtube.com/embed/5RAY_KwfLQE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                        </ul>
                    </div>
                    <div class="banner_btn">
                        <ul>
                            <li><a href="#" class="active">
                                <h4>싹 다 무제한</h4>
                                <p>검색어 순위를 통해 뽑은<br>인기 분야 책들을 확인해 보세요.</p>
                            </a></li>
                            <li><a href="#">
                                <h4>완독지수</h4>
                                <p>350만 밀리 회원이 먼저 읽고<br>다 읽을 확률과 예상 시간을 알려드려요.</p>
                            </a></li>
                            <li><a href="#">
                                <h4>내돈내산 밀리구독</h4>
                                <p>패션 브랜드 대표부터<br>고등학교 교사까지</p>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="news_in">
                <h1>도서목록</h1>
                <div class="news_list">
                    <ul>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/b1.png" alt="마음에 없는 소리">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/b2.png" alt="최초의 韓日戰">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/b3.png" alt="넷이 있었다">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/b4.png" alt="세월의 돌">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/b5.png" alt="언어가 삶이 될 때">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/b6.png" alt="피글">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/b7.png" alt="어서오세요, 휴남동 서점입니다">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/b8.png" alt="페스트의 밤">
                            </div>
                        </a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="quest">
            <div class="quest_in">
                <h1>자주 하는 질문</h1>
                <div class="quest_list">
                    <ul>
                        <li>
                            <a href="#"><p>안 쓰면 정말 환불해 주나요?</p>
                                <img src="img/down.png" alt="화살표"></a>
                        </li>
                        <li><a href="#"><p>구독 중 해지할 수 있나요? 수수료는 없나요?</p>
                            <img src="img/down.png" alt="화살표"></a></li>
                        <li><a href="#"><p>첫 달 무료 혜택은 누구나 받을 수 있나요?</p>
                            <img src="img/down.png" alt="화살표"></a></li>
                        <li><a href="#"><p>어떤 기기에서 사용할 수 있나요?</p>
                            <img src="img/down.png" alt="화살표"></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="icons">
           <div class="icons_in">
                <ul>
                    <li><a href="#" class="a1">
                        <img src="img/monthly.png" alt="정기구독">
                        <p>정기구독</p>
                    </a></li>
                    <li><a href="#" class="a2">
                        <img src="img/viewer.png" alt="뷰어 다운로드">
                        <p>뷰어 다운로드</p>
                    </a></li>
                </ul>
           </div>
        </section>
        <section class="info">
            <div class="info_in">
                <div class="custom">
                    <div class="custom_center">
                        <a href="#">
                            <h3>고객센터</h3>
                            <p>070-7510-5415<br>평일 10:00 ~ 18:00</p>
                        </a>
                    </div>
                    <div class="chat">
                        <a href="#">
                            <h3>채팅상담</h3>
                        </a>
                    </div>
                </div>
                <div class="ask">
                    <div class="ask_center">
                        <a href="#">
                            <h3>기업제휴문의</h3>
                        <p>할인 제휴 문의하기<br>기업 복지 제도</p>
                        </a>
                    </div>
                    <div class="down">
                        <a href="#">
                            <h3>B2B 제안서 다운로드</h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->
        <? include "footer.html"; ?>
    </div> <!--wrap-->
    <div class="top">TOP</div>
    <!-- 사이트맵 -->
    <? include "site.html"; ?>
</body>
</html>