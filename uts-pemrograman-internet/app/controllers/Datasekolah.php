<?php 

class Datasekolah extends Controller{
  public function index(){
    $data['title'] = "Data Sekolah";  
    $data['sekolah'] = $this->model('Sekolah_model')->GetAllData();
    $no = 1;
    $this->view('templates/header',$data);
    $this-> view('datasekolah/index',$data,$no);
    $this->view('templates/footer',$data);
  }

  public function detail($npsn){
    $data ['title'] = 'Detail Sekolah';
    $data['sekolah'] = $this->model('Sekolah_model')->getSekolahByNpsn($npsn);
    $this->view('templates/header',$data);
    $this->view('datasekolah/detail',$data);
    $this->view('templates/footer');
  }

  public function updateviadetail($npsn){
    $data ['title'] = 'Detail Sekolah';
    $data['sekolah'] = $this->model('Sekolah_model')->getSekolahByNpsn($npsn);
    $this->view('templates/header',$data);
    $this->view('datasekolah/update',$data);
    $this->view('templates/footer');
  }
  public function tambah(){
    // var_dump($_POST);
    if($this->model('Sekolah_model')->tambahDataSekolah($_POST)>0){
      Flasher::setFlash('Berhasil','Ditambahkan','success');
      header('Location:' . BASEURL . '/datasekolah' );
      exit;
    }  else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/datasekolah');
      exit;
    }
  }

  public function hapus($npsn){
    if($this->model('Sekolah_model')->hapusDataSekolah($npsn)>0){
      Flasher::setFlash('Berhasil','Dihapus','success');
      header('Location:' .BASEURL. '/datasekolah');
      exit;
    }
  }

  public function getupdate()
  {
    echo json_encode($this->model('Sekolah_model')->getSekolahByNpsn($_POST['npsn']));
  }


  public function update()
  {
    if ($this->model('Sekolah_model')->updateData($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diperbarui', 'success');
      header('Location: ' . BASEURL . '/datasekolah');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diperbarui', 'danger');
      header('Location: ' . BASEURL . '/datasekolah');
      exit;
    }
  }
  public function updatedetail()
  {
    if ($this->model('Sekolah_model')->updateData($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diperbarui', 'success');
      header('Location: ' . BASEURL . '/datasekolah');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diperbarui', 'danger');
      header('Location: ' . BASEURL . '/datasekolah');
      exit;
    }
  }

  public function search(){
    $data['title'] = "Data Sekolah";  
    $data['judul Halaman'] = "Hasil Pencarian";
    $data['sekolah'] = $this->model('Sekolah_model')->searchData();
    $this->view('templates/header',$data);
    $this-> view('datasekolah/index',$data);
    $this->view('templates/footer',$data);

    if($this->model('Sekolah_model')->searchData()<0){
      Flasher::setFlash('gagal', 'diperbarui', 'danger');
    }
  }
}


?>