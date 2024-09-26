<div class="col-10">
    <?php foreach ($matkuls as $matkul): ?>
        <a href="/detailmatkul/show/<?= $matkul['id_matkul'] ?>" id="detailMataKuliahLink" class="detailMataKuliahLink" data-id-matkul="<?= $matkul['id_matkul'] ?>">
            <div class="card mb-3" style="border: 1px solid #ccc; border-radius: 10px; padding: 15px; max-width: 600px;">
                <div class="d-flex align-items-center gap-2">
                    <div class="col-6">
                        <?php if (!empty($matkul['gambar']) && $matkul['gambar'] != 'kelas.svg'): ?>
                            <img src="/uploads/<?= $matkul['gambar'] ?>" alt="Gambar Mata Kuliah" style="width: 250px; height: 100px; object-fit: cover; border-radius: 10px;">
                        <?php else: ?>
                            <img src="/assets/images/kelas.svg" alt="Gambar Default" style="width: 100px; height: 100px; object-fit: cover; border-radius: 10px;">
                        <?php endif; ?>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                        <div class="d-flex justify-content-between">
                            <h5 style="color: gray;"><?= $matkul['matkul'] ?></h5>
                            <div class="d-flex gap-2">
                                <a data-id-matkul="<?= $matkul['id_matkul'] ?>" href="#" id="catatanLink" class="catatanLink" style="background-color: transparent; border: none;">
                                    <img src="/assets/images/pencil.svg" alt="Edit">
                                </a>
                                <form action="/StudentPlanning/delete_matkul" method="post" style="display:inline;">
                                    <input type="hidden" name="id_matkul" value="<?= $matkul['id_matkul'] ?>">
                                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')" style="background-color: transparent; border: none;">
                                        <img src="/assets/images/sampah.svg" alt="Hapus">
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div style="color: gray;">Semester <?= $matkul['semester'] ?></div>
                    </div>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
    <a href="#" id="inputMataKuliahLink">
        <h4 class="my-4 text-third position-relative fst-italic">+ New</h4>
    </a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Check if there's an id_matkul in localStorage and set it in the form
    let savedIdMatkul = localStorage.getItem('matkul_id');
    if (savedIdMatkul) {
        document.getElementById('matkul_id').value = savedIdMatkul;
    }

    // Event listener for form submission
    document.getElementById('materiForm').addEventListener('submit', function(event) {
        let idMatkul = localStorage.getItem('matkul_id');
        if (idMatkul) {
            document.getElementById('matkul_id').value = idMatkul;
        }
    });
})
   document.addEventListener('DOMContentLoaded', function() {
    // Check if there's an id_matkul in localStorage and set it in the form
    let savedIdMatkul = localStorage.getItem('matkul_id');
    console.log(savedIdMatkul);
    if (savedIdMatkul) {
        document.getElementById('id_matkul').value = savedIdMatkul;
    }

    // Event listener for form submission
    document.getElementById('materiForm').addEventListener('submit', function(event) {
        let idMatkul = localStorage.getItem('matkul_id');
        if (idMatkul) {
            document.getElementById('id_matkul').value = idMatkul;
        }
    });

    // Event listener for detailMataKuliahLink click
    document.querySelectorAll('.detailMataKuliahLink').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            let idMatkul = this.getAttribute('data-id-matkul');
            console.log('ID Matkul:', idMatkul); // Debug logging

            // Save the id_matkul to localStorage
            localStorage.setItem('matkul_id', idMatkul);

            // Set the id_matkul input field in the form
            document.getElementById('id_matkul').value = idMatkul;

            // Fetch the details of the selected matkul
            fetch(`/StudentPlanning/getMatkulDetails/${idMatkul}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data); // Debug logging
                    displayMatkulDetails(data);
                })
                .catch(error => console.error('Error fetching matkul details:', error));
        });
    });

    if (savedIdMatkul) {
        // Optionally, fetch and display the details automatically on page load
        fetch(`/StudentPlanning/getMatkulDetails/${savedIdMatkul}`)
            .then(response => response.json())
            .then(data => {
                console.log(data); // Debug logging
                displayMatkulDetails(data);
            })
            .catch(error => console.error('Error fetching matkul details:', error));
    }
});

function displayMatkulDetails(data) {
    let materiContent = document.getElementById('materiContent');
    materiContent.innerHTML = ''; // Clear existing content

    if (data.materis.length > 0) {
        data.materis.forEach(materi => {
            let materiElement = `
                <div class="col-12 d-flex align-items-center mb-2 justify-content-between p-2 border-bottom border-3 border-dark-emphasis">
                    <div class="d-flex align-items-end">
                        <img src="<?= base_url("assets/images/file.svg") ?>" alt="">
                        <span class="me-2 text-primary fw-semibold">${materi.materi}</span>
                    </div>
                    <a href="<?= base_url("assets/materi/") ?>${materi.materi}" download>
                        <img src="<?= base_url("assets/images/unduh.svg") ?>" alt="">
                    </a>
                </div>
            `;
            materiContent.insertAdjacentHTML('beforeend', materiElement);
        });
    } else {
        materiContent.innerHTML = '<p class="text-primary">Tidak ada materi untuk mata kuliah ini.</p>';
    }
}

  function resetMateri() {
   const idMatkul = localStorage.getItem('matkul_id');
        if (!idMatkul) {
            console.error('ID Matkul tidak valid.');
            return;
        }

        fetch(`/StudentPlanning/resetMateri/${idMatkul}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error('Gagal menghapus materi:', data.error);
            } else {
                console.log('Materi berhasil dihapus:', data.message);
                location.reload(); // Reload page to reflect changes
            }
        })
        .catch(error => console.error('Error resetting materi:', error));
    }

