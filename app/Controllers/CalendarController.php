<?php

namespace App\Controllers;

use App\Models\KalenderModel;
use CodeIgniter\Controller;

class CalendarController extends BaseController
{
    public function getNotes()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $year = $this->request->getGet('year');
        $month = $this->request->getGet('month');

        $kalenderModel = new KalenderModel();
        $userId = $session->get('id_user');
        $notes = $kalenderModel->where('id_user', $userId)
                               ->where('YEAR(tanggal)', $year)
                               ->where('MONTH(tanggal)', $month + 1)
                               ->findAll();

        $notesArray = [];
        foreach ($notes as $note) {
            $notesArray[$note['tanggal']] = $note['catatan'];
        }

        return $this->response->setJSON($notesArray);
    }

    public function saveNote()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data = $this->request->getJSON(true);
        $date = $data['date'];
        $note = $data['note'];
        $userId = $session->get('id_user');

        $kalenderModel = new KalenderModel();
        $existingNote = $kalenderModel->where('id_user', $userId)->where('tanggal', $date)->first();

        if ($existingNote) {
            $existingNote['catatan'] = $note;
            $kalenderModel->save($existingNote);
        } else {
            $kalenderModel->save([
                'id_user' => $userId,
                'tanggal' => $date,
                'catatan' => $note
            ]);
        }

        return $this->response->setStatusCode(200);
    }

    public function deleteNote()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data = $this->request->getJSON(true);
        $date = $data['date'];
        $userId = $session->get('id_user');

        $kalenderModel = new KalenderModel();
        $kalenderModel->where('id_user', $userId)->where('tanggal', $date)->delete();

        return $this->response->setStatusCode(200);
    }
}
