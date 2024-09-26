<?php echo $this->extend('Components/sidebar'); ?>
<?php echo $this->section('content'); ?>
<style>
        .task-list, .calendar {
            padding: 1rem;
        }
        .task-list {
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        .calendar2 {
            background-color: #e9ecef;
        }
        .task-item {
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
        }
        .calendar2 .month {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
        }
        .calendar2 table {
            width: 100%;
            table-layout: fixed;
        }
        .calendar2 th, .calendar2 td {
            text-align: center;
            padding: .5rem;
            box-sizing: border-box;
            border: 1px solid #dee2e6;
        }
        .calendar2 td.task-date {
            font-weight: bold;
            color: white;
        }
    </style>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .calendar {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }
        .day, .day-name {
            box-sizing: border-box;
            width: calc(100% / 7);
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            cursor: pointer;
        }
        .day-name {
            font-weight: bold;
        }
        .today {
            background-color: #71A430;
            color: white;
            border-radius: 2vh;
        }
        .selected {
            background-color: #007bff;
            color: white;
            border-radius: 2vh;  
        }
        .calendar-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }
        .calendar-controls button {
            background-color: #71A430;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        #selectedDate {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 2px solid #71A430;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #EBF4F6;
            color: #71A430;
        }
        td {
            background-color: #EBF4F6;
            color: #71A430;
        }
        .action-icons {
            display: flex;
            gap: 10px;
        }
        .action-icons i {
            cursor: pointer;
        }
    </style>
    <!-- view profiel -->
    <div class="profileLink-content content">
    <?= $this->include('Pages/profile/profile') ?>
    </div>
    <!-- view home-->
    <div class="homeLink-content content hidden">
        <?=$this->include('Pages/home/home') ?>
    </div>
    <!-- view management & mentoring-->
    <div class="managementLink-content content hidden">
        <?=$this->include('Pages/M&M/m&m') ?>
    </div>
    <!-- view TodoList MM -->
    <div class="todoListMMLink-content content hidden">
    <?=$this->include('Pages/M&M/todoList/todoList') ?>
    </div>
    <!-- view TodoList MM -->
    <div class="inputTodoListMMLink-content content hidden">
    <?=$this->include('Pages/M&M/todoList/inputTodoList') ?>
    </div>
    <!--view MM jadwal Belajar -->
    <div class="belajarLink-content content hidden">
    <?=$this->include('Pages/M&M/belajar/jadwalBelajar') ?>
    </div>  
    <!--view MM input jadwal Belajar -->
    <div class="inputBelajarLink-content content hidden">
    <?=$this->include('Pages/M&M/belajar/inputJadwalBelajar') ?>
    </div>  
    <!-- view MM Mata Kuliah -->
    <div class="mataKuliahLink-content content hidden row container">
     <?=$this->include('Pages/M&M/mataKuliah/mataKuliah') ?>
    </div>
    <!-- view MM Mata Kuliah -->
    <div class="inputMataKuliahLink-content content hidden row container">
     <?=$this->include('Pages/M&M/mataKuliah/inputMataKuliah') ?>
    </div>
    <!-- view catatan -->
    <div class="catatanLink-content content hidden">
      <?=$this->include('Pages/M&M/mataKuliah/catatan') ?>
    </div>
    <!-- input catatan -->
    <div class="inputCatatanLink-content content hidden">
      <?=$this->include('Pages/M&M/mataKuliah/inputCatatan') ?>
    </div>
    <!-- detail Mata Kuliah -->
    <div class="detailMataKuliahLink-content content hidden container">
      <?=$this->include('Pages/M&M/mataKuliah/detailMataKuliah') ?>
    </div>
    <!-- detail Mata Kuliah -->
    <div class="inputDetailMataKuliahLink-content content hidden container">
      <?=$this->include('Pages/M&M/mataKuliah/inputDetailMataKuliahMateri') ?>
    </div>

    <!-- MM tugas -->
    <div class="tugasLink-content content container hidden">
     <?=$this->include('Pages/M&M/tugas/tugas') ?>
    </div>
    <!-- input tugas -->
    <div class="createTugas-content content hidden container ">
    <?=$this->include('Pages/M&M/tugas/inputTugas') ?>
    </div>
    <!-- view MM Timeline Tugas -->
    <div class="container timeLineLink-content content hidden">
    <?=$this->include('Pages/M&M/timelineTugas/timelineTugas') ?>
    </div>
    <!-- view MM Timeline Tugas -->
    <div class="container inputTimelineTugas-content content hidden">
    <?=$this->include('Pages/M&M/timelineTugas/inputTimelineTugas') ?>
    </div>
    <!-- view MM jadwal Kuliah -->
    <div class="jadwalKuliahLink-content content hidden">
        <?=$this->include('Pages/M&M/jadwalKuliah/jadwalKuliah') ?>
    </div>
    <!-- input jk -->
    <div class="createJadwalKuliah-content content hidden container">
        <?=$this->include('Pages/M&M/jadwalKuliah/inputJadwalKuliah') ?>
    </div>
     <!-- view MM jawal Ujian -->
    <div class="jadwalUjianLink-content content hidden">
    <?=$this->include('Pages/M&M/jadwalUjian/jadwalUjian') ?>
    </div>
    <!-- inputJu -->
    <div class="createJadwalUjian-content content container hidden">
    <?=$this->include('Pages/M&M/jadwalUjian/inputJadwalUjian') ?>
    </div>
    <!-- group project -->
    <div class="groupLink-content content hidden">
    <?=$this->include('Pages/groupProject/groupProject') ?>
    </div>
    <!-- group project (project)-->
    <div class="projectLink-content content hidden">
        <?=$this->include('Pages/groupProject/project/project') ?>
    </div>
    <!-- group project (project)-->
    <div class="inputProjectLink-content content hidden container">
        <?=$this->include('Pages/groupProject/project/inputProject') ?>
    </div>
    <!-- group project todolist -->
    <div class="todoListLink-content content hidden">
     <?=$this->include('Pages/groupProject/todoList/todoList') ?>
    </div>
    <!-- group project todolist -->
    <div class="inputTodoListLink-content content hidden">
     <?=$this->include('Pages/groupProject/todoList/inputTodoList') ?>
    </div>
    <!-- group project (meeting) -->
    <div class="meetingLink-content content hidden">
    <?=$this->include('Pages/groupProject/meeting/meeting') ?>
    </div>
    <!-- group project (input meeting) -->
    <div class="inputMeetingLink-content content hidden">
    <?=$this->include('Pages/groupProject/meeting/inputMeeting') ?>
    </div>
    <!-- calender -->
    <div class="calendarLink-content content hidden">
        <?=$this->include('Pages/calender/calender') ?>
    </div>

    <script>
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    let selectedDateElement = null;
    let currentYear = new Date().getFullYear();
    let currentMonth = new Date().getMonth();
    let notes = {};

    async function fetchNotes(year, month) {
        const response = await fetch(`StudentPlanning/getNotes?year=${year}&month=${month}`);
        notes = await response.json();
    }

    async function createCalendar(year, month) {
        await fetchNotes(year, month);
        const calendar = document.getElementById('calendar');
        const monthYear = document.getElementById('monthYear');
        calendar.innerHTML = '';

        const today = new Date();
        const currentDay = today.getDate();
        const todayMonth = today.getMonth();
        const todayYear = today.getFullYear();

        monthYear.textContent = `${monthNames[month]} ${year}`;

        // Add day names
        dayNames.forEach(day => {
            const dayNameCell = document.createElement('div');
            dayNameCell.classList.add('day-name');
            dayNameCell.textContent = day;
            calendar.appendChild(dayNameCell);
        });

        const firstDayOfMonth = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        for (let i = 0; i < firstDayOfMonth; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.classList.add('day');
            calendar.appendChild(emptyCell);
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const dayCell = document.createElement('div');
            dayCell.classList.add('day');
            if (i === currentDay && month === todayMonth && year === todayYear) {
                dayCell.classList.add('today');
            }
            dayCell.textContent = i;

            const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
            if (notes[dateStr]) {
                const icon = document.createElement('span');
                icon.classList.add('note-icon');
                icon.textContent = '📝';
                dayCell.appendChild(icon);
            }

            dayCell.addEventListener('click', () => selectDate(dayCell, year, month, i));
            calendar.appendChild(dayCell);
        }
    }

    function selectDate(element, year, month, day) {
        if (selectedDateElement) {
            selectedDateElement.classList.remove('selected');
        }
        element.classList.add('selected');
        selectedDateElement = element;
        const selectedDate = new Date(year, month, day);
        const dayName = dayNames[selectedDate.getDay()];
        const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        document.getElementById('selectedDateText').textContent = `Selected Date: ${dayName}, ${monthNames[month]} ${day}, ${year}`;
        document.getElementById('noteInput').value = notes[dateStr] || '';
        document.getElementById('noteForm').dataset.date = dateStr;
    }

    async function saveNote() {
        const noteInput = document.getElementById('noteInput').value;
        const date = document.getElementById('noteForm').dataset.date;
        await fetch('StudentPlanning/saveNote', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ date, note: noteInput })
        });
        await createCalendar(currentYear, currentMonth);
        selectDate(selectedDateElement, currentYear, currentMonth, new Date(date).getDate());
    }

    async function deleteNote() {
        const date = document.getElementById('noteForm').dataset.date;
        await fetch('StudentPlanning/deleteNote', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ date })
        });
        await createCalendar(currentYear, currentMonth);
        document.getElementById('noteInput').value = '';
        document.getElementById('selectedDateText').textContent = 'Selected Date:';
    }

    function navigateMonth(offset) {
        currentMonth += offset;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        } else if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        createCalendar(currentYear, currentMonth);
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('prevMonth').addEventListener('click', function () {
            navigateMonth(-1);
        });

        document.getElementById('nextMonth').addEventListener('click', function () {
            navigateMonth(1);
        });

        document.getElementById('noteForm').addEventListener('submit', function (e) {
            e.preventDefault();
            saveNote();
        });

        document.getElementById('deleteNote').addEventListener('click', deleteNote);

        createCalendar(currentYear, currentMonth);
    });
</script>
<?php echo $this->endSection(); ?>
