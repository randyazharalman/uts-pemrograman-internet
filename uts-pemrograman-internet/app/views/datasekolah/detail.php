
<section>
  <div class="container ">
    <div class="row bg-light">
      <div class="col-lg-12 mt-3 flex">
        <div class="card-body d-flex text-end justify-content-end">
          <a href="<?= BASEURL ?>datasekolah/" class="btn-primary btn btn-sm mx-1 mb-3">Kembali</a>
          <a href="<?= BASEURL ?>datasekolah/updateviadetail/<?= $data['sekolah']['npsn'] ?>" type="submit"data-id="<?= $data['sekolah']['npsn']; ?>" class="btn-warning text-white btn btn-sm mx-1 mb-3 tombolUpdateDataDetail" type="submit">Update</a>
          <a href="" class="btn-danger  btn btn-sm mx-1 mb-3"data-bs-toggle="modal" data-bs-target="#modalhapus" type="button">Hapus</a>
        </div>
        <div class="card mb-4">
          
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-primary">NPSN</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['npsn']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nama Sekolah</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['nama_sekolah']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Bentuk Pendidikan</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['bentuk_pendidikan']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Status</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['status']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">SK Pendirian</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['sk_pendirian']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tanggal Pendirian</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['tgl_pendirian']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">SK Izin Operasional</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['sk_izin_operasional']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tanggal Izin Operasional</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['tgl_izin_operasional']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Alamat</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['alamat']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Rt</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['rt']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Rw</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['rw']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Dusun</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['dusun']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Desa</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['desa']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Kecamatan</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['kecamatan']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Kabupaten</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['kabupaten']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Provinsi</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['provinsi']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Kode Pos</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $data['sekolah']['kode_pos']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

<!-- MODAL DELETE DATA  -->
<div class="modal fade" id="modalupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin memperbarui data <b> <?= $data['sekolah']['nama_sekolah']; ?></b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <a href="" type="button" class="btn btn-success btn-sm">Ya, Perbarui!</a>
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
            <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah">
          </div>
          <div class="mb-3">
            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah">
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

<!-- <?= BASEURL; ?>datasekolah/updateViaDetail/<?= $data['sekolah']['npsn'] ?> -->