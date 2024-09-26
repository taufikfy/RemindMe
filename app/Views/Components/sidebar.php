<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .sidebar-content {
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
            background-color: white;
            color: #71A430 ;
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
</head>
<body>
    <div class="fluid-container">
        <div class="row row-cols-2 m-0">
            <div class="col-3 bg-primary">
                <div class="sticky-top">
                    <div class="vh-100 sidebar-content pb-4">
                        <div>
                            <img src="<?= base_url('assets/images/logo.svg'); ?>" alt="Logo" class="img-fluid">
                            <div class="d-flex ps-2 row gy-3">
                                <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="profileLink">
                                    <img src="<?= base_url('assets/images/iconProfil.svg') ?>" alt="Profile Icon" class="me-2 col-2 custom-size">
                                   <span class="fw-bold d-none d-sm-block fs-5">Profile</span>
                                </a>
                                <a href="#" class="d-flex align-text-bottom gap-2 text-decoration-none" id="homeLink">
                                    <img src="<?= base_url('assets/images/iconHome.svg') ?>" alt="Profile Icon" class="me-2 col-2 custom-size">
                                    <p class="fs-5 fs-md-2 mb-0 fw-bold d-none d-sm-block">Home</p>
                                </a>
                                <a href="#" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none" id="groupLink">
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
                        <div class="ps-2">
                            <a href="/" class="d-flex align-items-end align-text-bottom gap-2 text-decoration-none">
                                <img src="<?= base_url('assets/images/iconLogout.svg') ?>" alt="Profile Icon" class="me-2 col-2 custom-size">
                                <p class="fs-5 mb-0 fw-bold d-none d-sm-block">Logout</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 p-3">
                <div class="sticky-top bg-white pt-2 pb-3 px-2">
                    <nav class="bg-primary navbar navbar-custom w-100 rounded-4">
                        <div class="container-fluid"> 
                            <!-- Navbar Items on the Right -->
                            <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
                                <!-- About Us -->
                                <li class="nav-item">
                                    <a style="background-color: transparent; color: white;" class="nav-link text-white fs-5 fw-bold fst-italic" href="#" id="aboutUsLink">About Us</a>
                                </li>
                                <!-- Contact Us -->
                                <li class="nav-item">
                                    <a style="background-color: transparent; color: white;" class="nav-link text-white fs-5 fw-bold fst-italic" href="#" id="contactUsLink">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <!-- Konten untuk setiap link -->
                <div id="mainContent">
                    <div class="rounded-4 aboutUsLink-content content hidden container bg-second" style="border: 2px solid #71A430;">
                       <h1 class="fst-italic fw-bold">What is RemindMe?</h1>
                       <p>RemindMe adalah sebuah aplikasi student planner berbasis web yang bisa
                            membantu mahasiswa memanage akademik dengan baik.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, eaque
                            molestiae modi enim facere maiores veniam magni voluptatem esse perferendis culpa, labore
                            nisi impedit neque harum. Molestiae placeat delectus dolorem?</p>
                       <p>RemindMe adalah sebuah aplikasi student planner berbasis web yang bisa
                            membantu mahasiswa memanage akademik dengan baik.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, eaque
                            molestiae modi enim facere maiores veniam magni voluptatem esse perferendis culpa, labore
                            nisi impedit neque harum. Molestiae placeat delectus dolorem?</p>
                    </div>
                    <form action="/StudentPlanning/input_message" method="post" class="p-5 rounded-4 contactUsLink-content content hidden container bg-second" style="border: 2px solid #71A430;">
                    <h4 class="mb-4 fw-bold text-primary">Message</h4>   
                    <input type="hidden" name="id_message" id="id_message">
                        <textarea type="text" style="height: 50vh; width: 100%;" name="message" id="message"></textarea>
                        <div class="d-flex justify-content-center">
                            <a href="#" id="messageLink">
                                <button class="p-2 rounded-2 bg-primary text-white fw-semibold mt-4">Send Message</button>
                            </a>
                        </div>
                    </form>
                    <div class="p-5 rounded-4 messageLink-content content hidden container bg-second" style="border: 2px solid #71A430;">
                    <h4 class="mb-4 fw-bold text-primary">Message</h4>   
                        <div type="text" style="height: 50vh; width: 100%; border: 2px solid gray;"  class="p-2 bg-white rounded-2 d-flex justify-content-center">
                            <div class="col-4 bg-second rounded-4 shadow row d-flex justify-content-center text-center p-5" style="border: 2px solid #71A430;">
                                <img src="<?=("assets/images/succes.svg")?>" alt="">
                                <h4 class="text-primary fw-bold">Succes Bolo</h4>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a style="background-color: transparent;" href="#" id="contactUsLink">
                                <button class="p-2 rounded-2 bg-primary text-white fw-semibold mt-4">Create Message</button>
                            </a>
                        </div>
                    </div>
                    <?= $this->renderSection('content') ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <!-- JavaScript for saving link names and changing background -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const links = document.querySelectorAll('a');
            const mainContent = document.getElementById('mainContent');

            // Function to update the visibility of content based on the clicked link
            function updateContentVisibility(linkId) {
                mainContent.querySelectorAll('.content').forEach(content => content.classList.add('hidden'));
                mainContent.querySelector(`.${linkId}-content`).classList.remove('hidden');
            }

            // Apply the active class to the previously clicked link
            const savedLinkId = localStorage.getItem('clickedLinkId');
            if (savedLinkId) {
                links.forEach(link => {
                    if (link.id === savedLinkId) {
                        link.classList.add('active');
                        updateContentVisibility(link.id);
                    }
                });
            }

            // Add event listener to each link
            links.forEach(link => {
                link.addEventListener('click', function () {
                    // Remove active class from all links
                    links.forEach(l => l.classList.remove('active'));

                    // Add active class to the clicked link
                    this.classList.add('active');

                    // Save the clicked link ID to localStorage
                    const linkId = this.id;
                    localStorage.setItem('clickedLinkId', linkId);

                    // Update content visibility based on the clicked link
                    updateContentVisibility(linkId);
                });
            });
        });
    </script>

</body>
</html>
