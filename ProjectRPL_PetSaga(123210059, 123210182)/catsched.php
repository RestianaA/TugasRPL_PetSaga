<html>
<head>
    <title>Cat Sched</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image:none;
            background-color: #fff9cf; 
        }
    </style>
</head>
<body>
    <div class=navbar>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="beranda.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="grooming.php">Grooming</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cathotel.php">Cat Hotel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#CatSched">Cat Sched</a>
            </li>
        </ul>
    </div>
    <div class="tabel">
        <h6>CAT SCHEDULE</h6>
        <table class="table" >
            <tr>
                <th>Gambar</th>
                <th>Nama Kucing</th>
            </tr>
            <?php
              include "koneksi.php";
              $query = mysqli_query($konek,"SELECT * FROM sched");
              while($data = mysqli_fetch_array($query))
              { ?>
            <tr>
                <td class="imgm">
                    <img src="img/cat/<?php echo $data['cat_pic']; ?>">
                </td>
                <td><?php echo $data['nama_cat']; ?></td>
            <?php } ?>
            </tr>
        </table>
    </div>
</body>
</html>