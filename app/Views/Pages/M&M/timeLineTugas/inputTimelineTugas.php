<form action="/StudentPlanning/input_timelinetugas" method="post" id="timelinetugasForm" class="col-6 col-sm-5 col-md-4">
        <h3 class="my-4 text-primary fw-bold position-relative text-decoration-underline" id="formTitleTimelinetugas">Timeline Tugas<span style="background-color: #71A430;"></span></h3>
        <input type="hidden" name="id_timelinetugas" id="id_timelinetugas">
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Mata Kuliah</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="matkul" id="matkulTimelinetugas" placeholder="mata kuliah">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">deskripsi</h4>
            <input class="col-12 rounded p-2 bg-second" type="text" name="deskripsi" id="deskripsiTimelinetugas" placeholder="deskripsi">
        </div>
        <div>
            <h4 class="my-2 text-primary fw-bold position-relative">Deadline</h4>
            <input class="col-12 rounded p-2 bg-second" type="date" name="deadline" id="deadlineTimelinetugas" placeholder="hari">
        </div>
        <a href="#" id="timeLineLink">
        <button class="col-4 bg-primary rounded p-1 mt-4 text-white" id="submitButtonTimelinetugas">
            Add
        </button>
        </a>
    </form>