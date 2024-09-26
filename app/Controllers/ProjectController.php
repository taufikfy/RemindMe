<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use App\Controllers\BaseController;

class ProjectController extends BaseController
{
    public function input_project()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $projectModel = new ProjectModel();
        $data = [
            'project'  => $this->request->getPost('project'),
            'status'   => $this->request->getPost('status'),
            'deadline' => $this->request->getPost('deadline'),
            'id_user'  => $session->get('id_user'),
        ];

        $projectModel->save($data);

        return redirect()->to('/StudentPlanning');
    }

    public function get_project($id)
    {
        
        $projectModel = new ProjectModel();
        $data = $projectModel->find($id);
        return $this->response->setJSON($data);
    }

    public function update_project()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $projectModel = new ProjectModel();
        $id_project = $this->request->getPost('id_project');

        $data = [
            'project'  => $this->request->getPost('project'),
            'status'   => $this->request->getPost('status'),
            'deadline' => $this->request->getPost('deadline'),
        ];

        $projectModel->update($id_project, $data);

        return redirect()->to('/StudentPlanning');
    }

    public function delete_project()
    {
        $id_project = $this->request->getPost('id_project');
        $projectModel = new ProjectModel();
        $projectModel->delete($id_project);

        return redirect()->to('/StudentPlanning');
    }
}
?>
