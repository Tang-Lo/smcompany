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
    <!-- 購物車/start -->
    <section class="page-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                <!-- 產品清單/start -->
                <div class="mb-3">
                    <h2 class="mb-3">購物車</h2>
                    <div class="table-responsive-sm">
                        <table class="table table-bordered align-middle">
                            <thead class="table-dark fs-5">
                                <tr>
                                    <th scope="col" class="product-remove">&nbsp;</th>
                                    <th scope="col" class="product-thumbnail">圖片</th>
                                    <th scope="col" class="product-name">名稱</th>
                                    <th scope="col" class="product-price">價格</th>
                                    <th scope="col" class="product-quantity">數量</th>
                                    <th scope="col" class="product-subtotal">總計</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove">
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="移除此商品" class="remove text-white">X</a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="product.php">
                                            <img src="images/product/choco85_01.png" alt="LTG-BY-0001" class="img-fluid">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="product.php">CHO-BK-0001</a>
                                    </td>
                                    <td class="product-price">NT$&nbsp;500</td>
                                    <td class="product-quantity">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="product-subtotal">NT$&nbsp;500</td>
                                </tr>
                                <tr>
                                    <td class="product-remove">
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="移除此商品" class="remove text-white">X</a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="product.php">
                                            <img src="images/product/chocoWH_01.png" alt="LTG-BY-0001" class="img-fluid">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="product.php">CHO-WH-0001</a>
                                    </td>
                                    <td class="product-price">NT$&nbsp;500</td>
                                    <td class="product-quantity">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="product-subtotal">NT$&nbsp;500</td>
                                </tr>
                                <tr>
                                    <td class="product-remove">
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="移除此商品" class="remove text-white">X</a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="product.php">
                                            <img src="images/product/chocoMK_01.png" alt="LTG-BY-0001" class="img-fluid">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="product.php">CHO-AL-0001</a>
                                    </td>
                                    <td class="product-price">NT$&nbsp;500</td>
                                    <td class="product-quantity">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="product-subtotal">NT$&nbsp;500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- 產品清單/end -->
                <!-- 感興趣產品/start -->
                <div class="col-md-6 d-none d-md-block mb-5">
                    <h2>您可能對此有興趣...</h2>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="card">
                                <img src="images/product/choco85_02.png" alt="TG-B-0001" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title">CHO-BK-0002</h4>
                                    <p class="card-text">含有43%可可含量，精緻苦味帶出可可原始風味及濃郁的可可香氣，讓此商品在60年前一上市就深受消費者喜愛直到今日。</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;500</h5>
                                    <div class="d-grid gap-2">
                                        <a href="product.html" class="btn btn-outline-secondary">查看商品</a>
                                        <a href="cart.html" class="btn btn-outline-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="card">
                                <img src="images/product/chocoMK_01.png" alt="TG-B-0001" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title">CHO-ML-0001</h4>
                                    <p class="card-text">片狀巧克力包裝設計在過去 95年的歷史中幾乎維持不變。醇厚的可可和牛奶的味道和香氣，也是手工巧克力配料的理想選擇。</p>
                                    <h5 class="card-text text-danger">NT$&nbsp;500</h5>
                                    <div class="d-grid gap-2">
                                        <a href="product.html" class="btn btn-outline-secondary">查看商品</a>
                                        <a href="cart.html" class="btn btn-outline-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 感興趣產品/end -->
                <!-- 產品統計/start -->
                <div class="col-md-6 mb-5">
                    <h2>購物車統計</h2>
                    <div class="table-reaponsive-sm">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>小計</td>
                                    <td>NT$&nbsp;1500</td>
                                </tr>
                                <tr class="bg-info">
                                    <td>總計</td>
                                    <td>NT$&nbsp;1500</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <a href="checkout.html" class="btn btn-outline-info btn-lg float-end">前往結帳</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- 產品統計/end -->
            </div>
        </div>
    </section>
    <!-- 購物車/end -->
    <footer class="bg-dark">
    <!-- 頁腳/start -->
       <?php include("./footer.php");  ?>
    <!-- 頁腳/end -->
    </footer>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>