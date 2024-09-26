<?php 
namespace App\Controllers;

use App\Models\BelajarModel;
use App\Models\CatatanMatkulModel;
use App\Models\MatkulModel;
use App\Models\UserModel;
use App\Models\JadwalUjianModel;
use App\Models\JadwalMatkulsModel;
use App\Models\KalenderModel;
use App\Models\MateriModel;
use App\Models\MeetingModel;
use App\Models\ProjectModel;
use App\Models\TimelinetugasModel;
use App\Models\TodolistgroupModel;
use App\Models\TodolistuserModel;
use App\Models\TugasModel;

use CodeIgniter\Controller;

class StudentPlanning extends BaseController {
    public function get_catatan_by_matkul($id_matkul)
{
    $catatanModel = new CatatanMatkulModel();
    $catatans = $catatanModel->where('id_matkul', $id_matkul)->findAll();

    return $this->response->setJSON(['catatans' => $catatans]);
}

    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $userModel = new UserModel();
        $userId = $session->get('id_user');
        $data['user'] = $userModel->find($userId);

        $jadwalmatkulsModel = new JadwalMatkulsModel();
        $data['jadwalmatkuls'] = $jadwalmatkulsModel->where('id_user', $userId)->orderBy('hari', 'DESC')->findAll();

        $jadwalujianModel = new JadwalUjianModel();
        $data['jadwalujians'] = $jadwalujianModel->where('id_user', $userId)->orderBy('hari', 'DESC')->findAll();

        $tugasModel = new TugasModel();
        $data['tugass'] = $tugasModel->where('id_user', $userId)->orderBy('id_tugas', 'DESC')->findAll();

        $belajarModel = new BelajarModel();
        $data['belajar'] = $belajarModel->where('id_user', $userId)->findAll();

        $todolistuser = new TodolistuserModel();
        $data['todolistuser'] = $todolistuser->where('id_user', $userId)->findAll();
        $data['todolistuserPriority'] = $todolistuser->where('id_user', $userId)->where('priority', true)->findAll();

        $matkulModel = new MatkulModel();
        $data['matkuls'] = $matkulModel->getMatkulsByUser($userId);

        $timelinetugas = new TimelinetugasModel();
        $data['timelinetugas'] = $timelinetugas->where('id_user', $userId)->findAll();

        $calender = new KalenderModel();
        $data['calender'] = $calender->where('id_user', $userId)->findAll();

        $todolistgroup = new TodolistgroupModel();
        $data['todolistgroup'] = $todolistgroup->where('id_user', $userId)->findAll();
        $data['todolistgroupPriority'] = $todolistgroup->where('id_user', $userId)->where('priority', true)->findAll();

        $projectModel = new ProjectModel();
        $data['projects'] = $projectModel->where('id_user', $userId)->findAll();

        $meetingModel = new MeetingModel();
        $data['meeting'] = $meetingModel->where('id_user', $userId)->findAll();

        // $catatanModel = new CatatanMatkulModel();
        // $data['catatans'] = $catatanModel->where('id_user', $userId)->findAll();

        return view('Pages/homepage', $data);
    }

    public function getMatkulDetails($id_matkul)
    {
        $matkulModel = new MatkulModel();
        $matkul = $matkulModel->find($id_matkul);

        $materiModel = new MateriModel();
        $materis = $materiModel->getMateriByIdMatkul($id_matkul);

        $tugasModel = new TugasModel();
        $tugass = $tugasModel->getTugasByIdMatkul($id_matkul);

        $catatanMatkulModel = new CatatanMatkulModel();
        $catatans = $catatanMatkulModel->getCatatanByIdMatkul($id_matkul);

        $data = [
            'matkul' => $matkul,
            'materis' => $materis,
            'tugass' => $tugass,
            'catatans' => $catatans,
        ];

        return $this->response->setJSON($data);
    }

    public function profile()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $userModel = new UserModel();
        $userId = $session->get('id_user');
        $data['user'] = $userModel->find($userId);

        return view('Pages/profile/profile', $data);
    }

    public function login()
    {
        helper(['form']);
        $data = [];
        echo view('pages/login', $data);
    }

    public function loginUser()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $data = $userModel->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            if ($password == $pass) {
                $ses_data = [
                    'id_user' => $data['id_user'],
                    'nama'    => $data['nama'],
                    'email'   => $data['email'],
                    'username'=> $data['username'],
                    'semester'=> $data['semester'],
                    'nim'     => $data['nim'],
                    'prodi'   => $data['prodi'],
                    'instansi'=> $data['instansi'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/StudentPlanning');
            } else {
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/');
            }
        } else {
            $session->setFlashdata('msg', 'Email tidak ditemukan');
            return redirect()->to('/');
        }
    }

    public function register()
    {
        helper(['form']);
        $data = [];
        echo view('pages/register', $data);
    }

    public function registerUser()
    {
        $userModel = new UserModel();
        $data = [
            'nama'     => $this->request->getPost('nama'),
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];
        $userModel->save($data);
        return redirect()->to('/');
    }

    public function updateProfile()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $userModel = new UserModel();
        $userId = $session->get('id_user');
        
        $data = [
            'nama'     => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'email'    => $this->request->getPost('email'),
            'semester' => $this->request->getPost('semester'),
            'nim'      => $this->request->getPost('nim'),
            'prodi'    => $this->request->getPost('prodi'),
            'instansi' => $this->request->getPost('instansi'),
        ];

        $userModel->update($userId, $data);

        return redirect()->to('/StudentPlanning')->with('message', 'Profile updated successfully');
    }

    public function updateProfilePicture()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $userModel = new UserModel();
        $userId = $session->get('id_user');
    
        // Cek jika ada file yang diunggah
        if($file = $this->request->getFile('profile_picture')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('uploads/', $newName);

                // Update path file di database
                $data = ['profile_picture' => $newName];
                $userModel->update($userId, $data);
            }
        }

        return redirect()->to('/StudentPlanning');
    }


    // public function detail_matkul($id_matkul)
    // {
    //     $matkulModel = new MatkulModel();
    //     $materiModel = new MateriModel();
    //     $tugasModel = new TugasModel();
    //     $matkul = $matkulModel->find($id_matkul);
    //     if (!$matkul) {
    //         return redirect()->to("/");
    //     }
    //     $materis = $materiModel->where('id_matkul', $id_matkul)->findAll();
    //     $tugass = $tugasModel->where('id_matkul', $id_matkul)->findAll();
    //     $data = [
    //         'matkul' => $matkul,
    //         'materis' => $materis,
    //         'tugass' => $tugass,
    //     ];

    //     return view('Pages/homepage', $data);
    // }
}
?>