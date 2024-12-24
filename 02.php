<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombol Berpindah Posisi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(145deg, #121212, #232323);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h3 {
            margin-top: 20px;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 50%;
            text-align: left;
            background: #1a1a1a;
            border-radius: 10px;
            box-shadow: 0 0 5px greenyellow;
            color: white;
        }

        table th, table td {
            border: 1px solid greenyellow;
            padding: 10px;
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
        }

        .dynamic-button {
            padding: 15px 30px;
            font-size: 1rem;
            font-weight: bold;
            color: white;
            background-color: #76ff03;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            position: absolute;
            transition: all 0.3s ease-in-out;
        }

        .dynamic-button:hover {
            transform: scale(1.2);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
        }
    </style>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <!-- PHP TABLE -->
    <?php
    $mhs = ['samsudin', 'sumanto', 'sutrisna', 'sunarti', 'sukiem', 'sukardi', 'Viona', 'bagas', 'bianca', 'feby', 'poppy', 'alisa', 'lina', 'nyndia'];
    ?>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        <?php foreach ($mhs as $key => $value): ?>
        <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $value; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- BUTTONS GENERATED USING PHP -->
    <div class="button-container">
        <?php
        $buttons = ['Mhs Gabungan', 'Mhs Intern', 'Mahasiswa', 'Mhs Merge', 'Mhs Unique'];
        foreach ($buttons as $key => $name) {
            echo "<button class='dynamic-button' id='button$key' data-key='$key'>$name</button>";
        }
        ?>
    </div>

    <script>
        const buttons = document.querySelectorAll('.dynamic-button');

        // Function to generate random positions
        function randomPosition() {
            const top = Math.random() * (window.innerHeight - 100);
            const left = Math.random() * (window.innerWidth - 100);
            return { top, left };
        }

        // Button click handler
        buttons.forEach((button, index) => {
            let clickCount = 0;

            button.addEventListener('click', () => {
                clickCount++;

                // Move button to a new random position
                const { top, left } = randomPosition();
                button.style.top = `${top}px`;
                button.style.left = `${left}px`;

                // Change button color and shape
                const randomColor = `hsl(${Math.random() * 360}, 100%, 50%)`;
                const randomBorderRadius = `${Math.random() * 50}%`;
                button.style.backgroundColor = randomColor;
                button.style.borderRadius = randomBorderRadius;

                // Display alert after 5 clicks
                if87 (clickCount === 5) {
                    alert(`Tombol "${button.innerText}" kembali ke posisi awal!`);
                    clickCount = 0;
                    button.style.top = `50px`;
                    button.style.left = `50px`;
                    button.style.backgroundColor = '#76ff03';
                    button.style.borderRadius = '12px';
                }
            });
        });
    </script>
</body>
</html>
