<div class="container">
        <h3 class="my-4 col-6 col-sm-5 col-md-3 text-primary fw-bold position-relative text-decoration-underline">Belajar<span style="background-color: #71A430;"></span></h3>
         <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Activity</th>
                <th>Notes</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($belajar as $item): ?>
                <tr>
                    <td><?= $item['date']; ?></td>
                    <td><?= $item['time']; ?></td>
                    <td><?= $item['activity']; ?></td>
                    <td><?= $item['notes']; ?></td>
                    <td>
                        <form action="#" class="editBelajarForm" method="get" style="display:inline;">
                        <input type="hidden" name="id_belajar" value="<?= $item['id_belajar'] ?>">
                        <a href="#" id="inputBelajarLink">
                            <button type="submit" class="editBelajarBtn" style="border:none; background: none;">
                                <img src="<?=base_url("assets/images/pencil.svg ") ?>" alt="">
                            </button>
                        </a>
                        </form>
                    <form action="<?= base_url("StudentPlanning/delete_belajar") ?>" method="post" style="display:inline;">
                        <input type="hidden" name="id_belajar" value="<?= $item['id_belajar'] ?>">
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal belajar ini?')" style="border: none; background: none;">
                            <img src="<?= base_url("assets/images/sampah.svg") ?>" alt="">
                        </button>
                    </form>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="#" id="inputBelajarLink">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle create
        document.getElementById('inputBelajarLink').addEventListener('click', function (e) {
            e.preventDefault();
            resetForm();
            document.getElementById('belajarForm').action = '/StudentPlanning/input_belajar';
            document.getElementById('formTitleBelajar').innerText = 'Belajar';
            document.getElementById('submitButtonBelajar').innerText = 'Add';
            document.querySelector('.inputBelajarLink-content').classList.remove('hidden');
        });

        // Handle edit
        document.querySelectorAll('.editBelajarBtn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');
                const id = form.querySelector('input[name="id_belajar"]').value;
                console.log(id);
                fetch(`/StudentPlanning/get_belajar/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('id_belajar').value = data.id_belajar;
                        document.getElementById('dateBelajar').value = data.date;
                        document.getElementById('timeBelajar').value = data.time;
                        document.getElementById('activityBelajar').value = data.activity;
                        document.getElementById('notesBelajar').value = data.notes;
                        document.getElementById('belajarForm').action = '/StudentPlanning/update_belajar';
                        document.getElementById('formTitleBelajar').innerText = 'Edit Belajar';
                        document.getElementById('submitButtonBelajar').innerText = 'Update';
                        document.querySelector('.inputBelajarLink-content').classList.remove('hidden');
                    });
            });
        });
    });

    function resetForm() {
        document.getElementById('id_belajar').value = '';
        document.getElementById('dateBelajar').value = '';
        document.getElementById('timeBelajar').value = '';
        document.getElementById('activityBelajar').value = '';
        document.getElementById('notesBelajar').value = '';
    }
</script>