<?php

namespace App\Controllers;

use App\Models\CatatanMatkulModel;

class CatatanController extends BaseController
{

    public function input_catatan()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $catatanModel = new CatatanMatkulModel();
        $data = [
            'catatan' => $this->request->getPost('catatan'),
            'id_user' => $session->get('id_user'),
            'id_matkul' => $this->request->getPost('id_matkul')
        ];
        $catatanModel->save($data);
    
        return redirect()->to('/StudentPlanning');
    }

    public function get_catatan($id)
    {
        $catatanModel = new CatatanMatkulModel();
        $data = $catatanModel->find($id);
        return $this->response->setJSON($data);
    }
    
    
    public function update_catatan()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $catatanModel = new CatatanMatkulModel();
        $id_catatan = $this->request->getPost('id_catatan');
    
        $data = [
            'catatan' => $this->request->getPost('catatan'),
        ];
    
        $catatanModel->update($id_catatan, $data);
    
        return redirect()->to('/StudentPlanning');
    }
    
    public function delete_catatan()
    {
        $id_catatan = $this->request->getPost('id_catatan');
        $catatanModel = new CatatanMatkulModel();
        $catatanModel->delete($id_catatan);
    
        return redirect()->to('/StudentPlanning');
    }
}
