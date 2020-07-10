<?php
include 'class.php';
//session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Konyaaltı Has Anaokulu</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Antalyanın en iyi anaokulu.">
  <meta name="keywords" content="Harvard Kids, Harvard, Antalya Anaokulu, Antalya Kreş, Ana okulu, Çoçuk Yuvası, Yuva Antalya, Kreş Antalya, Anaokulu Antalya, Konyaaltı Anaokulu, Konyaaltı">
  <meta name="robots" content="index,follow" />
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="./css/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="57x57" href="./css/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./css/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./css/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./css/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./css/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./css/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./css/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./css/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./css/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./css/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./css/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./css/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./css/favicon-16x16.png">
  <link rel="manifest" href="./css/manifest.json">



  <script type="text/javascript" src="best.js"></script>
  <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      $("#ling").click(function() {
        console.log("asdasd");
        window.location.href = "./pages/linguafolio.php";
      });
      $("#kadrobut").click(function() {
        console.log("asdasd");
        window.location.href = "./kadromuz.html";
      });
      $("#veli").click(function() {
        console.log("asdasd");
        window.location.href = "http://www.konyaaltihasanaokulu.com/otomasyon/ui/veliLogin.php";
      });
      $("#mont").click(function() {
        console.log("asdasd");
        window.location.href = "./pages/montessori.php";
      });
      $(".cubuk").click(function() {
        $("#menu").toggle();
      });
      $("#menu #alt li a").click(function() {
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
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
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
      $(window).bind('scroll', function() {
        parallaxScroll();
      });
      parallaxScroll();
    });

    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
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
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-58234430-6', 'auto');
    ga('send', 'pageview');
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="simpleHeader">
    <ul>
    <li><img src="http://www.konyaaltihasanaokulu.com/img/writing.png" /><a href="http://www.konyaaltihasanaokulu.com/pages/on-kayit-formu.php">ÖN KAYIT FORMU</a></li>
      <li><img src="http://www.konyaaltihasanaokulu.com/img/aile.png" /><a href="http://www.konyaaltihasanaokulu.com/otomasyon/ui/veliLogin.php">VELİ PANELİ</a></li>
      <!-- <li><a target="_blank" href="mailto:info@harvardkids.com" class="fa fa-envelope-open-o"></a></li> -->
      <!-- <li><a class="fa fa-map-marker"> </a></li> -->
    </ul>
  </div>
  <?php include './components/modal.php'; ?>
  <?php include './components/menu.php'; ?>
  <?php include './components/social.php'; ?>

  <?php include './components/menuresponsive.php'; ?>
  <?php include './components/slideshow.php'; ?>

  <?php /*include './components/bizkimiz.php'; ?>
    <?php include './components/fark.php'; ?>
    <?php include './components/orjinal.php'; ?>
    <?php include './components/destek.php'; ?>
    <?php include './components/dogalgida.php'; ?>
    <?php include './components/egitim.php'; ?>
    <?php include './components/aktivite.php'; ?>
    <?php include './components/galeri.php'; ?>
    <?php include './components/mail.php'; ?>
    <?php include './components/footer.php'; */ ?>
  <?php include './components/bulutlar.php'; ?>
  <?php /*include './components/minigaleri.php'*/ ?>
  <div class="mgv2">
    <?php include './components/minigaleriV2.php' ?>
  </div>

  <?php include './components/footer.php'; ?>
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
  <div id="myModalgallery" class="modalgallery">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

      <div class="mySlides">
        <div class="numbertext">1 / 4</div>
        <img src="./image/minigaleri/1.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 20</div>
        <img src="./image/minigaleri/2.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 20</div>
        <img src="./image/minigaleri/3.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 20</div>
        <img src="./image/minigaleri/4.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">5 / 20</div>
        <img src="./image/minigaleri/5.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">6 / 20</div>
        <img src="./image/minigaleri/6.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">7 / 20</div>
        <img src="./image/minigaleri/7.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">8 / 20</div>
        <img src="./image/minigaleri/8.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">9 / 20</div>
        <img src="./image/minigaleri/9.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">10 / 20</div>
        <img src="./image/minigaleri/10.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">11 / 20</div>
        <img src="./image/minigaleri/11.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">12 / 20</div>
        <img src="./image/minigaleri/12.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">13 / 20</div>
        <img src="./image/minigaleri/13.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">14 / 20</div>
        <img src="./image/minigaleri/14.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">15 / 20</div>
        <img src="./image/minigaleri/15.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">16 / 20</div>
        <img src="./image/minigaleri/16.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">17 / 20</div>
        <img src="./image/minigaleri/17.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">18 / 20</div>
        <img src="./image/minigaleri/18.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">19 / 20</div>
        <img src="./image/minigaleri/19.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">20 / 20</div>
        <img src="./image/minigaleri/20.jpg" style="width:100%">
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="caption-container">
        <p id="caption"></p>
      </div>


      <!-- <div class="column">
      <img class="demo cursor" src="./image/minigaleri/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="1">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="2">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="3">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="4">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="5">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/6.jpg" style="width:100%" onclick="currentSlide(6)" alt="6">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/7.jpg" style="width:100%" onclick="currentSlide(7)" alt="7">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/8.jpg" style="width:100%" onclick="currentSlide(8)" alt="8">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/9.jpg" style="width:100%" onclick="currentSlide(9)" alt="9">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/10.jpg" style="width:100%" onclick="currentSlide(10)" alt="10">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/11.jpg" style="width:100%" onclick="currentSlide(11)" alt="11">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/12.jpg" style="width:100%" onclick="currentSlide(12)" alt="12">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/13.jpg" style="width:100%" onclick="currentSlide(13)" alt="13">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/14.jpg" style="width:100%" onclick="currentSlide(14)" alt="14">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/15.jpg" style="width:100%" onclick="currentSlide(15)" alt="15">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/16.jpg" style="width:100%" onclick="currentSlide(16)" alt="16">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/17.jpg" style="width:100%" onclick="currentSlide(17)" alt="17">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/18.jpg" style="width:100%" onclick="currentSlide(18)" alt="18">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/19.jpg" style="width:100%" onclick="currentSlide(19)" alt="19">
    </div>
    <div class="column">
      <img class="demo cursor" src="./image/minigaleri/20.jpg" style="width:100%" onclick="currentSlide(20)" alt="20">
    </div> -->
    </div>

  </div>

  <script>
    function openModal() {
      document.getElementById("myModalgallery").style.display = "block";
    }

    function closeModal() {
      document.getElementById("myModalgallery").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>
</body>
<!--iki logoyu sırayla getiren script-->
<!-- <script>
    var logosmo = -1;

    setInterval(changeImage, 6000);
    changeImage();

    function changeImage() {
        logosmo = (logosmo + 1) % $('.logolar').length;
        console.log(logosmo);
        $('.logolar:eq(' + logosmo + ')').show().siblings().hide();
    }
</script> -->
<!-- <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 1000); // Bu alandan resimlerin geçiş süresini değiştirebilirsiniz.
    }
