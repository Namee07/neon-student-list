<?php
include 'array1.php';
include 'array2.php';

$merge=array_merge($mhsgabungan,$mhs);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#1a1a1a;
            color:white;
        }
        h3{
            margin-left:350px;
            text-transform:capitalize;
            letter-spacing:3px;
            padding:5px;
            text-decoration:underline wavy white 2px;
        }
        table{
            cursor: pointer;
            width: 70%;
            border-radius: 10px;
            box-shadow: 0 0 5px lightblue,0 0 6px lightblue;
            text-align:center;
            padding:10px;

        }
        td{
            padding:10px;
        }
        tr{
            text-transform:capitalize;
        }
        tr:hover{
            box-shadow:0 0 5px lightblue,0 0 6px lightblue;
            transform:translateY(-3px);
            border:none;
            
            
        }
        th{
            font-size:19px;
            background-color:#222;
            padding:10px;
        }
        .pi{
            cursor: pointer;
            border:none;
            color:white;
            background-color:#333;
            position:relative;
            padding:15px;
            letter-spacing:3px;
            border-radius:10px;
            left:100px;
            bottom:150px;


        }
        button:hover{
            box-shadow:0 0 3px lightblue, 0 0 4px lightblue;
            border-radius:50px;
        }
        hr{
            display:flex;
            margin:0px;
            padding:0px:
            
        }
        a{
            color:white;
            text-decoration:none;
            font-size:15px;
            letter-spacing:3px;
            gap:10px;
            margin-left:20px;
            text-transform:capitalize;
            text-shadow:0 0 3px lightblue, 0 0 4px lightblue;
        }
        .satu{
            margin-right:15px;
        }
        .po{
            cursor: pointer;
            border:none;
            color:white;
            background-color:#333;
            position:relative;
            padding:10px;
            letter-spacing:3px;
            border-radius:10px;
            left:1000px;
            bottom:530px;   
        }
        input{
            cursor:text;
            left:950px;
            bottom:550px;
            border:none;
            color:white;
            background-color:#333;
            position:relative;
            padding:15px;
            letter-spacing:3px;
            border-radius:10px;  
        }
        h2{
            letter-spacing:2px;
            text-shadow:0 0 5px lightblue,0 0 6px lightblue;
            font-size:20px;
            color:white;
            
        }
        </style>
</head>
<body>
    <h2>Namee</h2>
    <hr><br><br>
    <h3>merge mahasiswa</h3>
    
    <table border="1px">
    <tr>
            <th><b>No</b></th>
            <th><b>Nama</b></th>
        </tr>
        <tr>
        <?php foreach ($merge as $key => $value) :?>
            
            <td><?= $key+1;?></td>
            <td><?= $value;?></td>
        </tr>
        <?php endforeach?>
        </table>
        <br><br>

        <form method="post">
            <input type="text" placeholder="cari mahasiswa" name="cari">
            <br><br><button type="submit" class="po" name="pi">Search</button>
        </form>
        <br><br>
         <center>
        <a href="tugas.php"><button type="submit" class="pi">Get Back</button>
        </center>
        <hr>
        <footer class="footer">
         <p>© 2024 Namee | <a href="#" class="satu">privacy police</a>|<a href="fat.lp3i33@gmail.com">gmail</a></p>
   
        </footer>

        <?php
        echo "<script>alert('peringatan! jika anda ingin mencari nama seseorang di kolom pencarian di wajibkan huruf depannya nya itu kapital, kalau bukan kapital nama ada pun bakal gaada, bukan hanya itu jika nama lebih dari dua kata maka diawal kata itu di wajibkan pakai huruf kapital.🥲karena si php case sensitive dan saya masih belum mempelajari bagaimana caranya untuk menangani hal itu, mohon dimaklum🙏')</script>";
if (isset($_POST['pi']) && !empty($_POST['cari'])) {
    $sun=$_POST['cari'];
    $e = array_search($sun, $merge);
    if ($e !== false) {
        echo "<script>alert('Nama ditemukan! Tinggal cari di tabel.')</script>";
    } else {
        echo "<script>alert('maaf, Namanya Gaada lho😔!')</script>";
    }
}
?>

</body>
</html>