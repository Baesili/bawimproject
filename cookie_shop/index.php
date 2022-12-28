<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Speed</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	  <!-- login CSS -->
	  <link rel="stylesheet" href="css/login.css">
   </head>
   <!-- body -->
   <body>

   <!-- Login Modal -->
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
	<!-- Login Modal -->
   
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="index.php">Strona Główna</a>
      <a href="gallery.php">Rowery</a>
      <a href="contact.php">Kontakt</a>
    </div>
    <div id="main">
      <!-- header section start -->
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
							echo '<a href="logout.php" ><i class="fa fa-fw fa-user"></i> Wyloguj się</a>';
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
        </div>
      <div class="banner_section layout_padding">
        <div class="container">
          <section >
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
   <!-- about section end -->
   
   <!-- our section start -->
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
          <button class="seemore_bt">Pokaż więcej</button>
      </div>
   </div>
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="contact_text"><strong>Skontaktuj się</strong></h1>
      </div>
        <div class="contact_main">
           <div class="enput_section">
              <div class="email_box">
                <div class="input_main">
                   <div class="container">
                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="Imię" name="Name">
                        </div>
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="Email" name="Name">
                        </div>
                        <div class="form-group">
                            <textarea class="massage-bt" placeholder="Wiadomość" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                      </form>   
                   </div> 
                   <div class="send_btn">
                    <button type="button" class="main_bt"><a href="#">Wyślij</a></button>
                   </div>                   
                </div>
             </div>
           </div>
        </div>
    </div>
   <!-- our section end -->
   <!-- footer section start -->
   <!-- copyright section start -->
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
  <script src="js/owl.carousel.js"></script>
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
  </script>

<script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
</script>

<script>

	function showModal() {
		document.getElementById('id01').style.display='block';
	}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

 </body>
</html>