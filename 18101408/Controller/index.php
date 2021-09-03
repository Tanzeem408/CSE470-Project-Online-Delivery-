<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="../view/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="owl.carousel.css">
  <link rel="stylesheet" href="owl.theme.css">
  <script src="owl.carousel.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <body>
    <div class="container" id="nav">
      <div class="logo">
        <img src="../View/image/logo.png" alt="">
      </div>
      <div class="bar_1">
        <div class="search">
          <input type="text" name="" value="" placeholder="search items">
          <i class="fas fa-search"></i>
        </div>
        <div class="cart">
          <a href="../Model/displaycart.php"><h6>Cart</h6></a>
          <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="account">
          <a href="../View/login.php"><h6>My Account</h6></a>
          <i class="far fa-user"></i>
        </div>
        <div class="menu">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#glr">Gallery</a></li>
            <li><a href="#prd">Services</a></li>
            <li><a href="#abt">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="wrappergrid">
      <div class="line">
        <div class="slider">
          <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item it2"><img src="../View/image/motor.jpg" alt="">
               <h2 data-aos="fade-up">Be SAFE from COVID-19<br>Be SMART & REGISTER for vaccination<br>Get Vaccinaetd Today</h2>
               <h3 data-aos="fade-up">#Stay Home               #Shop Online</h3>
              <!-- <button type="button" name="button" class="btn b2" data-aos="fade-up">OUR SERVICES</button> -->
            </div>
            <div class="item it4"><img src="../View/image/cycle.jpg" alt="">
               <h2 data-aos="fade-up">WORK FROM HOME <br> Parcel, Documents, Medicine<br>Anytime anywhere use our service</h2>
              <!-- <h3 data-aos="fade-up">Instant Fire Protection Co. is committed to offering <br>the best products and services possible.</h3>
              <button type="button" name="button" class="btn" data-aos="fade-up">ABOUT US</button> -->
            </div>
            <div class="item it3"><img src="../View/image/cars.jpg" alt="">
               <h2 data-aos="fade-up">When the going gets tough<br> put your<br> faith on us</h2>
              <!-- <h3 data-aos="fade-up">Instant Fire Protection Co. is dedicated to<br>making sure homes and businesses in Salem<br>and Keizer are fully protected from a fire.</h3> -->
              <!-- <button type="button" name="button" class="btn b3" data-aos="fade-up">SHOP PRODUCTS</button> -->
            </div>

          </div>
        </div>
      </div>
    </div>

    <div id="abt" class="about">
        <div class="writing">
          <img src="../View/image/Quotation-Mark-PNG-Image-Background.png" alt="" data-aos="fade-right" data-aos-duration="2000">
          <h2 data-aos="fade-right" data-aos-duration="3000">Always Deliver More Than Expected.....</h2>
        </div>
        <div class="writing_2" data-aos="fade-left" data-aos-duration="3000">
          <h2>About Us</h2>
          <p>OSS is the process of buying goods and services from merchants who sell on the internet and people who purchase products according to their needs from companies that provide products online.<br>Why us? We have the ability to be open 24/7, instant processing of transactions, increased business reach, digital payment system over traditional system, and the customer service that tops all the other online shopping companies</p>
        </div>
    </div>
    <div id="prd" class="product">
      <div class="p_writing">
        <p>Become a vendor and set up shop or become a customer and buy from various types of products</p>
      </div>
      
      <div id="glr" class="gallery">
      <h2 class="gheader">OUR PRODUCTS</h2>
      
      <div class="kid g" data-aos="zoom-in" data-aos-duration="3000">
          <a href="showkids.php"><img src="image/videoblocks-cute-little-girl-on-shopping-portrait-of-a-kid-with-shopping-bags-shopping-girl_s5d2rpgtn_thumbnail-1080_01.png" alt=""></a>
      </div>
      <h2 class="k">Parcel</h2>
      <div class="tv g" data-aos="zoom-in" data-aos-duration="3000">
          <a href="showaccessories.php"><img src="image/blake-wisz-Xn5FbEM9564-unsplash.jpg" alt=""></a>
      </div>
      <h2 class="t">Document</h2>
      <div class="grocery g" data-aos="zoom-in" data-aos-duration="3000">
          <a href="showgrocery.php"><img src="image/494-4942895_grocery-png-picture-transparent-background-grocery-bag-png.png" alt=""></a>
      </div>
      <h2 class="gr">Grocery</h2>
      <div class="medicine g" data-aos="zoom-in" data-aos-duration="3000">
          <a href="showmedicine.php"><img src="image/Pharmacy-1024x768.jpg" alt=""></a>
      </div>
      <h2 class="med">Medicine</h2>
    </div>



    <section id="contact">
      <div class="contact">
        <h1>Get In Touch</h1>
          <div class="col-md-6" data-aos="fade-down" data-aos-duration="2000">
            <form class="contact-form">
              <div class="form-group">
                <input type="text"  class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="number"  class="form-control" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <input type="email"  class="form-control" placeholder="Email Address">
              </div>
              <div class="form-group">
                <textarea  class="form-control" rows="4"
                  placeholder=" Your Message">
                </textarea>
              </div>
              <button type="submit" class="btnn btn-primary">SEND MESSAGE</button>
            </form>
          </div>
        </div>
          <div class="col-md-6 contact-info" data-aos="fade-down" data-aos-duration="2000">
            <div class="folow">
              <b>Address:</b><i class="fa fa-map-marker"></i> XYZ Road,Dhaka
            </div>
            <div class="folow">
              <b>Phone:</b><i class="fa fa-phone"></i> +880 1234567890
            </div>
          <div class="folow">
            <b>Email:</b><i class="fa fa-envelope-o"></i>TanZ@gmail.com
          </div>
        </div>
    </section>
    <section id="foot">
      <div class="footer">
        <div class="fcol">
          <h4>OSS Contact</h4>
          <p class="phone"><i class="fas fa-phone"></i>   P: 541-883-9914</p>
          <p class="mail"><i class="far fa-envelope"></i>  E: info@ossinfo.com</p>
          <p class="mail"><i class="far fa-envelope"></i>  E: info@ossinfo.com</p>
        </div>
        <div class="fcol">
          <h4>OSS Hotline</h4>
          <p class="phone">P: 541-244-1457</p>
          <p class="mail">E: info@ossservice.com</p>
          <p class="mail">E: oss.inc@yahoo.com</p>
        </div>
        <div class="fcol">
          <h4>SUPPORT</h4>
          <p>faq</p>
          <p>payment option</p>
          <p>scheduling</p>
        </div>
        <div class="folow">
          <label>
          <b>Get Social:</b></label>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-google-plus"></i></a>
        </div>
      </div>
    </section>
    <div class="gototop">
      <a href="#"><button type="button" name="button" class="topbtn" id="up"><i class="fas fa-chevron-circle-up"></i></button></a>
    </div>
      <script src="script.js" charset="utf-8"></script>
  </body>
</html>
