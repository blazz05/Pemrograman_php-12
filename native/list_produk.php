<?php
require_once 'dbkoneksi.php';
require_once 'class_produk.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "dbbarang");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $nama = $_POST["nama"];
    $qty = $_POST["qty"];
    $harga = $_POST["harga"];

    $query = "INSERT INTO produk (nama, qty, harga) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "sii", $nama, $qty, $harga);

    if (mysqli_stmt_execute($stmt)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

$objproduk = new Produk($dbh);
$rsproduk = $objproduk->getAllProduk();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- Your form HTML goes here -->
    </form>

    <div class="container mt-4">
        <h3>Daftar Produk</h3>
        <a class="btn btn-primary mt-2" href="tambah.php"><i class="fa fa-plus nav-icon mr-2"></i>Tambah Produk</a>

        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($rsproduk as $row) {
                    echo '<tr>
                        <td align="center">' . $nomor . '</td>
                        <td>' . $row->nama . '</td>
                        <td align="center">' . $row->qty . '</td>
                        <td>' . $row->harga . '</td>
                        <td align="center">
                            <a href="edit.php?id=' . $row->id . '" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?id=' . $row->id . '" class="btn btn-danger btn-sm">Del</a>
                        </td>
                    </tr>';
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
