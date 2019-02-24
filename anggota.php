<?php include("config.php");?>

<html>
<head>
    <title>Himpunan Mahasiswa Fisika|UNAND</title>
    <style>
body {
     font-family: sans-serif;
    background: #d5f0f3;
}
 
h1{
    text-align: center;
    /*ketebalan font*/
    font-weight: 300;
}
 

.content {
     width: 80%;
     height: auto;
     margin: 0 auto;
     position: relative;
     z-index: 5;
     background-image: url("himafi.JPEG");
     padding: 30px;
     text-align: left;
}  

0pt;
}
</style>
  
</head>
<body>
 
    <h1>HIMPUNAN MAHASISWA FISIKA <br/> UNIVERSITAS ANDALAS</h1>  
    <div class="content">
    <div class="kotak_login">
        <h3>DATA ANGGOTA</h3>
<nav>
<a href="signup.php"><font color="black">[+] Tambah Baru</font> </a>
</nav>
<?php if (isset($_GET['status'])):?>
<p>
    <?php
        if($_GET['status'] == 'sukses'){
            echo "Pendaftaran Anggota Baru Berhasil!";
        }else {
            echo "pendaftaran gagal!";
        }
    ?>
</p>
<?php endif; ?>
<br>
<table border ="1">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No BP</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Departemen</th>
        <th>Tindakan</th>
    </tr>
    </thead>
    <tbody>
    
    <?php
    $sql = "SELECT * FROM anggota";
    $query=mysqli_query($db,$sql);
    
    while ($anggota = mysqli_fetch_array($query)) {
        echo "<tr>";
        
        echo "<td>".$anggota['id']."</td>";
        echo "<td>".$anggota['nama']."</td>";
        echo "<td>".$anggota['no_bp']."</td>";
        echo "<td>".$anggota['jenis_kelamin']."</td>";
        echo "<td>".$anggota['alamat']."</td>";
        echo "<td>".$anggota['departemen']."</td>";
        
        echo "<td>";
        echo "<a href ='form_edit.php?id=".$anggota['id']."'>Edit</a>|";
        echo "<a href ='hapus.php?id=".$anggota['id']."'>Hapus</a>|";
        echo "</td>";
        
        echo "</tr>";
        
    }
    ?>
    
    </tbody>
    </table>
    
    <p> Total : <?php echo mysqli_num_rows($query)?></p>
    
    
   <a href="index.php">Kembali ke halaman awal</a>;
    
    
    
</body>

    
 
</body>
</html>
