<form action="/StudentPlanning/input_todolistuser" method="post" id="todolistuserForm" class="col-6 col-sm-5 col-md-4">
    <h3 class="mb-4 text-primary fw-bold position-relative text-decoration-underline" id="formTitleTodolistuser">TodoList<span style="background-color: #71A430;"></span></h3>
    <input type="hidden" name="id_todolistuser" id="id_todolistuser">
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">To do</h4>
        <input class="col-12 rounded p-2 bg-second" type="text" name="catatan" id="catatanTodolistuser" placeholder="todo">
    </div>
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Details</h4>
        <input class="col-12 rounded p-2 bg-second" type="text" name="keterangan" id="keteranganTodolistuser" placeholder="details">
    </div>
    <input type="hidden" name="priorityUser" id="priorityTodolistuser" value="0">
    <input type="hidden" name="selesaiUser" id="selesaiTodolistuser" value="0">
    <a href="#" id="todoListMMLink">
    <button class="col-4 bg-primary rounded p-1 mt-4 text-white" id="submitButtonTodolistuser">
        Add
    </button>
    </a>
</form>
