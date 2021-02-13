<?php
include 'session.php';
$idreg = $_POST["username"];
echo $idreg;
require_once 'config/koneksic.php';
include 'header.php';

try{
$sql = "SELECT profil.id_user, profil.id_profil, profil.nama_depan, 
profil.nama_belakang, profil.email, profil.no_telepon,
user_info.username, user_info.password 
FROM profil RIGHT JOIN user_info ON profil.id_profil = user_info.id_user WHERE user_info.id_user=?";
$q = $database_connection->prepare($sql);
$q->execute([$idreg]);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
    $id = $row['id'];
    $namadepan = $row['nama_depan'];
    $namabelakang = $row['nama_belakang'];
    $namalengkap = $namadepan . " " . $namabelakang;
    $email = $row['email'];
    $username = $row['username'];
    $password = $row['password'];
    $alamat = $row['alamat'];
    $notelepon = $row['no_telepon'];
    $st =  $row['status'];
    if (is_null($st)){
        $Email = "Tolong isi form email";

    }else {
        $status = "Email sudah terisi";
    }    
}


?>


<body>
<?php
include "kompeni.php";
?>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="Main.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <!-- <img src="<?php echo $photo;?>" alt="Admin" class="rounded-circle" width="150"> -->
                    <div class="mt-3">
                      <h4><?php echo $namalengkap;?></h4>
                      <p class="text-secondary mb-1"><?php echo $pekerjaan;?></p>
                      <p class="text-muted font-size-sm"><?php echo $perusahaan;?></p><br/><br/>
                      <a href="<?php echo $photo;?>">Download Foto Profil</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $namalengkap;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $email;?> </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> <?php echo $username;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">no telepon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $notelepon;?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $alamat;?> </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $status;?> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?php
include "footer.php";
?>
</body>
</html>