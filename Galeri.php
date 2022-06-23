<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-nav ml-auto">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="http://localhost/WebServiceRajaOngkir/">CEK ONGKIR</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled">Disabled</a>
                  </div>
                </div>
              </nav>
         <section id="header" class="jumbotron text-center">
           <h1 class="display-3">Kuliner</h1>
           <p class="lead">makan enak enak enak enak.</p>
           <a href="insertBarangView.php" class="btn btn-warning">Tambah Data</a>
           
      </section>
        
      <section id="gallery">
        <div class="container">
          <div class="row">
          <?php
          require_once "config.php";
    
      $sql = "SELECT * FROM tb_item ORDER BY id ASC";
      $result = mysqli_query($link, $sql);
     
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }
      while($row = mysqli_fetch_assoc($result))
      {
        ?>
          <div class="col-lg-4 mb-4">
          <div class="card">
            <img src="<?php echo $row['gambar']; ?>" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title"><?php echo $row['item_name']; ?></h4>
              <h5 class="card-title">Harga : <?php echo $row['price']; ?></h5>
              <h5 class="card-title">berat : <?php echo $row['stock']; ?></h5>
              <p class="card-text">Lokasi : <?php echo $row['item_code']; ?>...</p>
             <a href="updateBarangView.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success btn-sm">Update</a>
             <a href="deleteBarangDo.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-warning btn-sm">Delete</a>
           
            </div>
           </div>
          </div>
          <?php
        
      }
      ?>
    </div>
</div>
</body>
</html>