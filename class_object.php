<?php

class mahasiswa{
    // property
    public $nama,$nim;
    
    
    // constructor
    public function __construct($nama = "nama",$nim = "nim"){
        $this->nama = $nama;
        $this->nim = $nim;
    }
    //methode/fungsi
    public function getName(){
        return $this->nama;
    }

    public function setName($nama){
        $this->nama = $nama;
    }
    public function info(){
        return "Nama : $this->nama <br>
                Nim : $this->nim";
    }
}
//Inheritance Pewarisan
class MhsKomputer extends mahasiswa{

}
$_MA1 = new MhsKomputer("Vanza");
$_MA1->nim="19040134";
$_MA2 = new mahasiswa("Rafi","19040179");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_MA1->info(); ?></h1>
</body>
</html>