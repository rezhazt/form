<?php
include "conection.php";
include "phpqrcode/qrlib.php";
$query = mysqli_query($kon,"SELECT * FROM tabel_visit ORDER BY id DESC LIMIT 1");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>tiket tamu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


<div id="border_tiket">

    <H>
    <div><h3>QR CODE</H3>
  	</div>
    </tbody>
    
      <?php if(mysqli_num_rows($query)>0){ ?>
        <?php

            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["tujuan"];?><br><br></td>
            
            			
            <br><br>
            
            <?php $jumlah = $data["test1"]+$data["test2"]+$data["test3"]+$data["test4"]+$data["test5"]+$data["test6"]+$data["test7"]; ?>
            
            <td><?php echo $data["fullname"];?><br></td>
            <td><?php echo $data["visitDate"];?><br></td>
            <?php if($jumlah<5){
				echo "Resiko Covid 19 : Rendah";} 
				else {
					echo "Resiko Covid 19 : Tinggi";} ?>
            
            
             </tr>
        <?php  } ?>
        <?php } ?>

</tbody>
<br>
     
	
    
    <p>
    <tr>Harap Tunjukan di gerbang Pos Security utama sebelum memasuki area perusahaan</tr> </p>  
</div>
</br>
<div>
 <input name="print" type="button" value="Print Tiket" />

</div>
</body>
</html>