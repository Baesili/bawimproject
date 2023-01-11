<?php
session_start();
include "zadania.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Speed</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/login.css">
       
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
       
	<div id="id01" class="modal">
	  <form class="modal-content animate" action="login.php" method="post">
		<div class="imgcontainer">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>

		<div class="container">
		  <label for="uname"><b>Nazwa użytkownika</b></label>
		  <input type="text" placeholder="Wpisz nazwe użytkownika" name="uname" required>

		  <label for="psw"><b>Hasło</b></label>
		  <input type="password" placeholder="Wpisz hasło" name="psw" required>
			
		  <button type="submit">Login</button>
		  <label>
			<input type="checkbox" checked="checked" name="remember"> Zapamiętaj mnie
		  </label>
		</div>

		<div class="container" style="background-color:#f1f1f1">
		  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Anuluj</button>
		  <span class="psw">Nie masz konta? <a href="#">Załóż tutaj</a></span>
		</div>
	  </form>
	</div>
    
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="index.php">Strona Główna</a>
    </div>

    <div id="main">
      <div class="header_section">
        <div class="container-fluid">
         <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               <div class="logo"><img src="images/logo.png"></div>
            </div>
            <div class="col-sm-4">
               <div class="togle_3">
                  <div class="left_main">
                     <div class="menu_main">
					    <?php 
						if(isset($_SESSION['username']))
                        {
                            echo '<a href="logout.php" ><i class="fa fa-fw fa-user"></i> Wyloguj się</a>';
                        }
						else
							echo '<a href="#" onclick="showModal()"><i class="fa fa-fw fa-user"></i> Zaloguj się</a>';
						?>
                     </div>
                  </div>
                  <div class="middle_main">
                     <div class="shoping_bag"><img src="images/shopping-bag.png"></div>
                  </div>
                  <div class="right_main">
                     <div class="togle_main"><a class="class="openbtn onclick="openNav()"><img src="images/togle-menu-icon.png" style="max-width: 100%;"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
             <div class="col-sm-4"></div>
             <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="left_main"><p></p></div>
                <div class="middle_main">
                    <div class="menu_main">
                        <p></p>
                    </div></div>
                <div class="right_main"></div>
            </div>   
         </div>
        </div>
      <div class="banner_section layout_padding">
        <div class="container">
          <section id="gallery">
             <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <div class="container">
                         <div class="row marginii">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                               <div class="carousel-sporrt_text ">
                                  <h1 class="sport_text"><strong>Wypożyczalnia<br><span style="color: #fff;">Rowerów</span></strong></h1>
                                  <p class="lorem_text">Morbi vestibulum magna orci, sit amet vulputate libero feugiat id. Nulla sit amet vehicula erat. Nam dignissim ornare neque vel dapibus. Etiam ullamcorper sit amet nunc quis elementum. In vestibulum lectus eu ex rhoncus, ac convallis diam porta. Phasellus commodo felis eu erat rhoncus laoreet. Sed nec ultricies nulla, et volutpat libero. Nunc feugiat ut velit non euismod. Vivamus cursus felis nisi, sed posuere eros tincidunt quis. </p>
                                  <button class="boynow_bt">Wypożycz teraz</button>
                                  <button class="contact_bt">Skontaktuj się</button>
                               </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                               <div class="img-box">
                                  <figure><img src="images/img-1.png" style="max-width: 100%;"/></figure>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </section>
        </div>
      </div>
    </div>
   </div>

   <div class="our_section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="our_text"><strong>Nasze <span style="color: #000;">pojazdy</span></strong></h1>
               <p class="about_lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi enim magna, accumsan tempor egestas sit amet, fringilla nec est. Donec vel interdum sapien, quis viverra libero. Cras dictum augue tortor, sed porttitor odio sollicitudin non. Maecenas aliquam est nec pharetra mattis. Morbi lobortis ante in posuere porta. Quisque dolor erat, dapibus egestas enim non, mattis rutrum magna. Sed eget rutrum felis. Praesent lacus ipsum, pellentesque quis urna at, vehicula sodales est. Aliquam euismod dui id neque sollicitudin, ut mattis metus tincidunt. Vestibulum tincidunt nibh ipsum, id eleifend lorem porta quis. Quisque dapibus, est quis pretium iaculis, tortor est condimentum velit, in imperdiet odio odio eu massa. Vivamus dapibus dignissim massa. Praesent porttitor tellus nisi, vel venenatis eros rutrum imperdiet. In eu ligula eget ante finibus consequat. Quisque faucibus, elit eu interdum commodo, lacus lacus bibendum libero, at fringilla dui ligula vitae erat. Ut vitae mauris purus. </p>
            </div>
         </div>
      </div>
      <div class="our_section_2">
         <div class="our_main">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="images/our-img-1.png" alt="First slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/our-img-1.png" alt="Second slide">
               </div>
               <div class="carousel-item">
                 <img class="d-block w-100" src="images/our-img-1.png" alt="Third slide">
               </div>
            </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
            </div>
          </div>
          <button class="seemore_bt"><a href="showmore.php">Pokaż więcej</a></button>
      </div>
   </div>
   <div class="contact_section layout_padding" id="contact">
      <div class="container">
         <h1 class="contact_text"><strong>Skontaktuj się</strong></h1>
      </div>
        <div class="contact_main">
           <div class="enput_section">
              <div class="email_box">
                <div class="input_main">
                   <div class="container">
                      <form action="contact_action.php">
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="Imię" name="Name">
                        </div>
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="massage-bt" placeholder="Wiadomość" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                        <div class="send_btn">
                            <button type="submit" class="main_bt">Wyślij</button>
                        </div>   
                      </form>   
                   </div>             
                </div>
             </div>
           </div>
        </div>
    </div>
       
    <div id="cookieBG" style="width:100%; height: 100%; position: fixed; text-align: center; display: none;">
    <div id="cookieNotice" class="light display-right" style="display: none; background: white; border: 5px solid black; width:700px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div id="closeIcon" style="display: none;">
        </div>
        <div class="title-wrap">
            <h4>Informacja o ciasteczkach</h4>
        </div>
        <div class="content-wrap">
            <div class="msg-wrap">
                <p>Ta strona używa ciasteczek i podobnych technologii, w celu zapewnienia spersonalizowanych treści oraz zwiększenia twojego zadowolenia z korzystania ze strony. Aby kontynuować musisz zaakceptować <a style="color:#115cfa;" href="/privacy-policy">Politykę Prywatności</a></p>
                <div class="btn-wrap">
                    <button class="btn-primary" onclick="acceptCookieConsent();">Akceptuj</button>
                </div>
            </div>
        </div>
    </div>   
    </div>
   <div class="copyright_text">Copyright 2023</div>

  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascript --> 
  <script src="js/postpopup.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/navandmodal.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script>
     $(document).ready(function(){
         $(".fancybox").fancybox({
             openEffect: "none",
             closeEffect: "none"
         });
         $('#myCarousel').carousel({
            interval: false
        });
    }
  </script>
 </body>
</html>