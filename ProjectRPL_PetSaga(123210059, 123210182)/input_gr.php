<?php
    include "koneksi.php";

    $nama_owner = $_POST['nama_owner'];
    $nama_pet = $_POST['nama_pet'];
    $no_wa = $_POST['no_wa'];

    $query = mysqli_query($konek,"INSERT INTO grooming VALUES('','$nama_owner','$nama_pet','$no_wa')") OR die(mysqli_error($konek));

    if($query)
    {
        header("Location:output_gr.php");
    }
    else {
        echo "Proses Pendaftaran Gagal";
    }
?>