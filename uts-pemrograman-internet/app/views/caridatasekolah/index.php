<div class="container">
  <p class="mb-3">Silahkan masukan kata kunci yang ingin dicari dibawah ini</p>
  <form action="<?= BASEURL; ?>/caridatasekolah/cari" method="post"></form>
  <div class="input-group mb-3 w-50 mx-auto justifiy-content-center text-center ">
    <input type="text" name="keyword" id="keyword" class="form-control " placeholder="masukan kata kunci">
    <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
  </div>
  </form>
</div>

<div class="container ">
  <table class="table table-hover mb-5">
    <thead>
      <tr>
        <th scope="col">Nama Sekolah</th>
        <th scope="col" colspan="2">Aksi</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($data['sekolah'] as $sekolah) : ?>
        <tr>
          <td colspan="2"><?= $sekolah['nama_sekolah']; ?></td>
          <td>
            <a href="<?= BASEURL ?>datasekolah/detail/<?= $sekolah['npsn'] ?>" class="btn btn-sm btn-primary tombolDetail" data-id="<?= $sekolah['npsn']; ?>">Detail</a>
            <a href="<?= BASEURL; ?>datasekolah/update/<?= $sekolah['npsn'] ?>" class="btn btn-sm btn-warning text-white tombolUpdateData" data-bs-toggle="modal" data-bs-target="#updatedatamodal" data-id="<?= $sekolah['npsn']; ?>">Update</a>
            <a href="<?= BASEURL ?>datasekolah/hapus/<?= $sekolah['npsn'] ?>" type="button" onclick=" return confirm('Apakah anda yakin ingin menghapus <?= $sekolah['nama_sekolah'] ?>')" class="btn btn-sm btn-danger">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>