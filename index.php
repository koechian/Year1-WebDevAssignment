 <?php

  include('PHP/login.php');
  include('connect.php');


  if (($_SESSION['usr'] == null)) {
    header("location: HTML\login.html");
  }


  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8" />
   <link rel="stylesheet" href="CSS\index.css">
   <link rel="stylesheet" href="CSS\fonts.css">
   <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
   <script src="JS\index.js"></script>
   <link rel="icon" href="Assets\Images\favicon.ico" />
   <meta http-equiv="X-UA-Compatible" content="uft-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>The Bando Coffee House</title>
 </head>

 <body>
   <section id="Header">
     <div id="main_banner">
       <div id="logo_container"></div>
       <a href="PHP\profile.php" id="login">
         <?php
          echo $_SESSION['usr'];
          ?>
       </a>

       <a href="HTML\about.html" id="about_button">About</a>
       <a href="HTML\about.html" id="location_img"></a>
       <a href="HTML\about.html" id="find_a_store">Find a Bistro</a>
       <a href="PHP\admin.php" id="cart1">Order</a>
       <a href="#" id="cart_logo"></a>
       <div id="header_parent">
         <h1 id="header_text">THE BANDO</h1>
       </div>
       <div id="subheader_parent">
         <h1 id="subheader_text">Coffee & Beverage House</h1>
       </div>
     </div>
     <div id="banner1">
       <h1 id="announcement">
         Facial Coverings are a requirement in all our bistros. <br />

         <a id="learn" target="blank" href="http://www.kenyalaw.org/kl/fileadmin/pdfdownloads/Interim-guidelines-on-the-management-of-COVID-19-in-Kenya.pdf">Learn more.</a>
       </h1>

     </div>
   </section>
   <section class="Mid">
     <div id="cover_text">
       <span>
         <h1 id="coffee_love">meals with a hint of love</h1>
       </span>
       <hr class="solid" />
       <div id="text_box">
         <p id="main_text">
           We now deliver!!<br />
           <br />We have teamed up with our friends from Uber Eats to offer
           delivery service to Nairobi,Kajiado and Rongai Areas! Now you can
           get your fresh hot coffee and breakfast, lunch, or early dinner
           delivered straight to your home or office! We are also able to
           deliver along with your food order.<br /><br />Anything from
           traditional coffee for breakfast to a selection of our beers, gins,
           or bottled wines for that kind of morning. If you want it we'll
           serve it. <br />*Alcohol must be served along with food and person
           ordering must be 18 or older. <br>Ordering alcohol from an office is discouraged but not prohibited :D <br /><br />Ordering through our app
           is still available if you are in the area and would like to just
           stop in to pick it up.
         </p>
         <span id="sub_text">looking foward to serving you soon :) </span>
         <br /><br /><br /><br />
       </div>
       <span> <a id="delivery" href="#">Order for Delivery</a> </span>
       <span> <a id="pickup" href="#">Order for Pickup</a> </span>
       <br /><br /><br />

       <hr class="solid" />

       <div class="menu_container">
         <h1 id="menu_title"><span>Le MENU</span></h1>

         <div class="tab">
           <button id="eat_button" class="tablinks" onclick="openTab(event, 'to_eat')">
             To Eat
           </button>
           <button id="drink_button" class="tablinks" onclick="openTab(event, 'to_drink')">
             To Drink
           </button>
           <button id="offer_button" class="tablinks" onclick="openTab(event, 'special_offers')">
             Special Offers & Combos
           </button>
         </div>


         <div id="to_eat" class="tabcontent">
           <?php
            $sql = "SELECT * FROM foods";
            $to_eat = array();
            $to_eat_prices = array();
            $to_eat_caption = array();
            $result = mysqli_query($link, $sql);
            $x = 0;

            while ($row = mysqli_fetch_assoc($result)) {

              $to_eat[$x] = $row['food_name'];
              $to_eat_prices[$x] = $row['price'];
              $to_eat_caption[$x] = $row['caption'];
              $x++;
            }
            ?>

           <h3><?php echo $to_eat[0] ?></h3>
           <p><?php echo $to_eat_caption[0] ?> <br>(Ksh<?php echo " " . $to_eat_prices[0] ?>)</p>
           <br>
           <h3><?php echo $to_eat[1] ?></h3>
           <p><?php echo $to_eat_caption[1] ?><br> (Ksh<?php echo " " . $to_eat_prices[1] ?>)</p>
           <br>
           <h3><?php echo $to_eat[2] ?></h3>
           <p><?php echo $to_eat_caption[2] ?> <br> (Ksh<?php echo " " . $to_eat_prices[2] ?>)</p>
           <br>
           <h3><?php echo $to_eat[3] ?></h3>
           <p><?php echo $to_eat_caption[3] ?><br> (Ksh<?php echo " " . $to_eat_prices[3] ?>)</p>
           <br>
           <h3><?php echo $to_eat[4] ?></h3>
           <p><?php echo $to_eat_caption[4] ?><br> (Ksh<?php echo " " . $to_eat_prices[4] ?>)</p>

         </div>

         <div id="to_drink" class="tabcontent">
           <h3>Coffee</h3>
           <p>All coffee sizes are the same and a cup retails for Ksh 200</p>
           <ul id="coffee_list">
             <li><?php echo $to_eat[5] ?></li>
             <li><?php echo $to_eat[6] ?></li>
             <li><?php echo $to_eat[7] ?></li>
             <li><?php echo $to_eat[8] ?></li>
             <li><?php echo $to_eat[9] ?></li>
             <li><?php echo $to_eat[10] ?></li>
             <li><?php echo $to_eat[11] ?></li>
           </ul>
           <h3>Teas</h3>
           <p>A glass is 300ml and retails at Ksh 120</p>
           <p>Flavours of your choice can be added at an extra cost</p>
           <ul id="tea_list">
             <li><?php echo $to_eat[12] ?></li>
             <li><?php echo $to_eat[13] ?></li>
             <li><?php echo $to_eat[14] ?></li>
             <li><?php echo $to_eat[15] ?></li>
             <li><?php echo $to_eat[16] ?></li>

           </ul>
           <h3>Smoothies</h3>
           <p>Explore fruit combos you never knew existed!</p>
           <h4><?php echo $to_eat[17] ?></h4>
           <p>
             <?php echo $to_eat_caption[17] ?>

             <br>(Ksh<?php echo " " . $to_eat_prices[17] ?>)
           </p>
           <h4><?php echo $to_eat[18] ?></h4>
           <p>
             <?php echo $to_eat_caption[18] ?>
             <br>(Ksh<?php echo " " . $to_eat_prices[18] ?>)
           </p>
           <h4><?php echo $to_eat[19] ?></h4>
           <p>
             <?php echo $to_eat_caption[19] ?>
             <br>(Ksh<?php echo " " . $to_eat_prices[19] ?>)
           </p>
           <h4><?php echo $to_eat[20] ?></h4>
           <p>
             <?php echo $to_eat_caption[20] ?>
             <br>(Ksh<?php echo " " . $to_eat_prices[20] ?>)
           </p>

         </div>
         <div id="special_offers" class="tabcontent">
           <h3><?php echo $to_eat[21] ?></h3>
           <p>
             <?php echo $to_eat_caption[21] ?>
             <br><br>*ADD: Bacon or Beef bacon 250/- Avocado 50/- Two Sausages 260/-<br>
             (Ksh<?php echo " " . $to_eat_prices[21] ?>)
           </p>
           <br>
           <h3><?php echo $to_eat[22] ?></h3>
           <p>
             <?php echo $to_eat_caption[22] ?> <br>
             (Ksh <?php echo " " . $to_eat_prices[22] ?>)
           </p>
           <br>
           <h3><?php echo $to_eat[23] ?></h3>
           <p><?php echo $to_eat_caption[23] ?><br>
             (Ksh <?php echo " " . $to_eat_prices[23] ?>)
           </p>
           <br>
           <h3><?php echo $to_eat[24] ?></h3>
           <p>
             <?php echo $to_eat_caption[24] ?>
             <br>(Ksh <?php echo " " . $to_eat_prices[24] ?>)
           </p>
         </div>
       </div>
   </section>
   <section id="Footer">
     <div class="bottom">
       <div>
         <a id="twitter" target="blank" href="https://twitter.com/mwafrikaa_" title="Follow me on Twitter"><span class="iconify" data-icon="mdi-twitter"></span>
         </a>
       </div>
       <div>
         <a id="insta" href="#" title="No Insta :)"><span class="iconify" data-icon="akar-icons:instagram-fill"></span></a>
       </div>
       <div>
         <a id="youtube" target="blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" title="My YouTube channel"><span class="iconify" data-icon="akar-icons:youtube-fill"></span></a>
       </div>
       <span id="bottom_text">The Bando Coffee House &nbsp | &nbsp All Rights Reserved</span>
     </div>
   </section>
 </body>

 </html>