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
        $UE=null;
        if (isset($_GET['perolehan'])) {
            $HP=$_GET['perolehan'];
            $NR=$_GET['residu'];
            $UE=$_GET['umur'];
            $jml_umur = 0;
            for ($i=1; $i<=$UE ; $i++) { 
                $jml_umur = $jml_umur + $i;
            }
            $hasil = ($HP - $NR) * $UE / $jml_umur;    
        }
    ?>
    <div class="rows">
        <form action="sum_of_the_year.php" method="get">
            <h2><b><center> PERHITUNGAN MENGGUNAKAN METODE SUM OF THE YEAR </center></b></h2>
            <div class="form-group">
                <label>Harga Perolehan :</label>
                <input type="text" name="perolehan" class="form-control" value="<?php echo $HP; ?>" required>
            </div>
            <div class="form-group">
                <label>Nilai Residu:</label>
                <input type="text" name="residu" class="form-control" value="<?php echo $NR; ?>"  required>
            </div>
            <div class="form-group">
                <label>Umur Ekonomis (Tahun) :</label>
                <input type="text" name="umur" class="form-control" value="<?php echo $UE; ?>"  required>
            </div>
            <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Kembali</button>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <br>
        <?php
        if (isset($_GET['perolehan'])) {
            $hasil = "Hasil depresiasi menggunakan metode sum of the year pada tahun ke-" . $UE . " adalah " .number_format($hasil,0,',',);
            echo "<h4>$hasil</h4>" ;
        }
        ?>
    </div>
</div>
</body>
</html>