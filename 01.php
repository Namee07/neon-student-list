
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-color:#1a1a1a;
        }
        div{
            background-color:#333;
            font-family:times new roman;
            padding:10px;
            box-shadow:0 0 10px #222, 0 0 15px #222;
            color:white;
            border-radius:10px;
            animation:su 2s infinite alternate;
            position:relative;
            margin:30px;
            top:10px;
            width:200px;
            heigth:100px;
            

            

        }
        h3{
            color:white;
        }
        div:hover{
            transform: translateY(-5px);
        }

        @keyframes su {
            

            from{
                box-shadow:0 0 10px greenyellow, 0 0 15px greenyellow;
               
            }
            to{
                box-shadow:0 0 15px greenyellow, 0 0 20px greenyellow;
            }
        }
        center{
        whidth:50px;
        height:50px;
        color:white;
        background-color:#222;
        box-shadow:0 0 10px #888;
        border-radius:10px;
        
        }

        </style>
</head>
<body>
    
</body>
</html>

<?php
//sesion gunnya menyimpan array d case.
//post itu sebuah method utu membungkus sebuah data
//get itu nulisnya di url.


//sebuah array mhs
$mhs=['fat','mulan','neo','ahwaz'];

//di panggil semua pakai sebuah perulangan khusus array yaitu foreach
foreach ($mhs as $key => $value) {

    // nah setelah kurung kurawal itu merupakan kode yang akan dijalan kan oleh foreach

    // jadi var key menyimpan semua var key yang di dalamnya ada index array
    //kenapa di tambah satu? karena kan index mulai dari 0 tapi saya mau mulai dari satu jadi tambah satu.

    $keys=$key+1;

    //tampilinnya pakai echo ini saya kasih tag html center dan div kenapa? center supaya tulisannya ada di tengah itu aja sih.


    echo "<div>nama $keys  = $value <br><br></div>";
}

// nahini untuk menambah index baru di array tsb 
$mhsbaru=['rapi','chika'];

//array marge gunanyauntuk menggabungkanbeberapa array jadi satu

$mhsa=array_merge($mhs,$mhsbaru);

echo '<br><h3> mahasiswa gabungan <br></h3>';

//terus ini di bawah perulangan lagi untuk apa? jelas untuk menjalankan sebuah blok perintah 
// untuk penjelasanya sama kaya di atas.

foreach ($mhsa as $key => $value) {
    $keyt = $key+1;

    echo "<div> Nama  $keyt  =  $value <br><br> </div>";
}

//array search itu untuk mencari sebuah array.

$cari =array_search("chika",$mhsa);

// ini kondisi jika nama array itu ada di array nya atau tidak ada
 if ($cari) {
    echo "<center> ketemu di urutan ke" . "   " . $cari+1 ."</center>"; //jika ada akan muncul ini, lalu kenapa pakai +1 ya karen mau menyamai urutannya aja gitu kalau engga pakai itu makaindex nya akan di mulai dari 0 tapi karena diatas sui array msha itu di tambah satu maka i cari juga di tambah satu agar sama urutannya

 }else {
    echo '<center>tidak ketemu </center>'; // jika tidak ada akan keluar ini.
}

//array unique
//array unique gunanya untuk menghapus data double , kekurangannya ia akan kehiangan index data double tersebut.
echo '<h3>array unique</h1>';

$mhsu=['sunarti','sumanto','chika'];//array baru

$msho=array_merge($mhsu,$mhsa); //gabungin array

// jadi begini si var mshw itu menyimpan nilai yang ada di msho
// terus di unique untuk apa? bacapejelasan di line 126.
$mshw= array_unique($msho);

//ini si foreach, yang di panggil mshw itu karena kan tadi, si mshw itu menyimpan data yang ada di msho yang udah di unique.
foreach ($mshw as $key => $value) {
    $key = $key+1;

    echo "<div><br><br>Nama  $key  =  $value <br><br></div>";
}
//ar sort =mengurutkan array dari yang terbesar ke yang terkecil/ dari z ke a
echo '<h3>ar sort/urut sebuah data</h3>';

arsort($mshw); //ambil array nya dulu yang mau di arsort

//tak lupa di foreach terlebi dahulu.
foreach ($mshw as $key => $value) {
    $key=$key+1;
    echo "<div><br>Nama  $key  =  $value <br></div>";
}

echo '<h3>ar sort/urut sebuah data dari kecl kebesar</h3>';

//urut data dari yang terkecil ke terbesar/ a ke z pake asort

asort($mshw); //ambil arraynya dulu yang madu asort

//tak lupa di foreach terlebi dahulu.
foreach ($mshw as $key => $value) {
    $key=$key+1;
    echo "<div><br>Nama  $key  =  $value <br></div>";
}

//array count /menghitung jumlah data dalam  array

echo "<br><br>jumlah mahasiswa data msho " . count($msho);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    
    <center>
        <h1> buat table </h1>
    <table border='1px' celspacing='0px' celpadding='0px'>
    <tr>
    <th>no</th>
    <th>nama</th>
    </tr>
    <tr>
    <?php foreach ($mshw as $key => $value) : ?>
 <td><?php echo $key+1; ?></td>
    <td><?php echo $value; ?></td>
</tr>
<?php endforeach;?>
    </center>
    
</body>
</html>


