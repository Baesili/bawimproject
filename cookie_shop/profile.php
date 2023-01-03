<?php
session_start();
include "connection.php";
include "encrypt.php";
if(isset($_SESSION['username']))
{
    $uname = $_SESSION['username'];
    $sql = "SELECT id FROM login WHERE username='$uname'";
    $result = mysqli_query($conn, $sql);
    $card_number="";
    $cvv="";
    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];

        $sql = "SELECT * FROM payments WHERE user_id=$id";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $card_number=$row['card_number'];
            $cvv=$row['cvv'];
        }
    }
}
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
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="height: 400px;">
                                <div class="menu_main">
                                    <?php 
                                    if(isset($_SESSION['username']))
                                    {
                                        echo '<h1>Twój profil</h1><a>'.$_SESSION['username'].'</a>';
                                        echo '<h3>Dane twojej karty:</h3><p>Numer: '.$card_number.'<br>CVV: '.$cvv.'</p>';
                                    }
                                    ?>
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