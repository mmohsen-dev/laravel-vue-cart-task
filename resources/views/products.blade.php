@extends('layouts.app')
@section('content')

<!-- Main Container  -->
<div class="main-container container">

    <div class="row">

        <!--Middle Part Start-->
        <div id="content" class="col-md-12 col-sm-12">
            <div class="products-category">


                <!--Content Top -->
                <div class="module latest-product titleLine">
                    <h3 class="modtitle">Filter </h3>
                    <div class="modcontent ">
                        <form action="{{ route('products') }}" method="get" enctype="multipart/form-data">

                            <div class="table_layout filter-row">

                                <div class="table_row">
                                    <!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
                                    <div class="table_cell" style="z-index: 103;">
                                        <legend>Search</legend>
                                        <input class="form-control" type="text" value="{{$filters['search']}}" size="30" autocomplete="off" placeholder="Search" name="search">
                                    </div>
                                    <!--/ .table_cell -->
                                    <!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                    <div class="table_cell">
                                        <fieldset>
                                            <legend>Sub Category</legend>
                                            <ul class="checkboxes_list">
                                                @foreach ($categories as $category)
                                                <li>
                                                    <input type="checkbox" {{ in_array($category->id, $filters['category_ids'])  ? 'checked': '' }} value="{{$category->id}}" name="category_ids[]" id="category-{{$category->id}}">
                                                    <label for="category-{{$category->id}}">{{$category->name}}</label>
                                                </li>
                                                @endforeach

                                            </ul>

                                        </fieldset>

                                    </div>


                                    <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                                </div>
                                <!--/ .table_row -->
                                <footer class="bottom_box">
                                    <div class="buttons_row">
                                        <button type="submit" class="button_grey button_submit">Search</button>
                                        <button type="reset" class="button_grey ">Reset</button>
                                    </div>
                                </footer>
                            </div>
                            <!--/ .table_layout -->



                        </form>
                    </div>

                </div>

                <!--Content Top End -->


                <!-- Filters -->
                <div class="product-filter filters-panel">
                    <div class="row">
                        <div class="col-md-2 visible-lg">
                            <div class="view-mode">
                                <div class="list-view">
                                    <button class="btn btn-default grid " data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                    <button class="btn btn-default list active" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //end Filters -->

                <!--changed listings-->
                <div class="products-list row list">
                    @foreach ($products as $product)

                    <div class="product-layout col-md-3 col-sm-4 col-xs-12 ">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container lazy second_img ">
                                    <img data-src="{{url('image')}}/products/{{$product->img}}" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Apple Cinema 30&quot;" class="img-responsive" />
                                </div>
                                <!--full quick view block-->
                                <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="{{ route('product',$product->id)}}"> Quickview</a>
                                <!--end full quick view block-->
                            </div>


                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="product.html">{{ $product->name }}&quot;</a></h4>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">£{{ $product->price }}</span>
                                    </div>
                                    <div class="description item-desc hidden">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                                            Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                    </div>
                                </div>

                                <div class="button-group">
                                    <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" @click="addToCart({{ $product->id }})"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
                                </div>
                            </div>
                            <!-- right block -->

                        </div>
                    </div>

                    @endforeach

                </div>

                {{ $products->links() }}
                <!--// End Changed listings-->

            </div>

        </div>



    </div>
    <!--Middle Part End-->
</div>
<!-- //Main Container -->

@endsection

@push('scripts')
<script type="text/javascript">
    // Check if Cookie exists
    if ($.cookie('display')) {
        view = $.cookie('display');
    } else {
        view = 'list';
    }
    if (view) display(view);
    //-->
</script>

@endpush
