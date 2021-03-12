<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    <style>
        * {
            margin-left:10px;
        }
        .button {
            border-style: none;
            background-color: #32CD32;
            padding:8px 15px;
            color: #fff;
        }
        .containe {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        h2 {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="containe">
        <div class="form">
            <form action="form_belanja.php" method="POST">
                <h2>Belanja Online</h2>
                
                <div class="form-group row">
                <label><b>Customer</b></label>
                    <div class="col-sm-7">
                        <input type="text" name="customer" placeholder="Nama Customer" required>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                <label><b>Pilih produk</b></label>
                    <div class="col-sm-8">
                        <input type="radio" name="produk" value="tv" required>TV
                        <input type="radio" name="produk" value="kulkas" required>Kulkas
                        <input type="radio" name="produk" value="mesin cuci" required>Mesin Cuci
                    </div>
                </div>
                <br>
                <div class="form-group row">
                <label><b>Jumlah</b></label>
                    <div class="col-sm-5">
                    <input type="text" name="jumlah" placeholder="Jumlah" required>
                    </div>
                </div>
                <br>
                <button class="button" name="proses">Kirim</button>
            </form>
        </div>
        <div class="col-md-4">
			<div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
                    TV : 4.200.000
				</div>
				<div class="list-group-item">
                    Kulkas : 3.100.000
				</div>
				<div class="list-group-item">
                    Mesin Cuci : 3.800.000
				</div>
                <a href="#" class="list-group-item list-group-item-action active">Harga dapat berubah setiap saat</a>
				
			</div>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['proses'])) {

    $nama_customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $total = 0;

    if ($produk == 'tv'){
        $total = 4200000 * $jumlah;
    } elseif ($produk == 'kulkas'){
        $total = 3100000 * $jumlah;
    } else {
        $total = 3800000 * $jumlah;
    }

    echo '<br><br>Nama Customer : '.$nama_customer;
    echo '<br>Produk Pilihan : '.$produk;
    echo '<br>Jumlah Beli : '.$jumlah;
    echo '<br>Total Belanja : Rp. '.number_format($total,2,",",".");
}

?>