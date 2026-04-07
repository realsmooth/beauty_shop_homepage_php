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

    .price{
        width:100%;
        min-height:400px;
        background-color: #cebbd6;
        padding:80px 20px;
    }
    .price-inner {
        max-width:1200px;
        margin:0 auto;
        padding:80px 40px;
        background:#f6f4f6;
    }

    .price-intro-box h3{
        margin-bottom:20px;
        color:#9a1356;
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
            <li><a href="sample.php">Home</a></li>
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

    <!-- price -->
    <section class="price">
        <div class="price-inner">

            <!-- ✅ 설명 박스 -->
            <div class="price-intro-box">
                <h3>Beauty Services</h3>
                <p>
                가격리스트 부분
                </p>
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