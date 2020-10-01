$('#alamat').change(function(){

    var al = $(this).children("option:selected").val();
    var id = $(this).attr('id');

    var bro = al.split("-")
    console.log(bro[0], bro[1]);
    var jum = $('#berat').val();
    if(bro[0] == 0){
        $('.ongkir').val(0);
        $('#dval').val(0);
        
    }else{
        
        // console.log('');

        $.ajax({   
            method: 'get',   
            url: '/ambilHarga',
            dataType : 'json',
            data: { 'id_j': parseInt(bro[0])
            },
            success: function (result){
                // console.log(result);
                var har = parseInt(jum) * parseInt(result);
                $('.ongkir').val(har);
                var hargaBarang = $('.barang').val();
                var biayaOngkir = $('.ongkir').val();
                var totalBiaya = parseInt(hargaBarang) + parseInt(biayaOngkir);
                $('.hasil').val(totalBiaya);
                $('#dval').val(0);

            },
            error: function(xhr, status, error) {
                console.log( xhr , status, error );
            }
        });
        
    }
    
    
});

$('#dbut').on('click' , function(){
    var kode = $('#dkod').val();
    var al = $('#alamat').children("option:selected").val();
    if(kode !=="" && al !== 0){
        var t1 = $('.hasil').val();
        var d1 = new Date();//tanggal sekarang
        $.ajax({   
            method: 'get',   
            url: '/ambilDiskon',
            dataType : 'json',
            data: { 'k_dis': kode},
            success: function (result){
                var d2 = new Date(result.expired);// tanggal expired
                if(d1.getTime() < d2.getTime() && result.status_diskon == "Belum"){
                    //jika kode belum expired
                    $('#dval').val(result.jumlah_diskon);
                    var akhir = parseInt(t1) - parseInt(result.jumlah_diskon);
                    $('.hasil').val(akhir);
                    // $('#dval').val('bisa'); 

                }else{
                    //jika kode telah expired
                    $('#dval').val('kode expired');
                    var ha1 = $('.barang').val();
                    var ha2 = $('.ongkir').val();
                    var ha3 = parseInt(ha1) + parseInt(ha2);
                    $('.hasil').val(ha3);
                    
                }
            },
            error: function(xhr, status, error) {
                // alert(error);
                $('#dval').val('kode salah');
                var ha1 = $('.barang').val();
                var ha2 = $('.ongkir').val();
                var ha3 = parseInt(ha1) + parseInt(ha2);
                $('.hasil').val(ha3);

            }
        });
    }
    

});