<div class="container my-5 text-center border shadow">
    <div class="calendar-controls">
        <button id="prevMonth">&lt;</button>
        <h2 id="monthYear"></h2>
        <button id="nextMonth">&gt;</button>
    </div>
    <div id="calendar" class="calendar"></div>
    <div id="selectedDate">
        <h4>Selected Date:</h4>
        <p id="selectedDateText"></p>
        <form id="noteForm">
            <textarea id="noteInput" class="form-control mt-2" rows="3" placeholder="Input catatan untuk tanggal ini..."></textarea>
            <button type="submit" class="btn btn-primary mt-2">Simpan Catatan</button>
            <button type="button" id="deleteNote" class="btn btn-danger mt-2">Hapus Catatan</button>
        </form>
    </div>
</div>
