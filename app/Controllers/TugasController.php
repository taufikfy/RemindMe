<?php 
namespace App\Controllers;
use App\Models\TugasModel;

class TugasController extends BaseController{
    public function input_tugas()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $tugasModel = new TugasModel();
    
        $file = $this->request->getFile('file');
        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getName();
            $file->move('./assets/tugas', $fileName);
    
            $data = [
                'namatugas'   => $this->request->getPost('namatugas'),
                'deskripsi'   => $this->request->getPost('deskripsi'),
                'deadline'    => $this->request->getPost('deadline'),
                'jam'         => $this->request->getPost('jam'),
                'file'        => $fileName,
                'id_matkul'   => $this->request->getPost('id_matkul'),
                'id_user'     => $session->get('id_user'),
            ];
    
            $tugasModel->save($data);
        }
    
        return redirect()->to('/StudentPlanning');
    }
    
    
    public function get_tugas($id)
    {
        $tugasModel = new TugasModel();
        $data = $tugasModel->find($id);
        return $this->response->setJSON($data);
    }
    
    public function update_tugas()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $tugasModel = new TugasModel();
        $id = $this->request->getPost('id_tugas');
    
        $data = [
            'namatugas'   => $this->request->getPost('namatugas'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
            'deadline'    => $this->request->getPost('deadline'),
            'jam'         => $this->request->getPost('jam'),
            'id_matkul'   => $this->request->getPost('id_matkul'),
            'id_user'     => $session->get('id_user'),
        ];
    
        // Cek apakah ada file baru yang diunggah
        $file = $this->request->getFile('file');
        if ($file->isValid() && !$file->hasMoved()) {
            // Hapus file lama
            $oldFile = $tugasModel->find($id)['file'];
            if ($oldFile && file_exists('./assets/tugas/' . $oldFile)) {
                unlink('./assets/tugas/' . $oldFile);
            }
    
            $fileName = $file->getName();
            $file->move('./assets/tugas', $fileName);
            $data['file'] = $fileName;
        }
    
        $tugasModel->update($id, $data);
    
        return redirect()->to('/StudentPlanning');
    }
    

    public function delete_tugas()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $tugasModel = new TugasModel();
        $id = $this->request->getPost('id_tugas');
    
        // Hapus file terkait jika ada dan bukan direktori
        $tugas = $tugasModel->find($id);
        if ($tugas) {
            $filePath = './assets/tugas/' . $tugas['file'];
            if (is_file($filePath)) {
                unlink($filePath);
            }
        }
    
        $tugasModel->delete($id);
    
        return redirect()->to('/StudentPlanning');
    }
    
    
}