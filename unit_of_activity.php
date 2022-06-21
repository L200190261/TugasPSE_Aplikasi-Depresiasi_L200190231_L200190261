<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-dark text-white">
    <?php
        $HP=null;
        $NR=null;
        $pemakaian = null;
        $kapasitas=null;
        if (isset($_GET['perolehan'])) {
            $HP=$_GET['perolehan'];
            $NR=$_GET['residu'];
            $pemakaian=$_GET['pemakaian'];
            $kapasitas=$_GET['kapasitas_max'];
            $hasil=0;
                    $hasil = ($HP - $NR) * ($pemakaian / $kapasitas_);
        }
    ?>
    <div class="rows">
        <form action="unit_of_activity.php" method="get">
            <h2><b><center> PERHITUNGAN MENGGUNAKAN METODE UNIT OF ACTIVITY </center></b></h2>
            <div class="form-group">
                <label>Harga Perolehan :</label>
                <input type="text" name="perolehan" class="form-control" value="<?php echo $HP; ?>" required>
            </div>
            <div class="form-group">
                <label>Nilai Residu :</label>
                <input type="text" name="residu" class="form-control" value="<?php echo $NR; ?>"  required>
            </div>
                <label>Pemakaian:</label>
                <input type="text" name="pemakaian" class="form-control" value="<?php echo $pemakaian; ?>"  required>
            </div>
            <div class="form-group">
                <label>Kapasitas Maksimal :</label>
                <input type="text" name="kapasitas_max" class="form-control" value="<?php echo $kapasitas; ?>"  required>
            </div>
            <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Kembali</button>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <br>
        <?php
            if (isset($_GET['perolehan'])) {
                $hasil = "Hasil depresiasi menggunakan metode unit of activity adalah " .number_format($hasil,0,',','.');
                echo "<h4>$hasil</h4>" ;
            }
        ?>
    </div>
</div>
</body>
</html>