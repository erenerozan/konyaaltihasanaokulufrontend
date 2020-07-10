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
    <section id="motsite">
        <div class="baslik">Montessori</div>
        <div class="baslik2">Montesorri Eğitim Sistemi Dünyanın en tanınmış ve kaliteli anaokulu öğretim modelidir.</div>
        <!--<div class="kadroresimtasiyici0">
            <iframe src="https://www.youtube.com/embed/ZAbrwAAW5Dk" frameborder="0" allowfullscreen></iframe>
			<iframe src="https://www.youtube.com/embed/daLcdiE1uHs" frameborder="0" allowfullscreen></iframe>
        </div>-->
        <div class="baslik2">Maria Montessori 1907 yılında ilk çocukevi “Casa dei Banbini”de engelli olmayan çocuklarla çalışmalarında yaptığı gözlemlerde çocukların nelerden hoşlandıklarını ve nelerden hoşlanmadıklarını saptar. Maria Montessori çocukların; ödüllerden cezalardan yetişkin tarafından programlanmış eğitimden oyuncaklardan şekerlemelerden öğretmen masasından toplu derslerden hoşlanmadıklarını, özgür seçimden, hatalarını kendilerinin denetiminden, hareket etmekten, sessizlikten, sosyal ilişkilerini kendileri tarafından kurulmasından, çevrenin düzenli ve temiz olmasından, özgür faaliyete dayalı bir disiplinden, kitapsız okuma ve yazmadan alıştırmaların tekrarından, hoşlandıklarını gözlemledi. Eğitim sistemini çocuktan yola çıkarak kurdu.

Çocuğun güçlü bir karakterde yetişmesini sağlamak için “bir bakıma fiziksel ve ruhsal bir hijyene” ihtiyaç vardır. Bu durumda yetişkinlerin görevi çocuğun içindeki yeteneği ve gizil gücü uyandırmak ve onları gelişim sürecinde desteklemektir. Montessori okullarında çocuklar, istedikleri materyalle, istedikleri zaman, istedikleri yerde calışırlar. Dolayısıyla Montessori yönteminin özü, çocuğa önceden hazırlanmış bir çevrede kendi kendini geliştirebileceği şekilde hareket ve faaliyet özgürlüğü tanımayı amaçlayan, kendi kendine oluşan ve gelişen bir yöntem ve sistem anlayışıdır. “Çocuğa hazırlanmış bir çevrede, çocuğun kişiliğini oluşturması için özgürlük tanıyan, kişiliğinin gelişim sürecini destekleyen, çocuğun kendi onuru içerisinde bireyselleşmesi ve sosyalleşmesini ciddiye alan, bireye özgü adil bir eğitimdir.</div>
    </section>
</body>

</html>
