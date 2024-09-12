<?php 

    $teks = "Selamat ulang tahun yang ke-17!";
    
    $karakterDicari = 'a';

    $karakter = substr_count($teks, $karakterDicari);

    if($karakter > 0){
        echo "karakter '$karakterDicari' muncul sebanyak $karakter kali dalam kalimat";
    }else{
        echo "karakter '$karakterDicari' muncul sebanyak $karakter kalimat";
    }    
    
?>

