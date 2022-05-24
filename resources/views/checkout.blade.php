@extends('layouts.app')
@section('content')
<!-- Main Container  -->
<div class="main-container container">


    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h2 class="title">Checkout</h2>
            <div class="so-onepagecheckout ">

                <div class="col-right col-sm-12">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td class="text-center">Image</td>
                                                    <td class="text-left">Product Name</td>
                                                    <td class="text-left">Quantity</td>
                                                    <td class="text-right">Unit Price</td>
                                                    <td class="text-right">Total</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php $total = 0; ?>
                                                    @foreach ($cartDetails['cartItems'] as $item)
                                                    <td class="text-center"><img width="60px" src="{{$item['img']}}" alt="{{$item['name']}}" title="{{$item['name']}}" class="img-thumbnail"></td>

                                                    <td class="text-left">{{$item['name']}}</td>
                                                    <td class="text-left">{{$item['quantity']}}</td>
                                                    <td class="text-right">{{$item['price']}}</td>
                                                    <td class="text-right">{{$item['item_total_price']}}</td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                                    <td class="text-right">{{ $cartDetails['total'] }}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
                                </div>
                                <form action="{{ route('checkout') }}" method="post" enctype="multipart/form-data">

                                    @csrf
                                    <div class="panel-body">
                                        <textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
                                        <br>
                                        <label class="control-label" for="confirm_agree">
                                            <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                                            <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
                                        <div class="buttons">
                                            <div class="pull-right">
                                            <button type="submit" class="button_grey button_submit">checkout</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Middle Part End -->

</div>
</div>

<!-- //Main Container -->
@endsection
