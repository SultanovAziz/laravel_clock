<!DOCTYPE html>
<html>
<head>
    <title>{{ __('Home') }}</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<x-header.top>
    <x-header.top.header-left class="drop">

        <x-select id="currency">
            <x-currency :currency="$currency"/>
        </x-select>

        <x-select class="drop">
            <x-option class="label"> {{ __('English') }}</x-option>
            <x-option> {{ __('French') }}</x-option>
            <x-option> {{ __('German') }}</x-option>
        </x-select>

    </x-header.top.header-left>

    <x-header.top.header-left class="cart box_1">
        <x-shop-link :href="route('cart.show')">
            <div class="total">
                <img src="{{ asset('assets/images/cart-1.png') }}" alt="">
                <x-shop-span :cart="[]"/>
            </div>
        </x-shop-link>
    </x-header.top.header-left>

</x-header.top>

<!--start-logo-->
<div class="logo">
    <x-shop-link :href="route('home')"><h1>{{ __('Luxury Watches') }}</h1></x-shop-link>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class="grid"><a href="#">Men</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Shop</h4>
                                        <ul>
                                            <li><a href="products.html">New Arrivals</a></li>
                                            <li><a href="products.html">Blazers</a></li>
                                            <li><a href="products.html">Swem Wear</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Handbags</a></li>
                                            <li><a href="products.html">T-Shirts</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">My Shopping Bag</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Style Zone</h4>
                                        <ul>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">Brands</a></li>
                                            <li><a href="products.html">Coats</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Trousers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="products.html">499 Store</a></li>
                                            <li><a href="products.html">Fastrack</a></li>
                                            <li><a href="products.html">Casio</a></li>
                                            <li><a href="products.html">Fossil</a></li>
                                            <li><a href="products.html">Maxima</a></li>
                                            <li><a href="products.html">Timex</a></li>
                                            <li><a href="products.html">TomTom</a></li>
                                            <li><a href="products.html">Titan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Women</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Shop</h4>
                                        <ul>
                                            <li><a href="products.html">New Arrivals</a></li>
                                            <li><a href="products.html">Blazers</a></li>
                                            <li><a href="products.html">Swem Wear</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Handbags</a></li>
                                            <li><a href="products.html">T-Shirts</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">My Shopping Bag</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Style Zone</h4>
                                        <ul>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">Brands</a></li>
                                            <li><a href="products.html">Coats</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Trousers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="products.html">499 Store</a></li>
                                            <li><a href="products.html">Fastrack</a></li>
                                            <li><a href="products.html">Casio</a></li>
                                            <li><a href="products.html">Fossil</a></li>
                                            <li><a href="products.html">Maxima</a></li>
                                            <li><a href="products.html">Timex</a></li>
                                            <li><a href="products.html">TomTom</a></li>
                                            <li><a href="products.html">Titan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Kids</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Shop</h4>
                                        <ul>
                                            <li><a href="products.html">New Arrivals</a></li>
                                            <li><a href="products.html">Blazers</a></li>
                                            <li><a href="products.html">Swem Wear</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Handbags</a></li>
                                            <li><a href="products.html">T-Shirts</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">My Shopping Bag</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Style Zone</h4>
                                        <ul>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">Brands</a></li>
                                            <li><a href="products.html">Coats</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Trousers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="products.html">499 Store</a></li>
                                            <li><a href="products.html">Fastrack</a></li>
                                            <li><a href="products.html">Casio</a></li>
                                            <li><a href="products.html">Fossil</a></li>
                                            <li><a href="products.html">Maxima</a></li>
                                            <li><a href="products.html">Timex</a></li>
                                            <li><a href="products.html">TomTom</a></li>
                                            <li><a href="products.html">Titan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="typo.html">Blog</a>
                        </li>
                        <li class="grid"><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--bottom-header-->

<div class="content">
    {{ $slot }}
</div>

<!--information-starts-->
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Information</h3>
                <ul>
                    <li><a href="#"><p>Specials</p></a></li>
                    <li><a href="#"><p>New Products</p></a></li>
                    <li><a href="#"><p>Our Stores</p></a></li>
                    <li><a href="contact.html"><p>Contact Us</p></a></li>
                    <li><a href="#"><p>Top Sellers</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>My Account</h3>
                <ul>
                    <li><a href="account.html"><p>My Account</p></a></li>
                    <li><a href="#"><p>My Credit slips</p></a></li>
                    <li><a href="#"><p>My Merchandise returns</p></a></li>
                    <li><a href="#"><p>My Personal info</p></a></li>
                    <li><a href="#"><p>My Addresses</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Store Information</h3>
                <h4>The company name,
                    <span>Lorem ipsum dolor,</span>
                    Glasglow Dr 40 Fe 72.</h4>
                <h5>+955 123 4567</h5>
                <p><a href="mailto:example@email.com">contact@example.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->
<x-footer.index>
    <x-footer.content class="footer-left">
        <form >
            <x-input type="text" value="Enter Your Email" onfocus="this.value = '';"
                     onblur="if (this.value == '') {this.value = 'Enter Your Email';}"/>
            <x-input type="submit" value="Subscribe" />
        </form>
    </x-footer.content>
    <x-footer.content class="footer-right">
       <p>© 2015 Luxury Watches. All Rights Reserved | Design by <x-shop-link :href="route('home')"
                                                                                 target="_blank">{{ __('W3layouts') }}</x-shop-link></p>
    </x-footer.content>
</x-footer.index>

<!--script-start-->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<script type="text/javascript">
    $(function () {

        var menu_ul = $('.menu_drop > li > ul'),
            menu_a = $('.menu_drop > li > a');

        menu_ul.hide();

        menu_a.click(function (e) {
            e.preventDefault();
            if (!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true, true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true, true).slideUp('normal');
            }
        });

    });
</script>
<script>
    $('#currency').change(function () {
        //window.location  = 'currency/change?curr=' + $(this).val();
        window.location = "{{ route('currency')}}?curr=" + $(this).val();
    });

</script>
<!--script-end-->
</body>
</html>
