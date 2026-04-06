<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beauty#</title>
  <link rel="stylesheet" href="css/sample_common.css">
  <script src="js/sample_common.js" defer></script>
  <style>
    .sub-visual {
        height: 250px;
        background: url('./images/spabielenda-beautician-5529805.jpg') no-repeat center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .sub-visual::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.4); /* 어둡게 */
    }

    .sub-visual h2 {
        position: relative;
        color: #fff;
        font-size: 36px;
        z-index: 1;
    }

    .services{
        width:100%;
        min-height:400px;
        background-color: #cebbd6;
        padding:80px 20px;
    }
    .services-inner {
        max-width:1200px;
        margin:0 auto;
        padding:80px 40px;
        background:#f6f4f6;
    }

    .service-intro-box h3{
        margin-bottom:20px;
        color:#9a1356;
        font-size:25px;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 한 줄에 3개 */
        gap: 40px; /* 박스 간격 */
        margin-top: 40px;
    }

    .service-thumb {
        width: 100%;
        height: 200px;
        background-color: #ddd; /* 테스트용 */
        border-radius: 10px;
    }

    /* 텍스트 */
    .service-item-content{
        margin-top: 15px;
        font-size: 16px;
        color: #333;
    }

    .service-item p:first-child {
        font-size:20px;
        color:#81518b;
        margin-bottom:5px;
    }

    .img1 {
        background: url('./images/mounthive-nail-art-5653459.jpg') no-repeat center/cover;
    }

    .img2 {
        background: url('./images/mounthive-nail-art-2688565.jpg') no-repeat center/cover;        
    }

    .img3{
        background: url('./images/bru-no-manicure-870857.jpg') no-repeat center/cover;
    }

    /* 모바일 */
    @media screen and (max-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr;
            gap: 50px;
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
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#">Price</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- 상단 비주얼 -->
    <section class="sub-visual">
        <h2>Our Services</h2>
    </section>

    <!-- 서비스 -->
    <section class="services">
        <div class="services-inner">

            <!-- ✅ 설명 박스 -->
            <div class="service-intro-box">
                <h3>Beauty Services</h3>
                <p>
                전문적인 기술과 프리미엄 제품을 사용하여 고객님의 아름다움을 완성합니다.
                각 서비스는 맞춤 상담을 통해 최적의 결과를 제공합니다.
                </p>
            </div>

            <div class="services-grid">

                <div class="service-item">
                    <div class="service-thumb img1"></div>
                    <div class="service-item-content">
                        <p class="item-title">젤 네일</p>
                        <p class="item-text">자연스럽고 오래 유지되는 네일</p>
                    </div>
                </div>

                <div class="service-item">
                    <div class="service-thumb img2"></div>
                    <div class="service-item-content">
                        <p class="item-title">아트 네일</p>
                        <p class="item-text">트렌디한 디자인 연출</p>
                    </div>
                </div>

                <div class="service-item">
                    <div class="service-thumb img3"></div>
                    <div class="service-item-content">
                        <p class="item-title">케어 네일</p>
                        <p class="item-text">건강한 손톱 관리</p>
                    </div>
                </div>

                <!-- 반복해서 총 9개 -->
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