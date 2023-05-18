<?php
    // nama kelas
class Animal
{
    // Properties/ atribute
    public $nama;
    public $jenis;
    public $color;
    public $weight;

    // Method
    public function Animal()
    {
        echo $this->nama . " Hewan ini adalah Harimau jenis karnivora.";
    }
    public function Cat()
    {
        echo $this->jenis . " Hewan ini adalah Kitty jenis kucing. Kucing adalah hewan yang suka bermain & bersih.";
    }
    public function Dog()
    {
        return $this->jenis . "Hewan ini adalah Buddy jenis anjing. Anjing adalah hewan yang setia dan cerdas.";
    }
}


    // object dari class Animal
    $animal = new Animal("Harimau","Karnivora");
    $animal->animal();
    
    echo '<br>';

    // object baru class Cat
    $tiger = new Animal("Kitty");
    $tiger->nama = '';
    $tiger->animal();
  

    // // object baru class Cat
    // $cat = new Cat();
    // $cat->jenis = 'Kucing';
    // echo $cat->getInfo() . "\n";

    // // object dari class Dog 
    // $dog = new Dog();
    // $dog->jenis = 'Anjing';
    // echo $dog->getInfo() . "\n";

    // echo '<br>';
    // $tiger = new Animal();
    // $tiger->jenis = 'Cat';
    // $tiger->jenis = 'Dog';
    // $tiger->Animal();

    /* $animal->nama = 'Apli';
    $animal->eat();

    echo '<br>';
    // membuat object baru
    $tiger = new Animal();
    $tiger->nama = 'Tiger';
    $tiger->eat(); */
