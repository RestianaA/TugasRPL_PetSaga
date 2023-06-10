<!DOCTYPE html>
<html>
<head>
    <title>Customer List Cat Hotel</title>
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
                    <a class="nav-link active" aria-current="page" href="#CatHotel">Cat Hotel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="catsched.php">Cat Sched</a>
                </li>
            </ul>
        </div>
    <div class="cl">
        <table class="table">
            <h6>CUSTOMER CAT HOTEL</h6>
            <tr>
                <th>Nama Owner</th>
                <th>Nama Peliharaan</th>
            </tr>
            <?php
              include "koneksi.php";
              $query = mysqli_query($konek,"SELECT * FROM cathotel");
              while($data = mysqli_fetch_array($query))
              { ?>
            <tr>
                <td><?php echo $data['nama_owner']; ?></td>
                <td><?php echo $data['nama_pet']; ?></td>
            <?php } ?>
            </tr>
        </table>
        <div class="back">
            <a href="beranda.php" class="btn-link">Back</a>
        </div>
    </div>
</body>
</html>