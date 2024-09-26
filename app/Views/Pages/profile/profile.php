<!-- content Profile -->
<div class="container d-flex justify-content-between gap-4">
        <div class="col-4">
            <div class="rounded bg-second p-4" style="border: 2px solid #71A430;">
                <div class="d-flex row gap-4 justify-content-center"> 
                    <img src="<?= base_url('uploads/' . $user['profile_picture']) ?>" style="object-position: center; object-fit: cover;width: 150px; height: 130px; border-radius: 50%;" alt="">
                    <div class="text-center text-primary"><?= $user['nama'] ?></div>
                    <!-- Form untuk upload foto -->
            <form id="profilePictureForm" action="/StudentPlanning/updateProfilePicture" method="post" enctype="multipart/form-data">
                   <div class="col-12 d-flex justify-content-center">
                       <label for="foto">
                       <input type="file" class="hidden" id="foto" name="profile_picture" onchange="document.getElementById('profilePictureForm').submit();">
                           <button type="button" class="bg-primary rounded p-2 text-white " onclick="document.getElementById('foto').click();">Edit Foto</button>
                        </label>
                    </div>
            </form>
                </div>
            </div>
        </div>
        <div class="container col-8 rounded">
        <form action="/StudentPlanning/updateProfile" method="post">
        <?= csrf_field() ?>
            <div class="px-3">
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430; border-top-right-radius: 5px; border-top-left-radius: 5px;">
                    <label for="name" class="col-3 d-flex fw-bold text-primary">Nama:</label>
                    <div class="col-9">
                    <input type="text" id="name" name="nama" class="form-control custom-input" value="<?= $user['nama'] ?>">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="username" class="col-3 d-flex fw-bold text-primary">Username:</label>
                    <div class="col-9">
                    <input type="text" id="username" name="username" class="form-control custom-input" value="<?= $user['username'] ?>">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="password" class="col-3 d-flex fw-bold text-primary">Password:</label>
                    <div class="col-9">
                    <input type="text" id="password" name="password" class="form-control custom-input" value="<?= $user['password'] ?>">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="email" class="col-3 d-flex fw-bold text-primary">Email:</label>
                    <div class="col-9">
                    <input type="text" id="email" name="email" class="form-control custom-input" value="<?= $user['email'] ?>">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="semester" class="col-3 d-flex fw-bold text-primary">Semester:</label>
                    <div class="col-9">
                    <input type="text" id="semester" name="semester" class="form-control custom-input" value="<?= $user['semester'] ?>">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="nim" class="col-3 d-flex fw-bold text-primary">Nim:</label>
                    <div class="col-9">
                    <input type="text" id="nim" name="nim" class="form-control custom-input" value="<?= $user['nim'] ?>">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                <label for="prodi" class="col-3 d-flex fw-bold text-primary">Prodi</label>
                    <div class="col-9">
                    <input type="text" id="prodi" name="prodi" class="form-control custom-input" value="<?= $user['prodi'] ?>">
                    </div>
                </div>
                <div class="row d-flex align-items-center bg-second p-2" style="border: 2px solid #71A430;">
                    <label for="instansi" class="col-3 d-flex fw-bold text-primary">Instansi:</label>
                    <div class="col-9">
                    <input type="text" id="instansi" name="instansi" class="form-control custom-input" value="<?= $user['instansi'] ?>">
                    </div>
                </div>
                <div class="d-flex justify-content-end p-3">
                    <button type="submit" class="bg-primary rounded p-2 text-white col-4">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>