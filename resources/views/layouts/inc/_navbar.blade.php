<!-- TopBar Container  -->
<div class="topbar hidden-xs">
    <div class="container">
        <div class="row">
            <div class="block-policy-top ">
                <div class="policy policy1 col-sm-4 col-xs-12">
                    <div class="policy-inner">
                        <i class="ico-policy"></i>
                        <h4>30 days return</h4>
                        <span>Money back guarantee</span>
                    </div>
                </div>
                <div class="policy policy2 col-sm-4 col-xs-12">
                    <div class="policy-inner">
                        <i class="ico-policy"></i>
                        <h4>free shipping on $30</h4>
                        <span>on all orders over $99</span>
                    </div>
                </div>
                <div class="policy policy3 col-sm-4 col-xs-12">
                    <div class="policy-inner">
                        <i class="ico-policy"></i>
                        <h4>Safe shopping</h4>
                        <span>Save up to 50% now </span>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<!-- //TopBar Container  -->

<!-- Header Container  -->
<header id="header" class="layout-boxed variantleft type_5">

    <!-- Header Top -->
    <div class="header-top compact-hidden">
        <div class="container">
            <div class="row">
                <div class="header-top-left form-inline col-md-6 col-sm-4 col-xs-12 compact-hidden"></div>

                <div class="header-top-right collapsed-block text-right  col-md-6 col-sm-8 col-xs-12 compact-hidden">
                    <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
                    <div class="tabBlock" id="TabBlock-1">
                        <ul class="top-link list-inline">
                            @auth
                            <li class="checkout"><a href="{{ route('checkout-view') }}" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square-o"></i> Checkout</a></li>
                            <li class="logout"><a href="{{ route('logout') }}" class="top-link-checkout" title="logout"><i class="fa fa-lock"></i>Logout</a></li>
                            @endauth
                            @guest
                            <li class="login"><a href="{{ route('login') }}" class="top-link-checkout" title="login"><i class="fa fa-lock"></i>login</a></li>

                            @endguest
                            <li class="shopping_cart">

                                <!--Cart-->
                                <div id="cart" class=" btn-group btn-shopping-cart">
                                    <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown" @click="getCart()">
                                        <div class="shopcart">
                                            <span class="handle pull-left"></span>
                                            <p class="text-shopping-cart cart-total-full">@{{ counter }}</p>
                                        </div>
                                    </a>

                                    <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

                                        <li>
                                            <table class="table table-striped">
                                                <tbody id="cart-products-table">
                                                    <tr v-for="item in cartItems">
                                                        <td class="text-center" style="width:70px">
                                                            <a href=""> <img :src="item.img" style="width:70px"  :alt="item.name" :title="item.name" class="preview"> </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name" href="">@{{ item.name }}</a> </td>
                                                        <td class="text-center"> x@{{ item.quantity }} </td>
                                                        <td class="text-center"> $@{{ item.price }} </td>
                                                        <td class="text-right"><a @click="cartRemove(item.id);" class="fa fa-times fa-delete"></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <div>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"><strong>Total</strong></td>
                                                            <td class="text-right" id="cart-total">@{{ totalCheckout }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class="text-right"> &nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="{{ route('checkout-view') }}"><i class="fa fa-share"></i>Checkout</a> </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--//cart-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Header Top -->

    <!-- Header center -->
    <div class="header-center left">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="navbar-logo col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.html"><img src="{{asset('image')}}/demo/logos/logo_5.png" title="Your Store" alt="Your Store" /></a>
                </div>
                <!-- //end Logo -->

                <!-- Search -->
                <div id="sosearchpro" class="col-md-offset-1 col-md-3 col-sm-12 search-pro">
                    <form method="GET" action="index.html">
                        <div id="search0" class="search input-group">
                            <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Enter keywords to search..." name="search">
                            <span class="input-group-btn">
                                <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                        <input type="hidden" name="route" value="product/search" />
                    </form>
                </div>
                <!-- //end Search -->

                <!-- Secondary menu -->


            </div>

        </div>
    </div>
    <!-- //Header center -->

    <!-- Header Bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">


                <!-- Main menu -->
                <div class="megamenu-hori col-xs-12 ">
                    <div class="responsive so-megamenu ">
                        <nav class="navbar-default">
                            <div class=" container-megamenu  horizontal">
                                <div class="navbar-header">
                                    <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button> Navigation
                                </div>

                                <div class="megamenu-wrapper">
                                    <span id="remove-megamenu" class="fa fa-times"></span>
                                    <div class="megamenu-pattern">
                                        <div class="container">
                                            <ul class="megamenu " data-transition="slide" data-animationtime="250">

                                                <li class="with-sub-menu hover">
                                                    <p class="close-menu"></p>
                                                    <a href="{{ route('products') }}" class="clearfix">
                                                        <strong>Products</strong>
                                                        <span class="label"></span>
                                                    </a>

                                                </li>





                                                <li class="pull-right"><a href="#" title="Special Offer!"><strong>Special Offer!</strong></a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- //end Main menu -->

            </div>
        </div>

    </div>

    <!-- Navbar switcher -->
    <!-- //end Navbar switcher -->
</header>
<!-- //Header Container  -->
