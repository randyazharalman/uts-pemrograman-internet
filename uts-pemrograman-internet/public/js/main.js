$(function () {
    
      
    // $('.tombolTambahData').on('click', function(){
    //   // console.log('ok');
    //     $('#formModalLabel').html('Tambah Data')
    //     $('.modal-footer button[type=submit]').html('Tambah Data')
    //     // $('modal-body form').attr('action', 'http//localhost/uts-pemrograman-internet/public/home/tambah')
    // })
  
    $('.tombolUpdateData').on('click', function(){
      console.log('oks')
        $('#formModalLabel').html('Update Data')
            $('.modal-footer button[type=submit]').html('Update Data');
            $('modal-body form').attr('action', 'http://localhost/uts-pemrograman-internet/public/datasekolah/update')
  
            const npsn = $(this).data('id');
            // console.log(id)
            $.ajax({
                url: 'http://localhost/uts-pemrograman-internet/public/datasekolah/getupdate',
                data:{npsn : npsn},
                method: 'post',
                dataType: 'json',
                success: function(data){
                  console.log(data);
                    $('#npsn').val(data.npsn);
                    $('#status').val(data.status);
                    $('#bentuk_pendidikan').val(data.bentuk_pendidikan);
                    $('#nama_sekolah').val(data.nama_sekolah);
                    $('#sk_pendirian').val(data.sk_pendirian);
                    $('#tgl_pendirian').val(data.tgl_pendirian);
                    $('#sk_izin_operasional').val(data.sk_izin_operasional);
                    $('#tgl_izin_operasional').val(data.tgl_izin_operasional);
                    $('#alamat').val(data.alamat);
                    $('#rt').val(data.rt);
                    $('#rw').val(data.rw);
                    $('#dusun').val(data.dusun);
                    $('#desa').val(data.desa);
                    $('#kecamatan').val(data.kecamatan);
                    $('#kabupaten').val(data.kabupaten);
                    $('#provinsi').val(data.provinsi);
                    $('#kode_pos').val(data.kode_pos);
                }
            })
        })
    // "use strict";
    $('.tombolUpdateDataDetail').on('click', function(){
      console.log('okddsds')
            $('.modal-footer button[type=submit]').html('Update Data');
            $('.inputform').removeAttr('readonly')
            $('container form').attr('action', 'http://localhost/uts-pemrograman-internet/public/detail/updateViaDetail')
            const npsn = $(this).data('id');
            console.log(npsn)
            $.ajax({
                url: 'http://localhost/uts-pemrograman-internet/public/detail/getupdate',
                data:{npsn : npsn},
                method: 'post',
                dataType: 'json',
                success: function(data){ 
                  console.log(data);
                    $('#npsn').val(data.npsn);
                    $('#status').val(data.status);
                    $('#bentuk_pendidikan').val(data.bentuk_pendidikan);
                    $('#nama_sekolah').val(data.nama_sekolah);
                    $('#sk_pendirian').val(data.sk_pendirian);
                    $('#tgl_pendirian').val(data.tgl_pendirian);
                    $('#sk_izin_operasional').val(data.sk_izin_operasional);
                    $('#tgl_izin_operasional').val(data.tgl_izin_operasional);
                    $('#alamat').val(data.alamat);
                    $('#rt').val(data.rt);
                    $('#rw').val(data.rw);
                    $('#dusun').val(data.dusun);
                    $('#desa').val(data.desa);
                    $('#kecamatan').val(data.kecamatan);
                    $('#kabupaten').val(data.kabupaten);
                    $('#provinsi').val(data.provinsi);
                    $('#kode_pos').val(data.kode_pos);
                }
            })
        })
    // "use strict";
      })