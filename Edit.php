<?php
include 'session.php';
/* include 'config/dataprofile.php'; */

$id_profil = $_POST["id_prf"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];

include 'header.php';
?>


<body>
<!--kompeni -->
<?php
include "kompeni.php";
?>
	<!-- Edit -->
    <div class="row" style="background: #0019fc; color:#D5F3FE; margin: 30px;">
                        <h1 style="font-size: 70px;">Edit</h1>
                    </div>
                </div>
        <!--form-->
        <form action="config/editc.php" method="POST" class="col-lg-8">
            <div class="form-row"style=" margin: 30px;">
                <div class="form-group col-md-8">
                    <label for="contoh1"> Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama;?>">
                </div>
            <br>
                <div class="form-group col-md-8">
                    <label for="contoh2">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
                </div>
            <br>
                <div class="form-group col-md-8">
                    <label for="contoh3">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
                </div>
            <br>
            </div>
                <!--button-->
                <input type="hidden" name="id_prf" value="<?php echo $id_profil;?>"/>
                <button type="submit" class="btn btn-primary" style="margin-left: 30px;">Edit</button>
                </form>
            </div>        
            </div>

    <?php
include "footer.php";
?>
    </body>
</html>