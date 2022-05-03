<x-app-layout :currency="$currency">
    <div class="content">
        <div class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs-main">
                    {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('categories',$categories) }}
                </div>
            </div>
        </div>
        <!--prdt-starts-->
        <div class="prdt">
            <div class="container">
                <div class="prdt-top">
                    @if(count($products))
                        <div class="col-md-9 prdt-left">
                            @for($i=0;$i<count($products);$i++)
                                <div class="product-one">
                                    @foreach($products[$i] as $product)
                                        <div class="col-md-4 product-left p-left">
                                            <div class="product-main simpleCart_shelfItem">
                                                <a href="{{ route('product.alias',['alias' => $product->alias]) }}" class="mask"><img class="img-responsive zoom-img"                                                   src="{{ asset("assets/images/{$product->img}") }}" alt="" /></a>
                                                <div class="product-bottom">
                                                    <h3>{{ $product->title }}</h3>
                                                    <p>Explore Now</p>
                                                    <h4>
                                                        <a data-id="{{ $product->id }}" class="add-to-cart-link" href="cart/add?id={{$product->id}}"><i></i></a> <span c                                                               lass=" item_price">@currency_money($product->price,$currency['code'])</span>
                                                        @if($product->old_price)
                                                            <small><del>@currency_money($product->old_price,$currency['code'])</del></small>
                                                        @endif
                                                    </h4>
                                                </div>
                                                @if($product->old_price)
                                                    <div class="srch">
                                                        <span>{{'A discount : ' .round((($product->old_price-$product->price)/$product->old_price)*100) }}%</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="clearfix"></div>
                                </div>
                            @endfor
                        </div>
                    @endif
                    <div class="col-md-3 prdt-right">
                        <div class="w_sidebar">
                                {{ dump(App\Facades\Filter::getGroups()) }}
                            {{--                        <section  class="sky-form">--}}
                            {{--                            <h4>Catogories</h4>--}}
                            {{--                            <div class="row1 scroll-pane">--}}
                            {{--                                <div class="col col-4">--}}
                            {{--                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Accessories</label>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col col-4">--}}
                            {{--                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Women Watches</label>--}}
                            {{--                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kids Watches</label>--}}
                            {{--                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Men Watches</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </section>--}}

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--product-end-->
    </div>

</x-app-layout>
