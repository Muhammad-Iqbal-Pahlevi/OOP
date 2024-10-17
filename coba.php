<?php

class product
{
    public $nameProduct;
    public $priceProduct;



    function setProduct($name, $price)
    {
        $this->nameProduct = $name;
        $this->priceProduct = $price;
    }

    function getProduct()
    {
        return "Nama: " . $this->nameProduct . "Harga: " . $this->priceProduct;
    }
}

$pulpen = new Product();
$buku = new product();

$pulpen->setProduct("Pulpen", 1000);
$buku->setProduct("Buku", 2000);

echo $pulpen->getProduct();
echo "<br>";
echo $buku->getProduct();


// class laptop

class Laptop
{
    public $nameLaptop;
    public $priceLaptop;
    public $vgaLaptop;
    public $ramLaptop;
    public $ssdLaptop;

    function setLaptop($name, $price, $vga, $ram, $ssd)
    {
        $this->nameLaptop = $name;
        $this->priceLaptop = $price;
        $this->vgaLaptop = $vga;
        $this->ramLaptop = $ram;
        $this->ssdLaptop = $ssd;
    }

    function getLaptop()
    {
        return "Nama: " . $this->nameLaptop . "Harga: " . $this->priceLaptop . "VGA: " . $this->vgaLaptop . "RAM: " . $this->ramLaptop . "SSD: " . $this->ssdLaptop;
    }
}

$thinkpad = new Laptop();
$thinkpad->setLaptop("Thinkpad", 2000000, "NVIDIA", "8GB", "512GB");

echo "<br>";
echo $thinkpad->getLaptop();


class Car
{
    public $namaMobil;
    public $hargaMobil;
    public $tipeMobil;

    function setMobil($name, $price, $type)
    {
        $this->namaMobil = $name;
        $this->hargaMobil = $price;
        $this->tipeMobil = $type;
    }

    function getMobil()
    {
        return "Mobil: " . $this->namaMobil . "Harga: " . $this->hargaMobil . "Tipe: " . $this->tipeMobil;
    }
}


$Ducati = new Car();
$Ducati->setMobil("Ducati", 2000000, "Scooter");
echo "<br>";
echo $Ducati->getMobil();


class Peci
{
    public $merek;
    public $ukuran;
    public $tinggi;

    function setPeci($merek, $ukuran, $tinggi)
    {
        $this->merek = $merek;
        $this->ukuran = $ukuran;
        $this->tinggi = $tinggi;
    }

    function getPeci()
    {
        return "Merek : " . $this->merek . "Ukuran :" . $this->ukuran . "Tinggi :" . $this->tinggi;
    }
}

$songkok = new Peci();
$songkok->setPeci("Wadimor", 7, 9);
echo "<br>";
echo $songkok->getPeci();
