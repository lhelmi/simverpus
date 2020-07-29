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
            $query = "SELECT * FROM buku INNER JOIN pengarang ON pengarang.id = buku.idpengarang WHERE buku.id='$id'";
            $result = execute_query($con, $query);
            $data = mysqli_fetch_array($result);
            ?>
        <table>
             <tr>
                <th>ISBN</th>
                <td><?= $data['nama'] ?></td>
            </tr>
            <tr>
                <th>Judul</th>
                <td><?= $data['email'] ?></td>
            </tr>
            <tr>
                <th>Gambar</th>
                <td>
                    <img src="<?= BASEPATH . 'Source Files/image/'. $data['gambar'] ?>" alt="" width="100px" height="100px">
                </td>
            </tr>
            <tr>
                <th>Pengarang</th>
                <td><?= $data['nama'] ?></td>
            </tr>
            <tr>
                <th>Stok</th>
                <td><?= $data['stok'] ?></td>
            </tr>
        </table>
        <?php
        }else{
            header("location:index.php");
        }
        ?>
    </main>
    <?php include '../fragment/footer.php'; ?>