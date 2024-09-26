<!-- app/Views/sidebar.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sidebar</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style>
        .bg-primary {
            background-color: #71A430 !important;
        }
        .bg-third {
            background-color: #005073 !important;
        }
        .bg-second {
            background-color: #EBF4F6 !important;
        }
        .text-primary {
            color: #71A430 !important;
        }
        .text-third {
            color: #005073!important;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
        .content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
        .custom-size {
            width: 30px;
            height: 30px;
        }
        .active {
            background-color: white !important;
            color: #71A430 !important;
            border-top-left-radius: 9999px;
            border-bottom-left-radius: 9999px;
            padding-top: 2vh;
            padding-bottom: 2vh;
        }
        .active img {
            filter: invert(34%) sepia(56%) saturate(2469%) hue-rotate(45deg) brightness(91%) contrast(92%);
        }
        a {
            color: #FFFF;
        }
        .hidden {
            display: none;
        }
        .underline {
            position: absolute;
            bottom: -3px; 
            left: 0;
            width: 100%;
            height: 2px; 
        }
        .custom-input {
            background-color: transparent;
            border: none;
            outline: none;
            color: #000; /* Warna teks, bisa disesuaikan */
        }
        .custom-input:focus {
            outline: none; /* Menghapus outline saat fokus */
            box-shadow: none; /* Menghapus shadow saat fokus, opsional */
        }
</style>
 <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
                        <div class="col-3 bg-primary">
                    <div class="sticky-top">
                    <div class="vh-100 content pb-4">
                        <div>
                            <img src="<?= base_url('assets/images/logo.svg'); ?>" alt="Logo" class="img-fluid">
                            <div class="d-flex ps-2 row gy-3">
                                <a href="<?= site_url('sidebar/home') ?>" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="profileLink">
                                    <img src="<?= base_url('assets/images/iconProfil.svg') ?>" alt="Profile Icon" class="me-2 col-2 custom-size">
                                    <span class="fw-bold d-none d-sm-block fs-5">Profile</span>
                                </a>
                                <a href="<?= site_url('sidebar/about') ?>" class="d-flex align-text-bottom gap-2 text-decoration-none" id="homeLink">
                                    <img src="<?= base_url('assets/images/iconHome.svg') ?>" alt="Profile Icon" class="me-2 col-2 custom-size">
                                    <p class="fs-5 fs-md-2 mb-0 fw-bold d-none d-sm-block">Home</p>
                                </a>
                                <a href="<?= site_url('sidebar/contact') ?>" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="groupLink">
                                    <img src="<?= base_url('assets/images/iconGroup.svg') ?>" alt="Profile Icon" class="me-2 col-2 custom-size">
                                    <p class="fs-5 mb-0 fw-bold d-none d-sm-block">Group Project</p>
                                </a>
                                <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none w-100" id="managementLink">
                                    <img src="<?= base_url('assets/images/iconManajement.svg') ?>" alt="Profile Icon" class="me-2 col-2 custom-size">
                                    <p class="fs-5 mb-0 fw-bold d-none d-sm-block">Manajement dan Mentoring</p>
                                </a>
                                <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="calendarLink">
                                    <img src="<?= base_url('assets/images/iconKalender.svg') ?>" alt="Profile Icon" class="me-2 col-2 custom-size">
                                    <p class="fs-5 mb-0 fw-bold d-none d-sm-block">Calender</p>
                                </a>
                            </div>
                        </div>
                        </div>
                        </div>
                            
                        </div>
                        <div class="col-9">
                <?php if ($menu == 'home'): ?>
                    <h1>Home</h1>
                    <p>Welcome to the home page.</p>
                <?php elseif ($menu == 'about'): ?>
                    <h1>About</h1>
                    <p>This is the about page.</p>
                <?php elseif ($menu == 'contact'): ?>
                    <h1>Contact</h1>
                    <p>This is the contact page.</p>
                <?php else: ?>
                    <h1>Home</h1>
                    <p>Welcome to the home page.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
  <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('a');
    let activeLink = null;

    // Fungsi untuk mengelola tampilan konten berdasarkan link yang aktif
    function updateContent(linkName) {
        // console.log(linkName);
        if (linkName === 'Home') {
            document.querySelector('.home-content').classList.remove('hidden');
        } else {
            document.querySelector('.home-content').classList.add('hidden');
        }
        if (linkName === 'Profile') {
            document.querySelector('.profile-content').classList.remove('hidden');
        } else {
            document.querySelector('.profile-content').classList.add('hidden');
        }
        if (linkName === 'Manajement dan Mentoring') {
            document.querySelector('.mm-content').classList.remove('hidden');
        } else {
            document.querySelector('.mm-content').classList.add('hidden');
        }
        if (linkName === 'Group Project') {
            document.querySelector('.gp-content').classList.remove('hidden');
        } else {
            document.querySelector('.gp-content').classList.add('hidden');
        }
        if (linkName === 'Calender') {
            document.querySelector('.calender-content').classList.remove('hidden');
        } else {
            document.querySelector('.calender-content').classList.add('hidden');
        }
        if (linkName === 'Project') {
            document.querySelector('.project-content').classList.remove('hidden');
        } else {
            document.querySelector('.project-content').classList.add('hidden');
        }
        if (linkName === 'TodoList') {
            document.querySelector('.tl-content').classList.remove('hidden');
        } else {
            document.querySelector('.tl-content').classList.add('hidden');
        }
        if (linkName === 'Meeting') {
            document.querySelector('.meeting-content').classList.remove('hidden');
        } else {
            document.querySelector('.meeting-content').classList.add('hidden');
        }
        if (linkName === 'Jadwal Kuliah') {
            document.querySelector('.jadwalKuliah-content').classList.remove('hidden');
        } else {
            document.querySelector('.jadwalKuliah-content').classList.add('hidden');
        }
        if (linkName === '+ Newjk') {
            document.querySelector('.inputjk-content').classList.remove('hidden');
        } else {
            document.querySelector('.inputjk-content').classList.add('hidden');
        }
    }

    // Inisialisasi: gunakan link pertama sebagai default atau sesuai kebutuhan Anda
    if (links.length > 0) {
        activeLink = links[0];
        activeLink.classList.add('active');
        updateContent(activeLink.textContent.trim());
    }

    // Tambahkan event listener ke setiap link
    links.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah tindakan default link

            // Hapus kelas 'active' dari link sebelumnya
            if (activeLink) {
                activeLink.classList.remove('active');
            }

            // Tambahkan kelas 'active' ke link yang diklik
            this.classList.add('active');

            // Simpan link yang aktif
            activeLink = this;

            // Update konten berdasarkan link yang diklik
            const linkName = this.textContent.trim();
            updateContent(linkName);
        });
    });
});

    </script>
</body>
</html>
