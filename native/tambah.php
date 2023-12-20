<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        body {
            padding-top: 50px; 
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <form action="list_produk.php" method="post">
        <div><a class="btn btn-primary" href="list_produk.php"><i class="fa fa-arrow-left nav-icon mr-2"></i>Back</a></div>
        <div class="form-group row mt-4">
            <label for="nama" class="col-sm-4 col-form-label">Nama Barang</label> 
            <div class="col-sm-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-archive"></i>
                        </div>
                    </div> 
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="qty" class="col-sm-4 col-form-label">Stok Barang</label> 
            <div class="col-sm-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-align-justify"></i>
                        </div>
                    </div> 
                    <input id="qty" name="qty" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-4 col-form-label">Harga Barang</label> 
            <div class="col-sm-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-money"></i>
                        </div>
                    </div> 
                    <input id="harga" name="harga" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-4 col-sm-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
