<div class="container">
    <h3 class="my-4 col-6 text-primary fw-bold position-relative text-decoration-underline">To do List Group<span  style="background-color: #71A430;"></span></h3>
    <div class="row">
        <?php foreach ($todolistgroup as $item): ?>
            <div class="col-12 col-md-6">
                <div class="card bg-primary rounded-4 p-4 mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="text-white"><?= $item['catatan'] ?></h4>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="priority_<?= $item['id_todolistgroup'] ?>" <?= $item['priority'] ? 'checked' : '' ?> onchange="updatePriority(<?= $item['id_todolistgroup'] ?>)">
                            <label class="form-check-label text-white" for="priority_<?= $item['id_todolistgroup'] ?>">Priority</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <h6 class="text-white"><?= $item['keterangan'] ?></h6>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="selesai_<?= $item['id_todolistgroup'] ?>" <?= $item['selesai'] ? 'checked' : '' ?> onchange="updateSelesai(<?= $item['id_todolistgroup'] ?>)">
                            <label class="form-check-label text-white" for="selesai_<?= $item['id_todolistgroup'] ?>">Selesai</label>
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                    <form action="#" class="editTodolistgrupForm" method="get" style="display:inline;">
                    <input type="hidden" name="id_todolistgroup" value="<?= $item['id_todolistgroup'] ?>">
                        <a href="#" id="inputTodoListLink">
                            <button type="submit" class="editTodolistgrupBtn" style="background-color: transparent; border: none;">
                                <img src="<?= base_url("assets/images/editing.svg") ?>" style="height: 4vh;" class="img-fluid">
                            </button>
                        </a>
                    </form>    
                        <form action="<?= base_url("StudentPlanning/delete_todolistgroup") ?>" method="post" style="display:inline;">
                            <input type="hidden" name="id_todolistgroup" value="<?= $item['id_todolistgroup'] ?>">
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus To Do List Group ini?')" style="border: none; background: none;">
                                <img src="<?= base_url("assets/images/sampah.svg") ?>" alt="">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<a href="#" id="inputTodoListLink">
    <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
</a>

<script>
    function updatePriority(id) {
        fetch(`<?= base_url("StudentPlanning/update_prioritygroup") ?>/${id}`, {
            method: 'POST',
            body: JSON.stringify({ priority: event.target.checked }),
            headers: {
                'Content-Type': 'application/json'
            }
        });
    }

    function updateSelesai(id) {
        fetch(`<?= base_url("StudentPlanning/update_selesaigroup") ?>/${id}`, {
            method: 'POST',
            body: JSON.stringify({ selesai: event.target.checked }),
            headers: {
                'Content-Type': 'application/json'
            }
        });
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle create
        document.getElementById('inputTodoListLink').addEventListener('click', function (e) {
            e.preventDefault();
            resetForm();
            document.getElementById('todolistgrupForm').action = '/StudentPlanning/input_todolistgroup';
            document.getElementById('formTitleTodolistgrup').innerText = 'Project';
            document.getElementById('submitButtonTodolistgrup').innerText = 'Add';
            document.querySelector('.inputTodoListLink-content').classList.remove('hidden');
        });

        // Handle edit
        document.querySelectorAll('.editTodolistgrupBtn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                console.log("hello");
                const form = this.closest('form');
                const id = form.querySelector('input[name="id_todolistgroup"]').value;
                fetch(`/StudentPlanning/get_todolistgroup/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        // console.log(data.catatan);
                        document.getElementById('id_todolistgroup').value = data.id_todolistgroup;
                        document.getElementById('catatanTodolistgroup').value = data.catatan;
                        document.getElementById('keteranganTodolistgroup').value = data.keterangan;
                        document.getElementById('todolistgroupForm').action = '/StudentPlanning/update_todolistgroup';
                        document.getElementById('formTitleTodolistgroup').innerText = 'Edit To DO List';
                        document.getElementById('submitButtonTodolistgrup').innerText = 'Update';
                        document.querySelector('.inputTodoListLink-content').classList.remove('hidden');
                    });
            });
        });
    });

    function resetForm() {
        document.getElementById('id_todolistgroup').value = '';
        document.getElementById('catatanTodolistgroup').value = '';
        document.getElementById('keteranganTodolistgroup').value = '';
    }
</script>