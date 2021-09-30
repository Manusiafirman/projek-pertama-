<?php 
  require('config/db.php');
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Toko Online Batik</title>
  <link rel="stylesheet" type="text/css" href="plugin/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/main.css">
  <link rel="icon" type="image/gif/png" href="asset/img/Title.png">
</head>
<body>

<?php include('component/nav.php'); ?>
<div class="container-fluid" id="isi" >
  

  <div class="row">
    <div class="col-xs-2 col-xs-offset-5" id="produk-laris">
      <h3 style="font-family: Blacksword; font-size:2.2em;"><strong>Produk Batik</strong></h3>
    </div>
  </div>
  


  <!-- Laman Produk-->
  
  <div class="container" id="produk">
    <div class="tab-content">
      

    <!-- wanita -->
      <div id="wanita" class="tab-pane fade">
      <ul>
      <?php 
        require("config/db.php");
        
        $queryWanita = "SELECT * FROM tabel_produk WHERE kategori='wanita' LIMIT 0,4";
        $query_wanita = mysqli_query($conn,$queryWanita);

        while($arrayWanita = mysqli_fetch_array($query_wanita)){
          echo '
            <li>
        <a href="#'.$arrayWanita['idProduk'].'">
          <img src="admin/proses/'.$arrayWanita['path'].'" alt="'.$arrayWanita['nama'].'">
          <span></span>
        </a>
        <div class="overlay" id="'.$arrayWanita['idProduk'].'">
          <a href="#" class="close"><i class="glyphicon glyphicon-remove"></i></a>
          <img src="admin/proses/'.$arrayWanita['path'].'">
          <div class="keterangan">
            <div class="container">
              <h4><strong>'.$arrayWanita['nama'].'</strong></h4>
              <p>'.$arrayWanita['keterangan'].'</p>
              <h5>Rp.'.$arrayWanita['harga'].'</h5>
              <h5 class="ukur">Ukuran : '.$arrayWanita['ukuran'].'</h5>
              <button type="button" class="btn btn-success">Stock : '.$arrayWanita['stock'].'</button>
              ';
              if(isset($_SESSION['idUser'])){
                if($arrayWanita['stock'] > 0){
                  echo '
                  <a href="proses/beli.php?idProduk='.$arrayWanita['idProduk'].'&idUser='.$iduser.'"><button type="button" class="btn btn-info">Masukkan Keranjang</button></a>
                ';
                }else{
                  echo '
                  <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                ';
                }
              }else{
                echo '
                  <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                ';
              }
              echo '
            </div>
          </div>
        </div>
      </li>  
          ';
        }
       ?>
      <div class="clear"></div>
    </ul>
    </div>
    <!-- end of wanita -->

    <!-- couple -->
      <div id="couple" class="tab-pane fade">
      <ul>
        <?php 
        require("config/db.php");
        
        $queryCouple = "SELECT * FROM tabel_produk WHERE kategori='couple' LIMIT 0,4";
        $query_couple = mysqli_query($conn,$queryCouple);

        while($arrayCouple = mysqli_fetch_array($query_couple)){
          echo '
            <li>
            <a href="#'.$arrayCouple['idProduk'].'">
              <img src="admin/proses/'.$arrayCouple['path'].'" alt="'.$arrayCouple['nama'].'">
              <span></span>
            </a>
            <div class="overlay" id="'.$arrayCouple['idProduk'].'">
              <a href="#" class="close"><i class="glyphicon glyphicon-remove"></i></a>
              <img src="admin/proses/'.$arrayCouple['path'].'">
              <div class="keterangan">
                <div class="container">
                  <h4><strong>'.$arrayCouple['nama'].'</strong></h4>
                  <p>'.$arrayCouple['keterangan'].'</p>
                  <h5>Rp.'.$arrayCouple['harga'].'</h5>
                  <h5 class="ukur">Ukuran : '.$arrayCouple['ukuran'].'</h5>
                  <button type="button" class="btn btn-success">Stock : '.$arrayCouple['stock'].'</button>
                  ';
                  if(isset($_SESSION['idUser'])){
                    if($arrayCouple['stock'] > 0){
                      echo '
                      <a href="proses/beli.php?idProduk='.$arrayCouple['idProduk'].'&idUser='.$iduser.'"><button type="button" class="btn btn-info">Masukkan Keranjang</button></a>
                    ';
                    }else{
                      echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                    }
                  }else{
                    echo '
                      <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                    ';
                  }
                  echo '
                </div>
              </div>
            </div>
          </li>  
          ';
        }
       ?>
        <div class="clear"></div>
    </ul>
    </div>
    <!-- end of couple -->

    <!-- anak-anak -->
      <div id="anak" class="tab-pane fade">
      <ul>
        <?php 
        require("config/db.php");
        
        $queryAnak = "SELECT * FROM tabel_produk WHERE kategori='anak' LIMIT 0,4";
        $query_anak = mysqli_query($conn,$queryAnak);

        while($arrayAnak = mysqli_fetch_array($query_anak)){
          echo '
            <li>
        <a href="#'.$arrayAnak['idProduk'].'">
          <img src="admin/proses/'.$arrayAnak['path'].'" alt="'.$arrayAnak['nama'].'">
          <span></span>
        </a>
        <div class="overlay" id="'.$arrayAnak['idProduk'].'">
          <a href="#" class="close"><i class="glyphicon glyphicon-remove"></i></a>
          <img src="admin/proses/'.$arrayAnak['path'].'">
          <div class="keterangan">
            <div class="container">
              <h4><strong>'.$arrayAnak['nama'].'</strong></h4>
              <p>'.$arrayAnak['keterangan'].'</p>
              <h5>Rp.'.$arrayAnak['harga'].'</h5>
              <h5 class="ukur">Ukuran : '.$arrayAnak['ukuran'].'</h5>
              <button type="button" class="btn btn-success">Stock : '.$arrayAnak['stock'].'</button>
              ';
              if(isset($_SESSION['idUser'])){
                if($arrayAnak['stock'] > 0){
                  echo '
                  <a href="proses/beli.php?idProduk='.$arrayAnak['idProduk'].'&idUser='.$iduser.'"><button type="button" class="btn btn-info">Masukkan Keranjang</button></a>
                ';
                }else{
                  echo '
                  <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                ';
                }
              }else{
                echo '
                  <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                ';
              }
              echo '
            </div>
          </div>
        </div>
      </li>  
          ';
        }
       ?>
      <div class="clear"></div>
    </ul>
    </div>
    <!-- end of anak-anak -->
    <!-- sarimbit -->
      <div id="sarimbit" class="tab-pane fade">
      <ul>
      <?php 
        require("config/db.php");
        
        $querySarimbit = "SELECT * FROM tabel_produk WHERE kategori='sarimbit' LIMIT 0,4";
        $query_sarimbit = mysqli_query($conn,$querySarimbit);

        while($arraySarimbit = mysqli_fetch_array($query_sarimbit)){
          echo '
            <li>
        <a href="#'.$arraySarimbit['idProduk'].'">
          <img src="admin/proses/'.$arraySarimbit['path'].'" alt="'.$arraySarimbit['nama'].'">
          <span></span>
        </a>
        <div class="overlay" id="'.$arraySarimbit['idProduk'].'">
          <a href="#" class="close"><i class="glyphicon glyphicon-remove"></i></a>
          <img src="admin/proses/'.$arraySarimbit['path'].'">
          <div class="keterangan">
            <div class="container">
              <h4><strong>'.$arraySarimbit['nama'].'</strong></h4>
              <p>'.$arraySarimbit['keterangan'].'</p>
              <h5>Rp.'.$arraySarimbit['harga'].'</h5>
              <h5 class="ukur">Ukuran : '.$arraySarimbit['ukuran'].'</h5>
              <button type="button" class="btn btn-success">Stock : '.$arraySarimbit['stock'].'</button>
              ';
              if(isset($_SESSION['idUser'])){
                if($arraySarimbit['stock'] > 0){
                  echo '
                  <a href="proses/beli.php?idProduk='.$arraySarimbit['idProduk'].'&idUser='.$iduser.'"><button type="button" class="btn btn-info">Masukkan Keranjang</button></a>
                ';
                }else{
                  echo '
                  <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                ';
                }
              }else{
                echo '
                  <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                ';
              }
              echo '
            </div>
          </div>
        </div>
      </li>  
          ';
        }
       ?>
      <div class="clear"></div>
    </ul>
    </div>
    <!-- end of sarimbit -->
    </div>
    
  </div>
  <!-- kontent end of produkumum -->
</div>



<?php include('component/footer.php'); ?>


<script type="text/javascript" src="plugin/Javascript/jquery.min.js"></script>
<script type="text/javascript" src="plugin/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="asset/js/script.js"></script>
</body>
</html>