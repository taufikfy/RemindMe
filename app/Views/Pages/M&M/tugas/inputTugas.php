<form action="/StudentPlanning/input_tugas" method="post" id="tugasForm" class="d-flex row justify-content-center" enctype="multipart/form-data">
        <h3 class="text-primary fw-bold position-relative text-decoration-underline" id="formTitleTugas">Tugas<span style="background-color: #71A430;"></span></h3>
        <input type="hidden" name="id_tugas" id="id_tugas">
        <input type="hidden" name="id_matkul" id="id_matkul" value="1">
        <div class="col-6 col-sm-5 col-md-6">
            <div>
                <h5 class="my-3 text-primary fw-bold position-relative">Nama Tugas</h5>
                <input class="col-12 rounded p-2 bg-second" type="text" id="namatugas" name="namatugas">
            </div>
            <div>
                <h5 class="my-3 text-primary fw-bold position-relative">Deskripsi Tugas</h5>
                <textarea class="col-12 rounded p-2 bg-second" id="deskripsiTugas" name="deskripsi"></textarea>
            </div>
            <div>
                <h5 class="my-3 text-primary fw-bold position-relative">Tenggat Waktu</h5>
                <input class="col-12 rounded p-2 bg-second" id="deadlineTugas" type="text" name="deadline" >
            </div>
            <div>
                <h5 class="my-3 text-primary fw-bold position-relative">Jam</h5>
                <input class="col-12 rounded p-2 bg-second" id="jamTugas" type="text" name="jam" >
            </div>
            <div>
                <h5 class="my-3 text-primary fw-bold position-relative">Upload File</h5>
                <input class="col-12 rounded p-2 bg-second" id="fileTugas" type="file" name="file">
            </div>
            <div class="mt-5 d-flex gap-3">
                <button class="col-4 bg-second border-2 border-black rounded text-primary">Reset</button>
                <a href="#" class="col-4" id="tugasLink">
                <button class="col-12 bg-primary rounded p-1 text-white" id="submitButtonTugas">Add</button>
                </a>
            </div>
        </div>
    </form>