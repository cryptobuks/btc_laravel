@include('common.header')
 <!-- Slider Starts -->
            <div class="carousel slide carousel-fade" data-ride="carousel" id="main-slide">
                <!-- Indicators Starts -->
                <ol class="carousel-indicators visible-lg visible-md">
                    <li class="active" data-slide-to="0" data-target="#main-slide">&nbsp;</li>
                    <li data-slide-to="1" data-target="#main-slide">&nbsp;</li>
                    <li data-slide-to="2" data-target="#main-slide">&nbsp;</li>
                </ol>
                <!-- Indicators Ends -->
                <!-- Carousel Inner Starts -->
                <div class="carousel-inner">
			  	@php $i = 0 @endphp
                @foreach ($sliders as $slider)
				@php $i++
				
				
				 @endphp
                    <div class="item bg-parallax @if($i == '1')
				active  
				@endif  item-{{ $i }}" style="background-image: url({{asset('timages/'.$slider->timage)}});">
                        <div class="slider-content">
                            <div class="container">
                                <div class="slider-text text-center">
                                    <h3 class="slide-title"><span style="color:#ffff33;">{{$slider->detail}}</span></h3>
                                    <p><a class="slider btn btn-primary" href="{{$slider->buttonurl}}">{{$slider->buttontext}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
 				@endforeach
                    
                        <a class="left carousel-control" data-slide="prev" href="#main-slide"><span><i class="fa fa-angle-left"></i></span></a>
                        <a class="right carousel-control" data-slide="next" href="#main-slide"> <span><i class="fa fa-angle-right"></i></span> </a> 
                    <!-- Carousel Item Ends -->
                </div>
                <!-- Carousel Inner Ends -->
                <!-- Carousel Controlers Starts -->
                <!-- Carousel Controlers Ends -->
                <!-- Slider Ends -->

                <!-- Features Section Starts -->
                <section class="features">
                    <div class="container">
                        <div class="row features-row">
                            <!-- Feature Box Starts -->
                            <div class="feature-box col-md-4 col-sm-12">
                                <span class="feature-icon">
                                    <img alt="download bitcoin" src="http://yuyuan.yuyuan.btcgenuis.com/images/bit.png" />
                                </span>
                                <div class="feature-box-content">
                                    <h3>Affordable Low Cost plans </h3>
                                    <p>
                                        <span style="color: rgb(74, 74, 73); font-family: Signika, sans-serif; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);"></span>
                                        <span style="color: rgb(74, 74, 73); font-family: Signika, sans-serif; font-size: 14px; text-align: center; background-color: rgb(249, 249, 249);"></span>
                                    </p>
                                </div>
                            </div>
                            <!-- Feature Box Ends -->
                            <!-- Feature Box Starts -->
                            <div class="feature-box two col-md-4 col-sm-12">
                                <span class="feature-icon">
                                    <img alt="add bitcoins" src="http://yuyuan.yuyuan.btcgenuis.com/images/lit.png" />
                                </span>
                                <div class="feature-box-content">
                                    <h3>Fully automated System</h3>
                                    
                                </div>
                            </div>
                            <!-- Feature Box Ends -->
                            <!-- Feature Box Starts -->
                            <div class="feature-box three col-md-4 col-sm-12">
                                <span class="feature-icon">
                                    <img alt="buy and sell bitcoins" src="http://yuyuan.yuyuan.btcgenuis.com/images/eth.png" />
                                </span>
                                <div class="feature-box-content">
                                    <h3>Instant Withdrawals!</h3>
                                </div>
                            </div>
                            <!-- Feature Box Ends -->
                        </div>
                    </div>
                </section>
                <!-- Features Section Ends -->

                <!-- About Section Starts -->
                <section class="about-us">
                    <div class="container">
                        <!-- Section Title Starts -->
                        <div class="row text-center">
                            <h2 class="title-head"><span style="color:#ffff33;">Tartgeted</span>
                                <span style="color:#ff9900;">Projects</span>
                            </h2>
                            <div class="title-head-subtitle">
                                <p>Home Financing</p>  
                            <div class="title-head-subtitle">
                                <p>Home Furnishing</p> 
                            <div class="title-head-subtitle">
                                <p>Auto mobile Financing</p>
                            <div class="title-head-subtitle">
                                <p>Business Financing</p>
                            <div class="title-head-subtitle">
                                <p>Education Financing
                        
                        <!-- Section Title Ends -->
                        <!-- Section Content Starts -->
                        <div class="row about-content">
                            <!-- Image Starts -->
                            <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                               <img alt="about us" class="img-responsive img-about-us"
                                    src="http://yuyuan.yuyuan.btcgenuis.com/images/home.png" />
                            </div>
                            <!-- Image Ends -->
                            <!-- Content Starts -->
                            <div class="col-sm-12 col-md-7 col-lg-6">
                                
                            


<div class="tab-content">
<div class="tab-pane fade in active" id="menu1">
</div>

<div class="tab-pane fade" id="menu2">
</div>

<div class="tab-pane fade" id="menu3">
</div>
</div>
</div>
                            <!-- Content Ends -->
                        </div>
                        <!-- Section Content Ends -->
                    </div>
                </section>
                <!-- About Section Ends -->

                <!-- Features and Video Section Starts -->
                <section class>
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="row text-center">
                            <h2 class="title-head">
                                <span style="color:#ffff33;">Our</span>
                                <span style="color:#D3D3D3;">Incentives</span>
                            </h2>
                            <!-- Features Starts -->
                            <div class="col-md-8 ts-padding img-block-left">
                                <div class="gap-20">&nbsp;</div>
                                <div class="row">
                                    <!-- Feature Starts -->
                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                        <div class="feature text-center">
                                            <span class="feature-icon">
                                                <img alt="strong security" src="http://yuyuan.yuyuan.btcgenuis.com/images/ipgroc.jpg" />
                                            </span>
                                            <h3 class="feature-title">I phone and Grocery</h3>
                                            <p>Complete level 5 of bitcoin matrix plus cycle litecoin matrix, get iphone and Grocery,<br />
                                                valued at $200</p>
                                        </div>
                                    </div>
                                    <!-- Feature Ends -->
                                    <div class="gap-20-mobile"></div>
                                    <!-- Feature Starts -->
                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                        <div class="feature text-center">
                                            <span class="feature-icon">
                                                <img alt="world coverage" src="http://yuyuan.yuyuan.btcgenuis.com/images/tbsb.png" />
                                            </span>
                                            <h3 class="feature-title">Tablet and schol books</h3>
                                            <p>Complete level 6 of Bitcoin matrix and get a tablet plus school books for your children<br />
                                                valued at $400</p>
                                        </div>
                                    </div>
                                    <!-- Feature Ends -->
                                </div>
                                <div class="gap-20"></div>
                                <div class="row">
                                    <!-- Feature Starts -->
                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                        <div class="feature text-center">
                                            <span class="feature-icon">
                                                <img alt="payment options" src="http://yuyuan.yuyuan.btcgenuis.com/images/lapsch.jpg" />
                                            </span>
                                            <h3 class="feature-title">Laptop and school uniform</h3>
                                            <p>Complete level 7 and get a laptop plus School unifrom for your children</br>valued at $700 </p>
                                        </div>
                                    </div>
                                    <!-- Feature Ends -->
                                    <div class="gap-20-mobile"></div>
                                    <!-- Feature Starts -->
                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                        <div class="feature text-center">
                                            <span class="feature-icon">
                                                <img alt="mobile app" src="http://yuyuan.yuyuan.btcgenuis.com/images/furnied.png" />
                                            </span>
                                            <h3 class="feature-title">Furniture and School Fees</h3>
                                            <p>Complete level 8 of bitcoin matrix and get  furniture and school fees for your children<br />
                                            &nbsp;valued at $2500</p>
                                        </div>
                                    </div>
                                    <!-- Feature Ends -->
                                </div>
                                <div class="gap-20"></div>
                                <div class="row">
                                    <!-- Feature Starts -->
                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                        <div class="feature text-center">
                                            <span class="feature-icon">
                                                <img alt="cost efficiency" src="http://yuyuan.yuyuan.btcgenuis.com/images/wrangler.jpg" />
                                            </span>
                                            <h3 class="feature-title">Dream Car</h3>
                                            <p>complete level 9 of bitcoin matrix and get a car worth $10.000</p>
                                        </div>
                                    </div>
                                    <!-- Feature Ends -->
                                    <div class="gap-20-mobile">&nbsp;</div>
                                    <!-- Feature Starts -->
                                    <div class="col-sm-6 col-md-6 col-xs-12">
                                        <div class="feature text-center">
                                            <span class="feature-icon">
                                                <img alt="high liquidity" src="http://yuyuan.yuyuan.btcgenuis.com/images/hous.png" />
                                            </span>
                                            <h3 class="feature-title">Dream House</h3>
                                            <p>Complete level 10 of bitcoin matrix and get a villa worth $100,000 plus a luxurious trip worth $5000</p>
                                        </div>
                                    </div>
                                    <!-- Feature Ends -->
                                </div>
                            </div>
                            <!-- Features Ends -->
                            <!-- Video Starts -->
                            <div class="col-md-4 ts-padding bg-image-1">
                                <!--<div>-->
                                <!--    <div class="text-center">-->
                                      
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                            <!-- Video Ends -->
                        </div>
                    </div>
                </section>
                <!-- Features and Video Section Ends -->

                <!-- Pricing Starts -->
                <section class="pricing" id="pricing1">
                    <div class="container">
                        <!-- Section Title Starts -->
                        <div class="row text-center">
                            <h2 class="title-head">
                                <span style="color:#ffff33;">Matrix</span>
                                <span style="color:#D3D3D3;">Plans</span>
                            </h2>
                            <div class="title-head-subtitle">
                                <p>Everyone starts at Bitcoin Matrix!</p>
                            </div>
                        </div>
                        <!-- Section Title Ends -->
                        <!-- Section Content Starts -->
                        <div class="row pricing-tables-content">
                            <div class="pricing-container">
                                <!-- Pricing Switcher Starts -->
                                <!--<div class="pricing-switcher">-->
                                <!--    <p>-->
                                   
                                <!--</div>-->
                                <!-- Pricing Switcher Ends -->
                                <!-- Pricing Tables Starts -->

                                <ul class="pricing-list bounce-invert">
                                    <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                        <ul class="pricing-wrapper">
                                            <!-- Buy Pricing Table #1 Starts -->
                                            <li class="is-visible" data-type="buy">
                                                <header class="pricing-header">
                                                    <h2>BITCOIN MATRIX<span></span></h2>
                                                    <div class="price">
                                                        <span class="currency">
                                                            <i class="fa fa-dollar"></i>
                                                        </span>
                                                        <span class="value">0.20</span>
                                                    </div>
                                                </header>
                                                <footer class="pricing-footer">
                                                    <a class="btn btn-primary" href="#">withdraw Bitcoin</a>
                                                </footer>
                                            </li>
                                            <!-- Buy Pricing Table #1 Ends -->
                                            <!-- Sell Pricing Table #1 Starts -->
                                            <li class="is-hidden" data-type="sell">
                                                <header class="pricing-header">
                                                    <h2>Silver<span></span></h2>
                                                    <div class="price">
                                                        <span class="currency">
                                                            <i class="fa fa-bitcoin"></i>
                                                        </span>
                                                        <span class="value">0.04</span>
                                                    </div>
                                                </header>
                                                <footer class="pricing-footer">
                                                    <a class="btn btn-primary" href="#">VIEW PLAN</a>
                                                </footer>
                                            </li>
                                            <!-- Sell Pricing Table #1 Ends -->
                                        </ul>
                                    </li>
                                    <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                        <ul class="pricing-wrapper">
                                            <!-- Buy Pricing Table #2 Starts -->
                                            <li class="is-visible" data-type="buy">
                                                <header class="pricing-header">
                                                    <h2>LITECOIN MATRIX<span></span></h2>
                                                    <div class="price">
                                                        <span class="currency"><i class="fa fa-dollar"></i></span>
                                                        <span class="value">90.00</span>
                                                    </div>
                                                </header>
                                                <footer class="pricing-footer"><a class="btn btn-primary" href="#">Withdraw Litecoin</a></footer>
                                            </li>
                                            <!-- Buy Pricing Table #2 Ends -->
                                            <!-- Sell Pricing Table #2 Starts -->
                                            <li class="is-hidden" data-type="sell">
                                                <header class="pricing-header">
                                                    <h2>Gold <span>5TH/s </span></h2>
                                                    <div class="price">
                                                        <span class="currency"><i class="fa fa-dollar"></i></span>
                                                        <span class="value">50.00</span>
                                                    </div>
                                                </header>
                                                <footer class="pricing-footer">
                                                    <a class="btn btn-primary" href="#">Withdraw Litecoin</a></footer>
                                            </li>
                                            <!-- Sell Pricing Table #2 Ends -->
                                        </ul>
                                    </li>
                                    <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                        <ul class="pricing-wrapper">
                                            <!-- Buy Pricing Table #3 Starts -->
                                            <li class="is-visible" data-type="buy">
                                                <header class="pricing-header">
                                                    <h2>ETHEREUM MATRIX <span></span></h2>
                                                    <div class="price">
                                                        <span class="currency"><i class="fa fa-dollar"></i></span>
                                                        <span class="value">50.00</span>
                                                    </div>
                                                </header>
                                                <footer class="pricing-footer">
                                                    <a class="btn btn-primary" href="#">Withdraw Ethereum</a></footer>
                                            </li>
                                            <!-- Buy Pricing Table #3 Ends -->
                                            <!-- Yearlt Pricing Table #3 Starts -->
                                            <li class="is-hidden" data-type="sell">
                                                <header class="pricing-header">
                                                    <h2><span></span></h2>
                                                    <div class="price">
                                                        <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                                        <span class="value">50.00</span>
                                                    </div>
                                                </header>
                                                <footer class="pricing-footer">
                                                    <a class="btn btn-primary" href="#">PURCHASE PLAN</a></footer>
                                            </li>
                                            <!-- Sell Pricing Table #3 Ends -->
                                        </ul>
                                    </li>
                                    
                                            <!-- Sell Pricing Table #4 Ends -->
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bitcoin-calculator-section">
                    <div class="container">
                        <div class="row">
                            <!-- Section Heading Starts -->
                            <div class="col-md-12">
                                <h2 class="title-head text-center"><span style="color:#ffff33;">Cryptocurrency</span> Converter</h2>
                                <p class="message text-center">Use our converter to calculate  your fees and commisions</p>
                            </div>
                            <!-- Section Heading Ends -->
                            <!-- Bitcoin Calculator Form Starts -->

                            <div class="col-md-12 text-center">
                                <form class="bitcoin-calculator" id="bitcoin-calculator">
                                    <!-- Input #1 Starts -->
                                    <input class="form-input" name="btc-calculator-value" value="1" />
                                    <!-- Input #1 Ends -->
                                    <div class="form-info"><i class="fa fa-bitcoin"></i></div>
                                    <div class="form-equal">=</div>
                                    <!-- Input/Result Starts --> <input class="form-input form-input-result" name="btc-calculator-result" />
                                    <!-- Input/Result Ends -->
                                    <!-- Select Currency Starts -->
                                    <div class="form-wrap">
                                        <select class="form-input select-currency select-primary"
                                            data-dropdown-class="select-primary-dropdown" id="currency-select" name="btc-calculator-currency"></select>
                                        </div>
                                    <!-- Select Currency Ends -->
                                </form>
                                
                            </div>
                            <!-- Bitcoin Calculator Form Ends -->
                        </div>
                    </div>
                </section>
                <!-- Bitcoin Calculator Section Ends -->

                <!-- Team Section Starts -->
                <!-- Quote and Chart Section Ends -->
                <!-- Blog Section Starts -->
                <!-- Blog Section Ends -->
                <!-- Call To Action Section Starts -->

                <section class="call-action-all">
                    <div class="call-action-all-overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <!-- Call To Action Text Starts -->
                                    <div class="action-text">
                                        <h2>Start Funding Your Project</h2>
                                        <p class="lead">Open account and give a donation to someone and you will receive in return!</p>
                                    </div>
                                    <!-- Call To Action Text Ends -->
                                    <!-- Call To Action Button Starts -->
                                    <p class="action-btn"><a class="btn btn-primary" href="#">Register Now</a></p>
                                    <!-- Call To Action Button Ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            // var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            // (function () {
            //     var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            //     s1.async = true;
            //     s1.src = 'https://embed.tawk.to/5c19345082491369ba9ea3b0/default';
            //     s1.charset = 'UTF-8';
            //     s1.setAttribute('crossorigin', '*');
            //     s0.parentNode.insertBefore(s1, s0);
            // })();
        </script>
        <!--End of Tawk.to Script-->
@include('common.footer')