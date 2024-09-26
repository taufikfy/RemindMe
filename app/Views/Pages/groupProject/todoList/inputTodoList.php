<form action="/StudentPlanning/input_todolistgroup" method="post" id="todolistgroupForm" class="col-6 col-sm-5 col-md-4">
    <h3 class="mb-4 text-primary fw-bold position-relative text-decoration-underline" id="formTitleTodolistgroup">Todo List Group<span style="background-color: #71A430;"></span></h3>
    <input type="hidden" name="id_todolistgroup" id="id_todolistgroup">
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">To do</h4>
        <input class="col-12 rounded p-2 bg-second" type="text" name="catatan" id="catatanTodolistgroup" placeholder="todo">
    </div>
    <div>
        <h4 class="my-2 text-primary fw-bold position-relative">Details</h4>
        <input class="col-12 rounded p-2 bg-second" type="text" name="keterangan" id="keteranganTodolistgroup" placeholder="details">
    </div>
    <input type="hidden" name="priority" value="0">
    <input type="hidden" name="selesai" value="0">
    <a href="#" id="todoListLink">
    <button class="col-4 bg-primary rounded p-1 mt-4 text-white" id="submitButtonTodolistgrup">
        Add
    </button>
    </a>
</form>
