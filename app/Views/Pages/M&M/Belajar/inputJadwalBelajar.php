<form action="/StudentPlanning/input_belajar" method="post" id="belajarForm" class="col-6 col-sm-5 col-md-4">
    <h3 class="mb-4 text-primary fw-bold position-relative text-decoration-underline" id="formTitleBelajar">Jadwal Belajar<span style="background-color: #71A430;"></span></h3>
    <input type="hidden" name="id_belajar" id="id_belajar">
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Date</h4>
        <input class="col-12 rounded p-2 bg-second" type="date" name="date" id="dateBelajar" placeholder="Date">
    </div>
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Time</h4>
        <input class="col-12 rounded p-2 bg-second" type="time" name="time" id="timeBelajar" placeholder="Time">
    </div>
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Activity</h4>
        <input class="col-12 rounded p-2 bg-second" type="text" name="activity" id="activityBelajar" placeholder="Activity">
    </div>
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Notes</h4>
        <input class="col-12 rounded p-2 bg-second" type="text" name="notes" id="notesBelajar" placeholder="Notes">
    </div>
    <a href="#" id="belajarLink">
    <button class="col-4 bg-primary rounded p-1 mt-4 text-white" id="submitButtonBelajar">
        Add
    </button>
    </a>
</form>
