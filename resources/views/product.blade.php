<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Basic page needs
	============================================ -->
    <title>Market - Premium Multipurpose HTML5/CSS3 Theme</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech" />
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
	============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Favicon
	============================================ -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="ico/favicon.png" />

    <!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('css')}}/bootstrap/css/bootstrap.min.css" />
    <link href="{{asset('css')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('js')}}/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="{{asset('js')}}/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <link href="{{asset('css')}}/themecss/lib.css" rel="stylesheet" />
    <link href="{{asset('js')}}/jquery-ui/jquery-ui.min.css" rel="stylesheet" />

    <!-- Theme CSS
	============================================ -->
    <link href="{{asset('css')}}/themecss/so_megamenu.css" rel="stylesheet" />
    <link href="{{asset('css')}}/themecss/so-categories.css" rel="stylesheet" />
    <link href="{{asset('css')}}/themecss/so-listing-tabs.css" rel="stylesheet" />
    <link href="{{asset('css')}}/footer1.css" rel="stylesheet">
    <link href="{{asset('css')}}/header1.css" rel="stylesheet">
    <link id="color_scheme" href="{{asset('css')}}/theme.css" rel="stylesheet" />
    <link href="{{asset('css')}}/responsive.css" rel="stylesheet" />




</head>

<body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full ">
        <!-- Main Container  -->
        <div class="main-container container">

            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-md-12 col-sm-12">

                    <div class="product-view row">
                        <div class="left-content-product col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="content-product-left  col-sm-6 col-xs-12 ">
                                    <div class="large-image  ">
                                        <img itemprop="image" class="product-image-zoom" src="{{url('image')}}/products/{{$product->img}}" data-zoom-image="{{url('image')}}/products/{{$product->img}}" title="Bint Beef" alt="Bint Beef" />
                                    </div>

                                    <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
                                        @foreach (range(1,4) as $index)

                                        <img src="{{url('image')}}/products/{{$product->img}}" title="Bint Beef" alt="Bint Beef" />
                                        @endforeach

                                    </div>

                                </div>

                                <div class="content-product-right col-sm-6 col-xs-12">
                                    <div class="title-product">
                                        <h1>Bint Beef </h1>
                                    </div>
                                    <!-- Review ---->
                                    <div class="box-review form-group">
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>
                                        <a class="reviews_button" href="quickview.php.html" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews </a>
                                    </div>

                                    <div class="product-label form-group">
                                        <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                            <span class="price-new" itemprop="price">£{{$product->price}}</span>
                                        </div>
                                        <div class="stock"><span>Availability: </span> <span class="status-stock">In Stock </span></div>
                                    </div>



                                    <div id="product">
                                        <h4>Available Options </h4>


                                        <div class="box-checkbox form-group required">
                                            <label class="control-label">Checkbox </label>
                                            <div id="input-option232">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="option[232][]" value="36" /> Checkbox 1 (+$12.00) </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="option[232][]" value="37" /> Checkbox 2 (+$36.00) </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="option[232][]" value="38" /> Checkbox 3 (+$24.00) </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="option[232][]" value="39" /> Checkbox 4 (+$48.00) </label>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <!-- end box info product -->

                                </div>
                            </div>
                        </div>


                    </div>

                    <script type="text/javascript">
                        // Cart add remove functions
                        var cart = {
                            'add': function(product_id, quantity) {
                                parent.addProductNotice('Product added to Cart', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3><a href="#">Apple Cinema 30"</a> added to <a href="#">shopping cart</a>!</h3>', 'success');
                            }
                        }

                        var wishlist = {
                            'add': function(product_id) {
                                parent.addProductNotice('Product added to Wishlist', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>You must <a href="#">login</a>  to save <a href="#">Apple Cinema 30"</a> to your <a href="#">wish list</a>!</h3>', 'success');
                            }
                        }
                        var compare = {
                            'add': function(product_id) {
                                parent.addProductNotice('Product added to compare', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>Success: You have added <a href="#">Apple Cinema 30"</a> to your <a href="#">product comparison</a>!</h3>', 'success');
                            }
                        }
                    </script>


                </div>


            </div>
            <!--Middle Part End-->
        </div>
        <!-- //Main Container -->

        <style type="text/css">
            #wrapper {
                box-shadow: none;
            }

            #wrapper>*:not(.main-container) {
                display: none;
            }

            #content {
                margin: 0
            }

            .container {
                width: 100%;
            }

            .product-info .product-view,
            .left-content-product,
            .box-info-product {
                margin: 0;
            }

            .left-content-product .content-product-right .box-info-product .cart input {
                padding: 12px 16px;
            }

            .left-content-product .content-product-right .box-info-product .add-to-links {
                width: auto;
                float: none;
                margin-top: 0px;
                clear: none;
            }

            .add-to-links ul li {
                margin: 0;
            }
        </style>
    </div>

    <!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{asset('js')}}/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/themejs/libs.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/jquery-ui/jquery-ui.min.js"></script>


    <!-- Theme files
============================================ -->


    <script type="text/javascript" src="{{asset('js')}}/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/themejs/addtocart.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/themejs/application.js"></script>

</body>

</html>
