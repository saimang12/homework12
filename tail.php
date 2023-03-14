<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>


<?php
    if(!defined('_INDEX_')) { // index가 아닐 떄...
        include G5_THEME_PATH.'/doc/sub_t.php'; // 서버페이지 푸터...
    }
?>









<footer id="footer">
            <div class="f_inner">
                <div class="left">
                    <address><?= $as_address ?>
                    </address>
                    <p>대표번호 : <?= $as_tel ?> 팩스 : <?= $as_fax ?> 사업자등록번호 : <?= $as_num ?></p>
                    <span class="copy">
                        &copy; 2020 ㈜대승인터컴. CO.LTD ALL RIGHT RESERVED.
                    </span>
                </div>
                <div class="right">
                    <ul>
                        <li class="bold"><a href="#!">개인정보처리방침</a></li>
                        <li><a href="#!">이메일무단수집거부</a></li>
                        <li><a href="#!">가맹점 로그인</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <div id="quickMenu">
            <ul>
                <li>
                    <a href="#!">
                        <img src="<?= G5_THEME_URL?>/img/rockq_quick_blog.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <img src="<?= G5_THEME_URL?>/img/rockq_quick_kakao.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <img src="<?= G5_THEME_URL?>/img/rockq_quick_call.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <img src="<?= G5_THEME_URL?>/img/rockq_quick_facebook.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <div id="toTop">
            <a href="#!">
                <i class="xi-arrow-up"></i>
            </a>
        </div>
    </div>



















<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");