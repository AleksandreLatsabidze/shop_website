<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" href="img/icon/brand.png" type="images/png" />
    <title>Brand Shop</title>
  </head>
  <body>
    <div id="sidebar" class="sidebar">
      <div id="close" class="close-sidebar">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
      <div class="user-sidebar">
        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        <h3><a href="#">Sign in</a> |<a href="#"> Register</a></h3>
      </div>

      <div class="sidebarshipp">
        <div class="right-menu">
          <form action="">
            <select>
              <option value="1">English,USD</option>
              <option value="2">Georgia,GEL</option>
              <option value="3">Russian,Ruble</option>
            </select>
          </form>
          <div class="shipp-to">
            <span id="shippingbottom"
              >Ship to <img id="mainimgshipp" src="img/flags/germany.png"
            /></span>
            <div id="shippingflag">
              <ul>
                <li>
                  <img class="shippimg" src="img/flags/usa.png" alt="" />
                </li>
                <li>
                  <img
                    class="shippimg"
                    src="img/flags/greatbritain.png"
                    alt=""
                  />
                </li>
                <li>
                  <img class="shippimg" src="img/flags/germany.png" alt="" />
                </li>
                <li>
                  <img class="shippimg" src="img/flags/australia.png" alt="" />
                </li>
                <li>
                  <img class="shippimg" src="img/flags/italy.png" alt="" />
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar-menu">
        <ul>
          <li>
            <a href="#"
              ><span><i class="fa fa-home" aria-hidden="true"></i> </span
              >Home</a
            >
          </li>
          <li>
            <a href="#"
              ><span><i class="fa fa-list" aria-hidden="true"></i> </span
              >Categories</a
            >
          </li>
          <li>
            <a href="#"
              ><span><i class="fa fa-heart-o" aria-hidden="true"></i> </span
              >Favorites</a
            >
          </li>
          <li>
            <a href="#"
              ><span><i class="fa fa-laptop" aria-hidden="true"></i> </span>My
              orders</a
            >
          </li>
        </ul>
      </div>
      <div class="sidebar-menu sidebar-lang">
        <ul>
          <li>
            <a href="#"
              ><span><i class="fa fa-globe" aria-hidden="true"></i> </span
              >English | USD
            </a>
          </li>
          <li>
            <a href="#"
              ><span><i class="fa fa-headphones" aria-hidden="true"></i> </span
              >Contact us</a
            >
          </li>
          <li>
            <a href="#"
              ><span
                ><i class="fa fa-info-circle" aria-hidden="true"> </i> </span
              >About</a
            >
          </li>
        </ul>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li>
            <a href="#"><span> </span>User agreement</a>
          </li>
          <li>
            <a href="#"><span> </span>Partnership</a>
          </li>
          <li>
            <a href="#"><span> </span>Privacy policy</a>
          </li>
        </ul>
      </div>
    </div>
    <div id="sidebar-blur" class="sidebar-blur"></div>
    <header class="header">
      <div class="container">
        <div class="header-flex">
          <div class="brand-div">
            <div id="sidenavbar" class="icon-navbar">
              <img src="img/icon/all_category.png" />
            </div>
            <a href="index.html">
              <span>
                <img src="img/icon/brand.png" />
              </span>
              <img src="img/icon/logo.png" alt=""
            /></a>
          </div>
          <div class="search-div">
            <form action="#">
              <input type="text" placeholder="Search" />
              <select id="my-select">
                <option value="index.html">All Category</option>
                <option value="second-page.html">Mobile accessory</option>
                <option value="pagethree.html">Clothes and wear</option>
                <option value="#">Home interiors</option>
                <option value="#">Computer and tech</option>
                <option value="#">Tools, equipments</option>
                <option value="#">Sports and outdoor</option>
                <option value="#">Animal and pets</option>
                <option value="#">Machinery tools</option>
                <option value="#">More category</option>
              </select>
              <input type="submit" value="Search" />
            </form>
          </div>
          <div class="my-options">
            <div class="my-option-divs">
              <a href="#">
                <span> <img src="img/icon/profile.png" /> </span>
                <h3>Profile</h3>
              </a>
            </div>
            <div class="my-option-divs">
              <a href="#">
                <span>
                  <img src="img/icon/message.png" />
                </span>
                <h3>Message</h3>
              </a>
            </div>
            <div class="my-option-divs">
              <a href="#">
                <span>
                  <img src="img/icon/orders.png" />
                </span>
                <h3>Orders</h3>
              </a>
            </div>
            <div class="my-option-divs">
              <a href="fourpage.html">
                <span>
                  <img src="img/icon/Mycart.png" />
                </span>
                <h3>My cart</h3>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="menu">
        <div class="container">
          <div class="menu-flex">
            <div class="navbar">
              <ul>
                <li>
                  <a href="#"
                    ><img src="img/icon/all_category.png" />All category</a
                  >
                </li>
                <li>
                  <a href="#">Hot offers</a>
                </li>
                <li>
                  <a href="#">Gift boxes</a>
                </li>
                <li>
                  <a href="#">Projects</a>
                </li>
                <li>
                  <a href="#">Menu item</a>
                </li>
                <li>
                  <a href="#">Help</a>
                </li>
              </ul>
            </div>
            <div class="right-menu">
              <form action="">
                <select>
                  <option value="1">English,USD</option>
                  <option value="2">Georgia,GEL</option>
                  <option value="3">Russian,Ruble</option>
                </select>
              </form>
              <div class="shipp-to">
                <span id="shippingbottom"
                  >Ship to <img id="mainimgshipp" src="img/flags/germany.png"
                /></span>
                <div id="shippingflag">
                  <ul>
                    <li>
                      <img class="shippimg" src="img/flags/usa.png" alt="" />
                    </li>
                    <li>
                      <img
                        class="shippimg"
                        src="img/flags/greatbritain.png"
                        alt=""
                      />
                    </li>
                    <li>
                      <img
                        class="shippimg"
                        src="img/flags/germany.png"
                        alt=""
                      />
                    </li>
                    <li>
                      <img
                        class="shippimg"
                        src="img/flags/australia.png"
                        alt=""
                      />
                    </li>
                    <li>
                      <img class="shippimg" src="img/flags/italy.png" alt="" />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="content">
      <div class="container">
        <div class="sect-one">
          <div class="sect-flex">
            <div class="sect-nav">
              <ul>
                <li>
                  <a href="#">Automobiles</a>
                </li>
                <li>
                  <a href="#">Clothes and wear</a>
                </li>
                <li>
                  <a href="#">Home interiors</a>
                </li>
                <li>
                  <a href="#">Computer and tech</a>
                </li>
                <li>
                  <a href="#">Tools, equipments</a>
                </li>
                <li>
                  <a href="#">Sports and outdoor</a>
                </li>
                <li>
                  <a href="#">Animal and pets</a>
                </li>
                <li>
                  <a href="#">Machinery tools</a>
                </li>
                <li>
                  <a href="#">More category</a>
                </li>
              </ul>
            </div>
            <div class="sect-baner">
              <div class="banner-text">
                <h2>Latest trending</h2>
                <h1>Electronic items</h1>
                <button>Learn more</button>
              </div>
              <img src="img/other/banner.png" />
            </div>
            <div class="sect-user">
              <div class="login-div">
                <div class="user-start">
                  <img src="img/icon/user.png" />
                  <h2>
                    Hi, user <br />
                    let’s get stated
                  </h2>
                </div>
                <button class="join-btn">Join now</button
                ><button class="login-btn">Log in</button>
              </div>
              <div class="get-money">
                Get US $10 off <br />
                with a new <br />
                supplier
              </div>
              <div class="send-request">
                Send quotes with <br />
                supplier <br />
                preferences
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="product-sect">
      <div class="container">
        <div class="offers">
          <div class="product-offer">
            <div class="responsive-text">
              <h2>Deals and offers</h2>
              <h3>Hygiene equipments</h3>
            </div>
            <div class="responsive-time">
              <p id="num"></p>
              <div class="time-div" id="countDiv">
                <div class="counter-item">
                  <span class="days"></span>
                  <span class="smallText">Days</span>
                </div>
                <div class="counter-item">
                  <span class="hours"></span>
                  <span class="smallText">Hour</span>
                </div>
                <div class="counter-item">
                  <span class="minutes"></span>
                  <span class="smallText">Min</span>
                </div>
                <div class="counter-item">
                  <span class="seconds"></span>
                  <span class="smallText">Sec</span>
                </div>
              </div>
            </div>
          </div>
          <div class="product-info">
            <div class="product-img">
              <img class="product-watch" src="img/tech/watch.png" />
              <h3>Smart watches</h3>
              <span>-25%</span>
            </div>
            <div class="product-img">
              <img class="product-laptop" src="img/tech/laptops.png" />
              <h3>Laptops</h3>
              <span>-15%</span>
            </div>
            <div class="product-img">
              <img src="img/tech/camera.png" />
              <h3>GoPro cameras</h3>
              <span>-40%</span>
            </div>
            <div class="product-img">
              <img src="img/tech/headphone.png" />
              <h3>Headphones</h3>
              <span>-25%</span>
            </div>
            <div class="product-img">
              <img src="img/tech/smartphone.png" />
              <h3>Canon camreras</h3>
              <span>-25%</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="homeproduct-section">
      <div class="container">
        <div class="homeproducts-flex">
          <div class="left-side">
            <img src="img/other/outdoor.png" />
            <div class="left-side-abs">
              <h2><span>Home and outdoor</span></h2>
              <button>Source now</button>
            </div>
          </div>
          <div class="homeproduct-right">
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Soft chairs</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 19</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/other/softchairs.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Soft & chairs</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 19</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/other/sofachair.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Kitchen dishes</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 19</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/kitchendishes.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Smart watches</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 19</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/other/pot.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Kitchen mixer</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 100</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/kitchenmixer.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Blenders</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 39</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/blenders.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Home appliance</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 19</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/other/appliance.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Coffee maker</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 10</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/other/coffeemaker.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="homeproduct-section">
      <div class="container">
        <div class="homeproducts-flex">
          <div class="left-side">
            <img src="img/other/sourcenowtwo.png" />
            <div class="left-side-abs">
              <h2>
                <span>Consumer electronics and gadgets</span>
              </h2>
              <button>Source now</button>
            </div>
          </div>
          <div class="homeproduct-right">
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Smart watches</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 19</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/watch.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Cameras</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 89</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/camera.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Headphones</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 10</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/whiteheadphone.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Smart watches</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 90</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/teapot.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Gaming set</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 35</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/headphone.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Laptops & PC</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 340</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/laptops.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Smartphones</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 19</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/smartphone.png" alt="" />
              </div>
            </div>
            <div class="homeproduct-box">
              <div class="homeproduct-box-title">Electric kattle</div>
              <div class="homeproduct-box-span">
                From
                <span>USD 240</span>
              </div>
              <div class="homeproduct-box-img">
                <img src="img/tech/ipad.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-supplier">
      <div class="container">
        <div class="supplier-flex">
          <div class="left-supplier">
            <h1>An easy way to send requests to all suppliers</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing <br />elit,
              sed do eiusmod tempor incididunt.
            </p>
          </div>
          <div class="right-supplier">
            <form action="#" method="post">
              <div class="form-supplier-title">Send quote to suppliers</div>
              <input
                type="text"
                name="name"
                required
                placeholder="What item you need?"
              />
              <textarea
                name="details"
                placeholder="Type more details"
              ></textarea>
              <input
                type="text"
                name="quality"
                required
                placeholder="Quantity"
              />
              <select name="psc">
                <option value="1">Pcs</option>
              </select>
              <div class="input-submit">
                <input
                  type="submit"
                  value="Send inquiry
                "
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="recomended-items">
      <div class="container">
        <div class="block-title">Recommended items</div>
        <div class="recomended-items-grid">
          <div class="rec-grid-item">
            <img src="img/clothes/blueshirt.png" alt="" />
            <h3>$10.30</h3>
            <span>T-shirts with multiple colors, for men</span>
          </div>
          <div class="rec-grid-item">
            <img src="img/clothes/jacket.png" alt="" />
            <h3>$10.30</h3>
            <span
              >Jeans shorts for men <br />
              blue color</span
            >
          </div>
          <div class="rec-grid-item">
            <img src="img/clothes/costume.png" alt="" />
            <h3>$12.50</h3>
            <span>Brown winter coat medium size</span>
          </div>
          <div class="rec-grid-item">
            <img src="img/clothes/wallet.png" alt="" />
            <h3>$34.00</h3>
            <span>Jeans bag for travel <br />for men</span>
          </div>
          <div class="rec-grid-item">
            <img src="img/clothes/bag.png" alt="" />
            <h3>$99.00</h3>
            <span>Leather wallet</span>
          </div>
          <div class="rec-grid-item">
            <img src="img/clothes/Shorts.png" />
            <h3>$9.99</h3>
            <span>Canon camera <br />black, 100x zoom</span>
          </div>
          <div class="rec-grid-item">
            <img src="img/tech/whiteheadphone.png" alt="" />
            <h3>$8.99</h3>
            <span
              >Headset for gaming <br />
              with mic</span
            >
          </div>
          <div class="rec-grid-item">
            <img src="img/clothes/bag.png" alt="" />
            <h3>$10.30</h3>
            <span
              >Smartwatch <br />
              silver color modern</span
            >
          </div>
          <div class="rec-grid-item">
            <img src="img/clothes/blueshirt.png" alt="" />
            <h3>$10.30</h3>
            <span>Blue wallet for men leather metarfial</span>
          </div>
          <div class="rec-grid-item">
            <img src="img/tech/teapot.png" alt="" />
            <h3>$80.95</h3>
            <span
              >Jeans bag for travel <br />
              for men</span
            >
          </div>
        </div>
      </div>
    </section>
    <section class="extraservice-sect">
      <div class="container">
        <h1>Our extra services</h1>
        <div class="extraservice-divs">
          <div class="extraserv-imgs">
            <div class="extraservice-imgs">
              <img src="img/other/industryhub.png" alt="" />
              <div class="position-img">
                <img src="img/icon/search.png" alt="" />
              </div>
              <span class="extraserv-text"
                >Source from <br />
                Industry Hubs</span
              >
            </div>
          </div>
          <div class="extraserv-imgs">
            <div class="extraservice-imgs">
              <img src="img/other/customizeproducts.png" alt="" />
              <div class="position-img">
                <img src="img/icon/inventory.png" alt="" />
              </div>
              <span class="extraserv-text"
                >Customize Your <br />
                Products</span
              >
            </div>
          </div>
          <div class="extraserv-imgs">
            <div class="extraservice-imgs">
              <img src="img/other/fastair.png" alt="" />
              <div class="position-img">
                <img src="img/icon/controlsent.png" alt="" />
              </div>
              <span class="extraserv-text"
                >Fast, reliable shipping <br />
                by ocean or air</span
              >
            </div>
          </div>
          <div class="extraserv-imgs">
            <div class="extraservice-imgs">
              <img src="img/other/productmonitoring.png" alt="" />
              <div class="position-img">
                <img src="img/icon/security.png" alt="" />
              </div>
              <span class="extraserv-text"
                >Product monitoring <br />
                and inspection</span
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="flags-section">
      <div class="container">
        <h1>Suppliers by region</h1>
        <div class="country-flag">
          <div class="flags">
            <img src="img/flags/arabic.png" alt="arabic flag" />
            <div class="flag-name">
              <h4>Arabic Emirates</h4>
              <span>shopname.ae</span>
            </div>
          </div>
          <div class="flags">
            <img src="img/flags/australia.png" alt="australia flag" />
            <div class="flag-name">
              <h4>Australia</h4>
              <span>shopname.ae</span>
            </div>
          </div>
          <div class="flags">
            <img src="img/flags/usa.png" alt="usa flag" />
            <div class="flag-name">
              <h4>Unites States</h4>
              <span>shopname.ae</span>
            </div>
          </div>
          <div class="flags">
            <img src="img/flags/russia.png" alt="russia flag" />
            <div class="flag-name">
              <h4>Russia</h4>
              <span>shopname.ru</span>
            </div>
          </div>
          <div class="flags">
            <img src="img/flags/italy.png" alt="italy flag" />
            <div class="flag-name">
              <h4>Italy</h4>
              <span>shopname.it</span>
            </div>
          </div>
          <div class="flags">
            <img src="img/flags/denmark.png" alt="denmark flag" />
            <div class="flag-name">
              <h4>Denmark</h4>
              <span>denmark.com.dk</span>
            </div>
          </div>
          <div class="flags">
            <img src="img/flags/france.png" alt="france flag" />
            <div class="flag-name">
              <h4>France</h4>
              <span>shopname.com.fr</span>
            </div>
          </div>
          <div class="flags">
            <img src="img/flags/arabic.png" alt="arabic flag" />
            <div class="flag-name">
              <h4>Arabic Emirates</h4>
              <span>shopname.ae</span>
            </div>
          </div>
          <div class="flags">
            <img src="img/flags/china.png" alt="china flag" />
            <div class="flag-name">
              <h4>China</h4>
              <span>shopname.ae</span>
            </div>
          </div>
          <div class="flags">
            <img src="img/flags/greatbritain.png" alt="greatbritain flag" />
            <div class="flag-name">
              <h4>Great Britian</h4>
              <span>shopname.co.uk</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="newsletter-sect">
      <div class="container">
        <h1>Subscribe on our newsletters</h1>
        <h3>
          Get daily news on upcoming offers from many suppliers all over the
          world
        </h3>
        <div class="form-input">
          <form action="#">
            <input
              type="email"
              required
              placeholder="&#xf003; Email"
              style="font-family: Arial, FontAwesome"
            />
            <input type="submit" value="Subscribe" />
          </form>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="footer">
          <div class="footer-icon">
            <div class="footer-logo">
              <span>
                <img src="img/icon/brand.png" />
              </span>
              <img src="img/icon/logo.png" alt="" />
            </div>
            <h3>
              Best information about the company <br />
              gies here but now lorem ipsum is
            </h3>
            <div class="last-icons">
              <img
                src="img/social website icon/facebook.png"
                alt="favebook icon"
              />
              <img
                src="img/social website icon/twitter.png"
                alt="twitter icon"
              />
              <img
                src="img/social website icon/linkedin.png"
                alt="linkedin icon"
              />
              <img
                src="img/social website icon/instagram.png"
                alt="instagram icon"
              />
              <img
                src="img/social website icon/youtube.png"
                alt="youtube icon"
              />
            </div>
          </div>
          <div class="footer-about">
            <h3>About</h3>
            <ul>
              <li>
                <a href="#">About us</a>
              </li>
              <li>
                <a href="#">Find store</a>
              </li>
              <li>
                <a href="#">Categories</a>
              </li>
              <li>
                <a href="#">Blogs</a>
              </li>
            </ul>
          </div>
          <div class="footer-partnership">
            <h3>Partnership</h3>
            <ul>
              <li>
                <a href="#">About us</a>
              </li>
              <li>
                <a href="#">Find store</a>
              </li>
              <li>
                <a href="#">Categories</a>
              </li>
              <li>
                <a href="#">Blogs</a>
              </li>
            </ul>
          </div>
          <div class="footer-information">
            <h3>Information</h3>
            <ul>
              <li>
                <a href="#">Help Center</a>
              </li>
              <li>
                <a href="#">Money Refund</a>
              </li>
              <li>
                <a href="#">Shipping</a>
              </li>
              <li>
                <a href="#">Contact us</a>
              </li>
            </ul>
          </div>
          <div class="footer-forusers">
            <h3>For users</h3>
            <ul>
              <li>
                <a href="#">Login</a>
              </li>
              <li>
                <a href="#">Register</a>
              </li>
              <li>
                <a href="#">Settings</a>
              </li>
              <li>
                <a href="#">My Orders</a>
              </li>
            </ul>
          </div>
          <div class="footer-getapp">
            <h3>Gep app</h3>
            <div class="footer-lasticon">
              <img src="img/icon/appstore.png" alt="" />
            </div>
            <div class="footer-lasticon">
              <img src="img/icon/googleplay.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="last-text">
        <div class="container">
          <div class="last-flex">
            <span>© 2023 Ecommerce. </span>
            <div class="last-flagimg">
              <div class="select-language">
                <img id="mainflag-js" src="img/flags/usa.png" alt="usa flag" />
                <form action="">
                  <select id="countryflag-js">
                    <option value="greatbritain">English</option>
                    <option value="georgia">Georgia</option>
                    <option value="italy">Italy</option>
                    <option value="russia">Russia</option>
                    <option value="france">France</option>
                    <option value="china">China</option>
                  </select>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/time.js"></script>
  </body>
</html>
