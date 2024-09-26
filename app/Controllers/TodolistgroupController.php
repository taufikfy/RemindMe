<?php 
namespace App\Controllers;

use App\Models\TodolistgroupModel;
use App\Models\TugasModel;

class TodolistgroupController extends BaseController{

    public function input_todolistgroup()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
    
        $todolistgroupModel = new TodolistgroupModel();
        $data = [
            'catatan'   => $this->request->getPost('catatan'),
            'keterangan'   => $this->request->getPost('keterangan'),
            'priority'    => $this->request->getPost('priority'),
            'id_user'     => $session->get('id_user'),
        ];
        $todolistgroupModel->save($data);
    
        return redirect()->to('/StudentPlanning');
    }
    
    public function get_todolistgroup($id)
    {
        $todolistgroupModel = new TodolistgroupModel();
        $data = $todolistgroupModel->find($id);
        return $this->response->setJSON($data);
    }
    
    public function update_todolistgroup()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
    
        $todolistgroupModel = new TodolistgroupModel();
        $id_todolistgroup= $this->request->getPost('id_todolistgroup');
    
        $data = [
            'catatan'   => $this->request->getPost('catatan'),
            'keterangan'   => $this->request->getPost('keterangan'),
        ];
    
        $todolistgroupModel->update($id_todolistgroup, $data);
    
        return redirect()->to('/StudentPlanning');
    }

    public function delete_todolistgroup()
    {
        $id_todolistgroup = $this->request->getPost('id_todolistgroup');
        $todolistgroupModel = new TodolistgroupModel();
        $todolistgroupModel->delete($id_todolistgroup);
    
        return redirect()->to('/StudentPlanning');
    }

    public function update_prioritygroup($id)
    {
        $todolistgroupModel = new TodolistgroupModel();
        $data = [
            'priority' => $this->request->getJSON('priority'),
        ];
        $todolistgroupModel->update($id, $data);
        return $this->response->setJSON(['success' => true]);
    }
    
    public function update_selesaigroup($id)
    {
        $todolistgroupModel = new TodolistgroupModel();
        $data = [
            'selesai' => $this->request->getJSON('selesai'),
        ];
        $todolistgroupModel->update($id, $data);
        return $this->response->setJSON(['success' => true]);
    }
    
    
}