<div class="container">
    <h3 class="my-4 col-6 col-sm-5 col-md-3 text-primary fw-bold position-relative text-decoration-underline">Group Project<span style="background-color: #71A430;"></span></h3>
    <table>
        <thead>
            <tr>
                <th>Status</th>
                <th>Project</th>
                <th>Deadline</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
                <tr>
                    <td><p class="bg-primary col-8 p-1 rounded text-white text-center fw-bold"><?= $project['status']; ?></p></td>
                    <td><?= $project['project']; ?></td>
                    <td><?= $project['deadline']; ?></td>
                    <td>
                        <form action="#" class="editProjectForm" method="get" style="display:inline;">
                            <input type="hidden" name="id_project" value="<?= $project['id_project'] ?>">
                            <a href="#" id="inputProjectLink">
                                <button type="submit" class="editProjectBtn" style="border: none; background: none;">
                                    <img src="<?= base_url("assets/images/pencil.svg") ?>" alt="">
                                </button>
                            </a>
                        </form>
                        <form action="<?= base_url("StudentPlanning/delete_project") ?>" method="post" style="display:inline;">
                            <input type="hidden" name="id_project" value="<?= $project['id_project'] ?>">
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus project ini?')" style="border: none; background: none;">
                                <img src="<?= base_url("assets/images/sampah.svg") ?>" alt="">
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="#" id="inputProjectLink">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle create project
        document.getElementById('inputProjectLink').addEventListener('click', function (e) {
            e.preventDefault();
            resetForm();
            document.getElementById('projectForm').action = '/StudentPlanning/input_project';
            document.getElementById('formTitleProject').innerText = 'Project';
            document.getElementById('submitButtonProject').innerText = 'Add';
            document.querySelector('.inputProjectLink-content').classList.remove('hidden');
        });

        // Handle edit project
        document.querySelectorAll('.editProjectBtn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');
                const id = form.querySelector('input[name="id_project"]').value;
                console.log(id);
                fetch(`/StudentPlanning/get_project/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('id_project').value = data.id_project;
                        document.getElementById('projectProject').value = data.project;
                        document.getElementById('statusProject').value = data.statusProject;
                        document.getElementById('deadlineProject').value = data.deadline;
                        document.getElementById('projectForm').action = '/StudentPlanning/update_project';
                        document.getElementById('formTitleProject').innerText = 'Edit Project';
                        document.getElementById('submitButtonProject').innerText = 'Update';
                        document.querySelector('.inputProjectLink-content').classList.remove('hidden');
                    });
            });
        });
    });

    function resetForm() {
        document.getElementById('id_project').value = '';
        document.getElementById('projectProject').value = '';
        document.getElementById('statusProject').value = '';
        document.getElementById('deadlineProject').value = '';
    }
</script>