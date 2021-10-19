<html>
    <head>
        <title>Aplikasi Pembayaran</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMKN 4</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active bg-warning" aria-current="page" href="main.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="main.php?menu=<?php echo base64_encode(1) ?>">BUKU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="main.php?menu=<?php echo base64_encode(2) ?>">SISWA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="main.php?menu=<?php echo base64_encode(3) ?>">PETUGAS</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TAMBAH DATA
          </a>
          <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="main.php?menu=<?php echo base64_encode(4) ?>">DATA BUKU</a></li>
            <li><a class="dropdown-item" href="main.php?menu=<?php echo base64_encode(5) ?>">DATA SISWA</a></li>
            <li><a class="dropdown-item" href="main.php?menu=<?php echo base64_encode(6) ?>">DATA PEMBAYARAN</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


            <div class="container-fluid">
                <?php
                if(isset($_GET['menu']))
                {
                    $id = base64_decode($_GET['menu']);
                }
                else
                {
                    $id="";
                }
                    
                    if($id==1)
                    {
                        include('View_buku.php');
                    }
                    elseif($id==2)
                    {
                        include('View_siswa.php');
                    }
                    elseif($id==3)
                    {
                        include('View_peminjaman.php');
                    }
                    elseif($id==4)
                    {
                        include('View_post_buku.php');
                    }
                    elseif($id==5)
                    {
                        include('View_post_siswa.php');
                    }
                    elseif($id==6)
                    {
                        include('View_post_pembayaran.php');
                    }
                    elseif($id==7)
                    {
                        include('View_put_buku.php');
                    }
                    elseif($id==8)
                    {
                        include('View_put_siswa.php');
                    }
                    elseif($id==9)
                    {
                        include('View_put_pembayaran.php');
                    }
                    else
                    {
                        echo "Selamat Datang";
                    }
                ?>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    </body>
</html>