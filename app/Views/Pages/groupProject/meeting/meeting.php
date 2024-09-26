<div class="container">
        <h3 class="my-4 col-6 col-sm-5 col-md-3 text-primary fw-bold position-relative text-decoration-underline">Meeting<span style="background-color: #71A430;"></span></h3>
         <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Activity</th>
                <th>Notes</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($meeting as $item): ?>
                <tr>
                    <td><?= $item['date']; ?></td>
                    <td><?= $item['time']; ?></td>
                    <td><?= $item['activity']; ?></td>
                    <td><?= $item['notes']; ?></td>
                    <td>
                        <form action="#" class="editMeetingForm" method="get" style="display:inline;">
                        <input type="hidden" name="id_meeting" value="<?= $item['id_meeting'] ?>">
                        <a href="#" id="inputMeetingLink">
                            <button type="submit" class="editMeetingBtn" style="border: none; background: none;">
                                <img src="<?=base_url("assets/images/pencil.svg ") ?>" alt="">
                            </button>
                        </a>
                        </form>
                    <form action="<?= base_url("StudentPlanning/delete_meeting") ?>" method="post" style="display:inline;">
                        <input type="hidden" name="id_meeting" value="<?= $item['id_meeting'] ?>">
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus meeting ini?')" style="border: none; background: none;">
                            <img src="<?= base_url("assets/images/sampah.svg") ?>" alt="">
                        </button>
                    </form>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="#" id="inputMeetingLink">
        <h3 class="my-4 text-third fw-bold position-relative fst-italic">+ New<span style="background-color: #005073;" class="underline"></span></h3>
    </a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle create
        document.getElementById('inputMeetingLink').addEventListener('click', function (e) {
            e.preventDefault();
            resetForm();
            document.getElementById('meetingForm').action = '/StudentPlanning/input_meeting';
            document.getElementById('formTitleMeeting').innerText = 'Meeting';
            document.getElementById('submitButtonMeeting').innerText = 'Add';
            document.querySelector('.inputMeetingLink-content').classList.remove('hidden');
        });

        // Handle edit
        document.querySelectorAll('.editMeetingBtn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');
                const id = form.querySelector('input[name="id_meeting"]').value;
                console.log(id);
                fetch(`/StudentPlanning/get_meeting/${id}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('id_meeting').value = data.id_meeting;
                        document.getElementById('dateMeeting').value = data.date;
                        document.getElementById('timeMeeting').value = data.time;
                        document.getElementById('activityMeeting').value = data.activity;
                        document.getElementById('notesMeeting').value = data.notes;
                        document.getElementById('meetingForm').action = '/StudentPlanning/update_meeting';
                        document.getElementById('formTitleMeeting').innerText = 'Edit Meeting';
                        document.getElementById('submitButtonMeeting').innerText = 'Update';
                        document.querySelector('.inputMeetingLink-content').classList.remove('hidden');
                    });
            });
        });
    });

    function resetForm() {
        document.getElementById('id_meeting').value = '';
        document.getElementById('dateMeeting').value = '';
        document.getElementById('timeMeeting').value = '';
        document.getElementById('activityMeeting').value = '';
        document.getElementById('notesMeeting').value = '';
    }
</script>