<div class="col-6 col-sm-5 col-md-4">
    <h3 class="mb-4 text-primary fw-bold position-relative text-decoration-underline">Mata Kuliah<span style="background-color: #71A430;"></span></h3>
    <form action="<?= base_url('StudentPlanning/input_matkul') ?>" method="post" enctype="multipart/form-data" id="matkulForm">
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Gambar</h4>
            <input id="gambarInput" name="gambar" class="col-12 rounded p-2 bg-second" type="file" accept="image/*">
            <img id="gambarPreview" class="mt-3" src="<?= base_url("assets/images/kelas.svg") ?>" alt="Pratinjau Gambar" style="max-width: 100%; height: auto;">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Nama Mata Kuliah</h4>
            <input name="matkul" class="col-12 rounded p-2 bg-second" type="text" placeholder="nama mata kuliah">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Semester</h4>
            <input name="semester" class="col-12 rounded p-2 bg-second" type="text" placeholder="Semester">
        </div>
        <a href="#" id="mataKuliahLink">
            <button type="submit" class="col-4 bg-primary rounded p-1 mt-4 text-white">
                Add
            </button>
        </a>
    </form>
</div>

<script>
document.getElementById('gambarInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const gambarPreview = document.getElementById('gambarPreview');
        gambarPreview.src = e.target.result;
        gambarPreview.style.display = 'block';
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        const gambarPreview = document.getElementById('gambarPreview');
        gambarPreview.src = '<?= base_url("assets/images/kelas.svg") ?>';
        gambarPreview.style.display = 'block';
    }
});
</script>
