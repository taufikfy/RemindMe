<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Auth
$routes->get('/', 'StudentPlanning::login');
$routes->post('/auth/loginUser', 'StudentPlanning::loginUser');
$routes->get('/register', 'StudentPlanning::register');
$routes->post('/auth/registerUser', 'StudentPlanning::registerUser');

//index
$routes->get('StudentPlanning', 'StudentPlanning::index');
$routes->get('StudentPlanning', 'StudentPlanning::pages');

//profile
$routes->get('StudentPlanning/profile', 'StudentPlanning::profile');
$routes->post('StudentPlanning/updateProfile', 'StudentPlanning::updateProfile');
$routes->post('StudentPlanning/updateProfilePicture', 'StudentPlanning::updateProfilePicture');

//jadwal matkul
$routes->post('StudentPlanning/input_jadwal_matkul', 'JadwalMatkulController::input_jadwal_matkul');
$routes->get('StudentPlanning/get_jadwal_matkul/(:num)', 'JadwalMatkulController::get_jadwal_matkul/$1');
$routes->post('StudentPlanning/update_jadwal_matkul', 'JadwalMatkulController::update_jadwal_matkul');
$routes->post('StudentPlanning/delete_jadwal_matkul', 'JadwalMatkulController::delete_jadwal_matkul');

//jadwal ujian
$routes->post('StudentPlanning/input_jadwal_ujian', 'JadwalUjianController::input_jadwal_ujian');
$routes->get('StudentPlanning/get_jadwal_ujian/(:num)', 'JadwalUjianController::get_jadwal_ujian/$1');
$routes->post('StudentPlanning/update_jadwal_ujian', 'JadwalUjianController::update_jadwal_ujian');
$routes->post('StudentPlanning/delete_jadwal_ujian', 'JadwalUjianController::delete_jadwal_ujian');

//tugas
$routes->post('StudentPlanning/input_tugas', 'TugasController::input_tugas');
$routes->get('StudentPlanning/get_tugas/(:num)', 'TugasController::get_tugas/$1');
$routes->post('StudentPlanning/update_tugas', 'TugasController::update_tugas');
$routes->post('StudentPlanning/delete_tugas', 'TugasController::delete_tugas');

//belajar
$routes->post('StudentPlanning/input_belajar', 'BelajarController::input_belajar');
$routes->get('StudentPlanning/get_belajar/(:num)', 'BelajarController::get_belajar/$1');
$routes->post('StudentPlanning/update_belajar', 'BelajarController::update_belajar');
$routes->post('StudentPlanning/delete_belajar', 'BelajarController::delete_belajar');

//to do list user
$routes->post('StudentPlanning/input_todolistuser', 'TodolistuserController::input_todolistuser');
$routes->get('StudentPlanning/get_todolistuser/(:num)', 'TodolistuserController::get_todolistuser/$1');
$routes->post('StudentPlanning/update_todolistuser', 'TodolistuserController::update_todolistuser');
$routes->post('StudentPlanning/update_priorityuser/(:num)', 'TodolistuserController::update_priorityuser/$1');
$routes->post('StudentPlanning/update_selesaiuser/(:num)', 'TodolistuserController::update_selesaiuser/$1');
$routes->post('StudentPlanning/delete_todolistuser', 'TodolistuserController::delete_todolistuser');

//matkul
$routes->post('StudentPlanning/input_matkul', 'MatkulController::input_matkul');
$routes->post('StudentPlanning/delete_matkul', 'MatkulController::delete_matkul');

//timeline tugas
$routes->post('StudentPlanning/input_timelinetugas', 'TimelinetugasController::input_timelinetugas');
$routes->get('StudentPlanning/get_timelinetugas/(:num)', 'TimelinetugasController::get_timelinetugas/$1');
$routes->post('StudentPlanning/update_timelinetugas', 'TimelinetugasController::update_timelinetugas');
$routes->post('StudentPlanning/delete_timelinetugas', 'TimelinetugasController::delete_timelinetugas');

//calender
$routes->get('StudentPlanning/getNotes', 'CalendarController::getNotes');
$routes->post('StudentPlanning/saveNote', 'CalendarController::saveNote');
$routes->post('StudentPlanning/deleteNote', 'CalendarController::deleteNote');

//to do list group
$routes->post('StudentPlanning/input_todolistgroup', 'TodolistgroupController::input_todolistgroup');
$routes->get('StudentPlanning/get_todolistgroup/(:num)', 'TodolistgroupController::get_todolistgroup/$1');
$routes->post('StudentPlanning/update_todolistgroup', 'TodolistgroupController::update_todolistgroup');
$routes->post('StudentPlanning/update_prioritygroup/(:num)', 'TodolistgroupController::update_prioritygroup/$1');
$routes->post('StudentPlanning/update_selesaigroup/(:num)', 'TodolistgroupController::update_selesaigroup/$1');
$routes->post('StudentPlanning/delete_todolistgroup', 'TodolistgroupController::delete_todolistgroup');

//project
$routes->post('StudentPlanning/input_project', 'ProjectController::input_project');
$routes->get('StudentPlanning/get_project/(:num)', 'ProjectController::get_project/$1');
$routes->post('StudentPlanning/update_project', 'ProjectController::update_project');
$routes->post('StudentPlanning/delete_project', 'ProjectController::delete_project');

//meeting
$routes->post('StudentPlanning/input_meeting', 'MeetingController::input_meeting');
$routes->get('StudentPlanning/get_meeting/(:num)', 'MeetingController::get_meeting/$1');
$routes->post('StudentPlanning/update_meeting', 'MeetingController::update_meeting');
$routes->post('StudentPlanning/delete_meeting', 'MeetingController::delete_meeting');

//catatan
$routes->post('StudentPlanning/input_catatan', 'CatatanController::input_catatan');
$routes->get('StudentPlanning/get_catatan/(:num)', 'CatatanController::get_catatan/$1');
$routes->post('StudentPlanning/update_catatan', 'CatatanController::update_catatan');
$routes->post('StudentPlanning/delete_catatan', 'CatatanController::delete_catatan');
$routes->get('/StudentPlanning/get_catatan_by_matkul/(:num)', 'StudentPlanning::get_catatan_by_matkul/$1');


//detail matkul
$routes->post('StudentPlanning/input_materi', 'DetailmatkulController::input_materi');
$routes->delete('StudentPlanning/resetMateri/(:num)', 'DetailmatkulController::resetMateri/$1');
$routes->get('/detailmatkul/show/(:num)', 'DetailmatkulController::show/$1');
$routes->get('StudentPlanning/getMatkulDetails/(:num)', 'DetailmatkulController::getMatkulDetails/$1');

//message
$routes->post('StudentPlanning/input_message', 'MessageController::input_message');

$routes->get('sidebar/(:any)', 'SidebarController::index/$1');


