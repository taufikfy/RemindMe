<?php 
namespace App\Controllers;

use App\Models\TodolistuserModel;
use App\Models\TugasModel;

class TodolistuserController extends BaseController{

    public function input_todolistuser()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
    
        $todolistuserModel = new TodolistuserModel();
        $data = [
            'catatan'   => $this->request->getPost('catatan'),
            'keterangan'   => $this->request->getPost('keterangan'),
            'priority'    => $this->request->getPost('priorityUser'),
            'id_user'     => $session->get('id_user'),
        ];
        $todolistuserModel->save($data);
    
        return redirect()->to('/StudentPlanning');
    }
    
    public function get_todolistuser($id)
    {
        $todolistuserModel = new TodolistuserModel();
        $data = $todolistuserModel->find($id);
        return $this->response->setJSON($data);
    }
    
    public function update_todolistuser()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $todolistuserModel = new TodolistuserModel();
        $id_todolistuser= $this->request->getPost('id_todolistuser');
    
        $data = [
            'catatan'   => $this->request->getPost('catatan'),
            'keterangan'   => $this->request->getPost('keterangan'),
        ];
    
        $todolistuserModel->update($id_todolistuser, $data);
    
        return redirect()->to('/StudentPlanning');
    }

    public function delete_todolistuser()
    {
        $id_todolistuser = $this->request->getPost('id_todolistuser');
        $todolistuserModel = new TodolistuserModel();
        $todolistuserModel->delete($id_todolistuser);
    
        return redirect()->to('/StudentPlanning');
    }

    public function update_priorityuser($id)
    {
        $todolistuserModel = new TodolistuserModel();
        $data = [
            'priority' => $this->request->getJSON('priorityUser'),
        ];
        $todolistuserModel->update($id, $data);
        return $this->response->setJSON(['success' => true]);
    }
    
    public function update_selesaiuser($id)
    {
        $todolistuserModel = new TodolistuserModel();
        $data = [
            'selesai' => $this->request->getJSON('selesaiUser'),
        ];
        $todolistuserModel->update($id, $data);
        return $this->response->setJSON(['success' => true]);
    }
    
    
}