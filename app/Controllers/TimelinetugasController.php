<?php

namespace App\Controllers;

use App\Models\TimelinetugasModel;
use App\Controllers\BaseController;

class TimelinetugasController extends BaseController{

    public function input_timelinetugas()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $timelinetugasModel = new TimelinetugasModel;
        $data = [
            'matkul'   => $this->request->getPost('matkul'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
            'deadline'  => $this->request->getPost('deadline'),
            'id_user'  => $session->get('id_user'),
        ];
        $timelinetugasModel->save($data);
    
        return redirect()->to('/StudentPlanning');
    }
    
    public function get_timelinetugas($id)
    {
        $timelinetugasModel = new TimelinetugasModel;
        $data = $timelinetugasModel->find($id);
        return $this->response->setJSON($data);
    }
    
    public function update_timelinetugas()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $timelinetugasModel = new TimelinetugasModel;
        $id_timelinetugas = $this->request->getPost('id_timelinetugas');
    
        $data = [
            'matkul'   => $this->request->getPost('matkul'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'deadline'  => $this->request->getPost('deadline'),
        ];
    
        $timelinetugasModel->update($id_timelinetugas, $data);
    
        return redirect()->to('/StudentPlanning');
    }
    
    

    public function delete_timelinetugas()
    {
        $id_timelinetugas = $this->request->getPost('id_timelinetugas');
        $timelinetugasModel =new TimelinetugasModel;
        $timelinetugasModel->delete($id_timelinetugas);
    
        return redirect()->to('/StudentPlanning');
    }

}

?>