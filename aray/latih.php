<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arif</title>
    </head>
    
<body>
    <h1>Gaji</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Karyawan</td>
                <td></td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
            <td>Jabatan</td>
            <td></td>  
            <td>   
             <select name="jabatan">
		       <option value='direktur'>direktur</option>
		       <option value='manager'>manager</option>
		       <option value='karyawan'>karyawan</option>
		       <option value='ob'>ob</option>
	         </select>
            </td>
            </tr>
            <tr>
            <td>Pendidikan</td>
            <td></td>  
            <td>   
            <select name="pendidikan">
		    <option value='s1'>s1</option>
		    <option value='d3'>d3</option>
            <option value='smk'>smk</option>
            <option value='smp'>smp</option>
	        </select>
            </td>
            </tr>
            <tr>
                <td>Tabungan</td>
                <td></td>
                <td><input type="number" name="tabungan" value=""></td>
            </tr>
            <tr>
                <td>Pinjaman</td>
                <td></td>
                <td><input type="number" name="pinjaman" value=""></td>
            </tr>
            <tr>
                <td>simpan</td>
                <td></td>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>
            
        </table>
    </form>
</body>
</html>  
<?php
class hitung{
      
    public $nama;
    public $jabatan;
    public $pendidikan;
    public $tabungan;
    public $pinjaman;
    public $gajipokok;
    public $tunjangan; 




        public function jabatan(){
            if(isset($_POST['simpan'])){
                 $nama = $_POST['nama'];
                 $jabatan = $_POST['jabatan'];
                 $pendidikan = $_POST['pendidikan'];
                 $tabungan = $_POST['tabungan'];
                 $pinjaman = $_POST['pinjaman'];
                 $gajipokok;
                 $tunjangan; 
        if($jabatan = "direktur") {
            $gajipokok = 5000000;
            echo "Gaji pokok :".$this->gajipokok."<br>";
            return;
        }
        elseif($jabatan = "manajer") {
            $gajipokok = 3000000;
            echo "Gaji pokok :".$this->gajipokok."<br>";
            return;
        }
        elseif($jabatan = "karyawan") {
            $gajipokok = 2000000;
            echo "Gaji pokok :".$this->gajipokok."<br>";
            return;
        }
        elseif($jabatan == "ob") {
            $gajipokok = 1000000;
            echo "Gaji pokok :".$this->gajipokok."<br>";
            return;
        }
        function pendidikan(){
            if($pendidikan = "s1") {
                $tunjangan = 1000000;
                echo "Tunjangan pendidikan :".$this->tunjangan."<br>";
                return;
            }
            elseif($pendidikan = "d3") {
                $tunjangan = 750000;
                echo "Tunjangan pendidikan :".$this->tunjangan."<br>";
                return;
            }
            elseif($pendidikan = "smk") {
                $tunjangan = 500000;
                echo "Tunjangan pendidikan :".$this->tunjangan."<br>";
                return;
            }
            elseif($pendidikan = "smp") {
                $tunjangan = 250000;
                echo "Tunjangan pendidikan :".$this->tunjangan."<br>";
                return;
            } 
                 
        }
            function tabungan(){
            
                return "Tabungan :".$this->tabungan."<br>";
            }
        }

    }
        
}

$hitung = new hitung();
echo $hitung->nama;
echo $hitung->jabatan();



?>