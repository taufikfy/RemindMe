<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\TugasModel;
use App\Models\CatatanMatkulModel;
use App\Models\MatkulModel;
use App\Controllers\BaseController;
use CodeIgniter\CLI\Console;

class DetailmatkulController extends BaseController
{

    public function show($id_matkul = null)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $matkulModel = new MatkulModel();
        $matkul = $matkulModel->find($id_matkul);

        $materiModel = new MateriModel();
        $materis = $materiModel->getMateriByIdMatkul($id_matkul);

        $tugasModel = new TugasModel();
        $tugass = $tugasModel->getTugasByIdMatkul($id_matkul);

        $catatanMatkulModel = new CatatanMatkulModel();
        $catatans = $catatanMatkulModel->getCatatanByIdMatkul($id_matkul);

        $data = [
            'matkul' => $matkul,
            'materis' => $materis,
            'tugass' => $tugass,
            'catatans' => $catatans,
        ];

        return view('Pages/homepage', $data);
    }

    public function getMatkulDetails($id_matkul)
    {
        $materiModel = new MateriModel();
        $materis = $materiModel->getMateriByIdMatkul($id_matkul);

        $tugasModel = new TugasModel();
        $tugass = $tugasModel->getTugasByIdMatkul($id_matkul);

        $catatanMatkulModel = new CatatanMatkulModel();
        $catatans = $catatanMatkulModel->getCatatanByIdMatkul($id_matkul);

        $data = [
            'materis' => $materis,
            'tugass' => $tugass,
            'catatans' => $catatans,
        ];

        return $this->response->setJSON($data);
    }
    
public function input_materi()
{
    $session = session();
    if (!$session->get('logged_in')) {
        return redirect()->to('/');
    }

    $id_matkul = $this->request->getPost('matkul_id'); // Get id_matkul from hidden input field

    // Validate id_matkul
    if (empty($id_matkul) || !$this->isMatkulExist($id_matkul)) {
        return redirect()->to('/StudentPlanning')->with('error', 'ID Matkul tidak valid');
    }

    // Get uploaded file
    $file = $this->request->getFile('materi');

    // Validate the uploaded file
    if ($file->isValid() && !$file->hasMoved()) {
        $fileName = $file->getName(); // Generate random file name to avoid conflicts
        $file->move('./assets/materi', $fileName); // Move file to specified directory

        // Prepare data to be saved
        $data = [
            'materi' => $fileName,
            'id_matkul' => $id_matkul,
            'id_user' => $session->get('id_user'),
        ];

        // Save the data using the model
        $materiModel = new MateriModel();
        $materiModel->insert($data); // Use insert() method to insert data into materis table

        return redirect()->to('/StudentPlanning')->with('success', 'File berhasil diupload');
    } else {
        // Handle file upload failure
        return redirect()->to('/StudentPlanning')->with('error', 'File upload failed');
    }
}




private function isMatkulExist($id_matkul)
{
    $matkulModel = new MatkulModel();
    return $matkulModel->find($id_matkul) !== null;
}


    public function resetMateri($id_matkul) {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        // Pastikan id_matkul valid
        if (!$id_matkul) {
            return redirect()->to('/StudentPlanning')->with('error', 'ID Matkul tidak ditemukan');
        }
    
        // Hapus semua materi yang terkait dengan id_matkul
        $materiModel = new MateriModel(); // Sesuaikan dengan model yang Anda gunakan
        $deleted = $materiModel->where('id_matkul', $id_matkul)->delete();
    
        if ($deleted) {
            return $this->response->setJSON(['message' => 'Materi berhasil dihapus']);
        } else {
            return $this->response->setJSON(['error' => 'Gagal menghapus materi']);
        }
    }

    
}
