<?php

namespace App\Controllers;

use App\Models\MatkulModel;

class MatkulController extends BaseController
{

    public function input_matkul()
{
    $matkulModel = new MatkulModel();

    // Validasi apakah file gambar telah dipilih
    if (!empty($_FILES['gambar']['name'])) {
        // Proses upload gambar
        $gambar = $this->request->getFile('gambar');
        $gambar->move(ROOTPATH . 'public/uploads');
        $gambarName = $gambar->getName();
    } else {
        // Jika tidak ada gambar yang dipilih, gunakan gambar default
        $gambarName = 'kelas.svg';
    }

    // Proses input data mata kuliah
    $data = [
        'matkul' => $this->request->getPost('matkul'),
        'semester' => $this->request->getPost('semester'),
        'gambar' => $gambarName,
        'id_user' => session()->get('id_user'),
    ];

    $matkulModel->insert($data);

    return redirect()->to('/StudentPlanning');
}


    public function delete_matkul()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $matkulModel = new MatkulModel();
        $id_matkul = $this->request->getPost('id_matkul');

        // Menyertakan klausa where untuk memastikan hanya satu baris yang dihapus
        $matkulModel->where('id_matkul', $id_matkul)->delete();

        return redirect()->to('/StudentPlanning');
    }

}
