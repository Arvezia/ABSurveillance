<?php
include "header.php";
include 'config/database.php';
?>
  <body>
      <index>
          <top>
    <!--Kompeni Name-->
    <?php
include "kompeni.php";
?>

    <?php /* while ($row = $q->fetch()) :
                    $id_user = $row['id_user']; */
    
    ?>
           <!--Login-->
                <div class="row" style="background: #0019fc; color:#D5F3FE; margin: 30px;">
                    <div class="col-md-12">
                        <h1 style="font-size: 70px;">Login</h1>
                    </div>
                </div>
        <!--form-->
        <form action="config/loginc.php" method="POST" name="login" onsubmit="required()">
            <div class="form-row" style=" margin: 30px";>
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
            </div>
                <!--button-->

                <!-- <button onclick="check()" type="button" class="btn btn-primary" style=" margin: 30px">Login</button> -->
                <button name="login"type="submit" class="btn btn-primary" style=" margin: 30px">Login</button>
                </form>
                <!-- <p style="margin-left: 30px;"> Apabila ID dan Password salah, masukkan asdf untuk id dan password</p> -->
                <!--button end -->
            </div>        
            </div>

            <script src="config/pass.js"></script>
           <!--  <script language = "javascript">
                function check() {



        var storedName = localStorage.getItem('name');
        var storedPw = localStorage.getItem('pw');



        var usrName = document.getElementById('username').value;
        var usrPw = document.getElementById('password').value;



        if (urName.value == storedName && userPw.value == storedPw) {
         alert('Welcome ' + usrName);
         window.location.replace("Main.php");

        } 
        if (usrName.value == "asdf" && usrPw.value == "asdf") {
         alert('Welcome asdf');
         window.location.replace("Main.php");
        }

        else {
        alert('Username atau password salah.');
        }

}
            </script> -->
    <?php
include "footer.php";
?>
    </body>
</html>