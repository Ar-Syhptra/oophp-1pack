<?php

// jualan produk
// komik
// game
class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", "30000");

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", "250000");

$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
var_dump($produk3);
