<div class="container">
    <h3 class="my-4 col-6 col-sm-5 col-md-2 text-primary fw-bold position-relative text-decoration-underline">To do List<span  style="background-color: #71A430;"></span></h3>
    <div class="row">
        <?php foreach ($todolistuser as $item): ?>
            <div class="col-12 col-md-6">
                <div class="card bg-primary rounded-4 p-4 mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="text-white"><?= $item['catatan'] ?></h4>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="priorityUser_<?= $item['id_todolistuser'] ?>" <?= $item['priority'] ? 'checked' : '' ?> onchange="updatePriorityUser(<?= $item['id_todolistuser'] ?>)">
                            <label class="form-check-label text-white" for="priorityUser_<?= $item['id_todolistuser'] ?>">Priority</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <h6 class="text-white"><?= $item['keterangan'] ?></h6>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="selesaiUser_<?= $item['id_todolistuser'] ?>" <?= $item['selesai'] ? 'checked' : '' ?> onchange="updateSelesaiUser(<?= $item['id_todolistuser'] ?>)">
                            <label class="form-check-label text-white" for="selesaiUser_<?= $item['id_todolistuser'] ?>">Selesai</label>
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <form action="#" class="editTodolistuserForm" method="get" style="display:inline;">
                        <input type="hidden" name="id_todolistuser" value="<?= $item['id_todolistuser'] ?>">
                        <a href="#" id="inputTodoListMMLink">
                            <button type="submit" class="editTodolistuserBtn" style="background-color: transparent; border:none;">
                                <img src="<?= base_url("assets/images/editing.svg") ?>" style="height: 4vh;" class="img-fluid">
                            </button>
                        </a>
                        </form>
                        <form action="<?= base_url("StudentPlanning/delete_todolistuser") ?>" method="post" style="display:inline;">
                            <input type="hidden" name="id_todolistuser" value="<?= $item['id_todolistuser'] ?>">
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus To Do List ini?')" style="border: none; background: none;">
                                <img src="<?= base_url("assets/images/sampah.svg") ?>" alt="">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<a href="#" id="inputTodoListMMLink">
    <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
</a>

<script>
    function updatePriorityUser(id) {
        console.log("priorityUser")
        fetch(`<?= base_url("StudentPlanning/update_priorityuser") ?>/${id}`, {
            method: 'POST',
            body: JSON.stringify({ priorityUser: event.target.checked }),
            headers: {
                'Content-Type': 'application/json'
            }
        });
    }

    function updateSelesaiUser(id) {
        fetch(`<?= base_url("StudentPlanning/update_selesaiuser") ?>/${id}`, {
            method: 'POST',
            body: JSON.stringify({ selesaiUser: event.target.checked }),
            headers: {
                'Content-Type': 'application/json'
            }
        });
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle create
        document.getElementById('inputTodoListMMLink').addEventListener('click', function (e) {
            e.preventDefault();
            resetForm();
            document.getElementById('todolistuserForm').action = '/StudentPlanning/input_todolistuser';
            document.getElementById('formTitleTodolistuser').innerText = 'Project';
            document.getElementById('submitButtonTodolistuser').innerText = 'Add';
            document.querySelector('.inputTodoListMMLink-content').classList.remove('hidden');
        });

        // Handle edit
        document.querySelectorAll('.editTodolistuserBtn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');
                const id = form.querySelector('input[name="id_todolistuser"]').value;
                fetch(`/StudentPlanning/get_todolistuser/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        // console.log(data.catatan);
                        document.getElementById('id_todolistuser').value = data.id_todolistuser;
                        document.getElementById('catatanTodolistuser').value = data.catatan;
                        document.getElementById('keteranganTodolistuser').value = data.keterangan;
                        document.getElementById('todolistuserForm').action = '/StudentPlanning/update_todolistuser';
                        document.getElementById('formTitleTodolistuser').innerText = 'Edit To DO List';
                        document.getElementById('submitButtonTodolistuser').innerText = 'Update';
                        document.querySelector('.inputTodoListMMLink-content').classList.remove('hidden');
                    });
            });
        });
    });

    function resetForm() {
        document.getElementById('id_todolistuser').value = '';
        document.getElementById('catatanTodolistuser').value = '';
        document.getElementById('keteranganTodolistuser').value = '';
    }
</script>