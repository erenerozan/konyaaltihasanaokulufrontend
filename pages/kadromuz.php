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
    <link rel="stylesheet" href="style.css">
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
    <section id="nav">
        <div class="navwrapper">
        <nav>
            <ul id="ust">
                <li><a href="./index.html#anim">Ana Sayfa</a></li>
                <li class="dropdown"> <a href="./index.html#bizkimiz" class="dropbtn">Biz Kimiz</a>
                    <div class="dropdown-content" id="myDropdown">
                        <p> <a href="./kadromuz.html">Kadromuz</a> </p>
                        <p> <a href="./index.html#destek">Destek Birimlerimiz</a> </p>
                        <p> <a href="./index.html#aktivite">Sosyal Etkinliklerimiz</a> </p>
                        <p> <a href="./index.html#fark">Hedeflerimiz</a> </p>
                        <p> <a href="./index.html#orjinal">Orjinal Eğitim Materyalleri</a> </p>
                    </div>
                </li>
                <li><a href="./index.html#dogalgida">Doğal Gıda Ürünleri</a></li>
            </ul>
        </nav>
        <div class="logo">
            <div class="logolar"><img src = "./css/logos/logo2.png"/></div>
            <div class="logolar"><img src = "./css/logos/logo.png"/></div>
        </div>
        <nav>
            <ul id="ust">
                <li class="dropdown"> <a href="./index.html#egitim" class="dropbtn">Eğitim Anlayışımız</a>
                    <div class="dropdown-content" id="myDropdown">
                        <p> <a href="./montessori.html">Montessori</a> </p>
                        <p> <a href="./linguafolio.html">LinguaFolio</a> </p>
                    </div>
                </li>
                <li class="dropdown"> <a href="./index.html#galeri" class="dropbtn">Galeri</a>
                    <div class="dropdown-content" id="myDropdown">
                        <p> <a href="./index.html#video">Videolar</a> </p>
                    </div>
                </li>
                <li><a href="./index.html#mail">İletişim</a></li>
            </ul>
            <div class="cubuk"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDU2IDU2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1NiA1NjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxwYXRoIGQ9Ik04LDQwYy00LjQxMSwwLTgsMy41ODktOCw4czMuNTg5LDgsOCw4czgtMy41ODksOC04UzEyLjQxMSw0MCw4LDQweiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTI4LDQwYy00LjQxMSwwLTgsMy41ODktOCw4czMuNTg5LDgsOCw4czgtMy41ODksOC04UzMyLjQxMSw0MCwyOCw0MHoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik00OCw0MGMtNC40MTEsMC04LDMuNTg5LTgsOHMzLjU4OSw4LDgsOHM4LTMuNTg5LDgtOFM1Mi40MTEsNDAsNDgsNDB6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNOCwyMGMtNC40MTEsMC04LDMuNTg5LTgsOHMzLjU4OSw4LDgsOHM4LTMuNTg5LDgtOFMxMi40MTEsMjAsOCwyMHoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0yOCwyMGMtNC40MTEsMC04LDMuNTg5LTgsOHMzLjU4OSw4LDgsOHM4LTMuNTg5LDgtOFMzMi40MTEsMjAsMjgsMjB6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDgsMjBjLTQuNDExLDAtOCwzLjU4OS04LDhzMy41ODksOCw4LDhzOC0zLjU4OSw4LThTNTIuNDExLDIwLDQ4LDIweiIgZmlsbD0iI0ZGRkZGRiIvPgoJPHBhdGggZD0iTTgsMEMzLjU4OSwwLDAsMy41ODksMCw4czMuNTg5LDgsOCw4czgtMy41ODksOC04UzEyLjQxMSwwLDgsMHoiIGZpbGw9IiNGRkZGRkYiLz4KCTxwYXRoIGQ9Ik0yOCwwYy00LjQxMSwwLTgsMy41ODktOCw4czMuNTg5LDgsOCw4czgtMy41ODksOC04UzMyLjQxMSwwLDI4LDB6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNNDgsMTZjNC40MTEsMCw4LTMuNTg5LDgtOHMtMy41ODktOC04LThzLTgsMy41ODktOCw4UzQzLjU4OSwxNiw0OCwxNnoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /> </div>
        </nav>
        </div>
    </section>
    <script>
        var logosmo = -1;

        setInterval(changeImage, 3000);
        changeImage(); //Initial call to hide the images on start

        function changeImage() {
            logosmo = (logosmo + 1) % $('.logolar').length; //Make sure the list wraps back to 0
            console.log(logosmo);
            $('.logolar:eq(' + logosmo + ')').show().siblings().hide();
        }
    </script>
    <section id="menu">
        <ul id="alt">
            <li><a href="./index.html" class="bold">Ana Sayfa</a></li>
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
    <section id="kadro">
        <div class="baslik">Kadromuz</div>
        <div class="baslik2">Yönetim</div>
        <div class="kadroresimtasiyici0">
           <div class="resimcerceve">
                <img src="./img/ddm_avatars_LN.png">
                <div class="ogr-ad">Şükran KAHRAMAN</div>
                <div class="ogr-unvan">Okul Müdürü</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_QL.png">
                <div class="ogr-ad">Dilara ASLAN</div>
                <div class="ogr-unvan">Öğrenci İşleri</div>
           </div>
        </div>
        <div class="baslik2">Öğretmenler</div>
        <div class="kadroresimtasiyici1">
           <div class="resimcerceve">
                <img src="./img/ddm_avatars_CC.png">
                <div class="ogr-ad">Pınar ÖZGÜN</div>
                <div class="ogr-unvan">Sınıf Öğretmeni</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_CF.png">
                <div class="ogr-ad">Melisa KİLİT</div>
                <div class="ogr-unvan">Sınıf Öğretmeni</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_Crystal.png">
                <div class="ogr-ad">Asu Dilay UÇAN</div>
                <div class="ogr-unvan">Sınıf Öğretmeni</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_MF.png">
                <div class="ogr-ad">Fatih ARMAN</div>
                <div class="ogr-unvan">İngilizce Öğretmeni</div>
           </div>
        </div>
        <div class="kadroresimtasiyici2">
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_Kristen.png">
                <div class="ogr-ad">Bilge TAŞ</div>
                <div class="ogr-unvan">Sınıf Öğretmeni</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_CC.png">
                <div class="ogr-ad">Meryem Dilem KAYAN</div>
                <div class="ogr-unvan">İngilizce Öğretmeni</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_Crystal.png">
                <div class="ogr-ad">Tuğba MAKAS</div>
                <div class="ogr-unvan">İngilizce Öğretmeni</div>
           </div>
        </div>
        <div class="kadroresimtasiyici2">
           <div class="resimcerceve">
                <img src="./img/ddm_avatars_Crystal.png">
                <div class="ogr-ad">Eda YÜNCÜ</div>
                <div class="ogr-unvan">Sınıf Öğretmeni</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_Emily.png">
                <div class="ogr-ad">Sariye OKUR</div>
                <div class="ogr-unvan">Yardımcı Öğretmen</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_CF.png">
                <div class="ogr-ad">Özgün KIZILDAĞ</div>
                <div class="ogr-unvan">Uzman Psikolog</div>
           </div>
        </div>
        <div class="baslik2">Branş Öğretmenleri</div>
        <div class="kadroresimtasiyici2">
           <div class="resimcerceve">
                <img src="./img/ddm_avatars_Silvi.png">
                <div class="ogr-ad">Bahar BOZKURT</div>
                <div class="ogr-unvan">Satranç Öğretmeni</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_Vanessa.png">
                <div class="ogr-ad">Elena ULUÇAY</div>
                <div class="ogr-unvan">Orff, Drama ve Piyano Eğitmeni</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_Silvi.png">
                <div class="ogr-ad">Julia TEDESHVILI</div>
                <div class="ogr-unvan">Dans ve Bale Eğitmeni</div>
           </div>
        </div>
        <div class="baslik2">İdari Kadro</div>
        <div class="kadroresimtasiyici2">
           <div class="resimcerceve">
                <img src="./img/ddm_avatars_Kristen.png">
                <div class="ogr-ad">Tülay ÇIKRIKÇIOĞLU</div>
                <div class="ogr-unvan">Mutfak Sorumlusu Aşçı</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_Marisa.png">
                <div class="ogr-ad">Ayşe DORAK</div>
                <div class="ogr-unvan">Temizlik ve Servis Görevlisi</div>
           </div>
            <div class="resimcerceve">
                <img src="./img/ddm_avatars_Emily.png">
                <div class="ogr-ad">Yasemen OKUR</div>
                <div class="ogr-unvan">Temizlik ve Servis Görevlisi</div>
           </div>
        </div>
    </section>
</body>

</html>
