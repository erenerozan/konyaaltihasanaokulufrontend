<?php

# mesaj sorunsuz bir şekilde giderse, formun altında bir yazı çıkaracağız.
# yazı mesajını da PHP'de oluşturacağız. # Kodların en altına bakarsanız, 
# <div> etiketinden önce bir PHP kodu göreceksiniz.
# bu kod PHP içinde olduğu için, daha doğrusu aşağıdaki if döngüsünde 
# üretildiği için form sayfası ilk açıldığında hata verir.
# bu nedenle ilk başta if döngüsünden önce boş değerli metin mesajını oluşturuyoruz.
# burada oluşturmazsak (isterseniz silin satırı test edin), formun altında değişen
# bulunamadı diye hata verir.

$gittiMesaji = " ";

# ilk olarak submit diye bir POST değeri var mı diye bakılıyor.
# bunun anlamı da, bu sayfa Gönder butonuna tıklandığında mı gelmiş,
# yoksa sayfa ilk defa mı yükleniyor diyedir.
# eğer sayfa ilk yükleniyorsa, değişken değerleri gelmez.
# değerler olmadığı için de mail gönderme işlemi haliyle hata verecektir.
# bu nedenle bir if döngüsü içinde işlemlerimizi yapıyoruz.
# POST ile gelen submit değeri de <button> etiketinin name değeridir.
# formda yer alan name değerlerini dikkatlice inceleyin.

