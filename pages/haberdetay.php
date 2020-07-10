<?php
include'../class.php';
session_start();
ob_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Antalyanın en iyi anaokulu.">
	<meta name="keywords" content="Harvard Kids, Harvard, Antalya Anaokulu, Antalya Kreş, Ana okulu, Çoçuk Yuvası, Yuva Antalya, Kreş Antalya, Anaokulu Antalya, Konyaaltı Anaokulu, Konyaaltı">
	<meta name="robots" content="index,follow" />
   <link rel="apple-touch-icon" sizes="57x57" href="./css/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./css/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./css/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="./css/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./css/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="./css/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="./css/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="./css/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./css/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="./css/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./css/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./css/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./css/favicon-16x16.png">
	<link rel="manifest" href="./css/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="./css/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <title>Konyaaltı Has Anaokulu</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <script type="text/javascript" src="best.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".cubuk").click(function () {
                $("#menu").toggle();
            });
             $("#menu #alt li a").click(function () {
                $("#menu").toggle();
                console.log("bastik");
            });
            // Parallax Scrolling
	    var scale = 0.4;
	    function parallaxScroll() {
	    	var scrollTop = $(window).scrollTop();
		    $('.js-parallax').each(function() {
	        	$(this).css('top', Math.round(((0 - scrollTop) * scale)) + 'px');
		    });
	 	}
      // Smooth Scrolling
	    $(function() {
	    	$('a[href*=#]:not([href=#])').click(function() {
		        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		          var target = $(this.hash);
		          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		          if (target.length) {
		            $('html,body').animate({
		              scrollTop: target.offset().top
		            }, 1000);
		            return false;
		          }
		        }
		    });
	    });
	   	// Function Calls
	    $(window).bind( 'scroll', function() {
	    	parallaxScroll();
	    });
	    parallaxScroll();
        });

        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        // Close the dropdown if the user clicks outside of it
        window.onclick = function (e) {
            if (!e.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var d = 0; d < dropdowns.length; d++) {
                    var openDropdown = dropdowns[d];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    <script type="text/javascript">
		$(document).ready(function() {

		});
	</script>

</head>

<body>
    <?php include '../components/menu2.php';?>
    <!-- <script>
        var logosmo = -1;

        setInterval(changeImage, 3000);
        changeImage(); //Initial call to hide the images on start

        function changeImage() {
            logosmo = (logosmo + 1) % $('.logolar').length; //Make sure the list wraps back to 0
            //console.log(logosmo);
            $('.logolar:eq(' + logosmo + ')').show().siblings().hide();
        }
    </script> -->

</body>
<div class="infoBar">
        <div class="infowrap">
            <div class="baslik">Haberler ve Duyurular</div>
            <div class="location">
                Ana Sayfa / Haberler ve Duyurular
            </div>
        </div>
    </div>
  <section id="pdr">
    <?php
    if(!isset($_GET["id"])){
      header('location:haber.php');
    }else if(isset($_GET['id'])){
      $dene2 = new sinif();
      $dene2->setCumle("SELECT * FROM dishabercoklu WHERE dokumanId ={$_GET['id']}");
      $dene2 -> listeleClientDisHaberDetay();
    }

    ?>
  </section>
  <?php include '../components/footer.php'; ?>
  <script>
    var acc = document.getElementsByClassName("tasiyici-baslik");
    var i;
    console.log(acc.length)
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
  </script>
<script>
    window.onscroll = function() {
        myFunction()
    };

    var header = document.getElementById("nav");
    var responsUl = document.getElementById("altMenu");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            responsUl.classList.add("displayBlockSticky");
            header.classList.add("sticky");

        } else {
            responsUl.classList.remove("displayBlockSticky");
            header.classList.remove("sticky");
        }
    }
</script>
<script>
    var deger = false;
    var altMenu = document.getElementById("altMenu");

    function menuAc() {
        if (altMenu.className == "displayNone" || altMenu.className == "displayNone displayBlockSticky") {
            altMenu.classList.replace("displayNone", "displayBlockOther")
        } else {
            altMenu.classList.replace("displayBlockOther", "displayNone")
        }


        // var x = document.getElementById("myTopnav");
        // if (x.className === "topnav") {
        //   x.className += " responsive";
        // } else {
        //   x.className = "topnav";
        // }
        console.log("denme")
    }
</script>
</html>
