<div class="container mt-4">

  <h5 class="card-title text-center fw-bold mb-3">Update Sekolah <?= $data['sekolah']['nama_sekolah']; ?></h5>
  <?php Flasher::flash(); ?>

  <div class="container ">
    <form action="<?= BASEURL; ?>datasekolah/updatedetail" method="post" class="row g-3">
      <div class="col-md-6">
        <label for="npsn" class="form-label">NPSN</label>
        <input type="text" name="npsn" class="form-control bg-light text-secondary inputform" id="npsn" readonly value="<?= $data['sekolah']['npsn']; ?>">
      </div>
      <div class="col-md-6">
        <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
        <input type="text" name="nama_sekolah" class="form-control inputform" id="nama_sekolah" value="<?= $data['sekolah']['nama_sekolah']; ?>">
      </div>
      <div class=" col-md-6">
        <label for="bentuk_pendidikan" class="form-label">Bentuk Pendidikan : </label>
        <select id="bentuk_pendidikan" name="bentuk_pendidikan" class="form-select" aria-label="Default select example" value="">
          <option selected><?= $data['sekolah']['bentuk_pendidikan']; ?></option>
          <option>TK</option>
          <option>SD</option>
          <option>SMP</option>
          <option>SMA</option>
          <option>SMK</option>
        </select>
      </div>
      <div class=" col-md-6">
        <label for="status" class="form-label">Status :</label>
        <select id="status" name="status" class="form-select" aria-label="Default select example">
          <option selected><?= $data['sekolah']['status']; ?></option>
          <option>Negeri</option>
          <option>Swasta</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="sk_pendirian" class="form-label">SK Pendirian</label>
        <input type="text" name="sk_pendirian" class="form-control" id="sk_pendirian" value="<?= $data['sekolah']['sk_pendirian']; ?>">
      </div>
      <div class="col-md-6">
        <label for="tgl_pendirian" class="form-label">Tanggal Pendirian</label>
        <input type="date" name="tgl_pendirian" class="form-control" id="tgl_pendirian" value="<?= $data['sekolah']['tgl_pendirian']; ?>">
      </div>
      <div class="col-md-6">
        <label for="sk_izin_operasional" class="form-label">SK Izin Operasional</label>
        <input type="text" name="sk_izin_operasional" class="form-control" id="sk_izin_operasional" value="<?= $data['sekolah']['sk_izin_operasional']; ?>">
      </div>
      <div class="col-md-6">
        <label for="tgl_izin_operasional" class="form-label">Tanggal Izin Operasional</label>
        <input type="date" name="tgl_izin_operasional" class="form-control" id="tgl_izin_operasional" value="<?= $data['sekolah']['tgl_izin_operasional']; ?>">
      </div>
      <div class="">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $data['sekolah']['alamat']; ?></textarea>
      </div>
      <div class="col-md-6">
        <label for="rt" class="form-label">Rt</label>
        <input type="text" name="rt" class="form-control" id="rt" value="<?= $data['sekolah']['rt']; ?>">
      </div>
      <div class="col-md-6">
        <label for="rw" class="form-label">Rw</label>
        <input type="text" name="rw" class="form-control" id="rw" value="<?= $data['sekolah']['rw']; ?>">
      </div>
      <div class="col-md-6">
        <label for="dusun" class="form-label">dusun</label>
        <input type="text" name="dusun" class="form-control" id="dusun" value="<?= $data['sekolah']['dusun']; ?>">
      </div>
      <div class="col-md-6">
        <label for="desa" class="form-label">desa</label>
        <input type="text" name="desa" class="form-control" id="desa" value="<?= $data['sekolah']['desa']; ?>">
      </div>
      <div class="col-md-6">
        <label for="kecamatan" class="form-label">kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?= $data['sekolah']['kecamatan']; ?>">
      </div>
      <div class="col-md-6">
        <label for="kabupaten" class="form-label">kabupaten</label>
        <input type="text" name="kabupaten" class="form-control" id="kabupaten" value="<?= $data['sekolah']['kabupaten']; ?>">
      </div>
      <div class="col-md-6">
        <label for="provinsi" class="form-label">provinsi</label>
        <input type="text" name="provinsi" class="form-control" id="provinsi" value="<?= $data['sekolah']['provinsi']; ?>">
      </div>
      <div class="col-md-6">
        <label for="kode_pos" class="form-label">Kode Pos</label>
        <input type="text" name="kode_pos" class="form-control" id="kode_pos" value="<?= $data['sekolah']['kode_pos']; ?>">
      </div>
  </div>
  <div class="modal-footer mt-3">
    <div class="card-body d-flex text-end justify-content-end">
      <a href="<?= BASEURL ?>datasekolah/detail/<?= $data['sekolah']['npsn'] ?>" class="card-link btn btn-primary btn-sm mx-1">Batal Update</a>
      <button class="card-link btn btn-warning text-white btn-sm mx-1 tombolUpdateDataDetail" href="<?= BASEURL ?>datasekolah/update/<?= $sekolah['npsn'] ?>" type="submit"data-id="<?= $data['sekolah']['npsn']; ?>">Update</button>
      <a href="#" class="card-link btn btn-danger btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#modalhapus" type="button" class="btn btn-sm btn-danger">Hapus</a>
    </div>
  </div>
  </form>
