<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #1a1a1a;
            color: white;
            margin: 0;
            padding: 0;
        }
      
        table{
            cursor:pointer;
            width: 70%;
            border-radius: 10px;
            box-shadow: 0 0 5px greenyellow;
            text-align:center;
            padding:10px;
            animation: glow 2s infinite alternate;

        }
        td{
            padding:5px;
        }
        tr{
            text-transform:capitalize;
        }
        tr:hover{
            background-color:#555;
            transform:translateY(-3px);
            border:none;
            
        }
        th{
            font-size:19px;
            background-color:#222;
        }
        p{
            text-transform:capitalize;
            letter-spacing:2px;
            line-height:2;
            font-size:13px;
        }
        #moveButton{
         background-color:#222;
         position:relative;
         margin-top:50px;
         padding:20px;
         display: flex; /* mengatur tombol agar sejajar*/
         flex-wrap: wrap; /*membuat otomatis turun kr bris baru jika ruang tidak cukup*/
         gap: 20px; /*memberi jarak untuk setiap tombol*/
    }

        button{
            cursor:pointer;
            padding: 5px;
            border:none;
            border-radius: 10px;
            box-shadow: 0 0 5px #333,0 0 6px #333,0 0 3px greenyellow; 
            justify-content: center;
            width: 150px;
            margin: 5px;
            gap: 10px;
            background-color:#222;
            color:white;
            padding:10px;
            cursor:pointer;
             

        }
        button:hover{
            text-align:center;
            padding:15px;
            transform: translateY(-10px);
            box-shadow: 0 0 10px greenyellow, 0 0 11px greenyellow;
        }
        .sa{
            margin-left:3px;
        }
        .si{
            margin-top:50px;
        }
        @keyframes glow {
            from{
                box-shadow: 0 0 5px greenyellow, 0 0 6px greenyellow;
            }to{
                box-shadow: 0 0 6px greenyellow, 0 0 7px greenyellow;
            }
        }
        footer{
            color:white;
            text-shadow:0 0 3px greenyellow;
            text-decoration:none;
            letter-spacing:2px;

        }
        .satu{
            color:white;
            text-shadow:0 0 3px greenyellow;
            text-decoration:none;
            letter-spacing:2px;
            position:relative;-
            left:10px;
        }
        h3{
            letter-spacing:2px;
            text-transform:capitalize;
            font-size:15px;
            color:white;
            text-align:center;
        }
        h2{
            letter-spacing:2px;
            text-transform:capitalize;
            font-size:20px;
            color:white;
            text-shadow:0 0 3px greenyellow;
        }
            
        
    </style>
</head>
<body>
    <header>
        <h2>namee</h2>
    </header>
    <hr>
    <br>
    
<?php
    $mhs=['samsudin','sumanto','sutrisna','sunarti','sukiem','sukardi','Viona','bagas','bianca','feby','poppy','alisa','lina','nyndia'];
        sort($mhs);
    ?>
    
    <h3>DAFTAR MAHASISWA</h3>
    <br>
    <center>
    <p>jumlah mahasiswa : <?= count($mhs); ?></p>
    <table border="1px">
        <tr>
            <th><b>No</b></th>
            <th><b>Nama</b></th>
        </tr>
        <tr>
        <?php foreach ($mhs as $key => $value) :?>

            <td><?= $key+1;?></td>
            <td><?= $value;?></td>
        </tr>
        <?php endforeach?>

    </table>
    <br><br>
    <p>untuk mengetahui lebih lanjut tentang data mahasiswa silahkan klik tombol di bawah ini untuk mengetahuinya</p>
        </center>
    <br><br>
    <div id="moveButton">
            <br><br><a href="buton1.php"><button type="submit">MhsGabungan</button></a>
            <br><br><a href="buton2.php"><button type="submit">MhsIntern</button></a>
            <br><br><a href="tugas.php" class="si"><button type="submit">Mahasiswa </button></a>
            <br><br><a href="buton4.php" class="sa"><button type="submit">MhsMerge</button></a>
            <br><br><a href="buton5.php" class="sa"><button type="submit">MhsUnique</button></a>
        </div>
        <hr>
        <footer class="footer">
         <p>© 2024 Namee | <a href="#" class="satu">privacy police</a><a href="fat.lp3i33@gmail.com" class="satu">| gmail</a></p>
   
        </footer>

        </body>
</html>