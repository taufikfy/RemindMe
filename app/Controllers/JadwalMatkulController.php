<?php
namespace App\Controllers;

use App\Models\JadwalMatkulsModel;
use App\Controllers\BaseController;

class JadwalMatkulController extends BaseController{


    public function input_jadwal_matkul()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
    
        $jadwalmatkulsModel = new JadwalMatkulsModel();
        $data = [
            'matkul'   => $this->request->getPost('matkul'),
            'semester'   => $this->request->getPost('semester'),
            'hari'     => $this->request->getPost('hari'),
            'mulai'     => $this->request->getPost('mulai'),
            'selesai'     => $this->request->getPost('selesai'),
            'ruangan'  => $this->request->getPost('ruangan'),
            'id_user'  => $session->get('id_user'),
        ];
        $jadwalmatkulsModel->save($data);
    
        return redirect()->to('/StudentPlanning');
    }


    public function get_jadwal_matkul($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
    
        $jadwalmatkulsModel = new JadwalMatkulsModel();
        $jadwal = $jadwalmatkulsModel->find($id);
    
        return $this->response->setJSON($jadwal);
    }
    
    public function update_jadwal_matkul()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
    
        $jadwalmatkulsModel = new JadwalMatkulsModel();
        $id_jadwalmatkul = $this->request->getPost('id_jadwalmatkul');
    
        $data = [
            'matkul'    => $this->request->getPost('matkul'),
            'semester'  => $this->request->getPost('semester'),
            'hari'      => $this->request->getPost('hari'),
            'mulai'     => $this->request->getPost('mulai'),
            'selesai'   => $this->request->getPost('selesai'),
            'ruangan'   => $this->request->getPost('ruangan'),
        ];
    
        $jadwalmatkulsModel->update($id_jadwalmatkul, $data);
    
        return redirect()->to('/StudentPlanning');
    }
    
    public function delete_jadwal_matkul()
    {
        $id_matkul = $this->request->getPost('id_jadwalmatkul');
        $matkulsModel = new JadwalMatkulsModel();
        $matkulsModel->delete($id_matkul);
    
        return redirect()->to('/StudentPlanning');
    }

}