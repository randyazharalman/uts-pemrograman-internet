<h3>Hasil Pencarian</h3>
<div class="container ">
  <?php Flasher::flash(); ?>
  <table class="table table-hover mb-5">

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
        </tr> 
      <?php endforeach; ?>
    </tbody>
  </table>
  <a href="" class="btn btn-info text-white tombolTambahData btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#tambahdatamodal">Tambah Data</a>
</div>