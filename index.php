<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beauty#</title>
  <link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/sample_common.css">  
  <script src="js/sample_common.js" defer></script>
  <style>
    
    /* 슬라이드 */
    .slide {
      height: calc(100vh - 300px);
      position: relative;
      z-index: 0;
      
    }
    .slide ul {
      height: 100%;
      width: 100%;
      margin: 0;
      padding: 0;
    }
    .slide ul li {
      height: 100%;
      width: 100%;
      list-style: none;
      position: absolute;
      top:0;
      left:0;
    }

    .slide ul li::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.2);
    }

    .slide ul li.active {
        opacity: 1;
        z-index: 1;
    }

   
    .slide ul li a {
        position: relative;
        display: flex;
        justify-content: center;  /* 가로 중앙 */
        align-items: center;      /* 세로 중앙 */
        height: 100%;
    }
    
    .slide ul li h2 {
        color: #e9e4e4;
        font-size: 25px;
        text-align: center;
        opacity: 0;
        animation: fadeInUp 5s ease forwards;
    }    

    /* keyframes */
    @keyframes fadeInUp {
        to {
            opacity: 1;
        }
    }
    
    .slide ul li.s1 {
      background: url('./images/spabielenda-beautician-5529805.jpg') no-repeat;
      background-size: cover;
      background-position: center 30%;
    }

    /*
    .slide ul li.s2 {
      background: url('./images/nuno_lopes-expocosmetics-1312208.jpg') no-repeat center center;
      background-size: cover;
    }

    .slide ul li.s3 {
      background: url('./images/nuno_lopes-expocosmetics-1312211.jpg') no-repeat center center;
      background-size: cover;
    }
    */

    /* 섹션 */
    /*.links { height: 472px; background-color: #cebbd6; display:flex; justify-content:center; align-items:center; font-size:32px; }*/
    .links {
        height: 472px;
        background-color: #cebbd6;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* 내부 컨테이너 */
    .links-inner {
        display: flex;
        gap: 30px;
    }

    /* 박스 */
    .links .box {
        width: 380px;
        height: 283px;

        display: flex;
        justify-content: center;
        align-items: center;

        font-size: 35px;
        font-weight: bold;
        color: #fff;

        transition: all 0.3s ease;
    }

    .box_1{
        background:#5a4275;
    }

    .box_2{
        background:#e06091;
    }

    .box_3{
        background:#81548b;
    }

    .box_4{
        background:#c173b1;
    }

    .box_5{
        background:#8e80a6;
    }

    .box_6{
        background:#9a1356;
    }

    /*.slogan { height: 300px; background-color: #f3e6f0; display:flex; justify-content:center; align-items:center; font-size:32px; }*/

    .slogan {
        height: 300px;
        background-color: #f3e6f0;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .slogan p:first-child {
        font-size: 32px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .slogan p:last-child {
        font-size: 20px;
        color: #e06091;
    }
    /*.content { height: 600px; background-color: #f9f5f9; display:flex; justify-content:center; align-items:center; font-size:32px; }*/

    /* content 영역 */
    .content {
        background-color: #cebbd6;
        height: auto;
        padding: 80px 0;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* 내부 정렬 */
    .content-inner {
        display: flex;
        gap: 40px; /* 각 묶음 간격 */
    }

    /* 세로 2개 묶음 */
    .content .column {
        display: flex;
        flex-direction: column;
    }

    /* 박스 크기 (links와 비슷하게) */
    .content .box {
        width: 380px;
        height: 283px;

        display: flex;
        justify-content: center;
        align-items: center;

        font-size: 26px;
        font-weight: bold;
        color: #fff;

        transition: all 0.3s ease;
    }

   .content_img1 {
        background: url('./images/mounthive-nail-art-5653459.jpg') no-repeat center/cover;
    }

    .content_img2 {
        background: url('./images/bru-no-manicure-870857.jpg') no-repeat center/cover;
    }
    
    .content_img3{
        background: url('./images/mounthive-nail-art-2688565.jpg') no-repeat center/cover;
    }
    
    /* 링크 섹션 */
    @media screen and (max-width: 768px) {

        .links {
            height: auto;
            padding: 40px 20px;
        }

        .links-inner {
            flex-direction: column;
            gap: 15px;
            width: 100%; /* 추가 */
        }

        .links .box {
            width: 100%;   /* 핵심 */
            max-width: none; /* 혹시 모를 제한 제거 */
            height: 120px;
            font-size: 20px;
        }
    }

    /* content 섹션 */
    @media screen and (max-width: 768px) {

        .content {
            padding: 40px 20px;
        }

        .content-inner {
            flex-direction: column;
            gap: 15px;
            width: 100%;
        }

        .content .column {
            width: 100%;
        }

        .content .box {
            width: 100%;
            height: 140px; /* 모바일용 적당 */
            font-size: 16px;
        }

        .content .content_img1,
        .content .content_img2,
        .content .content_img3 {
            display: none;
        }
     
    }
  </style>
</head>
<body>
  <div id="wrap">
    <header>
      <div class="inner">
        <h1><a href="#">Beauty#</a></h1>

        <!-- 햄버거 버튼 -->
        <div class="hamburger" id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <nav id="navMenu">
          <ul>
            <li><a href="index.php" class="active" >Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#">Price</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="slide">
      <ul>
        <li class="s1 active">
          <a href="#">
            <h2>당신의 아름다움을 완성하는 공간</h2>
          </a>
        </li>
        <!--
        <li class="s2">
          <a href="#">
            <h2>Beauty# 슬라이드 2</h2>
          </a>
        </li>
        <li class="s3">
          <a href="#">
            <h2>Beauty# 슬라이드 3</h2>
          </a>
        </li>
        -->
      </ul>
    </section>

    <section class="links">
        <div class="links-inner">
            <div class="box box_1">네일 케어</div>
            <div class="box box_2">속눈썹 연장</div>
            <div class="box box_3">피부 관리</div>
        </div>
    </section>
    <section class="slogan">
        <div>
            <p>아름다움 그 이상의 가치</p>
            <p>Beauty#에서 경험하세요</p>
        </div>
    </section>
    <section class="content">
        <div class="content-inner">

            <div class="column">
                <div class="box box_4">젤 네일</div>
                <div class="box content_img1"></div>
            </div>

            <div class="column">
                <div class="box content_img2"></div>
                <div class="box box_5">아트 네일</div>
            </div>

            <div class="column">
                <div class="box box_6">기타 네일</div>
                <div class="box content_img3"></div>
            </div>

        </div>
    </section>
    <footer>
        <div class="footer-inner">

        <div class="footer-left">
        <h2>Beauty#</h2>
        <p>당신의 아름다움을 완성하는 공간</p>
        </div>

        <div class="footer-center">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Price</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </div>

        <div class="footer-right">
        <p>Tel. 010-1234-5678</p>
        <p>Incheon, Korea</p>
        </div>

        </div>

        <div class="footer-bottom">
            © 2026 Beauty#. All Rights Reserved.
        </div>
    </footer>
  </div>

    
</body>
</html>