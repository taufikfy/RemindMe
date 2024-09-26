<?php
namespace App\Controllers;

use App\Models\BelajarModel;
use App\Controllers\BaseController;

class BelajarController extends BaseController{


    public function input_belajar()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
    
        $belajarModel= new BelajarModel();
        $data = [
            'date'   => $this->request->getPost('date'),
            'time'   => $this->request->getPost('time'),
            'activity'     => $this->request->getPost('activity'),
            'notes'     => $this->request->getPost('notes'),
            'id_user'  => $session->get('id_user'),
        ];
        $belajarModel->save($data);
    
        return redirect()->to('/StudentPlanning');
    }


    public function get_belajar($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $belajarModel = new BelajarModel();
        $belajar = $belajarModel->find($id);
    
        return $this->response->setJSON($belajar);
    }
    
    public function update_belajar()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $belajarModel = new BelajarModel();
        $id_belajar = $this->request->getPost('id_belajar');
    
        $data = [
            'date'   => $this->request->getPost('date'),
            'time'   => $this->request->getPost('time'),
            'activity'     => $this->request->getPost('activity'),
            'notes'     => $this->request->getPost('notes'),
        ];
    
        $belajarModel->update($id_belajar, $data);
    
        return redirect()->to('/StudentPlanning');
    }
    
    public function delete_belajar()
    {
        $id_belajar = $this->request->getPost('id_belajar');
        $belajarModel = new BelajarModel();
        $belajarModel->delete($id_belajar);
    
        return redirect()->to('/StudentPlanning');
    }

}