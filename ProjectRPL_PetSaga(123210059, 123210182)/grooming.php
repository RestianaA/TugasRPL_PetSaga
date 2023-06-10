<html>
    <head>
        <title>Grooming</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body >
        <div class=navbar>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="beranda.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#Grooming">Grooming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cathotel.php">Cat Hotel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="catsched.php">Cat Sched</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <br>  
                <h2>GROOMING</h2>
            <br>
            <form method="POST" action="input_gr.php" class="form">
                <div class="nma"> 
                    <label for="nama_user">Nama Owner</label>
                    <input class="form-control" name="nama_owner" type="text" placeholder="Masukkan Nama Owner">
                </div>
                <div class="nma"> 
                    <label for="nama_user">Nama Peliharaan</label>
                    <input class="form-control" name="nama_pet" type="text" placeholder="Masukkan Nama Peliharaan">
                </div>
                <div class="nma"> 
                    <label for="nama_user">Nomor Whatsapp</label>
                    <input class="form-control" name="no_wa" type="text" placeholder="Masukkan Nomor Whatsapp">
                </div>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-dark" type="submit">SUBMIT</button>
                </div>   
            </form>
            <br>
            <div class="back">
                <a href="beranda.php" class="btn-link">Back</a>
            </div>
        </div>
    </body>
</html>