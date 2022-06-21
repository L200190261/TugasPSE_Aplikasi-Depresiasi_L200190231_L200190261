<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-dark text-white">
    <?php
        $HP=null;
        $UE=null;
    ?>
    <div class="rows">
        <form action="reducing_balance.php" method="get">
            <h2><b><center> PERHITUNGAN MENGGUNAKAN METODE REDUCING BALANCE </center></b></h2>
            <div class="form-group">
                <label>Harga Perolehan :</label>
                <input type="text" name="perolehan" class="form-control" value="<?php echo $HP; ?>" required>
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
                $HP=$_GET['perolehan'];
                $UE=$_GET['umur'];
                $hasil1 = ($HP / $UE) * 2;
                $hasil2 = "Hasil depresiasi menggunakan metode reducing balance pada tahun 1 adalah " .number_format($hasil1,0,',','.');
                echo "<h4> $hasil2 </h4>";
                for ($i=2; $i <= $UE; $i++) { 
                    $hasil3 = (($HP-$hasil1) / $UE) * 2;
                    $hasil4 = "Hasil depresiasi menggunakan metode reducing balance pada tahun ke " .$i. " adalah " .number_format($hasil3,0,',','.');
                    echo "<h4>$hasil4</h4>";
                    $HP = $HP - $hasil3;
                    $hasil3 = ($HP/$UE)*2;
                }
            }
        ?>
    </div>
</div>
</body>
</html>