# eğer submit değeri gelmişse...
# bu submit değeri, butonun type’ından gelmektedir.
if (isset($_POST["submit"])) {

    # SMTP mail gönderimi yapacak olan sınıf yükleniyor.
    require("class.phpmailer.php");

    # POST ile gelen değişkenler alınıyor.
    # alınan değerler yine aynı isimde PHP değişkenlerine aktarılıyor.

    $isimsoyisim = $_POST['isimsoyisim'];
    $dogum = $_POST['dogum'];
    $adres = $_POST['adres'];
    $veliisimsoyisim = $_POST['veliadi'];
    $cinsiyet = $_POST['cinsiyet'];


    $email = $_POST['mail'];
    $telefon = $_POST['tel'];



    # $mail adında bir PHPMailer sınıfı oluşturuluyor.
    # bu isimle sınıfa erişilecek.
    $mail = new PHPMailer();
    $mail->SetLanguage("tr", "phpmailer/language");
    $mail->CharSet  ="utf-8";
    $mail->Encoding="base64";

    # PHPMailer sınıfı içindeki değişkenlere bazı değerler aktarılıyor.
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    # tls veya ssl olarak mı gönderileceği belirtiliyor. 
    # bu seçimlere göre port numaraları değişecek.
    $mail->SMTPSecure = 'none';

    # port numaraları veriliyor.
    # tls için 587, ssl için 465
    $mail->Port = 587;

    # Yandex üzerinden mail göndermek istiyorum.
    # Yandex'in smtp adresini yazıyorum.
    # eğer kendi domaininiz üzerinden göndermek istiyorsanız şu şekilde yazın.
    # smtp.domainismi.com
    $mail->Host = "mail.konyaaltihasanaokulu.com";

    # Yandex hesabımdaki mail adresimi yazıyorum.
    $mail->Username = "info@konyaaltihasanaokulu.com";

    # mail şifremi yazıyorum.
    $mail->Password = "Info@325";

    # mail gönderilirken bu hesaba erişilecek ve bunun üzerinden gönderilecek.

    # mail'de görünecek ismi değişken olarak alıyoruz.
    $mail->FromName = "$veliisimsoyisim";

    # hangi adresten geldiği de görünecek. 
    # yine aynı mail adresimizi yazıyoruz.
    $mail->SetFrom("info@konyaaltihasanaokulu.com");

    # görünecek adresi yine aynı yazıyoruz.
    $mail->AddAddress("info@konyaaltihasanaokulu.com");
    $mail->AddAddress("sibelulu@harvardkidskonyaalti.com");
    $mail->AddCC("tahirkemal@harvardkidskonyaalti.com");

    # mail başlığını düzenliyoruz.
    # SİTE MESAJI -> Uğur GELİŞKEN gibi bir mesaj formatı oluşturuyorum.
    $mail->Subject = "ÖN KAYIT FORMU -> $isimsoyisim ";

    # mail içeriğini değişkenden alıyorum.
    $mail->Body = "Veli Adi:$veliisimsoyisim
                    Cocuk Adi:$isimsoyisim
                    Cinsiyet: $cinsiyet
                    Dogum Tarihi:$dogum
                    EMail:$email
                    Telefon:$telefon
                    Adres:$adres";

    # mail gönderme işlemi if döngüsü koşulunda yapılıyor, buna dikkat!
    # eğer mail gönderilirse true sonucu verecektir bu işlem.
    # bu sayede if döngüsü içine girilecek.
    # amacımız ziyaretçiyi durumdan haberdar etmek.
    if (!$mail->Send()) {
        # eğer mail gitmemişse hata kodunu yazdırıyoruz.
        # ziyaretçi bu mesajı anlamaz ama geliştirici için önemlidir.
        echo "Hata: " . $mail->ErrorInfo;
    } else {
        # mail gitmişse de kodun en başında bahsetmiş olduğum
        # mesaj değişkenine değer atanıyor.
        # <br> ile bir alt satıra geçilip, bootstrap stili ile bir <p> etiketi oluşturuluyor.
        # yeşil uyarı mesajı ile Sayın Uğur GELİŞKEN, mesajınız gönderildi...
        # formatı ile mesajımızı yazdırıyoruz.
        $gittiMesaji = "<br><p class='bg-success'>Sayın $veliisimsoyisim, 
mesajınız gönderildi...</p>";
    }
}
?>
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
    <link rel="icon" type="image/png" sizes="192x192" href="./css/android-icon-192x192.png">
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
            <div class="baslik">Ön Kayıt Formu</div>
            <div class="location">
                Ana Sayfa / Ön Kayıt Formu
            </div>
        </div>
    </div>
    <section id="bizeulasin">
        <br>
        <div class="bizeulasin-sol2">
            <div class="ic">
                <p>Öğrenci Bilgileri</p>
                <p>Veli Bilgileri</p>
                <form role="form" action="on-kayit-formu.php" method="POST">
                    <div class="sol">
                        <input type="textbox" name="isimsoyisim" placeholder="Adı Soyadı" />
                        <input type="textbox" name="dogum" placeholder="Doğum Tarihi" />
                        <select name="cinsiyet">
                            <option value="cinsiyetBelirtilmedi">Lütfen Cinsiyet Seçiniz.</option>
                            <option value="kiz">Kız</option>
                            <option value="erkek">Erkek</option>
                        </select>
                        <textarea name="adres" placeholder="Adres"></textarea>
                    </div>
                    <div class="sag">
                        <input type="textbox" name="veliadi" placeholder="Adı Soyadı" />
                        <input type="textbox" name="tel" placeholder="Telefon Numarası" />
                        <input type="textbox" name="mail" placeholder="E-mail" />
                    </div>

                    <div class="dogrula">
                        <div class="g-recaptcha" data-sitekey="6LdmCOAUAAAAAH1qhlYele-MpRif1pSDZgSg_2sT"></div>
                        <input type="submit" name="submit" value="Gönder">
                    </div>


                </form>
                <?php echo "$gittiMesaji"; ?>
            </div>

        </div>
        <!-- <div class="bizeulasin-sag">
            <div class="ic">
                <p>İletişim Kanallarımız</p>
                <ul>
                    <li>
                        <div class="resim">
                            <img src=" ../image/bizeulasin/location.png" />
                        </div>
                        <div class="yazilar">
                            <h3>Adres Bilgilerimiz</h3>
                            <h5>Arapsuyu Mahallesi, Kuşkavağı Caddesi No:30 Konyaaltı, 07070 Konyaaltı/Antalya</h5>
                        </div>

                    </li>
                    <li>
                        <div class="resim">
                            <img src=" ../image/bizeulasin/phone.png" />
                        </div>
                        <div class="yazilar">
                            <h3>Telefon Numaramız</h3>
                            <h5>(0242) 228 6161</h5>
                        </div>

                    </li>
                    <li>
                        <div class="resim">
                            <img src=" ../image/bizeulasin/mail.png" />
                        </div>
                        <div class="yazilar">
                            <h3>Mail Adresimiz</h3>
                            <h5>info@konyaaltihasanaokulu.com</h5>
                        </div>

                    </li>
                </ul>
            </div>
        </div> -->



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