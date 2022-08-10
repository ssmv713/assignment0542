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

<div id="main" class="position-relative">
    <div class="text-white container position-absolute p-0">
        <p class="one">THE 1ST ALL RIGHT <br>
            JAZZ FESTIVAL </p>
        <p class="two mt-2">Show us your rhythm, <br>
            Show us your move, <br>
            Show us your Passion.</p>
    </div>
</div>
<div id="LP"><img src="/cms/img/getall_img/LP.png" alt="LP"></div>
<div id="banner">
    <div class="container">
        <div id="jazzbox" class="pb-5">
            <p class="pb-5">"2002년 뜨거운 겟올라잇 여름, <br> 
            우릴 핫하게 적셔줄 재즈 뮤지션이여 오라"</p>
            <div class="wrap my-5 text-center">
                <img class="blinking" src="/cms/img/getall_img/jazzNeon.png" alt="">
            </div>
            
            <p class="pt-4">탭댄스, 브라스, 일렉트로닉 한계를 뛰어넘어 <br>
            관객들과 <strong class="aos-init ml-2" data-aos="hello">제대로 놀 줄 아는</strong> <br>
                <strong class="aos-init mr-3" data-aos="hello" data-aos-offset="">NEW ARTISTS</strong>를 찾는 공개 오디션
            </p>
            
        </div>
        <div class="pb-5">
            <ul id="applyInfo">
                <li class="my-5"><strong class="rounded-pill py-1 px-5">참여방법</strong>
                    <span class="text-white ml-5">겟올라잇 홈페이지 지원</span>
                </li>
                <li class="mb-5"><strong class="rounded-pill py-1 px-5">지원기간</strong>
                    <span class="text-white ml-5">2022.07.01 ~ 2022.08.31</span>
                </li>
                <li class="mb-5"><strong class="rounded-pill py-1 px-5">우승혜택</strong>
                    <span class="text-white ml-5">겟올라잇 1년 전속 아티스트 + 상금 3,000만원</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="artists">
    <div class="container">
        <div id="artists_top" class="mt-5" >
            <h2 class="my-5 py-2">ARTISTS</h2>
            <div class="dropBox d-flex justify-content-center mt-2">
                <em>나는</em><img src="/cms/img/getall_img/saxophone.png" alt="색소폰"><span>겟올라잇에서</span>
                <div class="box">
                    <img src="/cms/img/getall_img/stage.png" alt="무대"><span>퍼포먼스</span><img src="/cms/img/getall_img/icon_arrow_down.svg" alt="">
                </div>
                <em>를</em>
            </div>
            <p class="my-3 text-center">보고 듣고 즐기고 싶어요</p>
            <div class="artBtns text-center pt-3 mb-4">
                <button type="button" class="rounded-pill mr-2 px-3 btn text-dark btn-outline-secondary"><span class="pr-1">전체보기</span><i class="xi-renew"></i></button>
                <button type="button" class="rounded-pill ml-2 px-3 btn btn-outline-light darkbg"><span class="text-white">내 취향 아티스트 보기</span><i class="xi-angle-down-min"></i></button>
            </div>
        </div>
        <div id="artist_box" class="my-5">
            <ul class="row align-items-stretch">
                <li class="col-4 px-4">
                    <img src="/cms/img/getall_img/real_players.png" alt="Real Players">
                    <div class="px-3 py-3">
                        <h3>REAL PLAYERS</h3>
                        <p class="py-2">색소폰, 트럼펫, 바이올린, 비트박스, 그리고 
                            랩의 신선한 조화. EDM을 리얼 사운드로
                            제대로 놀아본다</p>
                        <ul class="d-flex">
                            <li class="d-flex flex-column p-4 justify-content-between"><i class="fa-brands fa-instagram"></i></li>
                            <li class="d-flex flex-column p-4 justify-content-between"><i class="fa-brands fa-youtube"></i></li>
                            <li class="d-flex flex-column p-4 justify-content-between"><i class="fa-brands fa-facebook-f"></i></li>
                        </ul>
                    </div>
                </li>
                <li class="col-4 px-4">
                    <img src="/cms/img/getall_img/g_live_band.png" alt="Real Players">
                    <div class="px-3 py-3">
                        <h3>G-LIVE BAND</h3>
                        <p class="py-2">
                        한가지만의 스타일을 고집하지 않는다. 
                        각양각색 스타일의 밴드사운드로 라이브 
                        분위기에 빠져든다.
                        </p>
                        <ul class="d-flex">
                            <li class="d-flex flex-column p-4 justify-content-between"><i class="fa-brands fa-instagram"></i></li>
                            <li class="d-flex flex-column p-4 justify-content-between"><i class="fa-brands fa-youtube"></i></li>
                            <li class="d-flex flex-column p-4 justify-content-between"><i class="fa-brands fa-facebook-f"></i></li>
                        </ul>
                    </div>
               
                </li>
                <li class="col-4 px-4">
                    <img src="/cms/img/getall_img/real_players.png" alt="Real Players">
                    <div class="px-3 py-3">
                        <h3>REAL PLAYERS</h3>
                        <p class="py-2">색소폰, 트럼펫, 바이올린, 비트박스, 그리고 
                            랩의 신선한 조화. EDM을 리얼 사운드로 
                            제대로 놀아본다</p>
                        <ul class="d-flex">
                            <li class="d-flex flex-column p-4 justify-content-between"><i class="fa-brands fa-instagram"></i></li>
                            <li class="d-flex flex-column p-4 justify-content-between"><i class="fa-brands fa-youtube"></i></li>
                            <li class="d-flex flex-column p-4 justify-content-between"><i class="fa-brands fa-facebook-f"></i></li>
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
<!-- 스케쥴 -->
<div id="schedule">
    <div class="container">
        <h2 class="text-center">SCHEDULE</h2>
        <div class="days d-flex row">
            <button class="col-2 btn btn-link">TUE</button>
            <button class="col-2 on btn btn-link">WED</button>
            <button class="col-2 btn btn-link">THU</button>
            <button class="col-2 btn btn-link">FRI</button>
            <button class="col-2 btn btn-link">SAT</button>
            <button class="col-2 btn btn-link">SUN</button>
        </div>
    </div>    
        <div class="slideBox mt-5">
            <ul class="d-flex swipeBox">
                <li class="d-flex flex-column p-4 justify-content-between">
                    <dl class="d-flex">
                        <dt class="mr-5">22:00</dt>
                        <dd>Opening Stage</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">22:10</dt>
                        <dd>Vida Loca</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">00:20</dt>
                        <dd>Sexophone Time</dd>
                    </dl>
                </li>
                <li class="d-flex flex-column p-4 justify-content-between">
                    <dl class="d-flex">
                        <dt class="mr-5">22:00</dt>
                        <dd>DJ VANA</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">22:10</dt>
                        <dd>Vida Loca</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">00:20</dt>
                        <dd>Sexophone Time</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">23:20</dt>
                        <dd>Golden Age Band</dd>
                    </dl>
                </li>
                <li class="pl-2">
                    <ul class="rect flex-column d-flex py-4 justify-content-between">
                        <li class="d-flex pb-4">
                            <span class="pr-5">22:00</span>
                            <div>
                                <strong>Opeing Stage</strong>
                                <p>piano & Vocal <br>
                                    Collabo Stage</p>
                            </div>
                        </li>
                        <li class="d-flex pb-4">
                            <span class="pr-5">22:10</span>
                            <div>
                                <strong>Vida Loca</strong>
                                <p>Tropical Latin <br>
                                    Performance</p>
                            </div>
                        </li>
                        <li class="d-flex pb-4">
                            <span class="pr-5">00:20</span>
                            <div>
                                <strong>Saxophone Time</strong>
                                <p>Saxophone Stage</p>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="d-flex flex-column p-4 justify-content-between">
                    <dl class="d-flex">
                        <dt class="mr-5">22:00</dt>
                        <dd>DJ VANA</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">22:10</dt>
                        <dd>Vida Loca</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">00:20</dt>
                        <dd>Sexophone Time</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">23:20</dt>
                        <dd>Golden Age Band</dd>
                    </dl>
                </li>
                <li class="d-flex flex-column p-4 justify-content-between">
                    <dl class="d-flex">
                        <dt class="mr-5">22:00</dt>
                        <dd>Opening Stage</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">22:10</dt>
                        <dd>Vida Loca</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">00:20</dt>
                        <dd>Sexophone Time</dd>
                    </dl>
                </li>
                <li class="d-flex flex-column p-4 justify-content-between">
                    <dl class="d-flex">
                        <dt class="mr-5">22:00</dt>
                        <dd>DJ VANA</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">22:10</dt>
                        <dd>Vida Loca</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">00:20</dt>
                        <dd>Sexophone Time</dd>
                    </dl>
                    <dl class="d-flex">
                        <dt class="mr-5">23:20</dt>
                        <dd>Golden Age Band</dd>
                    </dl>
                </li>
            </ul>
        </div>
    
