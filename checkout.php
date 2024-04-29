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

    <!-- 結帳/start -->
    <section class="page-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                <!-- 結帳訊息/start -->
                <div class="mb-3">
                    <h2>結帳</h2>
                    <p>Thank you! 感謝你的訂購！</p>
                    <div class="alert alert-danger alert-dismissible fade show">
                        您目前尚未登入，請點擊<a href="login.html" class="alert-link">【連結】</a>進行登入。
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
                <!-- 結帳訊息/end -->
                <!-- 帳單資訊/start -->
                <div class="col-md-6 mb-3">
                    <h2>帳單資訊</h2>
                    <form action="">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="LastName">姓氏
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" id="LastName" required placeholder="必填，例如：葉">
                            </div>
                            <div class="col">
                                <label for="FirstName">名字
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" id="FirstName" required placeholder="必填，例如：大雄">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="tel">連絡電話
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="number" class="form-control" id="tel" required placeholder="必填，例如：0912-345-678">
                            </div>
                            <div class="col">
                                <label for="EMail">電子信箱
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="email" class="form-control" id="EMail" required placeholder="必填，電子信箱">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="Address">地址
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="Address" required placeholder="必填，縣/市-區/鄉/鎮-路/街-號/樓">
                        </div>
                    </form>
                </div>
                <!-- 帳單資訊/end -->
                <!-- 您的訂單/start -->
                <div class="col-md-6">
                    <h2>您的訂單</h2>
                    <div class="teble-responsive-sm">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td>商品</td>
                                    <td>總計</td>
                                </tr>
                                <tr>
                                    <td>TUM-CL-B-0001</td>
                                    <td>NT$&nbsp;500</td>
                                </tr>
                                <tr>
                                    <td>TUM-CL-B-0001</td>
                                    <td>NT$&nbsp;500</td>
                                </tr>
                                <tr>
                                    <td>TUM-CL-B-0001</td>
                                    <td>NT$&nbsp;500</td>
                                </tr>
                                <tr>
                                    <td>小計</td>
                                    <td>NT$&nbsp;1,500</td>
                                </tr>
                                <tr>
                                    <td>運送方式</td>
                                    <td>
                                        <div class="form-check">
                                            <input type="radio" id="Expenses" name="tran-expenses" class="form-ceheck-onput">
                                            <label class="form-check-label">免運費0</label>
                                        </div>
                                        <div class="form-check checkbox">
                                            <input type="radio" id="PostOffice" name="tran-expenses" class="form-ceheck-onput" checked>
                                            <label class="form-check-label">郵局:NT$&nbsp;80</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>總計</td>
                                    <td>NT$&nbsp;1,580</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <a href="#" class="btn btn-outline-info btn-lg float-end">下單購買</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- 您的訂單/end -->
            </div>
        </div>
    </section>
    <!-- 結帳/end -->
    
    <footer class="bg-dark">
        <!-- 頁腳/start -->
        <?php include("./footer.php");  ?>
        <!-- 頁腳/end -->
    </footer>

</body>

</html>