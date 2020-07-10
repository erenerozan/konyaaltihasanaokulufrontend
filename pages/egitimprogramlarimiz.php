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
    <link rel="icon" type="image/png" sizes="192x192" href="./css/android-icon-192x192.png">
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
        $(document).ready(function() {
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
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
</head>

<body>
    <?php include '../components/menu2.php'; ?>
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
    <?php include '../components/menuresponsive.php'; ?>
    <div class="infoBar">
        <div class="infowrap">
            <div class="baslik">Eğitim Programlarımız</div>
            <div class="location">
                Ana Sayfa / Eğitim Programlarımız
            </div>
        </div>
    </div>
    <section id="hakkimizda">
        <!-- <div class="baslik">Hakkımızda</div> -->
        <div class="liste" style="width:130px">
            <button class="tablink" onclick="openCity(event, 'bizkimiztab')">Montessori Eğitim Sistemi</button>
            <button class="tablink" onclick="openCity(event, 'hedeflerimiztab')">Bilingual System- Çift Dilli Eğitim</button>
            <button class="tablink" onclick="openCity(event, 'psikolojiktab')">Mathazone Educational Programme</button>
            <button class="tablink" onclick="openCity(event, 'dogalgidatab')">STEM + A </button>
            <button class="tablink" onclick="openCity(event, 'destektab')">GEMS Eğitim Modeli</button>
            <button class="tablink" onclick="openCity(event, 'sosyalaktivite')">Sosyal Aktiviteler</button>
            <button class="tablink" onclick="openCity(event, 'orjinalmateryaller')">Orijinal Eğitim Materyalleri</button>
        </div>

        <div class="tabs">


            <div id="bizkimiztab" class="w3-container city">
                <h2>Montessori Eğitim Sistemi</h2>
                <p>Montesorri Eğitim Sistemi Dünyanın en tanınmış ve kaliteli anaokulu öğretim modelidir. Maria Montessori 1907 yılında ilk çocukevi “Casa dei Banbini”de engelli olmayan çocuklarla çalışmalarında yaptığı gözlemlerde çocukların nelerden hoşlandıklarını ve nelerden hoşlanmadıklarını saptar. Maria Montessori çocukların; ödüllerden, cezalardan, yetişkin tarafından programlanmış eğitimden, oyuncaklardan, şekerlemelerden ve öğretmen masasından hoşlanmadıklarını, özgür seçimden, hatalarını kendilerinin denetiminden, hareket etmekten, sessizlikten, sosyal ilişkilerini kendileri tarafından kurulmasından, çevrenin düzenli ve temiz olmasından, özgür faaliyete dayalı bir disiplinden, kitapsız okuma ve yazmadan, alıştırmaların tekrarından hoşlandıklarını gözlemledi. Eğitim sistemini çocuktan yola çıkarak kurdu. Çocuğun güçlü bir karakterde yetişmesini sağlamak için “bir bakıma fiziksel ve ruhsal bir hijyene” ihtiyaç vardır. Bu durumda yetişkinlerin görevi çocuğun içindeki yeteneği ve gizil gücü uyandırmak ve onları gelişim sürecinde desteklemektir. Montessori okullarında çocuklar, istedikleri materyalle, istedikleri zaman, istedikleri yerde çalışırlar. Dolayısıyla Montessori yönteminin özü, çocuğa önceden hazırlanmış bir çevrede kendi kendini geliştirebileceği şekilde hareket ve faaliyet özgürlüğü tanımayı amaçlayan, kendi kendine oluşan ve gelişen bir yöntem ve sistem anlayışıdır. “Çocuğa hazırlanmış bir çevrede, çocuğun kişiliğini oluşturması için özgürlük tanıyan, kişiliğinin gelişim sürecini destekleyen, çocuğun kendi onuru içerisinde bireyselleşmesi ve sosyalleşmesini ciddiye alan, bireye özgü adil bir eğitimdir. Ana hatları ile Montessori sisteminde öğretmen çocuğun kendi kendine öğrenmesine izin verir. Çocuğa diğer eğitim sistemlerinden farklı olarak kendi öğrenmesine yardımcı olan arkadaştır. Montessori eğitim sistemi, özgüveni yüksek, öğrenmeyi seven, kendisi ile barışık çocuklar yetiştirir...</p>
                <p><b>‘’Bana kendim yapabilmem için yardım et’’</b> düşüncesine dayalı Montessori programlarımız ile çocuklarımızın yaparak, yaşayarak ve deneyimleyerek öğrenmelerini önemsiyoruz.</p>
            </div>

            <div id="hedeflerimiztab" class="w3-container city" style="display:none">
                <h2>Bilingual System- Çift Dilli Eğitim</h2>
                <p><b>Yeni Bir Dil Edindiriyoruz…</b> </p>
                <p>Erken çocukluk döneminde dil gelişiminin çocuğun bilişsel gelişiminde çok önemli bir yeri vardır. Yapılan araştırmalara göre dil becerisi gelişmiş olan çocukların akademik başarısı da daha yüksektir.
                    Okul öncesi dönemde, yabancı dil öğreniminin, çocuklarda soyut düşünme yeteneğini, kavram geliştirme ve değerlendirme gibi üst düzey bilişsel becerilerini geliştirdiğini bilinmektedir. Doğal öğrenme yeteneği, merak dürtüsü ve araştırma isteği yeni bilgi kazanımında yetişkinlere oranla çocuklar için büyük bir avantaj sağlamaktadır. Bu avantaj yabancı dil öğreniminde de oldukça önemlidir.
                    Bilimsel araştırmalara göre, çocuklar için yabancı bir dili öğrenmenin en etkili yolu, küçük yaşlardan itibaren dili günlük rutinlerinde deneyimlemektir. Bu bilgiler ışığında okulumuzda İngilizce öğretiminde “Çift Dilli Eğitim” programı uygulanmaktadır.
                </p>
            </div>

            <div id="psikolojiktab" class="w3-container city" style="display:none">
                <h2>Mathazone Educational Programme ile Masal Tadında Matematiğe Hazır mısınız?</h2>
                <p>Mathazone okul öncesi̇ dönemden başlayarak çocuklar için matematiği eğlenceli bir oyuna dönüştüren, hayatı öğrenme ve deneyimleme programıdır. Mathazone Eğitim Programı ile çocuklarımıza matematiği eğlenceli bir oyuna dönüştürerek deneyimlendireceğiz.
                    Mathazone ile matematik korkulu bir rüya olmaktan çıkar, hayatı anlamlandırmaya ve ilişki̇ kurmaya yarayan bir araç haline gelir. Mathazone Programı, kavramsal dizilim ve gelişim psikolojisine uygun altyapısı ile okullar, öğretmenler ve çocuk yetiştiren herkes için çok değerli̇ bir kaynaktır. Mathazone kahramanları çocukların dünyasına kendi hikâyeleriyle girer ve bu kahramanlar, çocuklara matematik ile gerçek hayat arasında ilişki kurmayı öğretir. Oyun oynadığını ya da eğlenceli̇ bir masal dinlediğini̇ düşünen çocuğun matematiksel temeli, hiç fark etmeden oluşmuş olur. Bu sayede matematik bir düşünce biçimi haline gelir.
                </p>
                <p><b>Kısacası Mathazone, masal tadında matematiktir. </b> </p>
                <p>Mathazone 0-7 yaş grubundaki çocukların öğrenme psikolojisine en uygun şekilde, matematiğin evrensel sıralamasını da bozmadan, sağlam matematik temeli kurmanıza rehberlik eden, sistematik bir programdır.
                    Müzik, resim, spor, edebiyat, mühendislik gibi birbirinden farklı mesleklerde ya da hayatın her alanında matematik var ama acaba bizim birey olarak her alana yeteneğimiz var mı? Elbette bireyin her alanda ustalık sergilemesi mümkün değildir ancak her alandan istifade ederek kendi ilgi alanlarını keşfetmesi ve farklı oranlarda hayatına katması mümkündür. Bu da çok yönlü bir insan olma yolunda önümüzü açtığı gibi, güçlü ve zayıf yönlerimizi de keşfetmemizi sağlar. Güçlü yönler, öğrenmemizi ve başarma duygumuzu destekler; zayıf yönler ise bize neler ile çok vakit kaybetmememiz gerektiğini söyler. Aslında tüm bunlar insanın mutlu olması ve problemlere daha kolay çözüm bulmasına yardımcı olmaktadır
                    .</p>
            </div>

            <div id="dogalgidatab" class="w3-container city" style="display:none">
                <h2>STEM + A </h2>
                <p>STEM eğitimi, fen (science), teknoloji (technology), mühendislik (engineering) ve matematik (mathematics) gibi dört önemli disiplinin bir araya getirilmesiyle oluşturulan bir öğretim modeli olarak tanımlanıyor.
                    Tüm bu alanlarda yetkin bireyler yetiştirmeyi amaçlayan STEM, öğrencilere günlük yaşamda problemlerle başa çıkmanın da bir matematiği olduğunu anlatıp, farklı düşünmelerini ve çeşitli süreçlere yeni çözümler arama kabiliyetlerini artırmalarını sağlayacak bir yaklaşımdır…

                </p>
                <p><b>STEM Eğitiminin Özellikleri ve Amaçları</b> </p>
                <p>STEM eğitiminin en temel özelliklerinden biri; mühendislik tasarımının bilim, matematik ve teknoloji öğrenimi ile birleşmesi olarak görülüyor. Öğrenciler, fen bilgisi, matematik ve teknoloji alanlarındaki bilgi ve becerilerini, gerçek hayattaki problemlerini çözmek için kullanacak aktivitelerle geliştiriyorlar. Yani, modelin öne çıkan bir diğer temel özelliği de, öğrencilere, bu dört disiplinden hem günlük yaşamlarında, hem de ileride meslek hayatlarında kullanabilecekleri pratiklerin öğretilmesi.
                    STEM Eğitimi Sistemi, bilim, matematik ve teknoloji alanlarıyla da sınırlı kalmıyor. İstenildiği takdirde, dilbilgisi, edebiyat ve güzel sanatlar gibi bölümlere de kolaylıkla adapte edilebiliyor.
                    STEM eğitiminin tüm prensiplerinin ve faydalarının, sanatın içine ya da sanat yoluyla entegre edilmesi yaklaşımına ise STEM +A deniyor. STEM eğitimini bir başka seviyeye taşıyan STEM+ A ; fen, teknoloji, mühendislik ve matematik dallarının arasına beşinci bir disiplin olarak sanatı (Art) katıyor.
                    STEM + A, öğrencilerin bu önemli alanlarda öğrendikleri ile sanat uygulamaları, öğeleri, tasarım ilkeleri ve standartları arasında bir bağ kurarak öğrenmelerine olanak tanıyor.
                </p>
            </div>
            <div id="destektab" class="w3-container city" style="display:none">
                <h2>GEMS Eğitim Modeli</h2>
                <p><b>Gems Eğitim Programı (Great Explorations in Math and Science) - Fende ve Matematikte Büyük Araştırmalar;</b></p>
                <p>GEMS etkinliklerinin amacı, temel bilimsel kavram ve yöntemleri açıklarken hayal gücünü etkilemektir. Gözetimli keşif yöntemi bireyin öğrenime doğrudan katılımını vurgular. Bu tür etkinlikler, sadece ders kitaplarının kullanıldığı yönteme oranla daha fazla güdülenme yaratır ve bilim adamlarının gerçekte ne yaptığının daha gerçekçi bir şekilde anlaşılmasına katkıda bulunur. GEMS etkinlikleri çocuklarımızın temel fen ve matematik kavramlarını anlamalarını ve günlük yaşamlarında gerek duydukları sorgulama alışkanlığını edinmelerini sağlar. Fen ve matematik etkinlikleriyle çocuklar;</p>
                <p>
                    <li>Gözlem, deney, araştırma, inceleme ve keşfetmeye yönelik bilimsel beceriler kazanırken,</li>
                </p>
                <p>
                    <li>Matematik etkinlikleri yoluyla da sınıflandırma, gruplama, eşleme, sıralama, ölçme, uzaysal konum gibi pek çok kavramı aktif olarak öğrenirler.</li>
                </p>
            </div>
            <div id="sosyalaktivite" class="w3-container city" style="display:none">
                <h2>Sosyal Aktiviteler</h2>
                <p>Eğitim sistemimizi, önceden planlamış olduğumuz program doğrultusunda her biri kendi alanında uzmanlaşmış eğitmenlerimizle; </p>
                <ul>
                    <li>Görsel Sanatlar</li>
                    <li>Müzik</li>
                    <li>Ritim ve Orff</li>
                    <li>Piyano</li>
                    <li>Bale</li>
                    <li>Satranç</li>
                    <li>Jimnastik ve Çocuk Yogası</li>
                </ul>
                <p> gibi branş dersleri ile destekliyoruz.</p>
            </div>
            <div id="orjinalmateryaller" class="w3-container city" style="display:none">
                <h2>Orijinal Eğitim Materyalleri</h2>
                <p>Montessori Eğitim Sisteminin en önemli ve ayrılmaz bir parçası da lisanslı Montessori sistemine uygun eğitim materyalleri ve oyuncaklarıdır. Bu materyal ve oyuncaklara sahip olmayan bir anaokulunun Montessori Eğitim Sistemine uygun çocuk yetiştirmesi mümkün değildir.</p>
                <p> Mathazone Eğitim Programında kullanılan tüm materyal ve kaynaklarımız Mathazone Genel Merkezi’nden yaş grubuna uygun nitelikte hazırlanıp tarafımıza gönderilir. </p>
            </div>
        </div>

        <script>
            function openCity(evt, cityName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("city");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " w3-red";
            }
        </script>
    </section>
    <section id="hakkimizdaAccordion">
        <button class="accordion">Montessori Eğitim Sistemi</button>
        <div class="panel">
            <p>Montesorri Eğitim Sistemi Dünyanın en tanınmış ve kaliteli anaokulu öğretim modelidir. Maria Montessori 1907 yılında ilk çocukevi “Casa dei Banbini”de engelli olmayan çocuklarla çalışmalarında yaptığı gözlemlerde çocukların nelerden hoşlandıklarını ve nelerden hoşlanmadıklarını saptar. Maria Montessori çocukların; ödüllerden, cezalardan, yetişkin tarafından programlanmış eğitimden, oyuncaklardan, şekerlemelerden ve öğretmen masasından hoşlanmadıklarını, özgür seçimden, hatalarını kendilerinin denetiminden, hareket etmekten, sessizlikten, sosyal ilişkilerini kendileri tarafından kurulmasından, çevrenin düzenli ve temiz olmasından, özgür faaliyete dayalı bir disiplinden, kitapsız okuma ve yazmadan, alıştırmaların tekrarından hoşlandıklarını gözlemledi. Eğitim sistemini çocuktan yola çıkarak kurdu. Çocuğun güçlü bir karakterde yetişmesini sağlamak için “bir bakıma fiziksel ve ruhsal bir hijyene” ihtiyaç vardır. Bu durumda yetişkinlerin görevi çocuğun içindeki yeteneği ve gizil gücü uyandırmak ve onları gelişim sürecinde desteklemektir. Montessori okullarında çocuklar, istedikleri materyalle, istedikleri zaman, istedikleri yerde çalışırlar. Dolayısıyla Montessori yönteminin özü, çocuğa önceden hazırlanmış bir çevrede kendi kendini geliştirebileceği şekilde hareket ve faaliyet özgürlüğü tanımayı amaçlayan, kendi kendine oluşan ve gelişen bir yöntem ve sistem anlayışıdır. “Çocuğa hazırlanmış bir çevrede, çocuğun kişiliğini oluşturması için özgürlük tanıyan, kişiliğinin gelişim sürecini destekleyen, çocuğun kendi onuru içerisinde bireyselleşmesi ve sosyalleşmesini ciddiye alan, bireye özgü adil bir eğitimdir. Ana hatları ile Montessori sisteminde öğretmen çocuğun kendi kendine öğrenmesine izin verir. Çocuğa diğer eğitim sistemlerinden farklı olarak kendi öğrenmesine yardımcı olan arkadaştır. Montessori eğitim sistemi, özgüveni yüksek, öğrenmeyi seven, kendisi ile barışık çocuklar yetiştirir...</p>
            <p><b>‘’Bana kendim yapabilmem için yardım et’’</b> düşüncesine dayalı Montessori programlarımız ile çocuklarımızın yaparak, yaşayarak ve deneyimleyerek öğrenmelerini önemsiyoruz.</p>
        </div>

        <button class="accordion">Bilingual System- Çift Dilli Eğitim</button>
        <div class="panel">
            <p><b>Yeni Bir Dil Edindiriyoruz…</b> </p>
            <p>Erken çocukluk döneminde dil gelişiminin çocuğun bilişsel gelişiminde çok önemli bir yeri vardır. Yapılan araştırmalara göre dil becerisi gelişmiş olan çocukların akademik başarısı da daha yüksektir.
                Okul öncesi dönemde, yabancı dil öğreniminin, çocuklarda soyut düşünme yeteneğini, kavram geliştirme ve değerlendirme gibi üst düzey bilişsel becerilerini geliştirdiğini bilinmektedir. Doğal öğrenme yeteneği, merak dürtüsü ve araştırma isteği yeni bilgi kazanımında yetişkinlere oranla çocuklar için büyük bir avantaj sağlamaktadır. Bu avantaj yabancı dil öğreniminde de oldukça önemlidir.
                Bilimsel araştırmalara göre, çocuklar için yabancı bir dili öğrenmenin en etkili yolu, küçük yaşlardan itibaren dili günlük rutinlerinde deneyimlemektir. Bu bilgiler ışığında okulumuzda İngilizce öğretiminde “Çift Dilli Eğitim” programı uygulanmaktadır.
            </p>
        </div>

        <button class="accordion">Mathazone Educational Programme</button>
        <div class="panel">
            <p>Mathazone okul öncesi̇ dönemden başlayarak çocuklar için matematiği eğlenceli bir oyuna dönüştüren, hayatı öğrenme ve deneyimleme programıdır. Mathazone Eğitim Programı ile çocuklarımıza matematiği eğlenceli bir oyuna dönüştürerek deneyimlendireceğiz.
                Mathazone ile matematik korkulu bir rüya olmaktan çıkar, hayatı anlamlandırmaya ve ilişki̇ kurmaya yarayan bir araç haline gelir. Mathazone Programı, kavramsal dizilim ve gelişim psikolojisine uygun altyapısı ile okullar, öğretmenler ve çocuk yetiştiren herkes için çok değerli̇ bir kaynaktır. Mathazone kahramanları çocukların dünyasına kendi hikâyeleriyle girer ve bu kahramanlar, çocuklara matematik ile gerçek hayat arasında ilişki kurmayı öğretir. Oyun oynadığını ya da eğlenceli̇ bir masal dinlediğini̇ düşünen çocuğun matematiksel temeli, hiç fark etmeden oluşmuş olur. Bu sayede matematik bir düşünce biçimi haline gelir.
            </p>
            <p><b>Kısacası Mathazone, masal tadında matematiktir. </b> </p>
            <p>Mathazone 0-7 yaş grubundaki çocukların öğrenme psikolojisine en uygun şekilde, matematiğin evrensel sıralamasını da bozmadan, sağlam matematik temeli kurmanıza rehberlik eden, sistematik bir programdır.
                Müzik, resim, spor, edebiyat, mühendislik gibi birbirinden farklı mesleklerde ya da hayatın her alanında matematik var ama acaba bizim birey olarak her alana yeteneğimiz var mı? Elbette bireyin her alanda ustalık sergilemesi mümkün değildir ancak her alandan istifade ederek kendi ilgi alanlarını keşfetmesi ve farklı oranlarda hayatına katması mümkündür. Bu da çok yönlü bir insan olma yolunda önümüzü açtığı gibi, güçlü ve zayıf yönlerimizi de keşfetmemizi sağlar. Güçlü yönler, öğrenmemizi ve başarma duygumuzu destekler; zayıf yönler ise bize neler ile çok vakit kaybetmememiz gerektiğini söyler. Aslında tüm bunlar insanın mutlu olması ve problemlere daha kolay çözüm bulmasına yardımcı olmaktadır
                .</p>
        </div>

        <button class="accordion">STEM + A </button>
        <div class="panel">
            <p>STEM eğitimi, fen (science), teknoloji (technology), mühendislik (engineering) ve matematik (mathematics) gibi dört önemli disiplinin bir araya getirilmesiyle oluşturulan bir öğretim modeli olarak tanımlanıyor.
                Tüm bu alanlarda yetkin bireyler yetiştirmeyi amaçlayan STEM, öğrencilere günlük yaşamda problemlerle başa çıkmanın da bir matematiği olduğunu anlatıp, farklı düşünmelerini ve çeşitli süreçlere yeni çözümler arama kabiliyetlerini artırmalarını sağlayacak bir yaklaşımdır…

            </p>
            <p><b>STEM Eğitiminin Özellikleri ve Amaçları</b> </p>
            <p>STEM eğitiminin en temel özelliklerinden biri; mühendislik tasarımının bilim, matematik ve teknoloji öğrenimi ile birleşmesi olarak görülüyor. Öğrenciler, fen bilgisi, matematik ve teknoloji alanlarındaki bilgi ve becerilerini, gerçek hayattaki problemlerini çözmek için kullanacak aktivitelerle geliştiriyorlar. Yani, modelin öne çıkan bir diğer temel özelliği de, öğrencilere, bu dört disiplinden hem günlük yaşamlarında, hem de ileride meslek hayatlarında kullanabilecekleri pratiklerin öğretilmesi.
                STEM Eğitimi Sistemi, bilim, matematik ve teknoloji alanlarıyla da sınırlı kalmıyor. İstenildiği takdirde, dilbilgisi, edebiyat ve güzel sanatlar gibi bölümlere de kolaylıkla adapte edilebiliyor.
                STEM eğitiminin tüm prensiplerinin ve faydalarının, sanatın içine ya da sanat yoluyla entegre edilmesi yaklaşımına ise STEM +A deniyor. STEM eğitimini bir başka seviyeye taşıyan STEM+ A ; fen, teknoloji, mühendislik ve matematik dallarının arasına beşinci bir disiplin olarak sanatı (Art) katıyor.
                STEM + A, öğrencilerin bu önemli alanlarda öğrendikleri ile sanat uygulamaları, öğeleri, tasarım ilkeleri ve standartları arasında bir bağ kurarak öğrenmelerine olanak tanıyor.
            </p>
        </div>

        <button class="accordion">GEMS Eğitim Modeli</button>
        <div class="panel">
            <p><b>Gems Eğitim Programı (Great Explorations in Math and Science) - Fende ve Matematikte Büyük Araştırmalar;</b></p>
            <p>GEMS etkinliklerinin amacı, temel bilimsel kavram ve yöntemleri açıklarken hayal gücünü etkilemektir. Gözetimli keşif yöntemi bireyin öğrenime doğrudan katılımını vurgular. Bu tür etkinlikler, sadece ders kitaplarının kullanıldığı yönteme oranla daha fazla güdülenme yaratır ve bilim adamlarının gerçekte ne yaptığının daha gerçekçi bir şekilde anlaşılmasına katkıda bulunur. GEMS etkinlikleri çocuklarımızın temel fen ve matematik kavramlarını anlamalarını ve günlük yaşamlarında gerek duydukları sorgulama alışkanlığını edinmelerini sağlar. Fen ve matematik etkinlikleriyle çocuklar;</p>
            <p>
                <li>Gözlem, deney, araştırma, inceleme ve keşfetmeye yönelik bilimsel beceriler kazanırken,</li>
            </p>
            <p>
                <li>Matematik etkinlikleri yoluyla da sınıflandırma, gruplama, eşleme, sıralama, ölçme, uzaysal konum gibi pek çok kavramı aktif olarak öğrenirler.</li>
            </p>
        </div>

        <button class="accordion">Sosyal Aktiviteler</button>
        <div class="panel">
        <p>Eğitim sistemimizi, önceden planlamış olduğumuz program doğrultusunda her biri kendi alanında uzmanlaşmış eğitmenlerimizle; </p>
                <ul>
                    <li>Görsel Sanatlar</li>
                    <li>Müzik</li>
                    <li>Ritim ve Orff</li>
                    <li>Piyano</li>
                    <li>Bale</li>
                    <li>Satranç</li>
                    <li>Jimnastik ve Çocuk Yogası</li>
                </ul>
                <p> gibi branş dersleri ile destekliyoruz.</p>
        </div>

        <button class="accordion">Orijinal Eğitim Materyalleri</button>
        <div class="panel">
            <p>Montessori Eğitim Sisteminin en önemli ve ayrılmaz bir parçası da lisanslı Montessori sistemine uygun eğitim materyalleri ve oyuncaklarıdır. Bu materyal ve oyuncaklara sahip olmayan bir anaokulunun Montessori Eğitim Sistemine uygun çocuk yetiştirmesi mümkün değildir.</p>
            <p> Mathazone Eğitim Programında kullanılan tüm materyal ve kaynaklarımız Mathazone Genel Merkezi’nden yaş grubuna uygun nitelikte hazırlanıp tarafımıza gönderilir. </p>
        </div>

        

        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

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