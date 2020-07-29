<?php
include '../konfigurasi/config.php';
include '../fragment/header.php';
include '../konfigurasi/function.php';
?>
    <header>
        <h1>Detail Pengarang</h1>
    </header>
        <?php include '../fragment/menu.php' ?>
    <main>
        <h3></h3>
        <?php
        if (isset($_GET['id'])) {
            $con = connect_db();
            $id = $_GET['id'];
            $query = "SELECT * FROM pengarang WHERE id='$id'";
            $result = execute_query($con, $query);
            $data = mysqli_fetch_array($result);
            ?>
        <table>
             <tr>
                <th>Nama</th>
                <td><?= $data['nama'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $data['email'] ?></td>
            </tr>
        </table>
        <?php
        }else{
            header("location:index.php");
        }
        ?>
    </main>
    <?php include '../fragment/footer.php'; ?>