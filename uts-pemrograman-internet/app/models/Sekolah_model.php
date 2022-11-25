<?php 

  class Sekolah_model {
    private $table = 'profil_sekolah';
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getAllData()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSekolahByNpsn($npsn)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE npsn=:npsn');
        $this->db->bind('npsn', $npsn);
        return $this->db->single();
    }

    public function tambahDataSekolah($data)
    {
      $query = 'INSERT INTO profil_sekolah
                VALUES
                (:npsn, :status, :bentuk_pendidikan, :nama_sekolah, :sk_pendirian, :tgl_pendirian, 
                :sk_izin_operasional, :tgl_izin_operasional, :alamat, :rt, :rw, :dusun, :desa, :kecamatan, :kabupaten, :provinsi, :kode_pos)';

                $this->db->query($query);
                $this->db->bind('npsn',$data['npsn']);
                $this->db->bind('status',$data['status']);
                $this->db->bind('bentuk_pendidikan',$data['bentuk_pendidikan']);
                $this->db->bind('nama_sekolah',$data['nama_sekolah']);
                $this->db->bind('sk_pendirian',$data['sk_pendirian']);
                $this->db->bind('tgl_pendirian',$data['tgl_pendirian']);
                $this->db->bind('sk_izin_operasional',$data['sk_izin_operasional']);
                $this->db->bind('tgl_izin_operasional',$data['tgl_izin_operasional']);
                $this->db->bind('alamat',$data['alamat']);
                $this->db->bind('rt',$data['rt']);
                $this->db->bind('rw',$data['rw']);
                $this->db->bind('dusun',$data['dusun']);
                $this->db->bind('desa',$data['desa']);
                $this->db->bind('kecamatan',$data['kecamatan']);
                $this->db->bind('kabupaten',$data['kabupaten']);
                $this->db->bind('provinsi',$data['provinsi']);
                $this->db->bind('kode_pos',$data['kode_pos']);
            
      $this->db->execute();
      return $this->db->rowCount();
    }

    public function hapusDataSekolah($npsn)
    {
      $query = "DELETE FROM " . $this->table ." WHERE npsn= :npsn";

      $this->db->query($query);
      $this->db->bind('npsn',$npsn);
      $this->db->execute();

      return $this->db->rowCount();
    }
    public function updateData($data)
    {
      $query = "UPDATE profil_sekolah  SET
                npsn= :npsn,
                status= :status,
                bentuk_pendidikan= :bentuk_pendidikan,
                nama_sekolah= :nama_sekolah,
                sk_pendirian= :sk_pendirian,
                tgl_pendirian= :tgl_pendirian,
                sk_izin_operasional= :sk_izin_operasional,
                tgl_izin_operasional= :tgl_izin_operasional,
                alamat= :alamat,
                rt= :rt,
                rw= :rw,
                dusun= :dusun,
                desa= :desa,
                kecamatan= :kecamatan,
                kabupaten= :kabupaten,
                provinsi= :provinsi,
                kode_pos= :kode_pos
                WHERE npsn= :npsn
                ";
            $this->db->query($query);
            $this->db->bind('npsn', $data['npsn']);
            $this->db->bind('status', $data['status']);
            $this->db->bind('bentuk_pendidikan', $data['bentuk_pendidikan']);
            $this->db->bind('nama_sekolah', $data['nama_sekolah']);
            $this->db->bind('sk_pendirian', $data['sk_pendirian']);
            $this->db->bind('tgl_pendirian', $data['tgl_pendirian']);
            $this->db->bind('sk_izin_operasional', $data['sk_izin_operasional']);
            $this->db->bind('tgl_izin_operasional', $data['tgl_izin_operasional']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->bind('rt', $data['rt']);
            $this->db->bind('rw', $data['rw']);
            $this->db->bind('dusun', $data['dusun']);
            $this->db->bind('desa', $data['desa']);
            $this->db->bind('kecamatan', $data['kecamatan']);
            $this->db->bind('kabupaten', $data['kabupaten']);
            $this->db->bind('provinsi', $data['provinsi']);
            $this->db->bind('kode_pos', $data['kode_pos']);
            // $this->db->bind('npsn', $data['npsn']);
            $this->db->execute();
    
            return $this->db->rowCount();
    }

    public function searchData(){
      // var_dump($_POST);
      $keyword = $_POST["keyword"];
      $query = "SELECT * FROM profil_sekolah WHERE nama_sekolah LIKE :keyword";
      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");
      return $this->db->resultSet();
    }
  }
?>