<?php
    $koneksi =new mysqli("localhost","root","","uts_ifb309_2425_bb_152022155_irna");
    if($koneksi -> connect_error){
        echo "koneksi belum terhubung";
    }
    ?>