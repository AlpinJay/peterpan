<link href="css/sortby1.css" rel="stylesheet">
<?php
include "koneksi.php";
$query = mysqli_query($connection,"SELECT b.kerja as keterangan, count(a.no_daftar) as jumlah FROM calon a LEFT OUTER JOIN kerja b ON a.kerja_ortu = b.kerja GROUP by 1 ORDER by 1 ");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Agama</th>
            <th>Jumlah</th>
            <th> <div class="dropdown">
  <button class="dropbtn">Sort By</button>
  <div class="dropdown-content">
    <a href="isisortby1/sortbyGuru.php">Guru</a>
    <a href="#">Pegawai Swasta</a>
    <a href="#">Pegawai Negeri</a>
    <a href="#">wiraswasta</a>
    <a href="#">Dosen</a>
    <a href="#">TNI</a>
    <a href="#">POLRI</a>
    <a href="#">Petani</a>
    <a href="#">Buru</a>
    <a href="#">Pensiunan</a>
   


  </div>
</div></th>
           
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["keterangan"];?></td>
            <td><?php echo $data["jumlah"];?></td>
            
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
   
</form>