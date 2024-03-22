<?php
// Definisikan kelas produk
class produk {
    private $id;
    private $nama;
    private $harga;
    private $deskripsi;

    public function __construct($id, $nama, $harga, $deskripsi) {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->deskripsi = $deskripsi;
    }

    public function tampilkan() {
        echo "<h2>{$this->nama}</h2>";
        echo "<p>{$this->deskripsi}</p>";
        echo "<p>Harga: Rp{$this->harga}</p>";
    }
}

// definisikan kelas keranjang belanja
class keranjang {
    private $produk = [];

    public function tambahProduk(Produk $produk, $jumlah) {
        $this->produk[] = ['produk' => $produk, 'jumlah' => $jumlah];
    }

    public function tampilkan() {
        foreach ($this->produk as $item) {
            $item['produk']->tampilkan();
            echo "<p>Jumlah: {$item['jumlah']}</p>";
            echo "<hr>";
        }
    }
}

// contoh penggunaan
$produk1 = new Produk(1, 'Kemeja', 150000, 'Kemeja lengan panjang dengan motif kotak-kotak.');
$produk2 = new Produk(2, 'Celana Jens', 250000, 'Celana jens slim fit dengan bahan denim berkualitas.');

$keranjang = new Keranjang();
$keranjang->tambahProduk($produk1, 2);
$keranjang->tambahProduk($produk2, 1);

$keranjang->tampilkan();
?>