<?php

namespace App\Controllers;

use App\Models\JadwalUjianModel;
use App\Controllers\BaseController;

class JadwalUjianController extends BaseController{

    public function input_jadwal_ujian()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
    
        $jadwalujianModel = new JadwalUjianModel();
        $data = [
            'matkul'   => $this->request->getPost('matkul'),
            'hari'     => $this->request->getPost('hari'),
            'mulai'     => $this->request->getPost('mulai'),
            'selesai'     => $this->request->getPost('selesai'),
            'ruangan'  => $this->request->getPost('ruangan'),
            'id_user'  => $session->get('id_user'),
        ];
        $jadwalujianModel->save($data);
    
        return redirect()->to('/StudentPlanning');
    }
    
    public function get_jadwal_ujian($id)
    {
        $jadwalujianModel = new JadwalUjianModel();
        $data = $jadwalujianModel->find($id);
        return $this->response->setJSON($data);
    }
    
    public function update_jadwal_ujian()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
    
        $jadwalujianModel = new JadwalUjianModel();
        $id_jadwalujian = $this->request->getPost('id_jadwalujian');
    
        $data = [
            'matkul'   => $this->request->getPost('matkul'),
            'hari'     => $this->request->getPost('hari'),
            'mulai'    => $this->request->getPost('mulai'),
            'selesai'  => $this->request->getPost('selesai'),
            'ruangan'  => $this->request->getPost('ruangan'),
        ];
    
        $jadwalujianModel->update($id_jadwalujian, $data);
    
        return redirect()->to('/StudentPlanning');
    }
    
    

    public function delete_jadwal_ujian()
    {
        $id_jadwalujian = $this->request->getPost('id_jadwalujian');
        $jadwalujianModel =new JadwalUjianModel();
        $jadwalujianModel->delete($id_jadwalujian);
    
        return redirect()->to('/StudentPlanning');
    }

}

?>