<form id="projectForm" action="/StudentPlanning/input_project" method="post" class="col-6 col-sm-5 col-md-6">
    <h3 class="mb-4 text-primary fw-bold position-relative text-decoration-underline" id="formTitleProject">Project<span style="background-color: #71A430;"></span></h3>
    <input type="hidden" name="id_project" id="id_project">
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Status</h4>
        <select class="col-12 rounded p-2 bg-second" name="status" id="statusProject">
            <option value="not_started">Not Started</option>
            <option value="in_progress">In Progress</option>
            <option value="done">Done</option>
        </select>
    </div>
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Project Name</h4>
        <input class="col-12 rounded p-2 bg-second" type="text" name="project" id="projectProject" placeholder="Project Name">
    </div>
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Deadline</h4>
        <input class="col-12 rounded p-2 bg-second" type="date" name="deadline" id="deadlineProject" placeholder="Deadline">
    </div>
    <a href="#" class="col-4" id="projectLink">
    <button class="col-4 bg-primary rounded p-1 mt-4 text-white" id="submitButtonProject">
        Add
    </button>
    </a>
</form>
