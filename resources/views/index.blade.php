@extends('layout.layout')


@section('content')
        <!--about-starts-->
        <div class="about">
            <div class="container">
                <div class="about-top grid-1">
                    <div class="col-md-4 about-left">
                        <figure class="effect-bubba">
                            <img class="img-responsive" src="{{asset('assets/images/abt-1.jpg')}}" alt=""/>
                            <figcaption>
                                <h2>Nulla maximus nunc</h2>
                                <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--about-end-->
        <!--product-starts-->
        <div class="product">
            <div class="container">
                <div class="product-top">
                    <div class="product-one">
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('assets/images/p-1.png')}}" alt="" /></a>
                                <div class="product-bottom">
                                    <h3>Smart Watches</h3>
                                    <p>Explore Now</p>
                                    <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                                </div>
                                <div class="srch">
                                    <span>-50%</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
        <!--product-end-->
@endsection
