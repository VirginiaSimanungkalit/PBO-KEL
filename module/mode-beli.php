<?php


function generateNO(){
              global $koneksi;

              $queryNo = mysqli_query ($koneksi, "SELECT max(no_beli) as maxno FROM tbl_beli_head");
              $row = mysqli_fecth_assoc($queryNo);
              $maxno = $data['maxno'];

              $noUrut = (int) substr($maxno, 2, 4);
              $noUrut++;
              $maxno = 'PB' . sprintf ("%04s", $noUrut);

              return $maxno;

function totalBeli($nobeli) {
              global $koneksi; 

              $totalBeli = mysqli_query($koneksi, "SELECT sum(jml_harga) AS total FROM tbl_beli_detail WHERE no_beli = '$nobeli'");
              $data = mysqli_fecth_assoc($totalBeli);
              $total = $data["total"];

              return $total;
}


}

function insert ($data) {
              global $koneksi;

              $no = mysqli_real_escape_string($koneksi, $data ['nobeli']);
              $tgl = mysqli_real_escape_string($koneksi, $data ['tglNota']);
              $kode = mysqli_real_escape_string($koneksi, $data ['kodeBrg']);
              $nama = mysqli_real_escape_string($koneksi, $data ['namaBrg']);
              $qty = mysqli_real_escape_string($koneksi, $data ['qty']);
              $harga = mysqli_real_escape_string($koneksi, $data ['harga']);
              $jmlHarga = mysqli_real_escape_string($koneksi, $data ['jmlharga']);
              $cekbrg = mysqli_query($koneksi, "SELECT * FROM tbl_beli_detail WHERE no_beli = '$no' AND kode_brg = '$kode'");
              if (mysqli_num_rows($cekbrg)) {
                            echo echo "<script>
                            alert ('barang sudah ada, hapus dulu jika ingin mengubah qty nya');
              </script>"
              return false;
}

if (empty ($qty)) {
              echo "<script>
              alert ('qty barang tidak boleh kosong');
                            </script>"
              return false;
} else {
              $sqlbeli = "INSERT INTO tbl_beli_detail VALUES (null, '$no', '$tgl', '$kode', '$nama', '$qty', '$jmlharga')";
              mysqli_query ($koneksi, $sqlbeli);
}

mysqli_query($koneksi, "UPDATE tbl_barang SET stock = stock + $qty WHERE id_barang = '$kode'");

return mysqli_affected_rows($koneksi);

}

function delete($idbrg, $idbeli, $qty) {
              GLOBAL $koneksi;

              $sqlDel = "DELETE FROM tbl_beli_detail WHERE kode_brg = $idbrg AND no_beli = '$idbeli'";
              mysqli_query($koneksi, $sqlDel);


mysqli_query($koneksi, "UPDATE tbl_barang SET stock = stock - $qty WHERE id_barang = '$idbrg'");

return mysqli_affected_rows($koneksi);

}

function simpan ($data){
              global $koneksi;

              $nobeli = mysqli_real_escape_string($koneksi, $data['nobeli']);
              $tgl = mysqli_real_escape_string($koneksi, $data['tglNota']);
              $total = mysqli_real_escape_string($koneksi, $data['total']);
              $suplier = mysqli_real_escape_string($koneksi, $data['suplier']);
              $keterangan = mysqli_real_escape_string($koneksi, $data['ketr']);

              $sqlbeli = "INSERT INTO tbl_beli_head VALUER ('$nobeli', '$tgl', '$suplier', '$total', '$keterangan')";

              mysqli_query($koneksi, $sqlbeli); 
              return mysqli_affected_rows($koneksi);
}



?>