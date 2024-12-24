<?php
$sun=include 'intern.php';
$sin=include 'merge.php';
$merge=array_merge($merge,$mhsintern);
$unique=array_unique($merge);
sort($unique);
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
            margin:0px;
            padding:0px;
            color:white;
        }
        table{
            background-color:#111;
            color:white;
            width: 70%;
            border:none;
            letter-spacing:3px;
            text-transform:capitalize;
            text-align:center;
            cursor: pointer;
            width: 70%;
            padding:10px;
            border-radius:10px;
            box-shadow:0 0 3px blueviolet;

            

        }
        td{
            padding:10px;
            font-size:12px;
            
        }
        th{
            padding:15px;
            font-size:15px;
        }
        
        tr:hover{
            box-shadow:0 0 5px blueviolet,0 0 7px blueviolet;
            transform:translateY(-10px);
            background-color:#222;
        }
        h3{
            text-align:center;
            text-shadow:0 0 3px blueviolet;
            letter-spacing:3px;
            text-transform:capitalize;
        }
        button{
            cursor: pointer;
            border:none;
            color:white;
            background-color:#333;
            position:relative;
            padding:15px;
            letter-spacing:3px;
            border-radius:10px;
            font-size:10px;

        }
        button:hover{
            box-shadow:0 0 3px blueviolet, 0 0 5px blueviolet;
            border-radius:100%;
        }
        .satu{
            text-decoration:none;
            letter-spacing:3px;
            position:relative;
            left:20px;
            color:white;
            text-shadow:0 0 3px blueviolet;
        }
        div{
            background-color:#333;
            margin:0px;
            padding:0px;
            display:flex;

        }
        p{
            letter-spacing:3px;
            position:relative;
            left:20px;
            color:white;
            text-shadow:0 0 3px blueviolet;
        }
        h2{
            letter-spacing:3px;
            font-size:20px;
            color:white;
            text-shadow:0 0 3px blueviolet;
        }
    </style>
</head>
<body>
    <h2>Namee</h2><hr>
    <br>
    <h3>Mahasiswa unique</h3>
    <center>
        <?="<p>jumlah seluruh mahasiswa : ". count($unique)."</p>";?>
    <table border="1px">
        <tr>
            <th>no</th>
            <th>nama</th>
</tr>
<tr>
    <?php foreach ($unique as $key => $value) :?>
        <td><?= $key+1;?></td>
        <td><?= $value;?></td>
    </tr>
    <?php endforeach?>
    </table>
    </center>
    <br><br>
    <a href="tugas.php"><button type="submit">Get Back</button></a>
    <br><br><div>
    <footer class="footer">
         <p>© 2024 Namee | <a href="#" class="satu">privacy police</a><a href="fat.lp3i33@gmail.com" class="satu">| gmail</a></p>
   
        </footer>
    </div>
</body>
</html>