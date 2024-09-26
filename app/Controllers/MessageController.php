<?php
namespace App\Controllers;
use App\Models\MessageModel;

use App\Controllers\BaseController;

class MessageController extends BaseController{


    public function input_message()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
    
        $messageModel= new MessageModel();
        $data = [
            'message'     => $this->request->getPost('message'),
            'id_user'  => $session->get('id_user'),
        ];
        $messageModel->save($data);
    
        return redirect()->to('/StudentPlanning');
    }

}