<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body> <center>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <div class="card text-white bg-primary mb-3" style="max-width: 50rem;">
  <div class="card-header">Data</div>
  <div class="card-body">
    <form method="post">
        <h2>Data Siswa XI RPL 3</h2>
        <table>
            <tr>
                <td><span>Jumlah Siswa</span></td>
                <td>:</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="proses" class="btn btn-outline-info"></td>
            </tr>
        </table>
        <br>
    </form>

<?php
if(isset($_POST['proses'])){
    $jumlah = $_POST['jumlah'];
?>

<form action="hasilformarray.php" method="post">
<table>
    <?php
        for($i=1; $i<=$jumlah;$i++){
    ?>
    <tr>
        <td></td>
        <td></td>
        <td>Data Siswa Ke- <?php echo $i; ?></td>
    </tr>
    <tr>
        <td>NIS</td>
        <td>:</td>
        <td><input type"text" name="nis[]"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type"text" name="nama[]"></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><input type"text" name="kelas[]"></td>
    </tr>
    <tr>
        <td>Nilai Bulanan (35%)</td>
        <td>:</td>
        <td><input type"text" name="nilaibulanan[]"></td>
    </tr>
    <tr>
        <td>Nilai Pts (15%)</td>
        <td>:</td>
        <td><input type"text" name="nilaipts[]"></td>
    </tr>
    <tr>
        <td>Nilai Pas (20%)</td>
        <td>:</td>
        <td><input type"text" name="nilaipas[]"></td>
    </tr>
    <tr>
        <td>Nilai Kehadiran (30%)</td>
        <td>:</td>
        <td><input type"text" name="nilaikehadiran[]"></td>
    </tr>
<?php
}
?>
    
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="simpan" value="simpan" class="btn btn-outline-info"></td>
    </tr>

<?php
}
?>
</div>
</div>
</center></body>
</html>