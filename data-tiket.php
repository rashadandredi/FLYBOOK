    <?php
      include "db.php";

      $query = "SELECT * FROM tiket";
      $result = mysqli_query($connect, $query);
      $num = mysqli_num_rows($result);
    ?>
    <html>
      <head>
        <link rel="stylesheet" href="style.css">
      </head>
      <body>
        <table class="tabel">
          <tr>
        <th>No</th>
				<th>Kode Tiket</th>
				<th>Kode Pesawat</th>
				<th>Nama Penumpang</th>
				<th>Asal</th>
				<th>Tujuan</th>
			   </tr>
          <?php
            if($num > 0){
              $no = 1;
                while($data = mysqli_fetch_assoc($result)){
            ?>
                  <tr>
                    <td><?php echo  $no ?></td>
                    <td><?php echo $data['kodeTiket'] ?></td>
                    <td><?php echo $data['kodePesawat']?></td>
                    <td><?php echo $data['namaPembeli']?></td>
                    <td><?php echo $data['berangkat']?></td>
                    <td><?php echo $data['tujuan']?></td>
                  </tr>
            <?php $no++; }
            }else{
              echo "Tidak ada data";
            }
          ?>
        </table>
      </body>
    </html>
