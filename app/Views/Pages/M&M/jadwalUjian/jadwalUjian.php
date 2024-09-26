<div class="container row d-flex gap-2">
    <?php foreach ($jadwalujians as $item) : ?>
       <div style="border: 2px solid #71A430;" class="col-12 col-md-6 bg-white shadow rounded-4 p-4">
            <div class=" d-flex justify-content-between">
                <h5 class="fw-bold text-primary"><?= $item['hari']?></h5>
                <div>
                    <form action="#" class="editJadwalUjianForm" method="get" style="display:inline;">
                        <input type="hidden" name="id_jadwalujian" value="<?= $item['id_jadwalujian'] ?>">
                        <a href="#" id="createJadwalUjian">
                        <button type="submit" class="editJadwalUjianBtn" style="border: none; background: none;">
                            <img src="<?=base_url("assets/images/pencil.svg") ?>" alt="">
                        </button>
                        </a>
                    </form>
                    <form action="<?= base_url("StudentPlanning/delete_jadwal_ujian") ?>" method="post" style="display:inline;">
                        <input type="hidden" name="id_jadwalujian" value="<?= $item['id_jadwalujian'] ?>">
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ujian ini?')" style="border: none; background: none;">
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
                        <div class="text-primary">Ruang <?= $item['ruangan'] ?></div>
                    </div>
                </div>           
            </div>
        </div>
    <?php endforeach; ?>
</div>
<a href="#" id="createJadwalUjian">
    <h3 class="my-4 text-third position-relative fst-italic">+ New</h3>
</a>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle create new jadwal
        document.getElementById('createJadwalUjian').addEventListener('click', function (e) {
            e.preventDefault();
            resetForm();
            document.getElementById('jadwalUjianForm').action = '/StudentPlanning/input_jadwal_ujian';
            document.getElementById('formTitleUjian').innerText = 'Jadwal Ujian';
            document.getElementById('submitButtonUjian').innerText = 'Add';
            document.querySelector('.createJadwalUjian-content').classList.remove('hidden');
        });

        // Handle edit jadwal
        document.querySelectorAll('.editJadwalUjianBtn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');
                const id = form.querySelector('input[name="id_jadwalujian"]').value;
                fetch(`/StudentPlanning/get_jadwal_ujian/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('id_jadwalujian').value = data.id_jadwalujian
                        document.getElementById('matkulUjian').value = data.matkul
                        document.getElementById('hariUjian').value = data.hari
                        document.getElementById('mulaiUjian').value = data.mulai;
                        document.getElementById('selesaiUjian').value = data.selesai
                        document.getElementById('ruanganUjian').value = data.ruangan;
                        document.getElementById('jadwalUjianForm').action = '/StudentPlanning/update_jadwal_ujian';
                        document.getElementById('formTitleUjian').innerText = 'Edit Jadwal Ujian';
                        document.getElementById('submitButtonUjian').innerText = 'Update';
                        document.querySelector('.createJadwalUjian-content').classList.remove('hidden');
                    });
            });
        });
    });

    function resetForm() {
        document.getElementById('id_jadwalujian').value = '';
        document.getElementById('matkulUjian').value = '';
        document.getElementById('hariUjian').value = '';
        document.getElementById('mulaiUjian').value = '';
        document.getElementById('selesaiUjian').value = '';
        document.getElementById('ruanganUjian').value = '';
    }
</script>