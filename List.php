<?php
include 'session.php';
include 'config/database.php';
include 'header.php';
?>


<body>
<?php
include "kompeni.php";
?>
    <a href="config/logout.php">Logout</a>

    <div class="container">
        <table id="dataregister" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id_user = $row['id_user'];
                    $username = $row['username']; 
                    $email = $row['email'];
                    $nama = $row['nama'];
                    $password = $row['password'];

                ?>
                    <tr>
                        <td><?php echo $id_user; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td>
                            <!-- form edit -->
                            <form action="edit.php" method="POST">
                                <input type="hidden" name="id_prf" value="<?php echo $id_user; ?>" />
                                <input type="hidden" name="username" value="<?php echo $username; ?>" />
                                <input type="hidden" name="password" value="<?php echo $password; ?>" />
                                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                                <input type="hidden" name="nama" value="<?php echo $nama; ?>" />
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>

                            <!-- form view -->
<!--                             <form action="view.php" method="POST">
                                <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
                                <button type="submit" class="btn btn-success">Detail View</button>
                            </form> -->

                            <!-- form delete -->
                            <form action="config/hapus.php" method="POST">
                                <input type="hidden" name="id_usr" value="<?php echo $id_user; ?>" />
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            
                            <!--form ganti pass-->
<!--                             <form action="pass.php" method="POST">
                                <input type="hidden" name="id_prf" value="<?php echo $id_user; ?>" />
                                <button type="submit" class="btn btn-primary">Edit Password</button>
                            </form> -->
                        </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<?php
include "footer.php";
?>
</body>

<script>
    $(document).ready(function() {
        $('#dataregister').DataTable({
            "aLengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ],
            "iDisplayLength": 5
        });
    });
</script>

</html>