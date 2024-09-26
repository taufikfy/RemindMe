<div class="container">
    <h3 class="my-4 text-primary fw-bold position-relative">Catatan Matkul</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Catatan</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody id="catatanTableBody">
            <!-- Catatan will be inserted here -->
        </tbody>
    </table>
    <a href="#" id="inputCatatanLink">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle create
        const inputCatatanLink = document.getElementById('inputCatatanLink');
        const catatanForm = document.getElementById('catatanForm');
        const formTitleCatatan = document.getElementById('formTitleCatatan');
        const submitButtonCatatan = document.getElementById('submitButtonCatatan');
        const inputCatatanLinkContent = document.querySelector('.inputCatatanLink-content');
        const idCatatanInput = document.getElementById('id_catatan');
        const catatanMatkulInput = document.getElementById('catatanMatkul');
        const idMatkulInput = document.getElementById('id_matkul');

        if (!inputCatatanLink || !catatanForm || !formTitleCatatan || !submitButtonCatatan || !inputCatatanLinkContent || !idCatatanInput || !catatanMatkulInput || !idMatkulInput) {
            console.error('One or more required elements are missing in the DOM.');
            return;
        }

        inputCatatanLink.addEventListener('click', function (e) {
            e.preventDefault();
            resetForm();
            let idMatkul = localStorage.getItem('matkul_id');
            if (!idMatkul) {
                console.error('ID Matkul tidak valid.');
                return;
            }
            idMatkulInput.value = idMatkul; // Set id_matkul field
            catatanForm.action = '/StudentPlanning/input_catatan';
            formTitleCatatan.innerText = 'Catatan Matkul';
            submitButtonCatatan.innerText = 'Add';
            inputCatatanLinkContent.classList.remove('hidden');
        });
        
        // Handle edit
        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('editCatatanBtn')) {
                e.preventDefault();
                const form = e.target.closest('form');
                const idCatatan = form.querySelector('input[name="id_catatan"]').value;

                fetch(`/StudentPlanning/get_catatan/${idCatatan}`)
                    .then(response => response.json())
                    .then(data => {
                        idCatatanInput.value = data.id_catatan;
                        catatanMatkulInput.value = data.catatan;
                        idMatkulInput.value = localStorage.getItem('matkul_id');
                        catatanForm.action = '/StudentPlanning/update_catatan';
                        formTitleCatatan.innerText = 'Edit Catatan';
                        submitButtonCatatan.innerText = 'Update';
                        inputCatatanLinkContent.classList.remove('hidden');
                    })
                    .catch(error => console.error('Error fetching catatan:', error));
            }
        });
    });


    function resetForm() {
        document.getElementById('id_catatan').value = '';
        document.getElementById('catatanMatkul').value = '';
        document.getElementById('id_matkul').value = '';
    }
</script>


