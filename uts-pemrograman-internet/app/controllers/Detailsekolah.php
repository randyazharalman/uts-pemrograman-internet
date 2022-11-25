<?php 

  class Detailsekolah extends Controller{

    public function index(){
      $data['title'] = "Detail Sekolah";  
      $data['sekolah'] = $this->model('Sekolah_model')->GetAllData();
      $no = 0;
      $this->view('templates/header',$data);
      $this-> view('detail/index',$data,$no);
      $this->view('templates/footer',$data);
    }
    
  public function getupdate()
  {
    echo json_encode($this->model('Sekolah_model')->getSekolahByNpsn($_POST['npsn']));
  }

    public function updateViaDetail()
    {
      // var_dump($_POST);
      if ($this->model('Sekolah_model')->updateData() > 0) {
        Flasher::setFlash('berhasil', 'diperbarui', 'success');
        header('Location: ' . BASEURL . '/detail');
        exit;
      } else {
        Flasher::setFlash('gagal', 'diperbarui', 'danger');
        header('Location: ' . BASEURL . '/detail');
        exit;
      }
    }


  }


?>