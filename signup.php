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
.tulisan_login{
    text-align: center;
    /*membuat semua huruf menjadi kapital*/
    text-transform: uppercase;
}
 
.kotak_login{
    width: 350px;
    background: white;
    /*meletakkan form ke tengah*/
    margin: 80px auto;
    padding: 30px 20px;
}
 
label{
    font-size: 11pt;
}
 
.form_login{
    /*membuat lebar form penuh*/
    box-sizing : border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
}
 
.tombol_login{
    background: #46de4b;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
}

.tombol_signup{
    background: #ff0000;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
}
 
.link{
    color: #232323;
    text-decoration: none;
    font-size: 10pt;
}
</style>
  
</head>
<body>
 
    <h1>HIMPUNAN MAHASISWA FISIKA <br/> UNIVERSITAS ANDALAS</h1>  
    <div class="content">
    <div class="kotak_login">
        <p>
    <form action="proses_signup.php"method="POST">
            <fieldset>
    <p>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" placeholder="Nama Lengkap"/>
    </p>
    <p>
        <label for="no_bp">No BP: </label>
        <input type="text" name="no_bp" placeholder="No BP"/>
    </p>
    <p>
        <label for="jenis_kelamin">Jenis Kelamin: </label>
        <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
    </p>
    <p>
        <label for="alamat">Alamat: </label>
        <input type="text" name="alamat" placeholder="Alamat"/>

    </p>

    <p>
        <label for="departemen">Departemen: </label>
        <select name="departemen">
            <option>Kerohanian</option>
            <option>External</option>
            <option>Informasi</option>
            <option>Pengembangan Akademik</option>
            <option>Pengabdian Fisika</option>
            <option>Kaderisasi</option>
            <option>Dana dan Usaha</option>
            <option>Kesekretariatan</option>
            <option>Minat dan Bakat</option>


        </select>
    </p>
    
    <p>
         <input type="submit" value="Daftar" name ="daftar"/>
    </p>
    
    </fieldset>
    </form>
        </p>
 
 </div>    

</body>
    
 
</body>
</html>