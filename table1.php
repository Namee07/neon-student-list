<script>
        const container = document.getElementById('moveButton'); // Ambil container tombol
const buttons = container.querySelectorAll('button'); // Ambil semua tombol di dalam container
let attempts = 0; // Menghitung jumlah percobaan menyentuh tombol

// Fungsi untuk memindahkan tombol ke posisi acak
function moveButton(button) {
    const randomX = Math.random() * (window.innerWidth - button.offsetWidth); // Hindari keluar layar
    const randomY = Math.random() * (window.innerHeight - button.offsetHeight);

    button.style.position = 'absolute'; // Pastikan tombol bisa berpindah
    button.style.left = randomX + 'px';
    button.style.top = randomY + 'px';
}

// Tambahkan event listener ke setiap tombol
buttons.forEach((button) => {
    button.addEventListener('mouseover', function () {
        attempts++; // Tambah jumlah percobaan
        moveButton(this); // Pindahkan tombol yang di-*hover*

        // Tampilkan alert setelah beberapa percobaan
        if (attempts >= 5) {
            alert('😒 Ck, lama banget sih ngeklik tombolnya. Lagi ngapain sih?');
            attempts = 0; // Reset jumlah percobaan setelah alert
        }
    });
});
</script>