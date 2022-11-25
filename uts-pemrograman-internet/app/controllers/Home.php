<?php 

  class Home extends Controller{
    public function index()
    {
      $data['title'] = "Home"; 
      $this->view('templates/header',$data);
      $this-> view('home/index',$data);
      $this->view('templates/footer',$data);
    }

    public function getupdate()
  {

    echo json_encode($this->model('Sekolah_model')->getDataByNpsn($_POST['npsn']));
  }

  public function update()
  {
    if ($this->model('Sekolah_model')->updateData($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diupdate', 'success');
      header('Location: ' . BASEURL . '/datasekolah');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/datasekolah');
      exit;
    }
  }

  }




?>