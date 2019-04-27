<?php
  include "db.php";

  $query = "SELECT * FROM transaksi";
  $result = mysqli_query($connect, $query);
  $num = mysqli_num_rows($result);
?>
<link rel="stylesheet" href="style.css">
<table class="tabel">
  <tr>
      <th>No</th>
      <th>ID</th>
      <th>Kode Tiket</th>
      <th>Total</th>
  </tr>
  <?php
    if($num > 0){
      $no = 1;
        while($data = mysqli_fetch_assoc($result)){
    ?>
          <tr>
            <td><?php echo  $no ?></td>
            <td><?php echo $data['idTransaksi'] ?></td>
            <td><?php echo $data['kodeTiket']?></td>
            <td><?php echo $data['total']?></td>
          </tr>
    <?php $no++; }
    }else{
      echo "Tidak ada data";
    }
  ?>
</table>
