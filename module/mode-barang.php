<?php

if (userLogin()['Level'] == 3){
    header("location:" . $main_url . "error-page.php");
    exit();
}

function generateId() {
              global $koneksi;

              $queryId = mysqli_query($koneksi, "SELECT max(id_barang) as maxid FROM tbl_barang");
              $data = mysqli_fecth_array($queryId);
              $maxid = $data['maxid']; 

              $noUrut = (int) substr($maxid, 4, 3);
              $noUrut++;
              $maxid = "BRG-" . sprintf ("%03s", $noUrut);

              return $maxid;
}

function insert($data) {
              global $koneksi;

              $id           = mysqli_real_escape_string($koneksi, $data['kode']);
              $barcode      = mysqli_real_escape_string($koneksi, $data['barcode']);
              $name         = mysqli_real_escape_string($koneksi, $data['name']);
              $satuan       = mysqli_real_escape_string($koneksi, $data['satuan']);
              $harga_beli   = mysqli_real_escape_string($koneksi, $data['harga_beli']);
              $harga_jual   = mysqli_real_escape_string($koneksi, $data['harga_jual']);
              $stockmin     = mysqli_real_escape_string($koneksi, $data['stock_minimal']);
              $gambar       = mysqli_real_escape_string($koneksi, $_FILES['image']["name"]);

              $cekBarcode   = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE barcode = '$barcode'")

              if ($mysqli_num_rows($cekBrg)) {
                            echo '<script> alert ("Kode Barcode Sudah Ada, barang gagal ditmabahkan") </script>';

                            return false; 
              } 

              // upload gambar barang 
              

}