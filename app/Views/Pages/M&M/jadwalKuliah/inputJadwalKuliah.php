<form action="/StudentPlanning/input_jadwal_matkul" method="post" id="jadwalKuliahForm" class="col-sm-5 col-md-4">
        <h3 class="my-4 text-primary fw-bold position-relative text-decoration-underline" id="formTitle">Jadwal Mata Kuliah<span style="background-color: #71A430;"></span></h3>
        <input type="hidden" name="id_jadwalmatkul" id="id_jadwalmatkul">
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Mata Kuliah</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="matkul" id="matkul" placeholder="Mata kuliah">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Semester</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="semester" id="semester1" placeholder="Semester">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Hari</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="hari" id="hari" placeholder="Hari">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Jam Mulai</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="mulai" id="mulai" placeholder="Jam Mulai">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Jam Selesai</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="selesai" id="selesai" placeholder="Jam Selesai">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Ruang</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="ruangan" id="ruangan" placeholder="Ruangan">
        </div>
        <a href="#" id="jadwalKuliahLink">
        <button class="col-4 bg-primary rounded p-1 mt-4 text-white" id="submitButton">
            Add
        </button>
        </a>
    </form>