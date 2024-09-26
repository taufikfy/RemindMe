    <form action="/StudentPlanning/input_jadwal_ujian" method="post" id="jadwalUjianForm" class="col-6 col-sm-5 col-md-6">
        <h3 class="my-4 text-primary fw-bold position-relative text-decoration-underline" id="formTitleUjian">Jadwal Ujian<span style="background-color: #71A430;"></span></h3>
        <input type="hidden" name="id_jadwalujian" id="id_jadwalujian">
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Mata Kuliah Ujian</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="matkul" id="matkulUjian" placeholder="Mata kuliah">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Hari</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="hari" id="hariUjian" placeholder="Hari">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Jam Mulai Ujian</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="mulai" id="mulaiUjian" placeholder="Jam Mulai Ujian">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Jam Selesai Ujian</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="selesai" id="selesaiUjian" placeholder="Jam Selesai Ujian">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Ruang</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="ruangan" id="ruanganUjian" placeholder="Ruangan">
        </div>
        <a href="#" id="jadwalUjianLink">
        <button class="col-4 bg-primary rounded p-1 mt-4 text-white" id="submitButtonUjian">Add</button>
        </a>
    </form>