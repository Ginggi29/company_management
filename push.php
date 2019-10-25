<?php 

$con = mysqli_connect("localhost", "root", "", "bebas");

  $username     	= $_POST['username'];
  $fullname         = $_POST['fullname']; //get input text
  $alamat     		= $_POST['alamat']; //get input text
  $jumlahAnak       = $_POST['jumlahanak']; //get input text
  $jabatan          = $_POST['jabatan'];
  $nIK    			= $_POST['nik'];
  $nOTLP          	= $_POST['notlp'];
  
  
    $query = mysqli_query($con, "INSERT INTO bbf 
    	(username, fullname, alamat, jumlahanak, jabatan, nik, notlp) VALUES 
    	('$username', '$fullname', '$alamat', '$jumlahAnak', '$jabatan', '$nIK', '$nOTLP')");
           

           if($query) {
          echo "<script type='text/javascript'>alert('Submitted! See you at the evening!')</script>";
            } else {
           echo "<script type='text/javascript'>alert('Fail to submit! Our satelite unable to find you!')</script>";
           }



?>