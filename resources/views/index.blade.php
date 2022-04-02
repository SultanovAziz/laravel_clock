@extends('layout.layout')


@section('content')
        @if($brands)
            <!--about-starts-->
            <div class="about">
                <div class="container">
                    <div class="about-top grid-1">
                        @foreach($brands as $brand)
                            <div class="col-md-4 about-left">
                                <figure class="effect-bubba">
                                    <img class="img-responsive" src="{{ asset("assets/images/{$brand->img}") }}" alt=""/>
                                    <figcaption>
                                        <h2>{{ $brand->title }}</h2>
                                        <p>{{ $brand->description }}</p>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        <!--about-end-->
        @endif
        @if ($hits)
            <!--product-starts-->
            <div class="product">
                <div class="container">
                    <div class="product-top">
                        @for($i=0;$i<count($hits);$i++)
                            <div class="product-one">
                                @foreach($hits[$i] as $hit)
                                    <div class="col-md-3 product-left">
                                        <div class="product-main simpleCart_shelfItem">
                                            <a href="product/{{$hit->alias}}" class="mask"><img class="img-responsive zoom-img" src="{{asset("assets/images/{$hit->img}")}}" alt="" /></a>
                                            <div class="product-bottom">
                                                <h3><a href="product/{{ $hit->alias }}">{{ $hit->title }}</a></h3>
                                                <p>Explore Now</p>

                                                <h4>
                                                    <a data-id="<{{ $hit->id }}" class="add-to-cart-link" href="cart/add?id={{$hit->id}}"><i></i></a> <span class=" item_price">{{ $hit->price }}</span>
                                                    @if($hit->old_price)
                                                        <small><del>{{ $hit->old_price }}</del></small>
                                                     @endif
                                                </h4>
                                            </div>
                                            @if($hit->old_price)
                                                <div class="srch">
                                                    <span>{{'A discount : ' .round((($hit->old_price-$hit->price)/$hit->old_price)*100) }}%</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            <div class="clearfix"></div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
            <!--product-end-->
    @endif
@endsection
