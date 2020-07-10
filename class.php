<?php

class sinif{
    public $sinifId;
    public $sinifad;
    public $sinifaciklama;
    public $sinifyol;
    public $sinifekleyen;
    public $sinifresim;
    public $resultad;
    public $resultsoyad;
    public $resultyol;
  	public $cumle;
  	public $silsinif;
    public $silogrenciid;
    public $silogrencidosya;

    public $ogrencisinifyol;
    public $ogrenciid;
    public $ogrenciad;
    public $ogrencisoyad;
    public $ogrencidogum;
    public $ogrenciveliad;
    public $ogrencivelisoyad;
    public $ogrencicinsiyet;
    public $ogrenciwebusername;
    public $ogrenciwebpassword;
    public $ogrenciveliemail;
    public $ogrenciadres;
    public $ogrencisinif;
    public $ogrenciklasor;
    public $ogrenciresim;

    public $dokumanid;
    public $dokumanbasligi;
    public $dokumanklasoru;
    public $dokumanekleyen;
    public $dokumantarih;
    public $dokumanurl;
    public $dokumansinif;
    public $dokumanogrencisid;
    public $dokumanogrenci;
	function __construct(){
 		$this -> dsn ="mysql:host=localhost;dbname=okul_vt";
 		$this -> user ="harvard";
 		$this -> password ="best1993";
 	}
 	public function baglantiAc(){

 		try{
 			$this -> db = new PDO($this -> dsn,$this -> user,$this -> password);
 			$this -> db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");

 		}
 		catch(PDOException $e){ echo "Veritabanı bağlantısı başarısız oldu".$e -> getMessage();}
 	}
 	private function baglantiKapat() {
        $this->db = null;
    }
    function setCumle($cumle){
        $this->cumle = $cumle;
    }
    