</script> -->
<script>
  var slideIndex2 = 0;
  showSlides2(slideIndex2);

  function showSlides2() {
    var i;
    var slides2 = document.getElementsByClassName("mySlides2");
    var dots2 = document.getElementsByClassName("dots");
    for (i = 0; i < slides2.length; i++) {
      slides2[i].style.display = "none";
    }
    slideIndex2++;
    if (slideIndex2 > slides2.length) {
      slideIndex2 = 1
    }
   
    slides2[slideIndex2 - 1].style.display = "block";
    dots2[slideIndex2 - 1].className += " active";
    Timer = setTimeout(showSlides2, 10000); // Change image every 2 seconds
  }
  function plusSlides2(n) {
    clearTimeout(Timer);
    // showSlides2(slideIndex2 += n);
    var indexx = slideIndex2 + n;
    showSlides2(indexx);
    }
</script>
<script type='text/javascript'>
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  // var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on the button, open the modal
  // btn.onclick = function() {
  //     modal.style.display = "block";
  // }
  function showw() {
    modal.style.display = "block"
  }

  modal.style.display = "flex";
  //setTimeout(showw, 1000); // Bu alandan resimlerin geçiş süresini değiştirebilirsiniz.


  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
<script>
//En alttaki çoklu galeri
  const gap = 0;

  const carousel = document.getElementById("carousel"),
    content = document.getElementById("content"),
    next = document.getElementById("next"),
    prev = document.getElementById("prev");

  next.addEventListener("click", e => {
    carousel.scrollBy(width + gap, 0);
    if (carousel.scrollWidth !== 0) {
      prev.style.display = "flex";
    }
    if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
      next.style.display = "none";
    }
  });
  prev.addEventListener("click", e => {
    carousel.scrollBy(-(width + gap), 0);
    if (carousel.scrollLeft - width - gap <= 0) {
      prev.style.display = "none";
    }
    if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
      next.style.display = "flex";
    }
  });

  let width = carousel.offsetWidth;
  window.addEventListener("resize", e => (width = carousel.offsetWidth));
</script>
<script>
  var deger = false;
  var altMenu = document.getElementById("altMenu");
function menuAc() {
    if(altMenu.className == "displayNone" || altMenu.className == "displayNone displayBlockSticky"){
      altMenu.classList.replace("displayNone","displayBlock")
    }else{
      altMenu.classList.replace("displayBlock","displayNone")
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