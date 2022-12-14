<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Pengumuman_model', 'pengumuman');
		$this->load->model('Berita_model', 'berita');
		$this->load->model('Sejarah_model', 'sejarah');
		$this->load->model('Visimisi_model', 'visimisi');
		$this->load->model('Struktur_model', 'struktur');
		$this->load->model('Foto_model', 'foto');
		$this->load->model('Pelayanan_model', 'pelayanan');
		$this->load->model('Dokumen_model', 'dokumen');
		$this->load->model('Kontak_model', 'kontak');
		$this->load->model('Aparatur_model', 'aparatur');
		$this->load->model('StatistikJekel_model', 'sjkl');
		$this->load->model('StatistikUmur_model', 'umur');
		$this->load->model('StatistikPerkawinan_model', 'kawin');
		$this->load->model('Admin_model', 'admin');
		$this->load->model('Agenda_model', 'agenda');
	}
	
	public function index()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('menu-admin/dashboard.php', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('landing/berita.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function detail($id)
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita3'] = $this->berita->getBeritaById($id);
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$data['berita2'] = $this->berita->getBeritaRandom();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('landing/detail_berita.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function sejarah()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$data['sejarah'] = $this->sejarah->getAllSejarah();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-profil/sejarah.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function visimisi()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$data['visimisi'] = $this->visimisi->getAllVisiMisi();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-profil/visimisi.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function struktur()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$data['struktur'] = $this->struktur->getAllStruktur();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-profil/struktur.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function foto()
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
            $this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
            $data['foto'] = $this->foto->getAllFoto();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
            $this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
            $this->load->view('menu-galeri/foto.php', $data);
			$this->load->view('template/panel.php');
            $this->load->view('template/footer.php');
        }
    }

	public function pelayanan()
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
            $this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
            $data['pelayanan'] = $this->pelayanan->getAllPelayanan();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
            $this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
            $this->load->view('menu-pelayanan/pelayanan.php', $data);
			$this->load->view('template/panel.php');
            $this->load->view('template/footer.php');
        }
    }

	public function detail_layanan($id)
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
            $this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
            $data['pelayanan'] = $this->pelayanan->getPelayananById($id);
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
            $this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
            $this->load->view('menu-pelayanan/detail.php', $data);
			$this->load->view('template/panel.php');
            $this->load->view('template/footer.php');
        }
    }

	public function dokumen()
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
			$data['keysearch'] = "";
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-informasi/dokumen.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
    }

	public function cari()
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
			$data['keysearch'] = $this->input->post('cari');
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-informasi/dokumen.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
    }

	public function jekel()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-statistik/jekel.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function umur()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-statistik/umur.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

	public function perkawinan()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		if ($this->session->userdata('username') != "") {
			$data['kontak'] = $this->kontak->getAllKontak();
			$data['jmlkontak'] = $this->kontak->getJmlKontak();
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$data['aparatur'] = $this->aparatur->getAllAparatur();
			$data['statistikjekel'] = $this->sjkl->getAllStatistikJekel();
			$data['statistikumur'] = $this->umur->getAllStatistikUmur();
			$data['statistikperkawinan'] = $this->kawin->getAllStatistikPerkawinan();
			$data['agenda'] = $this->agenda->getLimitAgenda();
			$this->load->view('template/header.php', $data);
			$this->load->view('template/news.php');
			$this->load->view('menu-statistik/perkawinan.php', $data);
			$this->load->view('template/panel.php');
			$this->load->view('template/footer.php');
		}
	}

}
