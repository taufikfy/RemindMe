<div class="container">
        <h3 class="my-4 col-6 col-sm-5 col-md-3 text-primary fw-bold position-relative text-decoration-underline">Catatan<span style="background-color: #71A430;"></span></h3>
         <table>
        <thead>
            <tr>
                <th>Matkul</th>
                <th>file</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>     
             <?php
            // Mendapatkan daftar file PDF dari folder 'assets/materi'
            $directory = './assets/tugas/';
            $files = scandir($directory);
            
            // Menampilkan setiap file PDF
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..' && pathinfo($file, PATHINFO_EXTENSION) === 'pdf') {
                    $file_path = base_url("assets/materi/{$file}");
                    ?>
                    <div class=" d-flex align-items-center">
                        <a href="<?= $file_path ?>" download id="tugasLink" style="background-color: transparent;">
                        <div class="d-flex align-items-end">
                            <div class="me-2 text-primary " style="font-size: small;"><?= htmlspecialchars($file) ?></div>
                        </div>   
                        </a>
                    </div>
                    <?php
                }
            }
        ?>
                    </td>
                    <td>
                       <div class="d-flex ">
                           <button  style="background-color: transparent; border: none;"><img  style="height: 3vh;" src="<?=base_url("assets/images/pencil.svg ") ?>" alt=""></button>
                           <button  style="background-color: transparent; border: none;"><img  style="height: 3vh;" src="<?=base_url("assets/images/sampah.svg ") ?>" alt=""></button>
                        </div>
                </td>
                </tr>
        </tbody>
    </table>
    <a href="#" id="createCatatan">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>
