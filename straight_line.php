<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-dark text-white">
    <?php
        $HP=null; #Harga Perolehan
        $NR=null; #Nilai Residu
        $UE=null; #Umur Ekonomis
        if (isset($_GET['perolehan'])) {
            $HP=$_GET['perolehan'];
            $NR=$_GET['residu'];
            $UE=$_GET['umur'];
            $hasil=0;
            $hasil = ($HP-$NR)/$UE;  
        }
    ?>
    <div class="rows">
        <form action="straight_line.php" method="get">
            <h2><b><center color="202020"> PERHITUNGAN MENGGUNAKAN METODE STRAIGHT LINE </center></b></h2>
            <div class="form-group">
                <label>Harga Perolehan :</label>
                <input type="text" name="perolehan" class="form-control" value="<?php echo $HP; ?>" required>
            </div>
            <div class="form-group">
                <label>Nilai Residu :</label>
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
                $hasil = "Hasil depresiasi pertahun selama ". $UE . " tahun menggunakan metode straight line adalah " .number_format($hasil,0,',','.');
                echo "<h4>$hasil</h4>" ;
            }
        ?>
    </div>
</div>
</body>
</html>