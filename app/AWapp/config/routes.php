<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//---------------------HOME
$route['login'] = 'home/login';
$route['valid-login'] = 'home/valid_login_users';
//---------------------USER ADMIN
$route['users/profil'] = 'users';
$route['users/logout'] = 'users/logout';

$route['kecamatan'] = 'users/kecamatan';
$route['add_kecamatan'] = 'users/add_kecamatan';
$route['kecamatan/(:num)'] = 'users/edit_kecamatan/$1';
$route['post_edit_kecamatan'] = 'users/post_edit_kecamatan';

$route['kelurahan'] = 'users/kelurahan';
$route['add_kelurahan'] = 'users/add_kelurahan';
$route['kelurahan/(:num)'] = 'users/edit_kelurahan/$1';
$route['post_edit_kelurahan'] = 'users/post_edit_kelurahan';

$route['puskesmas'] = 'users/puskesmas';
$route['add_puskesmas'] = 'users/add_puskesmas';
$route['puskesmas/(:num)'] = 'users/edit_puskesmas/$1';
$route['post_edit_puskesmas'] = 'users/post_edit_puskesmas';

$route['balita'] = 'users/balita';
$route['add_balita'] = 'users/add_balita';
$route['balita/(:num)'] = 'users/detail_balita/$1';
$route['balita/grafik/(:num)'] = 'users/grafik_balita/$1';
$route['balita/edit/(:num)'] = 'users/edit_balita/$1';
$route['post_edit_balita'] = 'users/post_edit_balita';
$route['delete-balita'] = 'users/delete_balita';

$route['posyandu'] = 'users/posyandu';
$route['add_posyandu'] = 'users/add_posyandu';
$route['posyandu/(:num)'] = 'users/edit_posyandu/$1';
$route['post_edit_posyandu'] = 'users/post_edit_posyandu';

$route['jadwal'] = 'users/jadwal';
$route['add_jadwal'] = 'users/add_jadwal';
$route['jadwal/(:num)'] = 'users/edit_jadwal/$1';
$route['post_edit_jadwal'] = 'users/post_edit_jadwal';
$route['delete-jadwal'] = 'users/delete_jadwal';

$route['pengukuran'] = 'users/pengukuran';
$route['add_pengukuran'] = 'users/add_pengukuran';
$route['pengukuran/(:num)'] = 'users/detail_pengukuran/$1';
$route['pengukuran/edit/(:num)'] = 'users/edit_pengukuran/$1';
$route['post_edit_pengukuran'] = 'users/post_edit_pengukuran';
$route['delete-pengukuran'] = 'users/delete_pengukuran';

$route['kader'] = 'users/kader';
$route['add_kader'] = 'users/add_kader';
$route['kader/(:num)'] = 'users/edit_kader/$1';
$route['post_edit_kader'] = 'users/post_edit_kader';

//---------------------Laporan
$route['list_kelurahan'] = 'users/getKelurahan';
$route['list_posyandu'] = 'users/getPosyandu';
$route['rekap_pb'] = 'users/rekap_pb';
$route['rekap_pb_filter'] = 'users/loadDataTableRekapPB';
$route['grafik_pb'] = 'users/grafik_pb';
$route['resume_kp'] = 'users/resume_kp';
$route['resume_kp_filter'] = 'users/loadDataTableResumeKP';
$route['persediaan_bahan'] = 'users/persediaan_bahan';
$route['penyuluhan'] = 'users/penyuluhan';
$route['rekap_penyuluhan_filter'] = 'users/loadDataTablePenyuluhan';
$route['persediaan'] = 'users/persediaan';
$route['rekap_persediaan_filter'] = 'users/loadDataTablePersediaan';

//---------------------Jumlah Balita
$route['jb_ukur_bulan_ini'] = 'users/jb_ukur_bulan_ini';
$route['jb_kms'] = 'users/jb_kms';
$route['jb_naik_bb'] = 'users/jb_naik_bb';
$route['jb_tidak_naik_bb'] = 'users/jb_tidak_naik_bb';
$route['jb_absen_bulan_lalu'] = 'users/jb_absen_bulan_lalu';
$route['jb_pertama'] = 'users/jb_pertama';
$route['jb_ditimbang'] = 'users/jb_ditimbang';
$route['jb_absen_bulan_ini'] = 'users/jb_absen_bulan_ini';
$route['jb_vitamin'] = 'users/jb_vitamin';
$route['jb_asi_eksklusif'] = 'users/jb_asi_eksklusif';
$route['jb_lulus_asi_eksklusif'] = 'users/jb_lulus_asi_eksklusif';
$route['jb_gakin'] = 'users/jb_gakin';
$route['jb_gizi'] = 'users/jb_gizi';
$route['jb_status_gizi'] = 'users/jb_status_gizi';
$route['jb_gizi_buruk'] = 'users/jb_gizi_buruk';
$route['jb_oralit'] = 'users/jb_oralit';
$route['jb_kematian'] = 'users/jb_kematian';
$route['add_kematian'] = 'users/add_kematian';
$route['add_timbang_bln_ini'] = 'users/add_timbang_bln_ini';




//---------------------PUSKESMAS
$route['ipuskesmas'] = 'puskesmas';
$route['ipuskesmas/logout'] = 'puskesmas/logout';
$route['ipuskesmas/puskesmas'] = 'puskesmas/puskesmas';
$route['ipuskesmas/balita'] = 'puskesmas/balita';
$route['ipuskesmas/posyandu'] = 'puskesmas/posyandu';
$route['ipuskesmas/jadwal'] = 'puskesmas/jadwal';
$route['ipuskesmas/pengukuran'] = 'puskesmas/pengukuran';
$route['ipuskesmas/kader'] = 'puskesmas/kader';
//---------------------Laporan
$route['ipuskesmas/list_kelurahan'] = 'puskesmas/getKelurahan';
$route['ipuskesmas/list_posyandu'] = 'puskesmas/getPosyandu';
$route['ipuskesmas/rekap_pb'] = 'puskesmas/rekap_pb';
$route['ipuskesmas/rekap_pb_filter'] = 'puskesmas/loadDataTableRekapPB';
$route['ipuskesmas/resume_kp'] = 'puskesmas/resume_kp';
$route['ipuskesmas/resume_kp_filter'] = 'puskesmas/loadDataTableResumeKP';
//---------------------POSYANDU
$route['iposyandu'] = 'posyandu';
$route['iposyandu/logout'] = 'posyandu/logout';
$route['iposyandu/puskesmas'] = 'posyandu/puskesmas';
$route['iposyandu/balita'] = 'posyandu/balita';
$route['iposyandu/posyandu'] = 'posyandu/posyandu';
$route['iposyandu/jadwal'] = 'posyandu/jadwal';
$route['iposyandu/pengukuran'] = 'posyandu/pengukuran';
$route['iposyandu/kader'] = 'posyandu/kader';
//---------------------Laporan
$route['iposyandu/list_kelurahan'] = 'posyandu/getKelurahan';
$route['iposyandu/list_posyandu'] = 'posyandu/getPosyandu';
$route['iposyandu/rekap_pb'] = 'posyandu/rekap_pb';
$route['iposyandu/rekap_pb_filter'] = 'posyandu/loadDataTableRekapPB';
$route['iposyandu/resume_kp'] = 'posyandu/resume_kp';
$route['iposyandu/resume_kp_filter'] = 'posyandu/loadDataTableResumeKP';

//----------------PMT Pemulihan
$route['pemulihan'] = 'users/pemulihan';
$route['pemulihan/(:num)'] = 'users/detail_pemulihan/$1';