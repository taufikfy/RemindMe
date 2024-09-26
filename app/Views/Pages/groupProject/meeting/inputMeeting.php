<form action="/StudentPlanning/input_meeting" method="post" id="meetingForm" class="col-6 col-sm-5 col-md-4">
    <h3 class="mb-4 text-primary fw-bold position-relative text-decoration-underline" id="formTitleMeeting">Meeting<span style="background-color: #71A430;"></span></h3>
    <input type="hidden" name="id_meeting" id="id_meeting">
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Date</h4>
        <input class="col-12 rounded p-2 bg-second" type="date" name="date" id="dateMeeting" placeholder="Date">
    </div>
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Time</h4>
        <input class="col-12 rounded p-2 bg-second" type="time" name="time" id="timeMeeting" placeholder="Time">
    </div>
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Activity</h4>
        <input class="col-12 rounded p-2 bg-second" type="text" name="activity" id="activityMeeting" placeholder="Actifity">
    </div>
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Notes</h4>
        <input class="col-12 rounded p-2 bg-second" type="text" name="notes" id="notesMeeting" placeholder="Notes">
    </div>
    <a href="#" id="meetingLink">
    <button class="col-4 bg-primary rounded p-1 mt-4 text-white" id="submitButtonMeeting">
        Add
    </button>
    </a>
</form>
