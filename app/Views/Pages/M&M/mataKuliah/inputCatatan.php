<h3 class="text-primary fw-bold position-relative text-decoration-underline" id="formTitleCatatan">Catatan<span style="background-color: #71A430;"></span></h3>
    <form action="/StudentPlanning/input_catatan" method="post" id="catatanForm" class="d-flex row">
    <input type="hidden" name="id_catatan" id="id_catatan">
        <div class="col-6 col-sm-5 col-md-6">
            <div>
                <h5 class="my-3 text-primary fw-bold position-relative">Catatan</h5>
                <textarea class="col-12 rounded p-2 bg-second" type="text" name="catatan" id="catatanMatkul"></textarea>
            </div>
            <div class="mt-5 d-flex gap-3">
            <input type="hidden" name="id_matkul" id="id_matkul">
            <a href="#" class="col-4" id="catatanLink">
                <button class="col-12 bg-primary rounded p-1 text-white" id="submitButtonCatatan">
                    Add
                </button>
            </a>
            </div>
        </div>
    </form>