<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>







<main>
            <section id="mainVisual">
                <div class="swiper main_slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide itm itm01">

                        </div>
                        <div class="swiper-slide itm itm02">

                        </div>
                        <div class="swiper-slide itm itm03">

                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>
            <section id="mainContent">
                <div class="inner">
                    <h2 class="tit">
                        노래방사업 28년, 가맹사업 13년
                    </h2>
                    <b>연 평균 약 20개 가맹점 오픈!! 1개의 매장을 오픈하더라도 확실한 책임!!</b>
                    <span class="bold">업력 1위!!</span>

                    <ul>
                        <li>
                            <figure>
                                <img src="<?= G5_THEME_URL?>/img/main_content01.png" alt="">
                            </figure>
                            <em>01</em>
                            <p>노래방 프랜차이즈</p>
                            <strong>업력1위</strong>
                        </li>
                        <li>
                            <figure>
                                <img src="<?= G5_THEME_URL?>/img/main_content02.png" alt="">
                            </figure>
                            <em>02</em>
                            <p>매장별 최적의</p>
                            <strong>인테리어</strong>
                        </li>
                        <li>
                            <figure>
                                <img src="<?= G5_THEME_URL?>/img/main_content03.png" alt="">
                            </figure>
                            <em>03</em>
                            <p>가맹점 평균</p>
                            <strong>매출 1위</strong>
                        </li>
                        <li>
                            <figure>
                                <img src="<?= G5_THEME_URL?>/img/main_content04.png" alt="">
                            </figure>
                            <em>04</em>
                            <p>성공을 위한</p>
                            <strong>창업특전</strong>
                        </li>
                        <li>
                            <figure>
                                <img src="<?= G5_THEME_URL?>/img/main_content05.png" alt="">
                            </figure>
                            <em>05</em>
                            <p>누적 가맹점 수</p>
                            <strong>1위</strong>
                        </li>
                        <li>
                            <figure>
                                <img src="<?= G5_THEME_URL?>/img/main_content06.png" alt="">
                            </figure>
                            <em></em>
                            <p>락휴의 창업</p>
                            <strong>알아보기</strong>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="mainImage">
                <div class="f_inner">
                    <figure>
                        <img src="<?= G5_THEME_URL?>/img/main_img01.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?= G5_THEME_URL?>/img/main_img02.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?= G5_THEME_URL?>/img/main_img03.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?= G5_THEME_URL?>/img/main_img04.jpg" alt="">
                    </figure>
                </div>
            </section>
            <section id="mainProduct">
                <div class="inner">
                    <h2 class="tit">헤드폰 코인 노래부스 미니K</h2>
                    <ul>
                        <li>
                            <figure>
                                <img src="<?= G5_THEME_URL?>/img/main_product01.png" alt="">
                            </figure>
                            <p>스튜디오급 음향과 아늑한 공간</p>
                        </li>
                        <li>
                            <figure>
                                <img src="<?= G5_THEME_URL?>/img/main_product02.png" alt="">
                            </figure>
                            <p>신개념 유리부스</p>
                        </li>
                        <li>
                            <figure>
                                <img src="<?= G5_THEME_URL?>/img/main_product03.png" alt="">
                            </figure>
                            <p>섬세한 음향조절</p>
                        </li>
                    </ul>
                    <span>
                        <a href="">
                            미니 K 알아보기
                        </a>
                    </span>
                </div>
            </section>
            <section id="mainSlideTab">
                <div class="inner">
                    <h2 class="tit">락휴 인테리어</h2>
                    <ul class="tab_select">
                        <li class="on"><a href="#!">코인 노래연습장</a></li>
                        <li><a href="#!">노래연습장</a></li>
                        <li><a href="#!">노래타운</a></li>
                    </ul>
                    <div class="tab_content">
                        <div class="swiper slide_wrap on">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide itm">
                                    <figure>
                                        <img src="<?= G5_THEME_URL?>/img/main_slide_tab01_01.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="swiper-slide itm">
                                    <figure>
                                        <img src="<?= G5_THEME_URL?>/img/main_slide_tab01_02.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="swiper slide_wrap">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide itm itm01">
                                    <figure>
                                        <img src="<?= G5_THEME_URL?>/img/main_slide_tab02_01.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="swiper-slide itm">
                                    <figure>
                                        <img src="<?= G5_THEME_URL?>/img/main_slide_tab02_02.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="swiper slide_wrap">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide itm">
                                    <figure>
                                        <img src="<?= G5_THEME_URL?>/img/main_slide_tab03_01.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="swiper-slide itm">
                                    <figure>
                                        <img src="<?= G5_THEME_URL?>/img/main_slide_tab03_02.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                    </div>

                </div>
            </section>

        </main>




















<?php
include_once(G5_THEME_PATH.'/tail.php');