</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    let savedIdMatkul = localStorage.getItem('matkul_id');
    if (savedIdMatkul) {
        fetchCatatanByMatkul(savedIdMatkul);
    }

    document.querySelectorAll('.catatanLink').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            let idMatkul = this.getAttribute('data-id-matkul');
            localStorage.setItem('matkul_id', idMatkul);
            fetchCatatanByMatkul(idMatkul);
        });
    });
});

function fetchCatatanByMatkul(idMatkul) {
    fetch(`/StudentPlanning/get_catatan_by_matkul/${idMatkul}`)
        .then(response => response.json())
        .then(data => {
            displayCatatan(data.catatans);
        })
        .catch(error => console.error('Error fetching catatan:', error));
}

function displayCatatan(catatans) {
    let catatanTableBody = document.getElementById('catatanTableBody');
    catatanTableBody.innerHTML = ''; // Clear existing content

    if (catatans.length > 0) {
        catatans.forEach(catatan => {
            console.log("catatan",catatan);
            let catatanRow = `
                <tr>
                    <td>${htmlspecialchars(catatan.catatan)}</td>
                    <td class="col-3">
                        <div class="d-flex justify-content-center">
                            <form action="#" class="editCatatanForm" method="get" style="display:inline;">
                                <input type="hidden" name="id_catatan" value="${catatan.id_catatan}">
                                <a href="#" id="inputCatatanLink">
                                    <button style="border: none; background-color: transparent;" class="editCatatanBtn text-white fw-semibold rounded-4 px-4 me-2"><img class="editCatatanBtn" src="/assets/images/pencil.svg" alt="Edit"></button>
                                </a>
                            </form>
                            <form action="<?= base_url("StudentPlanning/delete_catatan") ?>" method="post">
                                <input type="hidden" name="id_catatan" value="${catatan.id_catatan}">
                                <button style="border: none; background-color: transparent;" type="submit" class="text-white fw-semibold rounded-4 px-4"><img src="/assets/images/sampah.svg" alt="Hapus"></button>
                            </form>
                        </div>
                    </td>
                </tr>
            `;
            catatanTableBody.insertAdjacentHTML('beforeend', catatanRow);
        });
    } else {
        catatanTableBody.innerHTML = '<tr><td colspan="2" class="text-primary">Tidak ada catatan untuk mata kuliah ini.</td></tr>';
    }
}

function htmlspecialchars(str) {
    return str.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}
</script>