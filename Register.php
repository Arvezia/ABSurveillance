<?php
include "header.php";
include 'config/database.php';
?>
  <body>
      <index>
          <top>
          <?php
include "kompeni.php";
?>
        </top>
           <!--Regis-->
                <div class="row" style="background: #0019fc; color:#D5F3FE; margin: 30px;">
                    <div class="col-md-12">
                        <h1 style="font-size: 70px;">Register</h1>
                    </div>
                </div>
        <!--form-->
        <form action="config/registerc.php" method="POST" class="col-lg-8">
            <div class="form-row"style=" margin: 30px;">
                <div class="form-group col-md-8">
                    <label for="contoh1"> Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
            <br>
                <div class="form-group col-md-8">
                    <label for="contoh2">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            <br>
                <div class="form-group col-md-8">
                    <label for="contoh3">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
            <br>
            <br>
                <div class="form-group col-md-8">
                    <label for="contoh3">Nama</label>
                    <input type="text" class="form-control" name="nama_user" placeholder="Nama">
                </div>
            <br>
            </div>
                <!--button-->
                <button type="submit" class="btn btn-primary" style="margin-left: 30px;">Register</button>
                </form>
            </div>        
            </div>
<!--             <script language = "javascript">
                var name = [document.getElementById('username')];
                var pw = document.getElementById('password');

                function register(){
                if(password.value === password2.value) {
                    alert('Anda telah berhasil melakukan registrasi');
                    window.location.replace("Login.php");
                }
                else {
                    alert('Password atau Email tidak sama, silahkan periksa kembali');  
                
                }
                }

            </script> -->
    <?php
include "footer.php";
?>
    </body>
</html>