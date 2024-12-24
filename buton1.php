<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding:0;
            background-color:#1a1a1a;
            color:white;
            text-transform:capitalize;
        }

        table{
            cursor:pointer;
            position:relative;
            top:20px;
            width: 70%;
            border-radius: 10px;
            box-shadow: 0 0 5px #444;
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
        th{
            font-size:19px;
            background-color:#333;
        }
        tr:hover{
                transform:translateZ(20px);
                padding: 10px;
                height: 50px;
                width: 100px;
                background:linear-gradient(45deg,#444,#444);
                color:#ffff33;
                box-shadow: 0 0 6px #555, 0 0 7px #555;
            }
            
        
        .p{
            letter-spacing:2px;
            font-size:12px;
            line-height:2;
            font-size:14px;
            text-shadow:0 0 5px #ffff33;
            animation: tin 2s infinite alternate;
        }
        div{
            display:flex;
            background-color:#333;
            text-shadow:0 0 7px #ffff33;
        }
        .satu{
            text-decoration:none;
            color:white;
            letter-spacing:2px;
            position:relative;
            left:20px;
        }
        @keyframes tin {
            from{
                transform:translateX(-10px);
            }to{
                transform:translateX(10px);
            }
            
        }
        button{position:relative;
            margin-top:50px;
            padding:15px;
            gap:20px;
            color:white;
            text-transform:capitalize;
            border:none;
            background-color:#222;
            border-radius:20px;
            box-shadow:0 0 3px #ffff33,0 0 5px #ffff33;
            cursor:pointer;
        }
        .o{
            position:relative;
            top:10px;
            font-size:10px;
            letter-spacing:4px;
            text-shadow:0 0 5px #ffff33;

        }
        h2{
            color:white;
            letter-spacing:2px;
            font-size:20px;
            text-shadow:0 0 3px #ffff33; 
        }
        h3{
            color:white;
            letter-spacing:2px;
            text-shadow:0 0 3px #ffff33,0 0 4px #ffff33;

        }5
        </style>
</head>
<body>
    <header>
        <h2>Namee</h2>
    </header>
    <hr><br><br>
    <form method="post" action="buton3.php">
  <?php
  $mhsgabungan=['Najwa putri','siti sadiyah','Ainun nisa','Gea'];
  sort($mhsgabungan);
  ?>
  https://github.com/Namee07/neon-student-list.git
  <center>
    <h3>Daftar mahasiswa gabungan</h3>
   <table border="1px">
        <tr>
            <th><b>No</b></th>
            <th><b>Nama</b></th>
        </tr>
        <tr>
        <?php foreach ($mhsgabungan as $key => $value) :?>

            <td><?= $key+1;?></td>
            <td><?= $value;?></td>
        </tr>
        <?php endforeach?>

    </table>
    <br>
    <br>
    <p class="p">klik tombol di bawah ini untuk melihat data-data mahasiswa yang telah di merge</p>
    
    <button type="submit" id="button">mhsmarge</button>
    <p class="o">ada kejutan ketika anda menekan tombol tersebut, bersiaplah😊</p>

        </center>
        
        </form>
        <script>
    const rin = document.getElementById('button');
    let a = 0;

    function du() {
        const x = Math.random() * (window.innerWidth - rin.offsetWidth);
        const y = Math.random() * (window.innerHeight - rin.offsetHeight);
        rin.style.left = x + 'px';
        rin.style.top = y + 'px';
    }

    function moveButton() {
        a++;
        du();
        if (a === 1) {
            alert('Carilah dimana posisiku selanjutnya');
        } else if (a === 3) {
            alert('Ini baru permulaan');
        } else if (a === 5) {
            alert('Berusahalah lebih keras agar Anda bisa pergi ke laman berikutnya');
        } else if (a === 10) {
            alert('Udah capek?');
            alert('Baiklah mari kita akhiri');
            alert('Dan terima kasih sudah berjuang 😊😊');
            rin.removeEventListener('mouseover', moveButton);
        }
    }

    rin.addEventListener('mouseover', moveButton);
</script>
<br>
<div>
<footer class="footer">
         <p>© 2024 Namee | <a href="#" class="satu">privacy police</a><a href="fat.lp3i33@gmail.com" class="satu">| gmail</a></p>
   
        </footer>
</div>
</body>
</html>