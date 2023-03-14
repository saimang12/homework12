<div id="sub">

<?
        if($lnb_num == '1') {
            $sub_h_tit = '브랜드소개';

            
        } else if($lnb_num == '2') {
            $sub_h_tit = '인테리어';

        }
 ?> 
            <div id="subHead">
                <div class="subVisual">
                    <div class="tit_wrap">
                        <h2 class="tit"><?= $sub_h_tit ?></h2>
                        <p>락휴만의 특별한 경쟁력으로 성공을 제안합니다.</p>
                    </div>
                </div>
                <div class="lnbWrap">
                    <div class="inner">
                    <?php include G5_THEME_PATH.'/doc/lnb/lnb.php'; ?>
                    </div>
                </div>
            </div>





            <article id="article">