$(function() {

    $('.tambahData').on('click', function() {
        
        $('#judulModal').html('Tambah Barang');
        $('.modal-footer button[type=submit]').html('Tambah');
        $('#namabarang').val('');
        $('#jumlahbarang').val('');
        $('#hargabarang').val('');
        $('#satuanbarang').val('')

    })

    $('.ModalUbah').on('click', function() {

        const id = $(this).data('id');
        
        $('#judulModal').html('Ubah Data Barang');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', 'update/'+id);



  
        $.ajax({
            url:'getubah/'+id,
            method: 'get',
            dataType: 'json',
            success: function(data) {
                $('#namabarang').val(data[0].namabarang);
                $('#jumlahbarang').val(data[0].jumlahbarang);
                $('#hargabarang').val(data[0].hargabarang);
                $('#satuanbarang').val(data[0].satuanbarang);
                $('#id').val(data[0].id);

            }
        })

    });
});
