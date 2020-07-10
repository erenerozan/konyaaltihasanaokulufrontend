<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Antalyanın en iyi anaokulu.">
    <meta name="keywords" content="Harvard Kids, Harvard, Antalya Anaokulu, Antalya Kreş, Ana okulu, Çoçuk Yuvası, Yuva Antalya, Kreş Antalya, Anaokulu Antalya, Konyaaltı Anaokulu, Konyaaltı">
    <meta name="robots" content="index,follow" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./css/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
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
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <title>Konyaaltı Has Anaokulu</title>
    
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
            console.log(logosmo);
            $('.logolar:eq(' + logosmo + ')').show().siblings().hide();
        }
    </script> -->
    <section id="menu">
        <ul id="alt">
            <li><a href="../index.html" class="bold">Ana Sayfa</a></li>
            <li><a href="./index#bizkimiz" class="bold">Biz Kimiz</a></li>
            <li><a href="./kadromuz.html">Kadromuz</a></li>
            <li><a href="./index.html#destek">Destek Birimlerimiz</a></li>
            <li><a href="./index.html#aktivite">Sosyal Etkinliklerimiz</a></li>
            <li><a href="./index.html#fark">Hedeflerimiz</a></li>
            <li><a href="./index.html#orjinal">Orjinal Eğitim Materyalleri</a></li>
            <li><a href="./index.html#dogalgida">Doğal Gıda Ürünleri</a></li>
            <li><a href="./index.html#egitim" class="bold">Eğitim Anlayışımız</a></li>
            <li><a href="./montessori.html">Montessori</a></li>
            <li><a href="./linguafolio.html">LinguaFolio</a></li>
            <li><a href="./index.html#galeri" class="bold">Galeri</a></li>
            <li><a href="./index.html#video">Videolar</a></li>
            <li><a href="./index.html#mail" class="bold">İletişim</a></li>
        </ul>
    </section>
    <div class="infoBar">
        <div class="infowrap">
            <div class="baslik">Atatürk Köşemiz</div>
            <div class="location">
                Ana Sayfa / Atatürk Köşemiz
            </div>
        </div>
    </div>
    <section id="pdr">
    
      <!-- <div class="pdr-baslik">
        Atatürk Köşemiz
      </div> -->
      <br>
      <div class="pdr-sol">
      <img src="../image/ataturk1.jpg"/>
      </div>
      <div class="pdr-sag">

      <p>
        Atatürk’ün Gençliğe Hitabesi
      </p>
      <p><b>Ey Türk Gençliği! </b></p>

      <p>
        Birinci vazifen, Türk istiklâlini, Türk Cumhuriyetini, ilelebet, muhafaza ve müdafaa etmektir.
      </p>


      <p>
        Mevcudiyetinin ve istikbalinin yegâne temeli budur. Bu temel, senin, en kıymetli hazinendir. İstikbalde dahi, seni bu hazineden mahrum etmek isteyecek, dahilî ve haricî bedhahların olacaktır. Bir gün, İstiklâl ve Cumhuriyeti müdafaa mecburiyetine düşersen, vazifeye atılmak için, içinde bulunacağın vaziyetin imkân ve şerâitini düşünmeyeceksin! Bu imkân ve şerâit, çok nâmüsait bir mahiyette tezahür edebilir. İstiklâl ve Cumhuriyetine kastedecek düşmanlar, bütün dünyada emsali görülmemiş bir galibiyetin mümessili olabilirler. Cebren ve hile ile aziz vatanın, bütün kaleleri zaptedilmiş, bütün tersanelerine girilmiş, bütün orduları dağıtılmış ve memleketin her köşesi bilfiil işgal edilmiş olabilir. Bütün bu şerâitten daha elîm ve daha vahim olmak üzere, memleketin dahilinde, iktidara sahip olanlar gaflet ve dalâlet ve hattâ hıyanet içinde bulunabilirler. Hattâ bu iktidar sahipleri şahsî menfaatlerini, müstevlilerin siyasi emelleriyle tevhit edebilirler. Millet, fakr ü zaruret içinde harap ve bîtap düşmüş olabilir.

      </p>


      <p>
        Ey Türk istikbalinin evlâdı! İşte, bu ahval ve şerâit içinde dahi, vazifen; Türk İstiklâl ve Cumhuriyetini kurtarmaktır! Muhtaç olduğun kudret, damarlarındaki asil kanda mevcuttur!
      </p>

      <p class="pdr-alt-baslik">
        Mustafa Kemal Atatürk <br>
          20 Ekim 1927
      </p>
      </div>
      


    </section>
    <?php include '../components/footer.php'; ?>
</body>
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
