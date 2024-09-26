<div class="container row d-flex gap-2">
        <?php foreach ($jadwalmatkuls as $item) : ?>
        <div style="border: 2px solid #71A430;" class="col-12 col-md-6 bg-white shadow rounded-4 p-4">
            <div class="d-flex justify-content-between">
                <h5 class="fw-bold text-primary"><?= $item['hari'] ?></h5>
                <div>
                    <form action="#" class="editJadwalForm" method="get" style="display:inline;">
                        <input type="hidden" name="id_jadwalmatkul" value="<?= $item['id_jadwalmatkul'] ?>">
                        <a href="#" id="createJadwalKuliah">
                        <button type="button" class="editJadwalBtn" style="border: none; background: none;">
                            <img src="<?= base_url("assets/images/pencil.svg") ?>" alt="">
                        </button>
                        </a>
                    </form>
                    <form action="<?= base_url("StudentPlanning/delete_jadwal_matkul") ?>" method="post" style="display:inline;">
                        <input type="hidden" name="id_jadwalmatkul" value="<?= $item['id_jadwalmatkul'] ?>">
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')" style="border: none; background: none;">
                            <img src="<?= base_url("assets/images/sampah.svg") ?>" alt="">
                        </button>
                    </form>
                </div>
            </div>
            <div class="d-flex row">
                <div class="col-4">
                    <p class="bg-primary text-white p-1 text-center"><?= $item['mulai'] ?></p>
                    <p class="bg-primary text-white p-1 text-center"><?= $item['selesai'] ?></p>
                </div>
                <div class="col-8">
                    <div>
                        <div class="text-primary fs-3 fw-bold"><?= $item['matkul'] ?></div>
                        <div class="text-primary">Semester <?= $item['semester'] ?></div>
                        <div class="text-primary">Ruang <?= $item['ruangan'] ?></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <a href="#" id="createJadwalKuliah">
        <h3 class="my-4 text-third position-relative fst-italic">+ New</h3>
    </a>

<!-- Edit jadwal matkul -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle create new jadwal
        document.getElementById('createJadwalKuliah').addEventListener('click', function (e) {
            e.preventDefault();
            resetForm();
            document.getElementById('jadwalKuliahForm').action = '/StudentPlanning/input_jadwal_matkul';
            document.getElementById('formTitle').innerText = 'Jadwal Mata Kuliah';
            document.getElementById('submitButton').innerText = 'Add';
            document.querySelector('.createJadwalKuliah-content').classList.remove('hidden');
        });

        // Handle edit jadwal
        document.querySelectorAll('.editJadwalBtn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');
                const id = form.querySelector('input[name="id_jadwalmatkul"]').value;
                fetch(`/StudentPlanning/get_jadwal_matkul/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('id_jadwalmatkul').value = data.id_jadwalmatkul;
                        document.getElementById('matkul').value = data.matkul;
                        document.getElementById('semester1').value = data.semester;
                        document.getElementById('hari').value = data.hari;
                        document.getElementById('mulai').value = data.mulai
                        document.getElementById('selesai').value = data.selesai;
                        document.getElementById('ruangan').value = data.ruangan;
                        document.getElementById('jadwalKuliahForm').action = '/StudentPlanning/update_jadwal_matkul';
                        document.getElementById('formTitle').innerText = 'Edit Jadwal Mata Kuliah';
                        document.getElementById('submitButton').innerText = 'Update';
                        document.querySelector('.createJadwalKuliah-content').classList.remove('hidden');
                    });
            });
        });
    });

    function resetForm() {
        document.getElementById('id_jadwalmatkul').value = '';
        document.getElementById('matkul').value = '';
        document.getElementById('semester').value = '';
        document.getElementById('hari').value = '';
        document.getElementById('mulai').value = '';
        document.getElementById('selesai').value = '';
        document.getElementById('ruangan').value = '';
    }
</script>