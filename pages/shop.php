<?php

$products_file = '../db/products.csv';
$products_file = fopen($products_file, 'r');
$products = [];
if(!empty($products_file)){
    fgetcsv($products_file,null,",");
    while($line =  fgetcsv($products_file,null,",")){
        $products[] = $line;
    }
}
fclose($products_file);


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script type="module" src="../js/script.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="../img/icon/search.png" alt=""></a>
            <a href="#"><img src="../img/icon/heart.png" alt=""></a>
            <a href="#"><img src="../img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="../index.php"><img src="../img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li class="active"><a href="./shop.php">Shop</a></li>
                            <!-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.php">About Us</a></li>
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shopping-cart.php">Shopping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li> -->
                            <li><a href="./contact.php">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="../img/icon/search.png" alt=""></a>
                        <a href="#"><img src="../img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="../img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="../index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <div class="shop__product__option__right">
                                    
                                    <h3 class="text-center">Sort by Price:</h3>
                                    <div class="container m-auto w-50">
                                        <form class="form-group checkout__order rounded"  method="GET">
                                            <input class="form-control mb-2" value="<?php if(isset($_GET['min'])){ echo (int)$_GET['min']; } ?>" type="number" min="0" max="64" name="min" placeholder="Min($0 - $64)"/>
                                            <input class="form-control mb-2" type="number" value="<?php if(isset($_GET['max'])){ echo (int)$_GET['max'];} ?>"  min="65" max="130" name="max" placeholder="Max($65 - $130)"/>
                                            <div class="s">
                                                <button id="sort" type="submit" class="m-auto btn btn-dark">Sort</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="shop__product__option__right">
                                    <?php
                                    if(isset($_GET['min'],$_GET['max'])){
                                        $min = $_GET['min'];
                                        $max = $_GET['max'];
                                        $price=[];
                                        if(isset($products)){
                                            foreach($products as $product){
                                                // var_dump($product[7]);
                                                // echo "++++++++++++";
                                                $prix = floatval($product[7]);
                                                // echo "++++++++++++";
                                                // var_dump($prix);
                                                if ($prix >= $min && $prix <= $max) {
                                                    $price[] = $product;
                                                }
                                                // echo "++++++++++++";
                                            }
                                            // var_dump($price);
                                            echo '<div class="container text-center">
                                                        <div class="row">';
                                            foreach($price as $p){
                                                // var_dump($p);
                                                
                                                echo  '

                                                        <div class="col">
                                                            <div class="product__item">
                                                                <div class="product__item__pic set-bg" data-setbg="../'.$p[1].'">
                                                                    <ul class="product__hover">
                                                                        <!-- <li><a href="#"><img src="../img/icon/heart.png" alt=""></a></li>
                                                                        <li><a href="#"><img src="../img/icon/compare.png" alt=""> <span>Compare</span></a>
                                                                        </li> -->
                                                                        <li><a href="shop-details.php?id='.$p[0].'"><img
                                                                                    src="../img/icon/search.png" alt=""></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product__item__text">
                                                                    <h6>'.$p[2].'</h6>
                                                                    <!-- <a href="#" class="add-cart">+ Add To Cart</a> -->
                                                                    <div class="rating">
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                    <h5>$'.$p[7].'</h5>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                            
                                            ';
                                            }
                                            echo '
                                                </div>
                                                </div>
                                            ';
                                            
                                            
                                        }
                                        // var_dump($products[7]);
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form class="w-75 m-auto" action="#" method="POST">
                                <input type="text" id="search" name="termSearch" placeholder="Search...">
                                <button type="submit" span class="icon_search"></span></button>
                            </form>
                                <?php
                                    // var_dump($_GET);
                                    
                                    if ( isset($_POST['termSearch']) && !empty($_POST['termSearch']) ) {
                                        $termSearch = $_POST['termSearch'];
                                        $search = [];
                                        foreach($products as $prod){
                                            // var_dump($prod[2]);
                                            
                                            if( stripos($prod[2],$termSearch)!==false ){
                                                $search[] = $prod; 
                                            }
                                        }
                                        // var_dump($search);
                                    
                                    if(!empty($search) && !empty($termSearch)){
                                        foreach($search as $item){
                                        echo  '
                                        <div class="col-lg-4 col-md-6 col-sm-6 mt-3">
                                            <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="../'.$item[1].'">
                                                <ul class="product__hover">
                                                    <!-- <li><a href="#"><img src="../img/icon/heart.png" alt=""></a></li>
                                                    <li><a href="#"><img src="../img/icon/compare.png" alt=""> <span>Compare</span></a>
                                                    </li> -->
                                                    <li><a href="shop-details.php?id='.$item[0].'"><img
                                                                src="../img/icon/search.png" alt=""></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6>'.$item[2].'</h6>
                                                <!-- <a href="#" class="add-cart">+ Add To Cart</a> -->
                                                <div class="rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>$'.$item[7].'</h5>
                                                <div class="product__color__select">
                                                    <label for="pc-4">
                                                        <input type="radio" id="pc-4">
                                                    </label>
                                                    <label class="active black" for="pc-5">
                                                        <input type="radio" id="pc-5">
                                                    </label>
                                                    <label class="grey" for="pc-6">
                                                        <input type="radio" id="pc-6">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                            ';
                                        }
                                    }
                                    else{
                                        echo "Aucun produit n'a été trouvé";
                                    }
                                }
                                ?>
                        </div>
                    </div>
                    <div class="row">
                    
                    <?php
                    if(!empty($products)){
                        foreach($products as $prod){
                            echo  '
                            <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="../'.$prod[1].'">
                                    <ul class="product__hover">
                                        <!-- <li><a href="#"><img src="../img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="../img/icon/compare.png" alt=""> <span>Compare</span></a>
                                        </li> -->
                                        <li><a href="shop-details.php?id='.$prod[0].'"><img
                                                    src="../img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>'.$prod[2].'</h6>
                                    <!-- <a href="#" class="add-cart">+ Add To Cart</a> -->
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$'.$prod[7].'</h5>
                                    <div class="product__color__select">
                                        <label for="pc-4">
                                            <input type="radio" id="pc-4">
                                        </label>
                                        <label class="active black" for="pc-5">
                                            <input type="radio" id="pc-5">
                                        </label>
                                        <label class="grey" for="pc-6">
                                            <input type="radio" id="pc-6">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
                else{
                    echo "Aucun produit n'a été trouvé";
                }
                ?>
                </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="../img/footer-logo.png" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="../img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
