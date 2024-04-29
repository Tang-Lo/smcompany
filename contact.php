<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>巧克股份有限公司</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- CSS文件載入 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- js文件載入 -->
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- navigation start -->
    <div class="container-fluid bg-dark">
        <?php include("./nav.php"); ?>
    </div>
    <!-- navigation end -->
    <!-- 連絡我們/start -->
    <section class="page-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                <!-- 連絡資訊/start -->
                <div class="col-md-6 mb-5">
                    <h2 class="mt-5 mb-5">聯絡資訊</h2>
                    <div>
                        <p>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>11442 台北市內湖區內湖郵局第148之313號信箱</span>
                        </p>
                        <p>
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:04-2523469">02-27928198</a>
                        </p>
                        <p>
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:service@choco.com.tw">service@choco.com.tw</a>
                        </p>
                    </div>
                </div>
                <!-- 連絡資訊/end -->
                <!-- 連絡表單/start -->
                <div class="col-md-6">
                    <h2>聯絡表單</h2>
                    <p class="mt-5">謝謝瀏覽本網站。若您有任何需要或意見，請留下資料，我們會儘快與您聯絡！</p>
                    <form action="">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="公司名稱/聯絡人">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="e-mail" placeholder="電子信箱">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="tel" placeholder="連絡電話">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="business" placeholder="營業項目">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" id="message" placeholder="需求與建議"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-end send-btn">送出</button>
                    </form>
                </div>
                <!-- 連絡表單/end -->
            </div>
        </div>
    </section>
    <!-- 連絡我們/end -->
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