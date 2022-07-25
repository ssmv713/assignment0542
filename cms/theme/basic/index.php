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

<h2 class="sound_only">최신글</h2>   
<?php echo latest('theme/slide','mainBanner',3,100);?>          


<div id="artists">
    <div class="container">
        <div id="artists_top" class="mt-5" >
            <h2>ARTISTS</h2>
            <div class="d-flex">
                <em>나는</em><img src="/cms/img/getall_img/stage.png" alt=""><span>겟올라잇에서</span>
                <div class="box">
                    <img src="/cms/img/getall_img/saxophone.png" alt=""><span>퍼포먼스</span><img src="/cms/img/getall/icon_arrow_down.svg" alt="">
                
                </div>
                <em>를</em>
            </div>
            <p>보고 듣고 즐기고 싶어요</p>
        </div>
        <div id="artist_box" class="mb-">
            <ul class="row">
                <li class="col-4">
                    <img src="/cms/img/getall_img/real_players.png" alt="Real Players">
                    <div class="px-3 py-3">
                        <h3>REAL PLAYERS</h3>
                        <p class="py-2">색소폰, 트럼펫, 바이올린, 비트박스, 그리고 <br>
                            랩의 신선한 조화. EDM을 리얼 사운드로 <br>
                            제대로 놀아본다</p>
                        <ul class="d-flex">
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-youtube"></i></li>
                            <li><i class="fa-brands fa-facebook-f"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="col-4">
                    <img src="/cms/img/getall_img/g_live_band.png" alt="Real Players">
                    <div class="px-3 py-3">
                        <h3>G-LIVE BAND</h3>
                        <p class="py-2">
                        한가지만의 스타일을 고집하지 않는다. <br>
                        각양각색 스타일의 밴드사운드로 라이브 <br>
                        분위기에 빠져든다.
                        </p>
                        <ul class="d-flex">
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-youtube"></i></li>
                            <li><i class="fa-brands fa-facebook-f"></i></li>
                        </ul>
                    </div>
               
                </li>
                <li class="col-4">
                    <img src="/cms/img/getall_img/real_players.png" alt="Real Players">
                    <div class="px-3 py-3">
                        <h3>REAL PLAYERS</h3>
                        <p class="py-2">색소폰, 트럼펫, 바이올린, 비트박스, 그리고 <br>
                            랩의 신선한 조화. EDM을 리얼 사운드로 <br>
                            제대로 놀아본다</p>
                        <ul class="d-flex">
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-youtube"></i></li>
                            <li><i class="fa-brands fa-facebook-f"></i></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="sns" class="py-5 text-white">
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <h2>GET ALL RIGHT</h2>
                <p>여섯개의 도시에서 즐기는 겟올라잇 재즈 파티<br>
                    SNS를 팔로우하고 공연 라인업과 최신 정보를 확인하세요</p>
                <p>Get All Right  jazz parties in six cities<br>
                    Follow the SNS and check out the lineup and the latest info</p>
            </div>
            <div class="insta col-6">
                <ul class="row text-center d-flex justify-content-between">
                    <li class="col-5 mb-5"><a href=""  class="py-2 d-block text-white "><i class="fa-brands fa-instagram"></i>HONGDAE</a></li>
                    <li class="col-5 mb-5"><a href=""  class="py-2 d-block text-white "><i class="fa-brands fa-instagram"></i>CHUNGDAM</a></li>
                    <li class="col-5 mb-5"><a href=""  class="py-2 d-block text-white"><i class="fa-brands fa-instagram"></i>HONGDAE</a></li>
                    <li class="col-5 mb-5"><a href=""  class="py-2 d-block text-white"><i class="fa-brands fa-instagram"></i>CHUNGDAM</a></li>
                    <li class="col-5 mb-5"><a href=""  class="py-2 d-block text-white"><i class="fa-brands fa-instagram"></i>HONGDAE</a></li>
                    <li class="col-5 mb-5"><a href=""  class="py-2 d-block text-white"><i class="fa-brands fa-instagram"></i>CHUNGDAM</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');

