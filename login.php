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
    <!-- header/end -->
    <!-- 登入與註冊/start -->
    <section class="page-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                <!-- 登入/start -->
                <div class="col-md-6 mb-5">
                    <h2>登入</h2>
                    <form action="">
                        <div class="mb-3">
                            <label for="Email">帳號或Email電子信箱
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="Email" placeholder="必填，帳號或Email電子信箱" required>
                        </div>
                        <div class="mb-3">
                            <label for="Password">密碼
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control" id="Password" placeholder="必填，密碼" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">記住我
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary send-btn">登入</button>
                    </form>
                </div>
                <!-- 登入/end -->
                <!-- 註冊/start -->
                <div class="col-md-6 mb-5">
                    <h2>註冊</h2>
                    <form action="">
                        <div class="mb-3">
                            <label for="RegisteredAccount">帳號
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="RegisteredAccount" placeholder="必填，帳號" required>
                        </div>
                        <div class="mb-3">
                            <label for="RegisteredEmail">電子信箱
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" id="RegisteredEmail" placeholder="必填，電子信箱" required>
                        </div>
                        <div class="mb-3">
                            <label for="RegisteredPassword">密碼
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control" id="RegisteredPassword" placeholder="必填，密碼" required>
                        </div>
                        <button type="submit" class="btn btn-primary send-btn">註冊</button>
                    </form>
                </div>
                <!-- 註冊/end -->
            </div>
        </div>
    </section>
    <!-- 登入與註冊/end -->
    
    <footer class="bg-dark">
    <!-- 頁腳/start -->
       <?php include("./footer.php");  ?>
    <!-- 頁腳/end -->
    </footer>

</body>
</html>