    function listeleYontem(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query->rowCount()){
            foreach ($query as $row) {
                echo "<tr>";

                echo '<td>' . $row['sinifId'] . '</td>';

                echo '<td>' . $row['sinif_Ad'] . '</td>';

                echo '<td>' . $row['sinif_Aciklama'] . '</td>';

                echo '<td>' . $row['sinif_Yol'] . '</td>';

                echo '<td>' . $row['sinif_Ekleyen'] . '</td>';

                echo '<td>' . $row['sinif_Resim'] . '</td>';

                echo '<td><a href="okulpanel.php?bolum=sinifduzenle&sinifid=' . $row['sinifId'] . '&sinifad='. $row['sinif_Ad'] . '&sinifaciklama='. $row['sinif_Aciklama'] . '&sinifyol='. $row['sinif_Yol'] . '&sinifekleyen='. $row['sinif_Ekleyen'] . '&sinifresim='. $row['sinif_Resim'] .'">Düzenle</a></td>';

                echo '<td><a href="okulpanel.php?bolum=siniflar&id=' . $row['sinifId'] . '&sinifyol=' . $row['sinif_Yol'] . '">Sil</a></td>';

                echo "</tr>";

            }
        }
    }
    function kategori_listele($kategori_id=0){
                    
        global $vt;
        
        $kategori_listele = $vt -> prepare ("select pid, id, kategoriAdi from kategoriler where id=:pid order by kategoriAdi asc");
        $kategori_listele -> execute ( array("pid"=>$kategori_id) );
        echo '<ul>';
                      
        while ($kategoriler_dizisi= $kategori_listele -> fetch (PDO::FETCH_ASSOC) ){
                          
            $kategori_id = $kategoriler_dizisi["pid"];
            $ana_kategori_id = $kategoriler_dizisi["id"];
            $kategori_adi = $kategoriler_dizisi["kategoriAdi"];
                    
            echo "<li> <a href='#'>$kategori_adi</a>";
    
            // Yazılan Bu kategorinin alt kategorisi varsa fonksiyonu tekrar çağıracak yoksa çağırmayacak. Onun için de bu kategori altında alt kategori var mı onu saydırıyorum.
            $sql_say = $vt -> prepare ("select * from kategoriler where id=:pid order by kategoriAdi asc");
            $sql_say -> execute ( array ("pid"=>$kategori_id) );
            $alt_kategori_say = $sql_say -> rowcount();

            // Alt kategori sayısı 0 dan büyük ise aynı fonksiyon tekrar kullanılacak
            if ( $alt_kategori_say > 0 ) {
                kategori_listele($kategori_id);
            }
       
            echo "</li>";
            
        }

        echo "</ul>";

    }
                
    
    function listeleYontemKlasor(){
        //$this->baglantiAc();
        //$query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);
        kategori_listele();
        /*if($query->rowCount()){
            foreach ($query as $row) {
                echo "<tr>";

                echo '<td>' . $row['id'] . '</td>';

                echo '<td>' . $row['sinif_Ad'] . '</td>';

                echo '<td>' . $row['sinif_Aciklama'] . '</td>';

                echo '<td>' . $row['sinif_Yol'] . '</td>';

                echo '<td>' . $row['sinif_Ekleyen'] . '</td>';

                echo '<td>' . $row['sinif_Resim'] . '</td>';

                echo '<td><a href="okulpanel.php?bolum=sinifduzenle&sinifid=' . $row['sinifId'] . '&sinifad='. $row['sinif_Ad'] . '&sinifaciklama='. $row['sinif_Aciklama'] . '&sinifyol='. $row['sinif_Yol'] . '&sinifekleyen='. $row['sinif_Ekleyen'] . '&sinifresim='. $row['sinif_Resim'] .'">Düzenle</a></td>';

                echo '<td><a href="okulpanel.php?bolum=siniflar&id=' . $row['sinifId'] . '&sinifyol=' . $row['sinif_Yol'] . '">Sil</a></td>';

                echo "</tr>";

            }
        }*/
    }
    function sil(){
    	$this->baglantiAc();
      $query = $this ->db->prepare("DELETE FROM siniflar WHERE sinifId =:id");
    	$delete = $query->execute(array('id' => $this-> silsinif ));
    	$this->baglantiKapat();
    }
    function dosyasil(){
        $t = time();
        $klasorad ="./siniflar";
        $klasor = iconv("UTF-8","ISO-8859-9",$this->sinifyol);
            $olustur = rename($klasorad.'/'.$klasor, $klasorad.'/'.date('d_m_y_').$t.'_'.$klasor);
    }
    function ekle(){
        $this->baglantiAc();
        $query = $this ->db->prepare("INSERT INTO siniflar SET
            sinif_Ad = ?,
            sinif_Aciklama = ?,
            sinif_Yol = ?,
            sinif_Ekleyen = ?,
            sinif_Resim = ?");
        $insert = $query->execute(array($this -> sinifad, $this -> sinifaciklama, $this -> sinifyol, $this -> sinifekleyen, $this -> sinifresim));
        if ( $insert ){
            $last_id = $this ->db->lastInsertId();
            echo "insert işlemi başarılı!";
        }else{
            echo "olmadı";
        }
        $this->baglantiKapat();
    }
    function guncelle(){
        $this->baglantiAc();
        $query = $this ->db->prepare("UPDATE siniflar SET sinif_Ad = :yeni_Sinif,
            sinif_Aciklama = :yeni_Aciklama,
            sinif_Yol = :yeni_Yol,
            sinif_Ekleyen = :yeni_Ekleyen,
            sinif_Resim =:yeni_Resim WHERE sinifId = $this->sinifId");
        $up =$query->execute(array('yeni_Sinif' => $this->sinifad,'yeni_Aciklama'=> $this->sinifaciklama,'yeni_Yol'=> $this->sinifaciklama,'yeni_Yol'=>$this->sinifyol,'yeni_Ekleyen'=>$this->sinifekleyen,'yeni_Resim'=>$this->sinifresim));
    }
    function kontrolsinifad(){
        $this->baglantiAc();
        $stmt = $this ->db->prepare("SELECT * FROM siniflar WHERE sinif_Ad = :sinifad ");
        $stmt->execute(array(':sinifad' => $this -> sinifad));
        $result =  $stmt->rowCount();
        return $this->resultad = $result;

    }
    function kontrolsinifyol(){
        $this->baglantiAc();
        $stmt = $this ->db->prepare("SELECT * FROM siniflar WHERE sinif_Yol = :sinifyol ");
        $stmt->execute(array(':sinifyol' => $this -> sinifyol));
        $result =  $stmt->rowCount();
        return $this->resultyol = $result;

    }
    function sinifolustur(){
        $klasorad ="./siniflar";
                $klasor = iconv("UTF-8","ISO-8859-9",$this->sinifyol);
                $olustur = mkdir($klasorad.'/'.$klasor, 0700);
                if($olustur)
                {
                echo '<script language="javascript">';
                echo 'alert("Sınıf oluşturuldu.")';
                echo '</script>';
                }
                else
                {
                echo '<script language="javascript">';
                echo 'alert("Sınıf oluşturulamadı.")';
                echo '</script>';
                }
    }
    function sinifresimekle(){
        $klasor="./siniflar";
            $temp = $_FILES['sinifResim']['tmp_name'];
            $file = iconv("UTF-8","ISO-8859-9",$_FILES['sinifResim']['name']);
            $Sinifyol = iconv("UTF-8","ISO-8859-9", $this-> sinifyol);

            $yol = "./siniflar/".$Sinifyol."/".$file;
                $tasi = move_uploaded_file($temp,"siniflar/$Sinifyol/$file");
    }
    function kontrologrenciad(){
        $this->baglantiAc();
        $stmt = $this ->db->prepare("SELECT * FROM ogrenciler WHERE ogrenci_Ad = :ogrenciad ");
        $stmt->execute(array(':ogrenciad' => $this -> ogrenciad));
        $result =  $stmt->rowCount();
        return $this->resultad = $result;
    }
    function kontrologrencisoyad(){
        $this->baglantiAc();
        $stmt = $this ->db->prepare("SELECT * FROM ogrenciler WHERE ogrenci_Soyad = :ogrencisoyad ");
        $stmt->execute(array(':ogrencisoyad' => $this -> ogrencisoyad));
        $result =  $stmt->rowCount();
        return $this->resultsoyad = $result;
    }
    function kontrologrenciyol(){
        $this->baglantiAc();
        $stmt = $this ->db->prepare("SELECT * FROM ogrenciler WHERE ogrenci_Klasor = :ogrenciyol ");
        $stmt->execute(array(':ogrenciyol' => $this -> ogrenciklasor));
        $result =  $stmt->rowCount();
        return $this->resultyol = $result;
    }
    function listeleYontemOgrenci(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query->rowCount()){
            foreach ($query as $row) {
                echo "<tr>";

                echo '<td>' . $row['id_ogrenci'] . '</td>';

                echo '<td>' . $row['ogrenci_Ad'] . '</td>';

                echo '<td>' . $row['ogrenci_Soyad'] . '</td>';

                echo '<td>' . $row['ogrenci_Dogum'] . '</td>';

                echo '<td>' . $row['ogrenci_VeliAd'] . '</td>';

                echo '<td>' . $row['ogrenci_VeliSoyad'] . '</td>';

                echo '<td>' . $row['ogrenci_Cinsiyet'] . '</td>';

                echo '<td>' . $row['ogrenci_WebUsername'] . '</td>';

                echo '<td>' . $row['ogrenci_WebPassword'] . '</td>';

                echo '<td>' . $row['ogrenci_VeliEmail'] . '</td>';

                echo '<td>' . $row['ogrenci_Adres'] . '</td>';

                echo '<td>' . $row['ogrenci_Sinif'] . '</td>';

                echo '<td>' . $row['ogrenci_Klasor'] . '</td>';

                echo '<td>' . $row['ogrenci_Resim'] . '</td>';

                echo '<td><a href="okulpanel.php?bolum=ogrenciduzenle&ogrenciid=' . $row['id_ogrenci'] . '&ogrenciad='. $row['ogrenci_Ad'] . '&ogrencisoyad='. $row['ogrenci_Soyad'] . '&ogrencidogum='. $row['ogrenci_Dogum'] . '&ogrenciveliad='. $row['ogrenci_VeliAd'] . '&ogrencivelisoyad='. $row['ogrenci_VeliSoyad'] .'&ogrencicinsiyet='. $row['ogrenci_Cinsiyet'] .'&ogrenciwebusername='. $row['ogrenci_WebUsername'] .'&ogrenciwebpassword='. $row['ogrenci_WebPassword'] .'&ogrenciveliemail='. $row['ogrenci_VeliEmail'] .'&ogrenciadres='. $row['ogrenci_Adres'] .'&ogrencisinif='. $row['ogrenci_Sinif'] .'&ogrenciklasor='. $row['ogrenci_Klasor'] .'&ogrenciresim='. $row['ogrenci_Resim'] .'">Düzenle</a></td>';

                echo '<td><a href="okulpanel.php?bolum=ogrenciler&ogrenciid=' . $row['id_ogrenci'] . '&ogrencisinif='. $row['ogrenci_Sinif'] .'&ogrenciklasor='. $row['ogrenci_Klasor'].'">Sil</a></td>';

                echo "</tr>";

            }
        }
    }
    function silogrencifonk(){
        $this->baglantiAc();
        $query = $this ->db->prepare("DELETE FROM ogrenciler WHERE id_ogrenci =:id");
        $delete = $query->execute(array('id' => $this-> silogrenciid ));
        $this->baglantiKapat();
    }
    function dosyasilogrenci(){
        $t = time();
        $klasorad ="./siniflar";
        $klasor = iconv("UTF-8","ISO-8859-9",$this->ogrencisinifyol);
        $klasor2 = iconv("UTF-8","ISO-8859-9",$this->silogrencidosya);
            $olustur = rename($klasorad.'/'.$klasor.'/'.$klasor2, $klasorad.'/'.$klasor.'/'.date('d_m_y_').$t.'_'.$klasor2);
    }
    function ekleogrenci(){
        $this->baglantiAc();
        $query = $this ->db->prepare("INSERT INTO ogrenciler SET
            ogrenci_Ad = ?,
            ogrenci_Soyad = ?,
            ogrenci_Dogum = ?,
            ogrenci_VeliAd = ?,
            ogrenci_VeliSoyad = ?,
            ogrenci_Cinsiyet = ?,
            ogrenci_WebUsername = ?,
            ogrenci_WebPassword = ?,
            ogrenci_VeliEmail = ?,
            ogrenci_Adres = ?,
            ogrenci_Sinif = ?,
            ogrenci_Klasor = ?,
            ogrenci_Resim = ?");
        $insert = $query->execute(array(
            $this -> ogrenciad,
            $this -> ogrencisoyad,
            $this -> ogrencidogum,
            $this -> ogrenciveliad,
            $this -> ogrencivelisoyad,
            $this -> ogrencicinsiyet,
            $this -> ogrenciwebusername,
            $this -> ogrenciwebpassword,
            $this -> ogrenciveliemail,
            $this -> ogrenciadres,
            $this -> ogrencisinif,
            $this -> ogrenciklasor,
            $this -> ogrenciresim));
        if ( $insert ){
            $last_id = $this ->db->lastInsertId();
            echo "insert işlemi başarılı!";
        }else{
            echo "olmadıa";
        }
        $this->baglantiKapat();
    }
    function ogrenciolustur(){
        $klasorad ="./siniflar";
                $klasor = iconv("UTF-8","ISO-8859-9",$this->ogrencisinif);
                $ogrenciklasor = iconv("UTF-8","ISO-8859-9",$this->ogrenciklasor);
                $olustur = mkdir($klasorad.'/'.$klasor.'/'.$ogrenciklasor, 0700);
                if($olustur)
                {
                echo '<script language="javascript">';
                echo 'alert("Öğrenci oluşturuldu.")';
                echo '</script>';
                }
                else
                {
                echo '<script language="javascript">';
                echo 'alert("Öğrenci oluşturulamadı.")';
                echo '</script>';
                }
    }
    function ogrenciresimekle(){
        $klasor="./siniflar";
             $temp = $_FILES['Resim']['tmp_name'];
             $file = iconv("UTF-8","ISO-8859-9",$_FILES['Resim']['name']);
            $ogrenciyol = iconv("UTF-8","ISO-8859-9", $this-> ogrencisinif);
            $ogrenciklasoryol = iconv("UTF-8","ISO-8859-9", $this-> ogrenciklasor);

            //$yol = "./siniflar/".$ogrenciyol."/".$ogrenciklasoryol.'/'.$file;
                $tasi = move_uploaded_file($temp,"siniflar/$ogrenciyol/$ogrenciklasoryol/$file");
    }
    function listelesiniflar(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query->rowCount()){
            echo '<select class="input" name="ogrenciSinif">';
            if(!empty($_GET['ogrencisinif'])){
                echo '<option value="'.$_GET['ogrencisinif'].'" selected>'.$_GET['ogrencisinif'].'</option>';
            }else{
                echo '<option value="seçim yapılmadı" selected>Lütfen Sınıf Seçiniz</option>';
            }
            foreach ($query as $row) {

                        echo '<option value="'.$row["sinif_Yol"].'">'.$row["sinif_Yol"].'</option>';

            }
            echo '</select>';
        } $this->baglantiKapat();
    }
    function ogrenciguncelle(){
        $this->baglantiAc();
        $query = $this ->db->prepare("UPDATE ogrenciler SET
            ogrenci_Ad = :yeni_Ogrenciad,
            ogrenci_Soyad = :yeni_Ogrencisoyad,
            ogrenci_Dogum = :yeni_Ogrencidogum,
            ogrenci_VeliAd = :yeni_Ogrenciveliad,
            ogrenci_VeliSoyad = :yeni_Ogrencivelisoyad,
            ogrenci_Cinsiyet = :yeni_Ogrencicinsiyet,
            ogrenci_WebUsername = :yeni_Ogrenciwebusername,
            ogrenci_WebPassword = :yeni_Ogrenciwebpassword,
            ogrenci_VeliEmail = :yeni_Ogrenciveliemail,
            ogrenci_Adres = :yeni_Ogrenciadres,
            ogrenci_Sinif = :yeni_Ogrencisinif,
            ogrenci_Klasor = :yeni_Ogrenciklasor,
            ogrenci_Resim = :yeni_Ogrenciresim
            WHERE id_ogrenci = $this->ogrenciid");
        $up =$query->execute(array(
            'yeni_Ogrenciad' => $this->ogrenciad,
            'yeni_Ogrencisoyad'=> $this->ogrencisoyad,
            'yeni_Ogrencidogum'=> $this->ogrencidogum,
            'yeni_Ogrenciveliad'=>$this->ogrenciveliad,
            'yeni_Ogrencivelisoyad'=>$this->ogrencivelisoyad,
            'yeni_Ogrencicinsiyet'=>$this->ogrencicinsiyet,
            'yeni_Ogrenciwebusername'=>$this->ogrenciwebusername,
            'yeni_Ogrenciwebpassword'=>$this->ogrenciwebpassword,
            'yeni_Ogrenciveliemail'=>$this->ogrenciveliemail,
            'yeni_Ogrenciadres'=>$this->ogrenciadres,
            'yeni_Ogrencisinif'=>$this->ogrencisinif,
            'yeni_Ogrenciklasor'=>$this->ogrenciklasor,
            'yeni_Ogrenciresim'=>$this->ogrenciresim));
        $this->baglantiKapat();
    }

    function listeleYontemGenel(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query->rowCount()){
            foreach ($query as $row) {
                echo "<tr>";

                echo '<td>' . $row['dokumanId'] . '</td>';

                echo '<td>' . $row['dokuman_Basligi'] . '</td>';

                echo '<td>' . $row['dokuman_Klasoru'] . '</td>';

                echo '<td>' . $row['dokuman_Ekleyen'] . '</td>';

                echo '<td>' . $row['dokuman_Tarih'] . '</td>';

                echo '<td>' . $row['dokuman_Url'] . '</td>';

                echo '<td><a href="okulpanel.php?bolum=dokumanlargeneldüzenle&dokumanid=' . $row['dokumanId'] . '&dokumanbasligi='. $row['dokuman_Basligi'] . '&dokumanklasoru='. $row['dokuman_Klasoru'] . '&dokumanekleyen='. $row['dokuman_Ekleyen'] . '&dokumantarih='. $row['dokuman_Tarih'] . '&dokumanurl='. $row['dokuman_Url'] .'">Düzenle</a></td>';

                echo '<td><a href="okulpanel.php?bolum=dokumanlargenel&dokumanid=' . $row['dokumanId'] . '">Sil</a></td>';

                echo "</tr>";

            }
        }
    }
    function silgenelfonk(){
        $this->baglantiAc();
        $query = $this ->db->prepare("DELETE FROM dokumanlar WHERE dokumanid =:id");
        $delete = $query->execute(array('id' => $this-> dokumanid ));
        $this->baglantiKapat();
    }
    function eklegeneldokuman(){
        $this->baglantiAc();
        $query = $this ->db->prepare("INSERT INTO dokumanlar SET
            dokumanId = ?,
            dokuman_Basligi = ?,
            dokuman_Klasoru = ?,
            dokuman_Ekleyen = ?,
            dokuman_Tarih = ?,
            dokuman_Url = ?
            ");
        $insert = $query->execute(array(
            $this -> dokumanid,
            $this -> dokumanbasligi,
            $this -> dokumanklasoru,
            $this -> dokumanekleyen,
            $this -> dokumantarih,
            $this -> dokumanurl
            ));
        if ( $insert ){
            $last_id = $this ->db->lastInsertId();
            echo "insert işlemi başarılı!";
        }else{
            echo "olmadıa";
        }
        $this->baglantiKapat();
    }
    function geneldokumanekle($dokumantemp,$dokumanname,$sinif,$ogrenciyol){
        $klasor="./siniflar";
            $temp = $dokumantemp;
            $file = iconv("UTF-8","ISO-8859-9",$dokumanname);
            $sinifceviri = iconv("UTF-8","ISO-8859-9", $sinif);
            //$Sinifyol = iconv("UTF-8","ISO-8859-9", $this-> dokumanklasoru);

            //$yol = "./siniflar/".$Sinifyol."/".$file;
                $tasi = move_uploaded_file($temp,"siniflar/$sinifceviri/$ogrenciyol/$file");
    }
    function geneldokumanekleresim($dokumantemp,$dokumanname,$sinif){
        $klasor="./siniflar";
            $temp = $dokumantemp;
            $file = iconv("UTF-8","ISO-8859-9",$dokumanname);
            $sinifceviri = iconv("UTF-8","ISO-8859-9", $sinif);
            //$Sinifyol = iconv("UTF-8","ISO-8859-9", $this-> dokumanklasoru);

            //$yol = "./siniflar/".$Sinifyol."/".$file;
                $tasi = move_uploaded_file($temp,"siniflar/$sinifceviri/$file");
    }
    function dokumanguncelle(){
        $this->baglantiAc();
        $query = $this ->db->prepare("UPDATE dokumanlar SET
            dokuman_Basligi = :yeni_dokuman_Basligi,
            dokuman_Klasoru = :yeni_dokuman_Klasoru,
            dokuman_Ekleyen = :yeni_dokuman_Ekleyen,
            dokuman_Tarih = :yeni_dokuman_Tarih,
            dokuman_Url = :yeni_dokuman_Url
            WHERE dokumanId = $this->dokumanid");
        $up =$query->execute(array(
            'yeni_dokuman_Basligi' => $this->dokumanbasligi,
            'yeni_dokuman_Klasoru'=> $this->dokumanklasoru,
            'yeni_dokuman_Ekleyen'=> $this->dokumanekleyen,
            'yeni_dokuman_Tarih'=>$this->dokumantarih,
            'yeni_dokuman_Url'=>$this->dokumanurl));
    }

    function listeleYontemSinif(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            foreach ($query as $row) {
                echo "<tr>";

                echo '<td>' . $row['dokumanId'] . '</td>';

                echo '<td>' . $row['dokuman_Basligi'] . '</td>';

                echo '<td>' . $row['dokuman_Klasoru'] . '</td>';

                echo '<td>' . $row['dokuman_Sinif'] . '</td>';

                echo '<td>' . $row['dokuman_Ekleyen'] . '</td>';

                echo '<td>' . $row['dokuman_Tarih'] . '</td>';

                echo '<td>' . $row['dokuman_Url'] . '</td>';

                echo '<td><a href="okulpanel.php?bolum=dokumanlarsinifdüzenle&dokumanid=' . $row['dokumanId'] . '&dokumanbasligi='. $row['dokuman_Basligi'] . '&dokumanklasoru='. $row['dokuman_Klasoru'] . '&dokumansinif='. $row['dokuman_Sinif'] . '&dokumanekleyen='. $row['dokuman_Ekleyen'] . '&dokumantarih='. $row['dokuman_Tarih'] . '&dokumanurl='. $row['dokuman_Url'] .'">Düzenle</a></td>';

                echo '<td><a href="okulpanel.php?bolum=dokumanlarsinif&dokumanid=' . $row['dokumanId'] . '">Sil</a></td>';

                echo "</tr>";

            }
        }
        $this->baglantiKapat();
    }
    function listeleYontemSinifResim(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            foreach ($query as $row) {
                echo "<tr>";

                echo '<td>' . $row['dokumanId'] . '</td>';

                echo '<td>' . $row['dokuman_Basligi'] . '</td>';

                echo '<td>' . $row['dokuman_Klasoru'] . '</td>';

                echo '<td>' . $row['dokuman_Sinif'] . '</td>';

                echo '<td>' . $row['dokuman_Ekleyen'] . '</td>';

                echo '<td>' . $row['dokuman_Tarih'] . '</td>';

                echo '<td>' . $row['dokuman_Url'] . '</td>';

                echo '<td><a href="okulpanel.php?bolum=dokumanlarsinifdüzenleresim&dokumanid=' . $row['dokumanId'] . '&dokumanbasligi='. $row['dokuman_Basligi'] . '&dokumanklasoru='. $row['dokuman_Klasoru'] . '&dokumansinif='. $row['dokuman_Sinif'] . '&dokumanekleyen='. $row['dokuman_Ekleyen'] . '&dokumantarih='. $row['dokuman_Tarih'] . '&dokumanurl='. $row['dokuman_Url'] .'">Düzenle</a></td>';

                echo '<td><a href="okulpanel.php?bolum=dokumanlarsinifresim&dokumanid=' . $row['dokumanId'] . '">Sil</a></td>';

                echo "</tr>";

            }
        }
        $this->baglantiKapat();
    }
    function eklesinifdokuman(){
        $this->baglantiAc();
        $query = $this ->db->prepare("INSERT INTO dokumanlar SET
            dokumanId = ?,
            dokuman_Basligi = ?,
            dokuman_Klasoru = ?,
            dokuman_Sinif = ?,
            dokuman_Ekleyen = ?,
            dokuman_Tarih = ?,
            dokuman_Url = ?
            ");
        $insert = $query->execute(array(
            $this -> dokumanid,
            $this -> dokumanbasligi,
            $this -> dokumanklasoru,
            $this -> dokumansinif,
            $this -> dokumanekleyen,
            $this -> dokumantarih,
            $this -> dokumanurl
            ));
        if ( $insert ){
            $last_id = $this ->db->lastInsertId();
            echo "insert işlemi başarılı!";
        }else{
            echo "olmadı";
        }
        $this->baglantiKapat();
    }
    function sinifdokumanguncelle(){
        $this->baglantiAc();
        $query = $this ->db->prepare("UPDATE dokumanlar SET
            dokuman_Basligi = :yeni_dokuman_Basligi,
            dokuman_Klasoru = :yeni_dokuman_Klasoru,
            dokuman_Sinif = :yeni_dokuman_Sinif,
            dokuman_Ekleyen = :yeni_dokuman_Ekleyen,
            dokuman_Tarih = :yeni_dokuman_Tarih,
            dokuman_Url = :yeni_dokuman_Url
            WHERE dokumanId = $this->dokumanid");
        $up =$query->execute(array(
            'yeni_dokuman_Basligi' => $this->dokumanbasligi,
            'yeni_dokuman_Klasoru'=> $this->dokumanklasoru,
            'yeni_dokuman_Sinif' => $this->dokumansinif,
            'yeni_dokuman_Ekleyen'=> $this->dokumanekleyen,
            'yeni_dokuman_Tarih'=>$this->dokumantarih,
            'yeni_dokuman_Url'=>$this->dokumanurl));
        $this->baglantiKapat();
    }
    function listelesinif(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query->rowCount()){
            echo '<select class="input" name="ogrenciSinif">';
            if(!empty($_GET['dokumansinif'])){
                echo '<option value="'.$_GET['dokumansinif'].'" selected>'.$_GET['dokumansinif'].'</option>';
            }else{
                echo '<option value="seçim yapılmadı" selected>Lütfen Sınıf Seçiniz</option>';
            }
            foreach ($query as $row) {

                        echo '<option value="'.$row["sinif_Yol"].'">'.$row["sinif_Yol"].'</option>';

            }
            echo '</select>';
        } $this->baglantiKapat();
    }
    function listeleYontemOgrenci1(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            foreach ($query as $row) {
                echo "<tr>";

                echo '<td>' . $row['dokumanId'] . '</td>';

                echo '<td>' . $row['dokuman_Basligi'] . '</td>';

                echo '<td>' . $row['dokuman_Tarih'] . '</td>';

                echo '<td>' . $row['dokuman_Klasoru'] . '</td>';

                echo '<td>' . $row['dokuman_Sinif'] . '</td>';

                echo '<td>' . $row['dokuman_Ogrenci'] . '</td>';

                echo '<td>' . $row['dokuman_Ekleyen'] . '</td>';

                echo '<td>' . $row['dokuman_Url'] . '</td>';

                echo '<td><a href="okulpanel.php?bolum=dokumanlarogrenciduzenle&dokumanid=' . $row['dokumanId'] . '&dokumanbasligi='. $row['dokuman_Basligi'] . '&dokumanklasoru='. $row['dokuman_Klasoru'] . '&dokumansinif='. $row['dokuman_Sinif'] . '&dokumanekleyen='. '&dokumanogrenci='. $row['dokuman_Ogrenci'] . '&dokumanekleyen='. $row['dokuman_Ekleyen'] . '&dokumantarih='. $row['dokuman_Tarih'] . '&dokumanurl='. $row['dokuman_Url'] .'">Düzenle</a></td>';

                echo '<td><a href="okulpanel.php?bolum=dokumanlarogrenci&dokumanid=' . $row['dokumanId'] . '">Sil</a></td>';

                echo "</tr>";

            }
        }
    }
    function ekleogrencidokuman(){
        $this->baglantiAc();
        $query = $this ->db->prepare("INSERT INTO dokumanlar SET
            dokumanId = ?,
            dokuman_Basligi = ?,
            dokuman_Klasoru = ?,
            dokuman_Sinif = ?,
            dokuman_Ogrenci =?,
            dokuman_Ekleyen = ?,
            dokuman_Tarih = ?,
            dokuman_Url = ?
            ");
        $insert = $query->execute(array(
            $this -> dokumanid,
            $this -> dokumanbasligi,
            $this -> dokumanklasoru,
            $this -> dokumansinif,
            $this -> dokumanogrencid,
            $this -> dokumanekleyen,
            $this -> dokumantarih,
            $this -> dokumanurl
            ));
        if ( $insert ){
            $last_id = $this ->db->lastInsertId();
            echo "insert işlemi başarılı!";
        }else{
            echo "olmadı";
        }
        $this->baglantiKapat();
    }
    function listelesinif1(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query->rowCount()){
            echo '<select class="input" name="ogrenciSinif">';
            if(!empty($_GET['dokumansinif'])){
                echo '<option value="'.$_GET['dokumansinif'].'" selected>'.$_GET['dokumansinif'].'</option>';
            }else{
                echo '<option value="seçim yapılmadı" selected>Lütfen Sınıf Seçiniz</option>';
            }
            foreach ($query as $row) {

                        echo '<option value="'.$row["sinif_Yol"].'">'.$row["sinif_Ad"].'</option>';

            }
            echo '</select>';
        } $this->baglantiKapat();
    }
    function listeleYontemOgrenci2($sinif){
        $this->baglantiAc();
        $id2 = $sinif;
        $query = $this ->db ->query("SELECT * FROM ogrenciler WHERE id_ogrenci ='{$id2}'")->fetch(PDO::FETCH_ASSOC);

        if ( $query ){
            $this-> dokumansinif =$query['ogrenci_Sinif'];
            $this-> dokumanogrencid =$query['ogrenci_Klasor'];
        } $this->baglantiKapat();
    }
    function getOgrenci(){
        return $this -> dokumansinif;
    }
    function getOgrenciKlasor(){
        return $this -> dokumanogrencid;
    }
    function listeleogrenci(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            echo '<select class="input" name="ogrenciSinif">';



            foreach ($query as $row) {
                if($_GET['dokumanogrenci'] == $row['ogrenci_Ad'].$row['ogrenci_Soyad']){
                    echo '<option value="'.$row["id_ogrenci"].'" selected>'.$_GET['dokumanogrenci'].'</option>';
                }else{
                    echo '<option value="'.$row["id_ogrenci"].'">'.$row["ogrenci_Ad"].$row["ogrenci_Soyad"].'</option>';
                }
            }
            echo '</select>';
        } $this->baglantiKapat();
    }
    function ogrencidokumanguncelle(){
        $this->baglantiAc();
        $query = $this ->db->prepare("UPDATE dokumanlar SET
            dokuman_Basligi = :yeni_dokuman_Basligi,
            dokuman_Klasoru = :yeni_dokuman_Klasoru,
            dokuman_Sinif = :yeni_dokuman_Sinif,
            dokuman_Ogrenci = :yeni_dokuman_Ogrenci,
            dokuman_Ekleyen = :yeni_dokuman_Ekleyen,
            dokuman_Tarih = :yeni_dokuman_Tarih,
            dokuman_Url = :yeni_dokuman_Url
            WHERE dokumanId = $this->dokumanid");
        $up =$query->execute(array(
            'yeni_dokuman_Basligi' => $this->dokumanbasligi,
            'yeni_dokuman_Klasoru'=> $this->dokumanklasoru,
            'yeni_dokuman_Sinif' => $this->dokumansinif,
            'yeni_dokuman_Ogrenci' => $this->dokumanogrencid,
            'yeni_dokuman_Ekleyen'=> $this->dokumanekleyen,
            'yeni_dokuman_Tarih'=>$this->dokumantarih,
            'yeni_dokuman_Url'=>$this->dokumanurl));
        if ( $up ){
            $last_id = $this ->db->lastInsertId();
            echo "insert işlemi başarılı!";
        }else{
            echo "olmadı";
        }
        $this->baglantiKapat();
    }
    function listeleYontemHaber(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            foreach ($query as $row) {
                echo "<tr>";

                echo '<td>' . $row['haberId'] . '</td>';

                echo '<td>' . $row['haber_Baslik'] . '</td>';

                echo '<td>' . $row['haber_Metin'] . '</td>';

                echo '<td>' . $row['haber_Resim'] . '</td>';

                echo '<td>' . $row['haber_Ekleyen'] . '</td>';

                echo '<td>' . $row['haber_Tarih'] . '</td>';

                echo '<td><a href="okulpanel.php?bolum=haberlerduzenle&haberid=' . $row['haberId'] . '&haberbasligi='. $row['haber_Baslik'] . '&habermetin='. $row['haber_Metin'] . '&haberresim='. $row['haber_Resim'] . '&haberekleyen='. $row['haber_Ekleyen'] . '&habertarih='. $row['haber_Tarih'] . '">Düzenle</a></td>';

                echo '<td><a href="okulpanel.php?bolum=haberler&haberid=' . $row['haberId'] . '">Sil</a></td>';

                echo "</tr>";

            }
        }
    }
    public $haberid;
    public $haberbaslik;
    public $habermetin;
    public $haberresim;
    public $haberekleyen;
    public $habertarih;
    public $haberyol;
    function silhaber(){
      $this->baglantiAc();
      $query = $this ->db->prepare("DELETE FROM haberler WHERE haberid =:id");
      $delete = $query->execute(array('id' => $this-> haberid ));
      $this->baglantiKapat();
    }
    function sildishaber(){
      $this->baglantiAc();
      $query = $this ->db->prepare("DELETE FROM dishaber WHERE haberid =:id");
      $delete = $query->execute(array('id' => $this-> haberid ));
      $this->baglantiKapat();
    }
    function listeleYontemDisHaber(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            foreach ($query as $row) {
                echo "<tr>";

                echo '<td>' . $row['haberId'] . '</td>';

                echo '<td>' . $row['haber_Baslik'] . '</td>';

                echo '<td>' . $row['haber_Metin'] . '</td>';

                echo '<td>' . $row['haber_Resim'] . '</td>';

                echo '<td>' . $row['haber_Ekleyen'] . '</td>';

                echo '<td>' . $row['haber_Tarih'] . '</td>';

                echo '<td><a href="okulpanel.php?bolum=dishaberduzenle&haberid=' . $row['haberId'] . '&haberbasligi='. $row['haber_Baslik'] . '&habermetin='. $row['haber_Metin'] . '&haberresim='. $row['haber_Resim'] . '&haberekleyen='. $row['haber_Ekleyen'] . '&habertarih='. $row['haber_Tarih'] . '">Düzenle</a></td>';

                echo '<td><a href="okulpanel.php?bolum=dishaber&haberid=' . $row['haberId'] . '">Sil</a></td>';

                echo "</tr>";

            }
        }
    }
    function eklehaber(){
        $this->baglantiAc();
        $query = $this ->db->prepare("INSERT INTO haberler SET
            haber_Baslik = ?,
            haber_Metin = ?,
            haber_Resim = ?,
            haber_Ekleyen = ?,
            haber_Tarih = ?,
            haber_Yol = ?");
        $insert = $query->execute(array($this -> haberbaslik, $this -> habermetin, $this -> haberresim, $this -> haberekleyen, $this -> habertarih, $this -> haberyol));
        if ( $insert ){
            $last_id = $this ->db->lastInsertId();
            echo "insert işlemi başarılı!";
        }else{
            echo "olmadı";
        }
        $this->baglantiKapat();
    }

    function ekledishaber(){
        $this->baglantiAc();
        $query = $this ->db->prepare("INSERT INTO dishaber SET
            haber_Baslik = ?,
            haber_Metin = ?,
            haber_Resim = ?,
            haber_Ekleyen = ?,
            haber_Tarih = ?,
            haber_Yol = ?");
        $insert = $query->execute(array($this -> haberbaslik, $this -> habermetin, $this -> haberresim, $this -> haberekleyen, $this -> habertarih, $this -> haberyol));
        if ( $insert ){
            $last_id = $this ->db->lastInsertId();
            echo "insert işlemi başarılı!";
        }else{
            echo "olmadı";
        }
        $this->baglantiKapat();
    }

    function dishaberresimekle(){
        $klasor="./haber";
            $temp = $_FILES['haberresim']['tmp_name'];
            $file = iconv("UTF-8","ISO-8859-9",$_FILES['haberresim']['name']);
            //$Sinifyol = iconv("UTF-8","ISO-8859-9", $this-> sinifyol);

            //$yol = "./siniflar/".$Sinifyol."/".$file;
                $tasi = move_uploaded_file($temp,"haber/$file");
    }

    function dishaberguncelle(){
        $this->baglantiAc();
        $query = $this ->db->prepare("UPDATE dishaber SET
            haber_Baslik = :yeni_haber_Baslik,
            haber_Metin = :yeni_haber_Metin,
            haber_Resim = :yeni_haber_Resim,
            haber_Ekleyen = :yeni_haber_Ekleyen,
            haber_Tarih = :yeni_haber_Tarih,
            haber_Yol = :yeni_haber_Yol
            WHERE haberId = $this->haberid");
        $up =$query->execute(array(
            'yeni_haber_Baslik' => $this->haberbaslik,
            'yeni_haber_Metin'=> $this->habermetin,
            'yeni_haber_Resim' => $this->haberresim,
            'yeni_haber_Ekleyen'=> $this->haberekleyen,
            'yeni_haber_Tarih'=>$this->habertarih,
            'yeni_haber_Yol'=>$this->haberyol));
        $this->baglantiKapat();
    }

    function haberresimekle(){
        $klasor="./haber";
            $temp = $_FILES['haberresim']['tmp_name'];
            $file = iconv("UTF-8","ISO-8859-9",$_FILES['haberresim']['name']);
            //$Sinifyol = iconv("UTF-8","ISO-8859-9", $this-> sinifyol);

            //$yol = "./siniflar/".$Sinifyol."/".$file;
                $tasi = move_uploaded_file($temp,"haber/$file");
    }
    function haberguncelle(){
        $this->baglantiAc();
        $query = $this ->db->prepare("UPDATE haberler SET
            haber_Baslik = :yeni_haber_Baslik,
            haber_Metin = :yeni_haber_Metin,
            haber_Resim = :yeni_haber_Resim,
            haber_Ekleyen = :yeni_haber_Ekleyen,
            haber_Tarih = :yeni_haber_Tarih,
            haber_Yol = :yeni_haber_Yol
            WHERE haberId = $this->haberid");
        $up =$query->execute(array(
            'yeni_haber_Baslik' => $this->haberbaslik,
            'yeni_haber_Metin'=> $this->habermetin,
            'yeni_haber_Resim' => $this->haberresim,
            'yeni_haber_Ekleyen'=> $this->haberekleyen,
            'yeni_haber_Tarih'=>$this->habertarih,
            'yeni_haber_Yol'=>$this->haberyol));
        $this->baglantiKapat();
    }
    function listeleYontemHaberPop(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            foreach ($query as $row) {
                echo '<style>
                .pop' . $row['haberId'] . '{
                    width: 100%;
                    height: 100%;
                    background-color:rgba(0, 0, 0, 0.5);
                    position: absolute;
                    z-index: ' . $row['haberId'] . ';
                    box-sizing: border-box;
                    word-wrap: break-word;
                }
                .up{
                    width: 300px;
                    height: auto;
                    margin: 150px auto;
                    background-color: white;
                    position: relative;
                    z-index: 5;
                    box-sizing: border-box;
                    word-wrap: break-word;
                    border-radius: 20px;
                }
                .close' . $row['haberId'] . '{
                    width: 20px;
                    height: 20px;
                    position: absolute;
                    right: 10px;
                    margin-top: 10px;
                    margin-right: 10px;
                }
                .close' . $row['haberId'] . ' img{
                   width:100%;
                   height:100%;
                }
                .popresim{
                    width: 200px;
                    height: 200px;
                    background-color: grey;
                    position: relative;
                    top: 20px;
                    margin: 20px auto;
                    border-radius: 20px;
                    overflow: hidden;
                }
                .icer{
                    width: 200px;
                    height: auto;
                    margin: 10px auto;
                    word-wrap: break-word;
                    box-sizing: border-box;
                    padding-bottom: 20px;
                }
                .popresim img{
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                </style>';
                echo '<script>
                $(document).ready(function(){
                    $(".close' . $row['haberId'] . '").click(function(){
                        $(".pop' . $row['haberId'] . '").hide();
                    });
                });
                </script>';
                echo'
                <div id="' . $row['haberId'] . '" class="pop' . $row['haberId'] . '">
                <div class="up">
                    <div class="close' . $row['haberId'] . '"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUwIDUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MCA1MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxjaXJjbGUgc3R5bGU9ImZpbGw6I0Q3NUE0QTsiIGN4PSIyNSIgY3k9IjI1IiByPSIyNSIvPgo8cG9seWxpbmUgc3R5bGU9ImZpbGw6bm9uZTtzdHJva2U6I0ZGRkZGRjtzdHJva2Utd2lkdGg6MjtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDsiIHBvaW50cz0iMTYsMzQgMjUsMjUgMzQsMTYgICAiLz4KPHBvbHlsaW5lIHN0eWxlPSJmaWxsOm5vbmU7c3Ryb2tlOiNGRkZGRkY7c3Ryb2tlLXdpZHRoOjI7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7IiBwb2ludHM9IjE2LDE2IDI1LDI1IDM0LDM0ICAgIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /></div>
                    <div class="popresim"><img src="' . $row['haber_Yol'] . '"></div>
                    <div class="icer">' . $row['haber_Metin'] . '</div>
                </div>
            </div>';
            }
        }
    }
    function listeleClientVideo(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
          foreach ($query as $row) {

            echo '<div class="iframe-wrapper"><iframe src="https://www.youtube.com/embed/'. $row["video_Youtube_Id"] .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
          }
        }
        $this->baglantiKapat();
    }
    function listeleClientDisHaber(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            foreach ($query as $row) {


                echo '
                <div class="tasiyici">
                  <div class="tasiyici-resim">
                    <img src="http://konyaaltihasanaokulu.com/otomasyon/ui/haber/'.$row['dokuman_Url'].'"/>
                  </div>
                  <div class="tasiyici-sag">
                    <div class="tasiyici-metin">'.$row['dokuman_Basligi'].'</div>
                    <div class="tasiyici-aciklamasimple">'.$row['dokuman_Metin'].'</div>
                    <br>
                    <a href="haberdetay.php?id='. $row['dokumanId'].'">Detay...</a>
                  </div>
                  

                </div>'
                 ;




            }
        }
        $this->baglantiKapat();
    }
    function listeleClientSlides(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            foreach ($query as $row) {


                echo '
                <div class="mySlides fade">
                <img src="http://konyaaltihasanaokulu.com/otomasyon/ui/'.$row['slideResim'].'"/>
                <div class="text">Sldier 2 Yazı Alanı</div>
                </div>
                '
                 ;




            }
        }
        $this->baglantiKapat();
    }
    function listeleClientSlidesDot(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            foreach ($query as $row) {


                echo '
                <span class="dot"></span> 
                '
                 ;




            }
        }
        $this->baglantiKapat();
    }
    function listeleClientDisHaberDetay(){
        $this->baglantiAc();
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);

        if($query){
            foreach ($query as $row) {
                echo "<script>console.log('" . json_encode($row) . "');</script>";
               
                $sonuc = $this->listeleClientDisHaberIc($row['dokuman_Basligi']);
              
                
                echo '
                <div class="pdr-sol">'.$sonuc.'</div>
                <div class="pdr-sag">
                    <div class="pdr-alt-baslik">'.$row['dokuman_Basligi'].'</div>
                    <div class="metin">'.$row['dokuman_Metin'].'</div>
                   
                </div>'
                 ;




            }
        }
        $this->baglantiKapat();
    }
    function listeleClientDisHaberIc($gelenbaslik){
        $this->baglantiAc();
        $this->setCumle("SELECT * FROM dishabercoklu WHERE dokuman_Basligi = '{$gelenbaslik}'");
        $query = $this ->db ->query($this->cumle,PDO::FETCH_ASSOC);
        $new_array = array();
        if($query){
          $output = "";
            foreach ($query as $key => $row) {

                //return $row;
                $output .= '<img src="http://konyaaltihasanaokulu.com/otomasyon/ui/haber/'.$row['dokuman_Url'].'"/>';




            }
            return $output;
        }

        $this->baglantiKapat();
    }
}
ob_end_flush();
?>
