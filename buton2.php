<?php
$mhsintern=['Gea','lucas','Asnif'];


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
            cursor:pointer;
            width: 50%;
            border:none;
            position:relative;
            text-align:center;
            letter-spacing:3px;
            text-transform:capitalize;
            box-shadow:0 0 3px pink;
        }
        th{
            padding:20px;
            background-color:#555;
        }
        td{
            padding:30px;

        }
        tr:hover{
            transform:translateY(-10px);
            background:linear-gradient(black,pink);
            box-shadow:0 0 3px pink;

        }
        h3{
            letter-spacing:3px;
            text-transform:capitalize;
            text-decoration:underline white 1px;
            animation:run 2s infinite alternate;
        }
        h2{
            letter-spacing:5px;
            text-transform:capitalize;
            text-shadow:0 0 3px pink, 0 0 4px pink, 0 0 5px pink;
            margin-left:10px;
        }
        @keyframes run {
            from{
                text-shadow:0 0 3px pink, 0 0 4px pink;
            }to{
                text-shadow:0 0 4px pink, 0 0 5px pink;
            }
            
        }
        .a{
            padding:15px;
            background-color:#333;
            position:relative;
            top:20px;
            border:none;
            border-radius:10px;
            color:white;
            letter-spacing:2px;
            text-transform:capitalize;
            font-size:10px;
            right:100px;
            cursor:pointer;
            
        }
        .i{
            cursor:pointer;
            font-size:10px;
            color:white;
            letter-spacing:2px;
            text-transform:capitalize;
            padding:15px;
            background-color:#333;
            position:relative;
            position:relative;
            bottom:10px;
            top:20px;
            left:90px;
            border:none;
            border-radius:10px;
        }
        button:hover{
            transform:translateY(5px);
            border-radius:100px;
            box-shadow:0 0 3px pink, 0 0 5px pink;
        }
        div{
            background-color:#333;
            display:flex;
            text-transform:capitalize;
            letter-spacing:2px;
        }
            .u{
            text-decoration:none;
            cursor:pointer;
            color:white;
            text-shadow:0 0 3px pink;
            position:relative;
            left:10px;
            
        }
        .e{
            text-decoration:none;
            cursor:pointer;
            color:white;
            text-shadow:0 0 3px pink;
            position:relative;
            left:10px;
        }
        p{
            position:relative;
            text-shadow:0 0 3px pink;
        }
        hr{
            display:flex;
        }
        </style>
</head>
<body>
    <header>
        <h2>Namee</h2>
        <hr>
    <center>
    <h3>mahasiswa intern</h3>
    <table border="1px">
        <tr>
            <th>no</th>
            <th>nama</th>
</tr>
<tr><?php foreach ($mhsintern as $key => $value) :?>
 <td><?=$key+1;?></td>
 <td><?=$value;?></td>
</tr>
 <?php endforeach?>
</table>

<a href="tugas.php"><button type="submit" class="a">Get Back</button>
<a href="buton4.php"><button type="submit"class="i">Next page</button></a>
</center>
<br><br><br>
<div>
<footer>
<p>© 2024 Namee | <a href="#" class="u">privacy police</a> 
<a href="fat.lp3i33@gmail.com" class="e">| gmail</a></p>
   </footer>
</div>
</body>
</html>