</div>

<?php

include_once(G5_THEME_PATH.'/main/location.php');
?>

<div id="applyBanner" class="rel">
    <div class="container pt-3">
        <h2 class="py-5">APPLY FOR AUDITION</h2>
        <p>지금 여러분의 재즈영상을 <br>
        sns링크로 지원하세요</p>
        <div class="playerImg"> <img src="/cms/img/getall_img/players.png" alt=""></div>
    </div>
</div>
<!-- 폼태그 -->

<div id="sectionApply">
    <div class="container pb-5">
        <h3>APPLY</h3>
        <p class="comment mt-4">겟올라잇 재즈 파이터 지원하기</p>
        <fieldset>
            <form action="">
                <ul id="form" class="mt-5">
                    <li class="sort d-flex py-2">
                        <span class="col-2">구분</span>
                        <div class="col-2 pl-0">
                            <input type="radio" id="solo" name='sort' value="솔로" class="d-none">
                            <label for="solo">
                                <i class="xi-radiobox-blank"></i>
                                <span>솔로</span>
                            </label>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="group" name='sort' class="d-none">
                            <label for="group">
                                <i class="xi-radiobox-blank"></i>
                                <span>그룹</span>
                            </label>
                        </div>        
                    </li>
                    <li class="d-flex py-2">
                        <span class="col-2">아티스트/그룹명</span>
                        <input class="col-4 border border-secondary rounded" type="text"><label for="artistType"></label>
                        <span class="col-2">장르</span>
                        <input class="col-4 border border-secondary rounded" type="text"><label for="genre"></label>
                    </li>
                    <li class="d-flex py-2">
                        <span class="col-2">연락처</span>
                        <input class="col-4 border border-secondary rounded" type="text">
                        <span class="col-2">이메일 주소</span>
                        <input class="col-4 border border-secondary rounded" type="text">
                    </li>
                    <li class="d-flex py-2">
                        <span class="col-2">아티스트 소개</span>
                        <textarea  class="flex-grow-1 border border-secondary rounded" name="introduce" id="introduce" cols="40" rows="5"></textarea>
                    </li>
                    <li class="sns d-flex py-2">
                        <span class="col-2">SNS</span>
                        <div class="col-2 pl-0">
                            <input type="radio" id="youtube" name='sns' value="youtube" class="d-none">
                            <label for="youtube">
                                <i class="xi-radiobox-blank"></i>
                                <span>youtube</span>
                            </label>
                        </div>
                        <div class="col-2 pl-0">
                            <input type="radio" id="instagram" name='sns' value="instagram" class="d-none">
                            <label for="instagram">
                                <i class="xi-radiobox-blank"></i>
                                <span>instagram</span>
                            </label>
                        </div>
                        <div class="col-2 pl-0">
                            <input type="radio" id="facebook" name='sns' value="facebook" class="d-none">
                            <label for="facebook">
                                <i class="xi-radiobox-blank"></i>
                                <span>facebook</span>
                            </label>
                        </div>
                        <div class="col-2 pl-0">
                            <input type="radio" id="etc" name='sns' value="etc" class="d-none">
                            <label for="etc">
                                <i class="xi-radiobox-blank"></i>
                                <span>etc</span>
                            </label>
                        </div>
                    </li>
                    <li class="d-flex py-2">
                        <span class="col-2">링크주소</span>
                        <input class="flex-grow-1 border border-secondary rounded" type="text"><label for="artistType"></label>
                        
                    </li>
                   
                </ul>
            </form>
        </fieldset>
        <div id="agreeBox" class="py-5">
            <h4 class="pb-4">개인정보 수집 및 이용 동의 약관</h4>
            <div class="agreeText border border-secondary rounded p-3">
                <p>
                1. 개인정보의 수집/이용 및 목적 : 문의자 신원 확인, 문의내용 확인 및 처리결과 통보 <br>
                2. 수집하려는 개인정보의 항목 <br>
                필수항목 : 성명, 휴대폰번호, 이메일 <br>
                3. 개인정보의 보유 및 이용기간 : 문의 내용이 처리가 완료될 때 까지 <br>
                4. 귀하는 개인정보 수집/이용에 동의하지 않으실 수 있습니다. 동의 거부 시 문의에 대한 회신 등의 서비스는 제한될 수 있습니다.
                </p>
            </div>
            <div class="check pt-5">
                <input type="checkbox" id="agree" name="agree" class="d-none">
                <label for="agree">
                    <i class="xi-checkbox-blank"></i>
                    <span>필수) 개인정보 수집 및 이용 동의</span>
                </label>
            </div>
        </div>
        
        <div class="d-flex justify-content-center btns pb-5 ">
            <input type="button" value="CANCLE" class="rounded cancleBtn py-1 px-2 mr-2">
            <input type="submit" value="APPLY" class="rounded applyBtn  px-2 ml-2">
        </div>
    </div>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php'); ?>

