<!-- latihan 1 -->
<?php
// Definisikan class Menu
class Menu {

};

// Tetapkan instance baru dari kelas Menu ke variable $curry
 $curry = new Menu(); 

// Tetapkan instance baru dari kelas Menu ke variable $pasta
 $pasta = new Menu(); 

?>

<!-- latihan 2  -->
<?php
class Menu {
  // Deklarasikan property $name
  public $name;
  
}

$curry = new Menu();
$pasta = new Menu();
// Tetapkan 'GULAI' ke property name $curry
$curry->name = 'GULAI';

// Tetapkan 'PASTA' ke property name $pasta
$pasta->name = 'PASTA';

// Cetak property name $curry
echo $curry->name;

echo '<br>';
// Cetak property name dari $pasta
echo $pasta->name;

?>
<!-- latihan 3 -->
<?php
class Menu {
public function hello() {
  echo "Saya adalah instance dari class Menu";
}
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'GULAI';
$pasta->name = 'PASTA';
// Panggil method hello menggunakan $curry
$curry->hello();

echo '<br>';
// Panggil method hello menggunakan $pasta
$pasta->hello();

?>

<!-- latihan 4 -->
<?php
class Menu {
public function hello() {
  echo "Saya adalah instance dari class Menu";
}
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'GULAI';
$pasta->name = 'PASTA';
// Panggil method hello menggunakan $curry
$curry->hello();

echo '<br>';
// Panggil method hello menggunakan $pasta
$pasta->hello();

?>

<!-- latihan 5 -->
<?php
class Menu {
  public $name;
  
  public function hello() {
    // Cetak "Saya adalah ____"
    echo "Saya adalah ".$this->name;
    
  }
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'GULAI';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>
<!-- latihan 6 -->
<?php
class Menu {
  public $name;
  
  // Definisikan constructor
  public function __construct() {
    echo 'Sebuah instance telah diciptakan.';
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
}

$curry = new Menu();
echo '<br>';
$pasta = new Menu();
echo '<br>';
$curry->name = 'GULAI';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>

<!-- LATIHAN 7 -->
<?php
class Menu {
  public $name;
  
  // Tambahkan parameter $name ke constructor
  public function __construct($name) {
    // Tetapkan $name ke property name
    $this->name=$name;
    
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
}

// Berikan 'GULAI' ke new Menu() sebagai argument
$curry = new Menu('GULAI');

// Berikan 'PASTA' ke new Menu() sebagai argument
$pasta = new Menu('PASTA');

// Hapus satu baris dibawah

// Hapus satu baris dibawah

$curry->hello();
echo '<br>';
$pasta->hello();

?>
<!-- LATIHAN 8 -->
<?php
class Menu {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
}

$curry = new Menu('GULAI');
$pasta = new Menu('PASTA');

?>

<!-- Cetak property name milik $curry didalam tag <p> -->
<p><?php echo $curry->name ?></p>

<!-- Cetak property name milik $pasta didalam tag <p> -->
<p><?php echo $pasta->name ?></p>
