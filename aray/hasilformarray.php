<?php
    if(isset($_POST['simpan'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nilaibulanan = $_POST['nilaibulanan'];
        $nilaipts = $_POST['nilaipts'];
        $nilaipas = $_POST['nilaipas'];
        $nilaikehadiran = $_POST['nilaikehadiran'];
    }
?>

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
<body>
    <center>
        <h2>Data Siswa Kelas XI RPL</h2>
            <table border="" class="table table-success table-striped">
                <tr">
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Nilai Bulanan (35%)</th>
                    <th>Nilai PTS (15%)</th>
                    <th>Nilai PAS (20%)</th>
                    <th>Nilai Kehadiran (30%)</th>
                    <th>Nilai Rapot</th>
                    <th>Grade</th>
                </tr>
                <?php
                    for($a=0; $a<count($nama); $a++){
                ?>

                <tr>
                    <td><?php echo $nis[$a]; ?></td>
                    <td><?php echo $nama[$a]; ?></td>
                    <td><?php echo $kelas[$a]; ?></td>
                    <td><?php echo $nilaibulanan[$a]; ?></td>
                    <td><?php echo $nilaipts[$a]; ?></td>
                    <td><?php echo $nilaipas[$a]; ?></td>
                    <td><?php echo $nilaikehadiran[$a]; ?></td>
                    <td>
                        <?php
                            $grade = ($nilaibulanan[$a] * 0.35) + ($nilaipts[$a] * 0.15) + ($nilaipas[$a] * 0.20) + ($nilaikehadiran[$a] * 0.30);
                            echo $grade;
                        ?>
                    </td>
                    <td>
                    <?php 
                if($grade >= 90 && $grade<= 100){
                    echo"Grade A";
                }elseif($grade >= 80 && $grade <= 89){
                    echo"Grade B";
                }elseif($grade >= 70 && $grade <= 79){
                    echo"Grade C";
                }elseif($grade >= 60 && $grade <= 69){
                    echo"Grade D";
                }elseif($grade > 0 && $grade <= 59){
                    echo"Grade E";
                }else{
                    echo"Nilai Tidak Valid";
                }
            }
                ?>
                        
                    </td>
                </tr>
            </table>
            </center>
            <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>