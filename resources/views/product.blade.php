<!DOCTYPE html>
<html lang="it">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{  asset('images/fevicon.png') }}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>AnnaShop</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{  asset('css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="{{  asset('css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{  asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{  asset('css/responsive.css') }}" rel="stylesheet" />
  @livewireStyles
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : annashopstore1@gmail.com
                </span>
              </a>
            </div>
            <livewire:search /> 
            <div class="user_option_box">
              <div class="cart cart box_1"> 
                <form action="#" method="post" class="last"> 
                  <input type="hidden" name="cmd" value="_cart" />
                  <input type="hidden" name="display" value="1" />
                  <button class="cart-link" type="submit" name="submit" value=""><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span>
                      Cart
                    </span></button>
                </form>   
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                AnnaShop
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}"> About</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="product.html">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('why') }}">Why Us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{  asset('images/p1.png') }}" alt="">
              <form action="#" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="add" value="1" /> 
                <input type="hidden" name="w3ls_item" value="Product Name" /> 
                <input type="hidden" name="amount" value="300" />   
                <button type="submit" class="w3ls-cart add_cart_btn">Add to cart</button>
            </form>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{  asset('images/p2.png') }}" alt="">
              <form action="#" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="add" value="1" /> 
                <input type="hidden" name="w3ls_item" value="Product Name" /> 
                <input type="hidden" name="amount" value="300" />   
                <button type="submit" class="w3ls-cart add_cart_btn">Add to cart</button>
            </form>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{  asset('images/p3.png') }}" alt="">
              <form action="#" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="add" value="1" /> 
                <input type="hidden" name="w3ls_item" value="Product Name" /> 
                <input type="hidden" name="amount" value="300" />   
                <button type="submit" class="w3ls-cart add_cart_btn">Add to cart</button>
            </form>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{  asset('images/p4.png') }}" alt="">
              <form action="#" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="add" value="1" /> 
                <input type="hidden" name="w3ls_item" value="Product Name" /> 
                <input type="hidden" name="amount" value="300" />   
                <button type="submit" class="w3ls-cart add_cart_btn">Add to cart</button>
            </form>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{  asset('images/p5.png') }}" alt="">
             <form action="#" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="add" value="1" /> 
                <input type="hidden" name="w3ls_item" value="Product Name" /> 
                <input type="hidden" name="amount" value="300" />   
                <button type="submit" class="w3ls-cart add_cart_btn">Add to cart</button>
            </form>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{  asset('images/p6.png') }}" alt="">
              <form action="#" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="add" value="1" /> 
                <input type="hidden" name="w3ls_item" value="Product Name" /> 
                <input type="hidden" name="amount" value="300" />   
                <button type="submit" class="w3ls-cart add_cart_btn">Add to cart</button>
            </form>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{  asset('images/p7.png') }}" alt="">
              <form action="#" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="add" value="1" /> 
                <input type="hidden" name="w3ls_item" value="Product Name" /> 
                <input type="hidden" name="amount" value="300" />   
                <button type="submit" class="w3ls-cart add_cart_btn">Add to cart</button>
            </form>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{  asset('images/p8.png') }}" alt="">
              <form action="#" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="add" value="1" /> 
                <input type="hidden" name="w3ls_item" value="Product Name" /> 
                <input type="hidden" name="amount" value="300" />   
                <button type="submit" class="w3ls-cart add_cart_btn">Add to cart</button>
            </form>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{  asset('images/p9.png') }}" alt="">
              <form action="#" method="post">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="add" value="1" /> 
                <input type="hidden" name="w3ls_item" value="Product Name" /> 
                <input type="hidden" name="amount" value="300" />   
                <button type="submit" class="w3ls-cart add_cart_btn">Add to cart</button>
            </form>
            </div>
            <div class="detail-box">
              <h5>
                Product Name
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> 300
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn_box">
        <a href="" class="view_more-link">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end product section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <h5>
              <a href="" class="navbar-brand">
                <span>
                  AnnaShop
                </span>
              </a>
            </h5>
            <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              Address
            </p>
            <p>
              <i class="fa fa-phone" aria-hidden="true"></i>
              +01 1234567890
            </p>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              annashopstore1@gmail.com
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="index.html">
                  Home
                </a>
              </li>
              <li>
                <a href="{{ route('about') }}">
                  About
                </a>
              </li>
              <li>
                <a href="{{ route('electronique') }}">
                  Products
                </a>
              </li>
              <li>
                <a href="{{ route('why') }}">
                  Why Us
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_form ">
            <h5>
              Notiziario
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Contattaci
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
  @livewireScripts
  <!-- jQery -->
  <script src="{{  asset('js/jquery-3.4.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{  asset('js/bootstrap.js') }}"></script>
  <!-- custom js -->
  <script src="{{  asset('js/custom.js') }}"></script>

  <script src="{{  asset('js/minicart.js') }}"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script> 
</body>

</html>