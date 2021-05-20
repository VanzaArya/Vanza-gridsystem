<?php
// kelas abstrak
// sebuah kelas abstrak minimal harus ada satu buah methode abstrak
abstract class Buah{
    // property
    public $nama = "Buah",
           $warna = "warna";
    // constructor
    public function __construct($nama, $warna){
        $this->nama = $nama;
    }
    // methode abstrak
    abstract public function rasa();
    // methode
    public function getInfo(){
        return "Buahnya adalah {$this->nama}, memiliki warna {$this->warna}";
    }
}
// kelas anak/child class
class Mangga extends Buah {
    // deklarasi isi methode abstrak yang ada di parent class
    public function rasa(){
        echo "Buah {$this->nama} memiliki rasa yang manis seperti {$this->nama}.";
    }
}
class Apel extends Buah {
    // deklarasi isi methode abstrak yang ada di parent class
    public function rasa(){
        echo "Buah {$this->nama} memiliki rasa yang asam, manis dan gurih seperti {$this->nama}.";
    }
}
// Object 
$mangga = new Mangga("Mangga", "Hijau");
// mengakses abstrak kelas 
$mangga->rasa();
?>