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
            <div class="baslik">Hakkımızda</div>
            <div class="location">
                Ana Sayfa / Hakkımızda
            </div>
        </div>
    </div>
    <section id="hakkimizda">
        <!-- <div class="baslik">Hakkımızda</div> -->
        <div class="liste" style="width:130px">
            <button class="tablink" onclick="openCity(event, 'bizkimiztab')">Biz Kimiz?</button>
            <button class="tablink" onclick="openCity(event, 'hedeflerimiztab')">Hedeflerimiz</button>
            <button class="tablink" onclick="openCity(event, 'psikolojiktab')">Psikolojik Danışmanlık ve Rehberlik</button>
            <button class="tablink" onclick="openCity(event, 'dogalgidatab')">Doğal Gıda Ürünleri</button>
            <button class="tablink" onclick="openCity(event, 'destektab')">Destek Birimleri</button>
        </div>

        <div class="tabs">


            <div id="bizkimiztab" class="w3-container city">
                <h2>Biz Kimiz?</h2>
                <p>Özel Konyaaltı Has Anaokulu olarak Milli Eğitim Bakanlığı’na bağlı bir kurumuz. Okulumuzda Montessori Eğitimi Sistemi ile tam zamanlı İngilizce Eğitim Modeli eş zamanlı olarak uygulanmaktadır. Okulumuz Mathazone Eğitim Programı temsilcisidir. 3-4-5 yaş sınıflarımızın yanısıra 24-36 ay oyun gruplarımız bulunmaktadır. Okul öncesinde çocuklarımızın oyun oynayarak öğrenmesini amaçlayan eğitim alt yapımız, birçok bilimsel eğitim programıyla desteklenmektedir. Kısaca bu eğitim programlarından bahsetmek gerekirse;</p>
                <p><b>Montessori Eğitim Sistemi,</b> özgüveni yüksek, öğrenmeyi seven, kendisi ile barışık çocuklar yetiştirir. Bu sistemde öğretmen, diğer eğitim sistemlerinden farklı olarak çocuğun kendi kendine öğrenmesine yardımcı olan bir rehberdir.</p>
                <p><b>Bilingual System(Çift Dilli Eğitim)</b> ile İngilizcede anadil becerisi edindirmeyi hedefliyoruz. Bilimsel araştırmalara göre, çocuklar için yabancı bir dili öğrenmenin en etkili yolu, küçük yaşlardan itibaren dili günlük rutinlerinde deneyimlemektir. Buradan hareketle anaokulumuzda İngilizce öğretiminde “Çift Dilli Eğitim” yöntemi uygulanmaktadır.</p>
                <p><b>Mathazone Educational Programme </b>ile matematik korkulu bir rüya olmaktan çıkar, hayatı anlamlandırmaya ve ilişki kurmaya yarayan bir araç haline gelir. Mathazone okul öncesi̇ dönemden başlayarak çocuklar için matematiği eğlenceli bir oyuna dönüştüren, hayatı öğrenme ve deneyimleme programıdır. Çocuklarımıza matematiği eğlenceli bir oyuna dönüştürerek deneyimlendireceğiz.</p>
                <p><b>STEM + A Eğitimi</b>fen (science), teknoloji (technology), mühendislik (engineering) ve matematik (mathematics) gibi dört önemli disiplinin bir araya getirilmesiyle oluşturulan bir öğretim modelidir. Özellikle okul öncesi çağında çocukların yaratıcılık seviyelerinin oldukça yüksek olduğu pek çok araştırma tarafından saptanmıştır. STEM+A Eğitimi, yaratıcılığı destekleyen ve eleştirel düşünme becerisi kazandıran bir sistemdir.</p>
                <p><b>GEMS Eğitim Modelinin(Great Explorations in Math and Science) </b>amacı, çocukların matematik ve fen bilimlerinde gözetimli keşif yöntemi ile bilinçlenerek öğrenmelerini sağlamaktır. Öğrencilerin heyecan verici ve etkili etkinliklerle kaliteli bir öğrenim sağlayan rahat bir eğitim programıdır.</p>
            </div>

            <div id="hedeflerimiztab" class="w3-container city" style="display:none">
                <h2>Hedeflerimiz</h2>
                <p>Öğrenci odaklı ve kalıcı öğrenmeyi esas alan alternatif eğitim yaklaşımı ile amacımız; oyunlarla öğrenen, yenilikçi, sorgulayan, yaşadığı dünyaya duyarlı, değerler eğitimini almış bilim, sanat, spor ve teknoloji alanlarında başarılı, mutlu bireylerin yetişmesine rehberlik etmektir. Doğaya saygılı, sosyal, özgüveni yüksek ve mutlu bireyler yetiştirmek bizden sonraki kuşaklara vereceğimiz en değerli armağandır. Hedeflerimiz doğrultusunda çocuklarımız için önceliklerimiz;</p>
                <ul>
                    <li>Çocuğa koşulsuz sevgi, güleryüz.</li>
                    <li>Saygı ve güven ortamının sağlanması.</li>
                    <li>Hijyen koşullarına özenli sağlıklı bakım ve beslenme.</li>
                    <li>Mutlu ve huzurlu çocuklar.</li>
                    <li>Oyun ve eğitim gereksiniminin giderilmesi.</li>
                    <li>Yaparak-yaşayarak-içinde yer alarak-oyun yoluyla bireysel, aktif ve etkin öğrenme.</li>
                    <li>Olumlu bakış, destek ve iletişim.</li>
                </ul>
            </div>

            <div id="psikolojiktab" class="w3-container city" style="display:none">
                <h2>Psikolojik Destek ve Aile Danışmanlığı</h2>
                <p>Psikolojik danışmanlık servisi olarak amacımız; öğrencilerimizi fiziksel, sosyal, psikolojik ve bilişsel açıdan en iyi şekilde ilköğretime ve hayata hazırlanmalarında gerekli psikolojik desteği sağlamaktır. Psikolojik danışmanlık servisi olarak sağlıklı ve yaratıcı bireyler yetiştirmeyi danışmanlık hizmetlerini mesleki etik kurallar doğrultusunda ve gizlilik çerçevesinde yürütmeyi, ailelere çocuk gelişimi, ilk ergenlik, okul problemleriyle baş etme yolları gibi konularda da danışmanlık yapmayı amaçlıyoruz.</p>
                <p>Çalışma İlkelerimiz;</p>
                <ul>
                    <li>Etik Değerler</li>
                    <li>Süreklilik</li>
                    <li>Gizlilik</li>
                    <li>Çözüm Odaklılık</li>
                    <li>Yeterlilik</li>
                </ul>
                <p>Bu ilkeler doğrultusunda psikoloğumuz ile çalışma yürüten okulumuz, öğrencilerimizin gerekliliklerine göre planlamalar yaparak, en doğru destekleri vermektedir…</p>
            </div>

            <div id="dogalgidatab" class="w3-container city" style="display:none">
                <h2>Doğal Gıda Ürünlerimiz</h2>
                <p>Çocuklarımız için çok önemli olduğunu düşündüğümüz doğal ve hijyenik gıdalarla beslenme konusunda oldukça titiz davranıyoruz. Yemeklerimiz günlük olarak okulumuzun mutfağında aşçımız tarafından hazırlanmaktadır. Ayrıca turşu, reçel, yoğurt ve ekmek gibi birçok ürün mutfağımızda yapılmaktadır.Çocuklarımız için her zaman en sağlıklı ve en doğal olanı tercih ediyoruz.
                </p>
                <p> Okulumuzun mutfağı gerekli hijyen standartları göz önünde bulundurularak profesyonel mutfak ekipmanları ile düzenlenmiş olup her hafta antibakteriyel temizlik yapılmaktadır. Mutfağımızda kullanılan bütün ürünlerin tazeliğine ve doğallığına maksimum özen gösterilmektedir.
                </p>

            </div>
            <div id="destektab" class="w3-container city" style="display:none">
                <h2>Destek Birimlerimiz</h2>
                <p><b>Servis:</b> Okulumuza ait servisimiz ile tüm bölgelerden çocuklarımızın güvenle okula ulaşımı sağlanmaktadır.</p>
                <p><b>Güvenlik:</b>Okulumuz 7/24 kapalı devre kamera sistemi ile tüm gün kayıt altındadır.</p>
                <p><b>Temizlik ve Hijyen: </b>Tüm sınıflarımız, çocuklarımızın özgürce oynayabilecekleri, eğitim alt yapımıza uygun, gerekli ışığı ve oksijeni alacak şekilde özenle hazırlanmıştır. Okulumuzun temizliği gerekli hijyen standartlarına uygun bir şekilde günlük olarak yapılmaktadır. Birçok bulaşıcı hastalığı göz önünde bulundurarak her ay düzenli olarak antibakteriyal temizlik ‘’BİOAKADEMİ MEDİKAL’’ firması tarafından yapılmaktadır. </p>
                <p><b>Bahçe:</b>Öğrencilerimizin okulumuzda en büyük şansı, doğal çim ve ağaçlarla dolu toplamda 350 m2 bahçemizdir. Öğrencilerimizin, doğada oynayarak ve deneyimleyerek öğrenmesini, zihinlerini doğa bilimlerine açmasını istiyoruz. </p>
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
        <button class="accordion">Biz Kimiz?</button>
        <div class="panel">
            <p>Özel Konyaaltı Has Anaokulu olarak Milli Eğitim Bakanlığı’na bağlı bir kurumuz. Okulumuzda Montessori Eğitimi Sistemi ile tam zamanlı İngilizce Eğitim Modeli eş zamanlı olarak uygulanmaktadır. Okulumuz Mathazone Eğitim Programı temsilcisidir. 3-4-5 yaş sınıflarımızın yanısıra 24-36 ay oyun gruplarımız bulunmaktadır. Okul öncesinde çocuklarımızın oyun oynayarak öğrenmesini amaçlayan eğitim alt yapımız, birçok bilimsel eğitim programıyla desteklenmektedir. Kısaca bu eğitim programlarından bahsetmek gerekirse;</p>
            <p><b>Montessori Eğitim Sistemi,</b> özgüveni yüksek, öğrenmeyi seven, kendisi ile barışık çocuklar yetiştirir. Bu sistemde öğretmen, diğer eğitim sistemlerinden farklı olarak çocuğun kendi kendine öğrenmesine yardımcı olan bir rehberdir.</p>
            <p><b>Bilingual System(Çift Dilli Eğitim)</b> ile İngilizcede anadil becerisi edindirmeyi hedefliyoruz. Bilimsel araştırmalara göre, çocuklar için yabancı bir dili öğrenmenin en etkili yolu, küçük yaşlardan itibaren dili günlük rutinlerinde deneyimlemektir. Buradan hareketle anaokulumuzda İngilizce öğretiminde “Çift Dilli Eğitim” yöntemi uygulanmaktadır.</p>
            <p><b>Mathazone Educational Programme </b>ile matematik korkulu bir rüya olmaktan çıkar, hayatı anlamlandırmaya ve ilişki kurmaya yarayan bir araç haline gelir. Mathazone okul öncesi̇ dönemden başlayarak çocuklar için matematiği eğlenceli bir oyuna dönüştüren, hayatı öğrenme ve deneyimleme programıdır. Çocuklarımıza matematiği eğlenceli bir oyuna dönüştürerek deneyimlendireceğiz.</p>
            <p><b>STEM + A Eğitimi</b>fen (science), teknoloji (technology), mühendislik (engineering) ve matematik (mathematics) gibi dört önemli disiplinin bir araya getirilmesiyle oluşturulan bir öğretim modelidir. Özellikle okul öncesi çağında çocukların yaratıcılık seviyelerinin oldukça yüksek olduğu pek çok araştırma tarafından saptanmıştır. STEM+A Eğitimi, yaratıcılığı destekleyen ve eleştirel düşünme becerisi kazandıran bir sistemdir.</p>
            <p><b>GEMS Eğitim Modelinin(Great Explorations in Math and Science) </b>amacı, çocukların matematik ve fen bilimlerinde gözetimli keşif yöntemi ile bilinçlenerek öğrenmelerini sağlamaktır. Öğrencilerin heyecan verici ve etkili etkinliklerle kaliteli bir öğrenim sağlayan rahat bir eğitim programıdır.</p>
        </div>

        <button class="accordion">Hedeflerimiz</button>
        <div class="panel">
            <p>Öğrenci odaklı ve kalıcı öğrenmeyi esas alan alternatif eğitim yaklaşımı ile amacımız; oyunlarla öğrenen, yenilikçi, sorgulayan, yaşadığı dünyaya duyarlı, değerler eğitimini almış bilim, sanat, spor ve teknoloji alanlarında başarılı, mutlu bireylerin yetişmesine rehberlik etmektir. Doğaya saygılı, sosyal, özgüveni yüksek ve mutlu bireyler yetiştirmek bizden sonraki kuşaklara vereceğimiz en değerli armağandır. Hedeflerimiz doğrultusunda çocuklarımız için önceliklerimiz;</p>
            <ul>
                <li>Çocuğa koşulsuz sevgi, güleryüz.</li>
                <li>Saygı ve güven ortamının sağlanması.</li>
                <li>Hijyen koşullarına özenli sağlıklı bakım ve beslenme.</li>
                <li>Mutlu ve huzurlu çocuklar.</li>
                <li>Oyun ve eğitim gereksiniminin giderilmesi.</li>
                <li>Yaparak-yaşayarak-içinde yer alarak-oyun yoluyla bireysel, aktif ve etkin öğrenme.</li>
                <li>Olumlu bakış, destek ve iletişim.</li>
            </ul>
        </div>

        <button class="accordion">Psikolojik Danışmanlık ve Rehberlik</button>
        <div class="panel">
            <p>Psikolojik danışmanlık servisi olarak amacımız; öğrencilerimizi fiziksel, sosyal, psikolojik ve bilişsel açıdan en iyi şekilde ilköğretime ve hayata hazırlanmalarında gerekli psikolojik desteği sağlamaktır. Psikolojik danışmanlık servisi olarak sağlıklı ve yaratıcı bireyler yetiştirmeyi danışmanlık hizmetlerini mesleki etik kurallar doğrultusunda ve gizlilik çerçevesinde yürütmeyi, ailelere çocuk gelişimi, ilk ergenlik, okul problemleriyle baş etme yolları gibi konularda da danışmanlık yapmayı amaçlıyoruz.</p>
            <p>Çalışma İlkelerimiz;</p>
            <ul>
                <li>Etik Değerler</li>
                <li>Süreklilik</li>
                <li>Gizlilik</li>
                <li>Çözüm Odaklılık</li>
                <li>Yeterlilik</li>
            </ul>
            <p>Bu ilkeler doğrultusunda psikoloğumuz ile çalışma yürüten okulumuz, öğrencilerimizin gerekliliklerine göre planlamalar yaparak, en doğru destekleri vermektedir…</p>
        </div>

        <button class="accordion">Doğal Gıda Ürünleri</button>
        <div class="panel">
            <p>Çocuklarımız için çok önemli olduğunu düşündüğümüz doğal ve hijyenik gıdalarla beslenme konusunda oldukça titiz davranıyoruz. Yemeklerimiz günlük olarak okulumuzun mutfağında aşçımız tarafından hazırlanmaktadır. Ayrıca turşu, reçel, yoğurt ve ekmek gibi birçok ürün mutfağımızda yapılmaktadır.Çocuklarımız için her zaman en sağlıklı ve en doğal olanı tercih ediyoruz.
            </p>
            <p> Okulumuzun mutfağı gerekli hijyen standartları göz önünde bulundurularak profesyonel mutfak ekipmanları ile düzenlenmiş olup her hafta antibakteriyel temizlik yapılmaktadır. Mutfağımızda kullanılan bütün ürünlerin tazeliğine ve doğallığına maksimum özen gösterilmektedir.
            </p>
        </div>

        <button class="accordion">Destek Birimleri</button>
        <div class="panel">
            <p><b>Servis:</b> Okulumuza ait servisimiz ile tüm bölgelerden çocuklarımızın güvenle okula ulaşımı sağlanmaktadır.</p>
            <p><b>Güvenlik:</b>Okulumuz 7/24 kapalı devre kamera sistemi ile tüm gün kayıt altındadır.</p>
            <p><b>Temizlik ve Hijyen: </b>Tüm sınıflarımız, çocuklarımızın özgürce oynayabilecekleri, eğitim alt yapımıza uygun, gerekli ışığı ve oksijeni alacak şekilde özenle hazırlanmıştır. Okulumuzun temizliği gerekli hijyen standartlarına uygun bir şekilde günlük olarak yapılmaktadır. Birçok bulaşıcı hastalığı göz önünde bulundurarak her ay düzenli olarak antibakteriyal temizlik ‘’BİOAKADEMİ MEDİKAL’’ firması tarafından yapılmaktadır. </p>
            <p><b>Bahçe:</b>Öğrencilerimizin okulumuzda en büyük şansı, doğal çim ve ağaçlarla dolu toplamda 350 m2 bahçemizdir. Öğrencilerimizin, doğada oynayarak ve deneyimleyerek öğrenmesini, zihinlerini doğa bilimlerine açmasını istiyoruz. </p>
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