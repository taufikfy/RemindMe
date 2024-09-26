<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MeetingModel;

class MeetingController extends BaseController{


    public function input_meeting()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
    
        $meetingModel = new MeetingModel();
        $data = [
            'date'   => $this->request->getPost('date'),
            'time'   => $this->request->getPost('time'),
            'activity'     => $this->request->getPost('activity'),
            'notes'     => $this->request->getPost('notes'),
            'id_user'  => $session->get('id_user'),
        ];
        $meetingModel->save($data);
    
        return redirect()->to('/StudentPlanning');
    }


    public function get_meeting($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $meetingModel = new MeetingModel();
        $belajar = $meetingModel->find($id);
    
        return $this->response->setJSON($belajar);
    }
    
    public function update_meeting()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $meetingModel = new MeetingModel();
        $id_belajar = $this->request->getPost('id_meeting');
    
        $data = [
            'date'   => $this->request->getPost('date'),
            'time'   => $this->request->getPost('time'),
            'activity'     => $this->request->getPost('activity'),
            'notes'     => $this->request->getPost('notes'),
        ];
    
        $meetingModel->update($id_belajar, $data);
    
        return redirect()->to('/StudentPlanning');
    }
    
    public function delete_meeting()
    {
        $id_belajar = $this->request->getPost('id_meeting');
        $meetingModel = new MeetingModel();
        $meetingModel->delete($id_belajar);
    
        return redirect()->to('/StudentPlanning');
    }

}