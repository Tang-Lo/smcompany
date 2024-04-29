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

    <!-- 產品商城/start -->
    <section class="page-content">
        <div class="container pt-5 pb-5">
            <div class="row">
                <!-- 產品說明/start -->
                <div class="col-md-9">
                    <div class="row">
                        <!-- 商品照片/start -->
                        <div class="col-md-6">
                            <img src="images/product/chocoMK_01.png" alt="LTG-BY-0001" class="img-fluid w-100">
                        </div>
                        <!-- 商品照片/end -->
                        <!-- 商品介紹/start -->
                        <div class="col-md-6">
                            <h4 class="mb-3 title-color">CHO-MK-0001</h4>
                            <h5 class="text-danger">
                                <small class="text-secondary ms-2">
                                    <del>NT$&nbsp;600</del>
                                </small>
                                NT$&nbsp;500
                            </h5>
                            <p class="mt-4">香濃滑順的牛奶巧克力，如絲緞般細緻柔滑</p>
                            <div class="d-bloc mb-3">
                                <p class="mb-0 d-inline-block">數量</p>
                                <form action="" class="d-inline-block">
                                    <input type="number" class="form-control w-25" id="quantity" value="1">
                                </form>
                            </div>
                            <div class="mb-3">
                                <a href="cart.html" class="btn btn-primary text-white ms-1">加入購物車</a>
                                <a href="checkout.html" class="btn btn-secondary text-white">直接結帳</a>
                            </div>
                            <p class="d-block text-secondary">產品分類：<span>白巧克力</span></p>
                        </div>
                        <!-- 商品介紹/end -->
                        <!-- 詳細資料/start -->
                        <div class="mt-5 mb-5">
                            <ul class="nav nav-tabs" id="ProductTab">
                                <li class="nav-item">
                                    <a href="#specification" class="nav-link" data-bs-toggle="tab">產品成分</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="ProductTabContnet">
                                <div class="tab-pane fade show active" id="description">
                                    <p class="p-2">砂糖、可可塊、全脂奶粉、可可脂、大豆卵磷脂、香料(含椰子)</p>
                                </div>
                                
                            </div>
                        </div>
                        <!-- 詳細資料/end -->
                    </div>
                </div>
                <!-- 產品說明/end -->
                <!-- 側邊欄/start -->
                <div class="col-md-3">
                    <div class="row">
                        <!-- 搜尋/start -->
                        <div class="mb-5">
                            <form action="">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="搜尋...">
                                    <button type="button" class="btn btn-outline-secondary">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- 搜尋/end -->
                        <!-- 購物清單/start -->
                        <div class="mb-5">
                            <h4 class="title-color">購物車</h4>
                            <div class="d-block sidebar-product-list">
                                <a class="text-white remove" data-bs-toggle="tooltip" data-bs-placement="top" title="移除此商品">X</a>
                                <a href="product.html" class="d-inline-block">
                                    <img src="images/product/eva_1.jpg" alt="TG-BY-0001" class="d-inline-block sidebar-product-img">
                                    <h6 class="d-inline-block">CHO-BK-0001</h6>
                                </a>
                                <p class="d-block text-secondary ps-4">
                                    <span class="text-warning">1</span>&nbsp;X&nbsp;NT$500
                                </p>
                            </div>
                            <div class="d-block sidebar-product-list">
                                <a class="text-white remove" data-bs-toggle="tooltip" data-bs-placement="top" title="移除此商品">X</a>
                                <a href="product.html" class="d-inline-block">
                                    <img src="images/product/eva_1.jpg" alt="TG-BY-0001" class="d-inline-block sidebar-product-img">
                                    <h6 class="d-inline-block">CHO-BK-0002</h6>
                                </a>
                                <p class="d-block text-secondary ps-4">
                                    <span class="text-warning">1</span>&nbsp;X&nbsp;NT$500
                                </p>
                            </div>
                            <div class="d-block mt-3 mb-3">
                                <h5 class="text-center">小計：NT$:&nbsp;1,000</h5>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="cart.php" class="btn btn-primary text-white">查看購物車</a>
                                <a href="checkout.php" class="btn btn-secondary text-white">結帳</a>
                            </div>
                        </div>
                        <!-- 購物清單/end -->
                          <!-- 產品分類/start -->
                          <div class="mb-5">
                            <h4 class="title-color">產品分類</h4>
                            <ul class="sidebar-product-category">
                                <li>
                                    <a href="#">黑巧克力</a>
                                </li>
                                <li>
                                    <a href="#">白巧克力</a>
                                </li>
                                <li>
                                    <a href="#">堅果巧克力</a>
                                </li>
                                <li>
                                    <a href="#">牛奶巧克力</a>
                                </li>
                            </ul>
                        </div>
                        <!-- 產品分類/end -->
                    </div>
                </div>
                <!-- 側邊欄/end -->
            </div>
        </div>
    </section>
    <!-- 產品商城/end -->

    <footer class="bg-dark">
        <!-- 頁腳/start -->
        <?php include("./footer.php");  ?>
        <!-- 頁腳/end -->
    </footer>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html>