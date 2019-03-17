<link href="../css/sortby1.css" rel="stylesheet">
<?php
include "../koneksi.php";
$query = mysqli_query($connection,"SELECT b.id,b.alih_jalur as keterangan, count(a.no_daftar) as jumlah FROM calon a LEFT 
OUTER JOIN alih_jalur b ON a.alih_jalur = b.id where b.id= '4' GROUP by 1 ORDER by 1");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Alih Jalur</th>
            <th>Jumlah</th>
            <th> <div class="dropdown">
  <button class="dropbtn">Sort By</button>
  <div class="dropdown-content">
    <a href="isisortby2/baru.php">Baru</a>
    <a href="isisortby2/alih_jalur.php">Alih Jalur</a>
    <a href="isisortby2/Transfer.php">Transfer</a>
    <a href="isisortby2/Beasiswa.php">Beasiswa</a>
    <a href="#">Pemutihan</a>
   
   


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