<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="iewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <table>
            <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>
                    <select name="jabatan" id="">
                        <option >jabatan</option>
                        <option value="direktur">direktur</option>
                        <option value="manager">manager</option>
                        <option value="karyawan">karyawan</option>
                        <option value="ob">ob</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td>
                    <select name="pendidikan" id="">
                        <option >pendidikan</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        <option value="SMK">SMK</option>
                        <option value="SMP">SMP</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tabungan</td>
                <td>:</td>
                <td><input type="number" name="tabungan"></td>
            </tr>
            <tr>
                <td>Pinjaman</td>
                <td>:</td>
                <td><input type="number" name="pinjaman"></td>
            </tr>
            
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $tabungan = $_POST['tabungan'];
    $pinjaman = $_POST['pinjaman'];
    $gaji_pokok;
    $tunjangan_pendidikan;
    
    class laptop{
        
        //propeety
        public $gaji_pokok;
        public $tunjangan_pendidikan;
        public $total_pinjaman;
        public $total_gaji;

        
        // method
        public function __construct(){
            echo "<h3>DATA KARYAWAN</h3>";
        }
        public function nama( $nama){
            echo "Nama Karwayan : ".$nama."<br>";
        }
        public function jabatan($jabatan){
            if($jabatan == "direktur"){
                $this->gaji_pokok = 5000000;
            }else if($jabatan == "manager"){
                $this->gaji_pokok = 3000000;
            }else if($jabatan == "karyawan"){
                $this->gaji_pokok = 2000000;
            }elseif($jabatan == "ob"){
                $this->gaji_pokok = 1000000;
            }
            echo "Jabatan  : ".$jabatan."<br>";
            echo "Gaji Pokok  : ".$this->gaji_pokok."<br>";
        }
        public function pendidikan($pendidikan){
            if($pendidikan == "S1"){
                $this->tunjangan_pendidikan = 1000000;
            }elseif($pendidikan == "S2"){
                $this->tunjangan_pendidikan = 850000;
            }elseif($pendidikan == "S3"){
                    $this->tunjangan_pendidikan = 750000;
                }elseif($pendidikan == "SMK"){
                    $this->tunjangan_pendidikan = 500000;
                }elseif($pendidikan == "SMP"){
                    $this->tunjangan_pendidikan = 250000;
                }
                echo "Pendidikan : ".$pendidikan."<br>";
                echo "Tujangan Pendidikan : ".$this->   tunjangan_pendidikan."<br>";
        }
        public function total_pinjaman($tabungan,$pinjaman){
            $this->total_pinjaman = $tabungan + $pinjaman;
            echo "Total Pinjaman : ".$this->total_pinjaman."<br>" ;
        }
        public function total_gaji(){
            $this->total_gaji = ($this->gaji_pokok + $this->tunjangan_pendidikan) - ($this->total_pinjaman);
            echo "TOTAL GAJI : ".$this->total_gaji;
        }
        public function __destruct(){
            echo "";
        }
        
    }
    //instansiasi
    //object
    $panggil = new laptop();
    echo "<br>";
    echo $panggil->nama($nama);
    echo $panggil->jabatan($jabatan);
    echo $panggil->pendidikan($pendidikan);
    echo $panggil->total_pinjaman($tabungan,$pinjaman);
    echo $panggil->total_gaji();

    echo "<br>";
    
    

}



?>