</div>
</div>


<!-- MODAL DELETE DATA  -->
<div class="modal fade" id="modalhapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus <b> <?= $data['sekolah']['nama_sekolah']; ?></b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <a href="<?= BASEURL; ?>datasekolah/hapus/<?= $data['sekolah']['npsn'] ?>" type="button" class="btn btn-danger btn-sm">Ya, Hapus!</a>
      </div>
    </div>
  </div>
</div>


<!-- MODAL TAMBAH DATA  -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>datamhs/tambah" method="post">
          <div class="mb-3">
            <label for="nama_sekolah" class="form-label">NPSN</label>
            <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Bentuk Pendidikan : </label>
            <select id="status" name="status" class="form-select" aria-label="Default select example">
              <option selected>Pilih Bentuk Pendidikan</option>
              <option>TK</option>
              <option>SD</option>
              <option>SMP</option>
              <option>SMA</option>
              <option>SMK</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="bentuk_pendidikan" class="form-label">Status :</label>
            <select id="status" name="status" class="form-select" aria-label="Default select example">
              <option selected>Pilih Status</option>
              <option>Negeri</option>
              <option>Swasta</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="sk_pendirian" class="form-label">SK Pendirian</label>
            <input type="text" name="sk_pendirian" class="form-control" id="sk_pendirian">
          </div>
          <div class="mb-3">
            <label for="tgl_pendirian" class="form-label">Tanggal Pendirian</label>
            <input type="date" name="tgl_pendirian" class="form-control" id="tgl_pendirian">
          </div>
          <div class="mb-3">
            <label for="sk_izin_operasional" class="form-label">SK Izin Operasional</label>
            <input type="text" name="sk_ izin_operasional" class="form-control" id="sk_ izin_operasional">
          </div>
          <div class="mb-3">
            <label for="tgl_izin_operasional" class="form-label">Tanggal Izin Operasional</label>
            <input type="date" name="tgl_ izin_operasional" class="form-control" id="tgl_ izin_operasional">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat">
          </div>
          <div class="mb-3">
            <label for="rt" class="form-label">Rt</label>
            <input type="text" name="rt" class="form-control" id="rt">
          </div>
          <div class="mb-3">
            <label for="rw" class="form-label">Rw</label>
            <input type="text" name="rw" class="form-control" id="rw">
          </div>
          <div class="mb-3">
            <label for="dusun" class="form-label">dusun</label>
            <input type="text" name="dusun" class="form-control" id="dusun">
          </div>
          <div class="mb-3">
            <label for="desa" class="form-label">desa</label>
            <input type="text" name="desa" class="form-control" id="desa">
          </div>
          <div class="mb-3">
            <label for="kecamatan" class="form-label">kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" id="kecamatan">
          </div>
          <div class="mb-3">
            <label for="kabupaten" class="form-label">kabupaten</label>
            <input type="text" name="kabupaten" class="form-control" id="kabupaten">
          </div>
          <div class="mb-3">
            <label for="provinsi" class="form-label">provinsi</label>
            <input type="text" name="provinsi" class="form-control" id="provinsi">
          </div>
          <div class="mb-3">
            <label for="kode_pos" class="form-label">Kode Pos</label>
            <input type="text" name="kode_pos" class="form-control" id="kode_pos">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" data-bs-dismiss="modal" class="btn btn-danger btn-sm">Batal</button>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
