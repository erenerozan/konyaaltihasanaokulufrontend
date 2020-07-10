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
    <section id="pdr">
      <div class="pdr-baslik">
        Pdr nedir?
      </div>
      <p>
        Psikolojik danışmanlık bireyin potansiyelini değerlendiren farklı bakış açılarından ona stratejiler sağlamak gibi çeşitli durumlarda profesyonel destek veren bir alandır.
 Psikolojik danışmanlık servisi olarak sağlıklı ve yaratıcı bireyler yetiştirmeyi danışmanlık hizmetlerini mesleki etikler doğrultusunda gizlilik çerçevesinde yürütmeyi, ailelere çocuk gelişimi, ergenlik, okul problemleriyle ilgili danışmanlık yapmayı amaçlıyoruz.
      </p>
      <p><b>Çalışma İlkelerimiz;</b></p>
      <ul>
        <li>
          Etik değerler
        </li>
        <li>
          Süreklilik
        </li>
        <li>
          Gizlilik
        </li>
        <li>
          Çözüm odaklılık
        </li>
        <li>
          Yeterlilik
        </li>
      </ul>
      <p>
        Bu ilkeler doğrultusunda psikoloğumuz ile çalışma yürüten servisimiz, okulumuz, ve öğrencilerimizin  gerekliliklerine göre planlamakta ve hedeflemektedir.
      </p>

      <p class="pdr-alt-baslik">
        Çocuğun Okula Uyumunun Desteklenmesi
      </p>
      <p>
        Okula başlama, çocuğun yaşamındaki önemli dönüm noktalarından biridir. Yeni yaşamsal becerileri içeren okula başlama süreci ve bu sürecin gerektirdiği uyum, çocuğun belli bir düzeyde zihinsel, sosyal ve duygusal olgunluğa erişmiş olmasını gerektirmektedir. Çocuk için okul, alıştığı ve kendini güvende hissettiği aile ortamı dışındaki bir ortama doğru atılan belki de ilk adımdır. Bu nedenle uyulması gereken yeni kuralları, yerine getirilmesi gereken yeni görevleri, yeni arkadaşları ve öğretmeni ile uyum sağlaması gereken birçok farklı özelliği içeren yeni bir sosyal çevre konumundadır. Bu süreçte çocuğun okula uyumunun desteklenmesi önem arz etmektedir.
      </p>

      <p class="pdr-alt-baslik">
        Okul Öncesi Dönemde Arkadaş İlişkileri, Akran Zorbalığı
      </p>
      <p>
        Okul öncesi dönemde, çocuğun sosyal ilişkilerini ve dolayısıyla akran ilişkilerini şekillendiren çeşitli gelişim öğeleri bulunmaktadır. Okul öncesi dönemde, akran ilişkilerinin temel niteliklerine bakıldığında, bu dönem çocuğu için onaylanmanın önemli bir sosyal destek olduğu görülmektedir. Akranlardan gelen yardımı kabullenme ve gerekli durumlarda akranlara yardım etme de ilişkileri geliştirecek diğer unsurlardandır. Yine bu yaşlarda en çok rastladığımız diğer durum ise akran zorbalığıdır. Akran zorbalığı, bir ya da birden fazla öğrencinin kendilerinden daha güçsüz öğrencileri kasıtlı ve sürekli olarak rahatsız etmesiyle sonuçlanan ve mağdurun (kurbanın) kendisini koruyamayacak durumda olduğu bir saldırganlık türüdür*  Araştırmalarda, okul öncesi dönemde (özellikle 4 yaş civarı için) zorbaların çok da kasıtlı davranmadığına yer verilse de, eğer zorbalık sürekli bir şekilde devam ediyorsa, mağdur durumdan çok fazla etkileniyor ve okul motivasyonu da dahil tüm yaşamına sirayet eden bir hal alıyor.
      </p>

      <p class="pdr-alt-baslik">
        Çocuklarda Davranış Problemleri ve Çözüm Yolları
      </p>
      <p>
        Davranış bozuklukları; çocuğun çeşitli ruhsal ve bedensel nedenlere bağlı, iç çatışmalarını davranışlarına aktarması sonucu ortaya çıkar. Hırçınlık, sinirlilik, saldırganlık, inatçılık, yalan söyleme, bir şeyler çalma, küfür gibi davranışlar davranış bozukluklarına girer.
        Çocuklar her yeni gelişim dönemine, basamağına geçtiklerinde birtakım yeni beceriler kazanırlar. Çocuğun edindiği her yeni beceri, çözülmesi gereken sorunu da beraberinde getirir.
      </p>

      <p class="pdr-alt-baslik">
        Çocuklarda Korkular ve Bunlarla Baş Etme Yolları
      </p>
      <p>
        Her normal insanda olduğu gibi çocukların da korku ve fobilerinin olması çok doğaldır. Hatta tehlikelerden korunmak adına çoğu zaman  gerekli bir durumdur. Tabi bu korkunun sürekli olup olmadığı da oldukça önem arz etmektedir. Çocuğun korkuları günlük yaşamını engelleyen, çocuğun gelişimini olumsuz yönde etkileyen bir hal aldıysa bu durum artık koruyucu özelliğini yitirmiş ve çocuğa zarar verme boyutuna gelmiş demektir.
        Korkuların en çok 2-5 yaş arasında ortaya çıktığı bilinmektedir. Korkuların yaşlara göre farklılık gösterdiği de unutulmamalıdır. Örneğin bir bebek, gürültüden, yabancılardan , anne babadan ayrı kalmaktan korkarken; dört yaşındaki bir çocuk, karanlıktan, hayvanlardan korkabilmektedir.
      </p>

      <p class="pdr-alt-baslik">
        Okul Öncesi Çocuğun Cinsel Eğitimi
      </p>
      <p>
        Özellikle okul öncesi dönemde, çocukların bu sorularına aileler nasıl yanıt vermeleri gerektiğini bilemiyorlar. Bazı aileler çocuğun sorusunu duymazdan gelirken, bazı aileler çocuğun aklını karıştırabilecek yanıtlar verebiliyorlar.
        Çocuklara okul öncesi dönemde verilecek olan cinsellik eğitimi; kendi fizyolojisini tanıtmak, bedensel sınırları anlatmak, karşı cinsteki arkadaşından ne açıdan farklı olduğunu aktarabilmek, iyi ve kötü dokunuşu ayırt edebilmesini öğretmektir.
      </p>

      <p class="pdr-alt-baslik">
        Uygun Tutum ve Davranışlar, Disiplin Anlayışı, Ödül ve Cezanın Yeri
      </p>
      <p>
        Ailede; anne babanın çocukla nasıl iletişim kurduğu, istendik davranışları nasıl kazandırdığı, çocuğun aile içinde bir birey olarak kabul edilip edilmediği, sevginin  nasıl ifade edildiği, eğitimde kullandığı disiplin yöntemleri gibi hususlar anne baba tutumunun nasıl olduğunu belirler.
      </p>

      <p class="pdr-alt-baslik">
        Bilgisayar ve Medyanın Çocuk Üzerinde Etkileri
      </p>
      <p>
        Medya araçlarının çocuklar üzerindeki etkileri olumlu ve olumsuz etkileri olabilmekte. Medyanın çocuk üzerindeki olumlu ve olumsuz etkilerinin aslında medya araçlarının kullanım şekliyle doğrudan ilişkili olduğu görülmektedir.
      </p>

      <p class="pdr-alt-baslik">
        Çocuklara güven duygusu nasıl verilmeli
      </p>
      <p>
        Özgüven, çocuklarının doğumundan itibaren her ana-babanın uğraştığı bir konu. Çocuğun özgüvenini geliştirmek, korumak ve artmasını sağlamak, çocuk yetiştirme becerilerinin başında gelir; çünkü yeterince gelişmiş özgüven duygusu, hem öğrenme yetisini, hem sosyal ilişkilerde başarıyı, hem de gelişim yüzlerini etkileyen önemli bir duygudur.
      </p>
    </section>
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
