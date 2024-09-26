<?php foreach ($tugass as $item) : ?>
    <div class="col-12 bg-second border-2 rounded-4 p-4 mb-4" style="border: 2px solid #71A430;">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="text-primary fw-semibold"><?= $item['namatugas']?></h5>
            <div class="d-flex gap-2 align-items-center">
            <form action="#" class="editTugasForm" method="get" style="display:inline;">
                <input type="hidden" name="id_tugas" value="<?= $item['id_tugas'] ?>">
                    <a href="#" id="createTugas">
                        <button type="submit" class="editTugasBtn" style="border: none; background: none;">
                            <img src="<?=base_url("assets/images/pencil.svg") ?>" alt="">
                        </button>
                    </a>
            </form>
            </div>
        </div>
        <div class="text-primary fw-semibold">
            <p><?= $item['deskripsi']?></p>
        </div>
        <div class="d-flex gap-4 mb-1 fw-semibold text-primary">
            <div><?= $item['deadline']?></div>
            <div><?= $item['jam']?></div>
        </div>
        <div>
            <?php if (!empty($item['file'])) : ?>
                <div class="d-flex align-items-center">
                    <a href="<?= base_url("assets/tugas/{$item['file']}") ?>" download id="tugasLink" style="background-color: transparent;">
                        <div class="d-flex align-items-end">
                            <img src="<?=base_url("assets/images/file2.svg")?>" alt="">
                            <div class="me-2 text-primary" style="font-size: small;"><?= htmlspecialchars($item['file']) ?></div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="d-flex gap-4 mt-5">
            <form action="<?= base_url("StudentPlanning/delete_tugas") ?>" method="post" style="display:inline;">
                <input type="hidden" name="id_tugas" value="<?= $item['id_tugas']?>">
                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')" class="bg-second text-primary fw-semibold rounded-4 px-4 border-black">
                    Delete
                </button>
            </form>
        </div>
    </div>
<?php endforeach; ?>
<a href="#" id="createTugas">
    <h4 class="my-4 text-third position-relative fst-italic">+ New</h4>
</a>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle create tugas
        document.getElementById('createTugas').addEventListener('click', function (e) {
            e.preventDefault();
            resetForm();
            document.getElementById('tugasForm').action = '/StudentPlanning/input_tugas';
            document.getElementById('formTitleTugas').innerText = 'Tugas';
            document.getElementById('submitButtonTugas').innerText = 'Add';
            document.querySelector('.createTugas-content').classList.remove('hidden');
        });

        // Handle edit
        document.querySelectorAll('.editTugasBtn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');
                const id = form.querySelector('input[name="id_tugas"]').value;
                console.log(id);
                fetch(`/StudentPlanning/get_tugas/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('id_tugas').value = data.id_tugas;
                        document.getElementById('namatugas').value = data.namatugas;
                        document.getElementById('deskripsiTugas').value = data.deskripsi;
                        document.getElementById('deadlineTugas').value = data.deadline;
                        document.getElementById('jamTugas').value = data.jam;
                        document.getElementById('tugasForm').action = '/StudentPlanning/update_tugas';
                        document.getElementById('formTitleTugas').innerText = 'Edit Tugas';
                        document.getElementById('submitButtonTugas').innerText = 'Update';
                        document.querySelector('.createTugas-content').classList.remove('hidden');
                    });
            });
        });
    });

    function resetForm() {
        document.getElementById('id_tugas').value = '';
        document.getElementById('namatugas').value = '';
        document.getElementById('deskripsiTugas').value = '';
        document.getElementById('deadlineTugas').value = '';
        document.getElementById('jamTugas').value = '';
        document.getElementById('fileTugas').value = '';
    }
</script>