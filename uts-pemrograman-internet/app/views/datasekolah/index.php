
<div class="container ">
  <?php Flasher::flash(); ?>
  <a href="" class="btn btn-info mb-3 text-white tombolTambahData btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#tambahdatamodal">Tambah Data</a>
  <table class="table table-hover mb-5 border-top">
    <thead>
      <tr>
        <th scope="col" colspan="2" class="">No</th>
        <th scope="col" colspan ="1"class="text-center">Nama Sekolah</th>
        <th scope="col" colspan="2" class="text-center">Aksi</th>
      </tr>
    </thead>

    <tbody>
    <?php $no=1; ?>
      <?php foreach ($data['sekolah'] as $sekolah) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td colspan="2" class="text-center"><?= $sekolah['nama_sekolah']; ?></td>
          <td class="text-center">
            <a href="<?= BASEURL ?>datasekolah/detail/<?= $sekolah['npsn'] ?>" class="btn btn-sm btn-primary tombolDetail" data-id="<?= $sekolah['npsn']; ?>">Detail</a>
            <a href="<?= BASEURL; ?>datasekolah/update/<?= $sekolah['npsn'] ?>" class="btn btn-sm btn-warning text-white tombolUpdateData" data-bs-toggle="modal" data-bs-target="#updatedatamodal" data-id="<?= $sekolah['npsn']; ?>">Update</a>
            <a href="<?= BASEURL ?>datasekolah/hapus/<?= $sekolah['npsn'] ?>"  type="button" onclick=" return confirm('Apakah anda yakin ingin menghapus <?=$sekolah['nama_sekolah']?>')" class="btn btn-sm btn-danger">Hapus</a>
          </td>
          <!-- <td>@mdo</td> -->
        </tr> 
      <?php endforeach; ?>
    </tbody>
  </table>
</div>


<div class="modal fade" id="modalhapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus <b> <?= $sekolah['nama_sekolah']; ?></b> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
        <a href="<?= BASEURL; ?>datasekolah/hapus/<?= $data['sekolah']['npsn'] ?>" type="submit" class="btn btn-danger btn-sm">Ya, Hapus!</a>
      </div>
    </div>
  </div>
</div>


<!-- MODAL UPDATE DATA  -->
<div class="modal fade" id="updatedatamodal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>datasekolah/update" method="post">
          <!-- <input type="hidden" name="id" id="id"> -->
          <div class="mb-3">
            <label for="npsn" class="form-label">NPSN</label>
            <input type="text" name="npsn" class="form-control bg-secondary text-white " id="npsn"readonly>
          </div>
          <div class="mb-3">
            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah">
          </div>
          <div class="mb-3">
            <label for="bentuk_pendidikan" class="form-label">Bentuk Pendidikan : </label>
            <select id="bentuk_pendidikan" name="bentuk_pendidikan" class="form-select" aria-label="Default select example">
              <option selected>Pilih Bentuk Pendidikan</option>
              <option>TK</option>
              <option>SD</option>
              <option>SMP</option>
              <option>SMA</option>
              <option>SMK</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status :</label>
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
            <input type="text" name="sk_izin_operasional" class="form-control" id="sk_izin_operasional">
          </div>
          <div class="mb-3">
            <label for="tgl_izin_operasional" class="form-label">Tanggal Izin Operasional</label>
            <input type="date" name="tgl_izin_operasional" class="form-control" id="tgl_izin_operasional">
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

<!-- MODAL TAMBAH DATA -->
<div class="modal fade" id="tambahdatamodal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>datasekolah/tambah" method="post">
          <div class="mb-3">
            <label for="npsn" class="form-label">NPSN</label>
            <input type="text" name="npsn" class="form-control" id="npsn" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" id="nama_sekolah"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="bentuk_pendidikan" class="form-label">Bentuk Pendidikan : </label>
            <select id="bentuk_pendidikan" name="bentuk_pendidikan" class="form-select" aria-label="Default select example">
              <option selected>Pilih Bentuk Pendidikan</option>
              <option>TK</option>
              <option>SD</option>
              <option>SMP</option>
              <option>SMA</option>
              <option>SMK</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status :</label>
            <select id="status" name="status" class="form-select" aria-label="Default select example">
              <option selected>Pilih Status</option>
              <option>Negeri</option>
              <option>Swasta</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="sk_pendirian" class="form-label">SK Pendirian</label>
            <input type="text" name="sk_pendirian" class="form-control" id="sk_pendirian"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="tgl_pendirian" class="form-label">Tanggal Pendirian</label>
            <input type="date" name="tgl_pendirian" class="form-control" id="tgl_pendirian"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="sk_izin_operasional" class="form-label">SK Izin Operasional</label>
            <input type="text" name="sk_izin_operasional" class="form-control" id="sk_izin_operasional"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="tgl_izin_operasional" class="form-label">Tanggal Izin Operasional</label>
            <input type="date" name="tgl_izin_operasional" class="form-control" id="tgl_izin_operasional"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="rt" class="form-label">Rt</label>
            <input type="text" name="rt" class="form-control" id="rt"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="rw" class="form-label">Rw</label>
            <input type="text" name="rw" class="form-control" id="rw"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="dusun" class="form-label">dusun</label>
            <input type="text" name="dusun" class="form-control" id="dusun"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="desa" class="form-label">desa</label>
            <input type="text" name="desa" class="form-control" id="desa"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="kecamatan" class="form-label">kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" id="kecamatan"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="kabupaten" class="form-label">kabupaten</label>
            <input type="text" name="kabupaten" class="form-control" id="kabupaten"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="provinsi" class="form-label">provinsi</label>
            <input type="text" name="provinsi" class="form-control" id="provinsi"autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="kode_pos" class="form-label">Kode Pos</label>
            <input type="text" name="kode_pos" class="form-control" id="kode_pos"autocomplete="off">
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
