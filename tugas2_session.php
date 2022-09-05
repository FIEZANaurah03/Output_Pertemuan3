<?php
    session_start();
    echo "Data Sudah Diterima";
    $_SESSION['Nama Lengkap']=$_POST['namalengkap'];
    $_SESSION['Nama Panggilan']=$_POST['namapanggilan'];
    $_SESSION['NIM']=$_POST['nim'];
    $_SESSION['Fakultas']=$_POST['fakultas'];
    $_SESSION['Alamat Rumah']=$_POST['alamat'];
    $_SESSION['Jenis Kelamin']=$_POST['kelamin'];
