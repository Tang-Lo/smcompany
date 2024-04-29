<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>

    </title>
    <link rel="shortcut icon" href="images/logo_ico32m.ico" type="image/x-icon">
    <!-- CSS文件載入 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@0;1&display=swap" rel="stylesheet">
    <!-- js文件載入 -->
    <script src="js/bootstrap.bundle.min.js"></script>


    <style>
        .carousel-item img {
            width: 100vw;
            height: 40vh;
            object-fit: cover;
            object-position: 50% 50%;
        }

        .framecolor {
            background-color: #FFFDF4;
            /* #FFFDF4 */
            /* #EAEAFD */
        }

  

.h3{
  font-family: "Crimson Text", serif;
  font-style: italic;
  font-size: 40px;
}

.pp{
    font-size: 20px;
    color: #FFD700;
    font-weight: bold;
}
    </style>
</head>

<body class="framecolor" style="background-image: var(--bs-gradient)">
    <!-- navigation start -->
    <div class="container-fluid bg-dark">
        <?php include("./nav.php"); ?>
    </div>
    <!-- navigation end -->
    <!-- 廣告/start -->
    <!-- carousel start -->
    <section class="banners">
        <div id="carouselBanner" class="carousel slide bg-white" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselBanner" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselBanner" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="images/slider1.jpg" class="d-block w-100" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="h3">"Le chocolat fondant sur la langue, libérant un tourbillon de plaisir sucré."</h3>
                        <p class="pp">巧克力在舌尖上融化，釋放出甜蜜的愉悅</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="images/slider2.jpg" class="d-block w-100" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                    <h3 class="h3">"Chaque bouchée de chocolat est une expérience sensorielle exquise, un mélange de douceur et d'intensité."</h3>
                    <p class="pp">每一口巧克力都是一次極致的感官體驗，融合了甜美與濃郁</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="images/slider3.jpg" class="d-block w-100" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                    <h3 class="h3">"Les arômes riches du chocolat, avec leur note subtilement amère, envoûtent les sens et apportent une sensation de bonheur instantané."</h3>
                    <p class="pp">巧克力的豐富香氣，帶有微妙的苦澀，令人陶醉，帶來即刻的幸福感</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselBanner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselBanner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>
    <!-- 廣告/end -->
    <!-- 產品分類/start -->
    <section class="container mt-5">
        <h2>產品分類</h2>
        <p>為了滿足您的需求，巧克提供黑巧克力、白巧克力及堅果、牛奶混合類巧克力..等商品供您選擇，若需要特殊設計及客製尺寸歡迎來信來電詢問。</p>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 product-categories">
            <div class="col">
                <a href="product_BK001.php" class="card">
                    <img src="images/product/choco85_01.png" class="card-img-top" alt="精典黑巧克力">
                    <div class="card-body bg-dark">
                        <h4 class="mb-0 text-white text-center">精典黑巧克力</h4>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="product_WH001.php" class="card">
                    <img src="images/product/chocoWH_01.png" class="card-img-top" alt="浪漫白巧克力">
                    <div class="card-body bg-dark">
                        <h4 class="mb-0 text-white text-center">浪漫白巧克力</h4>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="product_MK001.php" class="card">
                    <img src="images/product/chocoAL_01.png" class="card-img-top" alt="堅果巧克力">
                    <div class="card-body bg-dark">
                        <h4 class="mb-0 text-white text-center">堅果巧克力</h4>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="product_MK001.php" class="card">
                    <img src="images/product/chocoMK_01.png" class="card-img-top" alt="牛奶巧克力">
                    <div class="card-body bg-dark">
                        <h4 class="mb-0 text-white text-center">牛奶巧克力</h4>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- 產品分類/end -->
    <!-- 熱門產品/start -->
    <section class="container mt-5">
        <div class="row">
            <div class="mb-2">
                <h2>熱門產品</h2>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="images/product/choco72_01.png" alt="LTG-BY-0001">
                    <div class="card-body">
                        <h4 class="card-title">LTG-BY-0001</h4>
                        <p class="card-text">72% 黑巧克力 01</p>
                        <h5 class="card-text text-danger">
                            <small class="text-secondary me-2">
                                <del>NT$&nbsp;600</del>
                            </small>
                            NT$&nbsp;500
                        </h5>
                        <div class="d-grid gap-2">
                            <a href="product.php" class="btn btn-outline-secondary">查看商品</a>
                            <a href="cart.php" class="btn btn-outline-primary">加入購物車</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="images/product/choco72_02.png" alt="TG-B-0001">
                    <div class="card-body">
                        <h4 class="card-title">TG-B-0001</h4>
                        <p class="card-text">72% 黑巧克力02</p>
                        <h5 class="card-text text-danger">NT$&nbsp;500</h5>
                        <div class="d-grid gap-2">
                            <a href="product.php" class="btn btn-outline-secondary">查看商品</a>
                            <a href="cart.php" class="btn btn-outline-primary">加入購物車</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="images/product/chocoWH_01.png" alt="LTG-B-0001">
                    <div class="card-body">
                        <h4 class="card-title">LTG-B-0001</h4>
                        <p class="card-text">白巧克力01</p>
                        <h5 class="card-text text-danger">NT$&nbsp;500</h5>
                        <div class="d-grid gap-2">
                            <a href="product.html" class="btn btn-outline-secondary">查看商品</a>
                            <a href="cart.html" class="btn btn-outline-primary">加入購物車</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="images/product/choco85_01.png" alt="G-B-0001">
                    <div class="card-body">
                        <h4 class="card-title">G-B-0001</h4>
                        <p class="card-text">85% 黑巧克力01</p>
                        <h5 class="card-text text-danger">NT$&nbsp;500</h5>
                        <div class="d-grid gap-2">
                            <a href="product.html" class="btn btn-outline-secondary">查看商品</a>
                            <a href="cart.html" class="btn btn-outline-primary">加入購物車</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="images/product/choco85_02.png" alt="G-B-0002">
                    <div class="card-body">
                        <h4 class="card-title">G-B-0002</h4>
                        <p class="card-text">85% 黑巧克力02</p>
                        <h5 class="card-text text-danger">NT$&nbsp;500</h5>
                        <div class="d-grid gap-2">
                            <a href="product.html" class="btn btn-outline-secondary">查看商品</a>
                            <a href="cart.html" class="btn btn-outline-primary">加入購物車</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="images/product/chocoAL_01.png" alt="TU-BY-0001">
                    <div class="card-body">
                        <h4 class="card-title">TU-BY-0001</h4>
                        <p class="card-text">堅果巧克力01</p>
                        <h5 class="card-text text-danger">NT$&nbsp;500</h5>
                        <div class="d-grid gap-2">
                            <a href="product.html" class="btn btn-outline-secondary">查看商品</a>
                            <a href="cart.html" class="btn btn-outline-primary">加入購物車</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="images/product/chocoAL_02.png" alt="MG-GO-0002">
                    <div class="card-body">
                        <h4 class="card-title">MG-GO-0002</h4>
                        <p class="card-text">堅果巧克力02</p>
                        <h5 class="card-text text-danger">NT$&nbsp;500</h5>
                        <div class="d-grid gap-2">
                            <a href="product.html" class="btn btn-outline-secondary">查看商品</a>
                            <a href="cart.html" class="btn btn-outline-primary">加入購物車</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card mb-3">
                    <img class="card-img-top" src="images/product/chocoWH_02.png" alt="LG-GP-0001">
                    <div class="card-body">
                        <h4 class="card-title">LG-GP-0001</h4>
                        <p class="card-text">白巧克力02</p>
                        <h5 class="card-text text-danger">NT$&nbsp;500</h5>
                        <div class="d-grid gap-2">
                            <a href="product.html" class="btn btn-outline-secondary">查看商品</a>
                            <a href="cart.html" class="btn btn-outline-primary">加入購物車</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 熱門產品/end -->
    <!-- 關於巧克/start -->
    <section class="container mt-5">
        <h2>關於巧克</h2>
        <p>我們是成立於2024，致力於提供高品質且平價的巧克力商品的品牌"巧克"，我們相信每一顆巧克力都應該是一場享受，帶來愉悅和幸福的體驗。從可可豆到最終的成品，每一步都是一段奇妙的旅程，我們嚴選來自世界各地最優質的可可豆，經過精心烘焙，製成一流的巧克力產品。
         無論是一個特別的禮物，還是自己的小享受，我們都希望您在每一口巧克中都能感受到我們的用心和熱情。歡迎您來電或來信與我們聯絡。
        </p>
    </section>
    <!-- 關於巧克/end -->
    <!-- google map/start -->
    <section class="container mt-5" style="height:40vh;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1672.9305736930019!2d121.57410442349934!3d25.077147273329295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ac6f081e541b%3A0x9b9f742d54ae5f2e!2sLINE%20Taiwan%20office!5e0!3m2!1szh-TW!2stw!4v1712914816594!5m2!1szh-TW!2stw" width="100%" height="250" allowfullscreen="100%" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
    <!-- google map/end -->

    <footer class="bg-dark">
        <!-- 頁腳/start -->
        <?php include("./footer.php");  ?>
        <!-- 頁腳/end -->
    </footer>

</body>

</html>