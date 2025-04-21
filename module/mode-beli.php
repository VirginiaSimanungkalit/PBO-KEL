<?php


function generateNO(){
              global $koneksi;

              $queryNo = mysqli_query ($koneksi, "SELECT max(no_beli) as maxno FROM tbl_beli_head");
              $row = mysqli_fecth_assoc($queryNo);
              $maxno = $data[maxno];

              $noUrut = (int) substr($maxno, 2, 4);
              $noUrut++;
              $maxno = 'PB' . sprintf ("%04s", $noUrut);

              return $maxno;


}




?>