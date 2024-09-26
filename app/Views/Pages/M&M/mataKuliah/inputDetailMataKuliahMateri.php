<div class="container mt-4" id="formMateri">
    <form id="materiForm" action="<?= base_url('StudentPlanning/input_materi') ?>" method="post" enctype="multipart/form-data" class="col-6 col-sm-5 col-md-4">
        <h3 class="mb-4 text-primary fw-bold position-relative text-decoration-underline">Tambah Materi<span style="background-color: #71A430;"></span></h3>
        <input type="hidden" name="id_materi" id="id_materi">
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Upload File</h4>
            <input class="col-12 rounded p-2 bg-second" type="file" name="materi" accept=".pdf" id="materi" required>
        </div>
        <input type="hidden" name="matkul_id" id="matkul_id" required>
        <a href="#" id="detailMataKuliahLink">
            <button type="submit" class="col-4 bg-primary rounded p-1 mt-4 text-white">Add</button>
        </a>
    </form>
</div>
