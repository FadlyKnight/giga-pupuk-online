//tombol minus-----------------------------------------------------
$('.mb').on('click' , function(){
    
    var z = $(this).prop("value");//mengambil value dari tombol yaitu id dari keranjang
    
    var angka3 = parseInt($('#'+z).val());// memasukkan isi pada inputan yaitu jumlah item, sesuai dengan id keranjang (value tombol)
    
    //if berfungsi agar jumlah barang tidak bisa minus atau kurang dari angka 1 
    if(angka3>1){
        var pengurangan = angka3-1; // melakukan perhitungan 
        var sub = parseInt($('#hs'+z).val()) * pengurangan;// melakukan perhitungan sub total
        var total = parseInt($('.ttp').val()) - parseInt($('#hs'+z).val());// menghitung total pembayaran
    
        //melakukan update data
        $.ajax({   
            method: 'POST',   
            url: '/update',   
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { id: parseInt(z), jumlah : pengurangan}
         });
    
        $('#'+z).val(pengurangan);// memasukkan hasil perhitungan isi dari inputan dan kembali ditampilkan pada inputan tersebut
        $('#st'+z).val(sub);// memasukkan hasil perhitungan sub tital kedalam inputan
        $('.ttp').val(total);// memasukkan hasil perhitungan total pembayaran
    };
    
    
});

// tombol plus--------------------------------------------------------
$('.pb').on('click' , function(){ 
    var z = $(this).prop("value");
    var angka3 = parseInt($('#'+z).val());
    var penambahan = angka3+1;
    var sub = parseInt($('#hs'+z).val()) * penambahan;
    var total = parseInt($('.ttp').val()) + parseInt($('#hs'+z).val());

    $.ajax({   
        method: 'POST',   
        url: '/update',   
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { id: parseInt(z), jumlah : penambahan }
     });
    
    $('#'+z).val(penambahan);// melakukan penambahan isi dari inputan dan kembali ditampilkan pada inputan tersebut
    $('#st'+z).val(sub);
    $('.ttp').val(total);
});


// ini----------------
$('.tes').on('click' , function(){ 
    var z = $(this).prop("value");
    // var angka3 = parseInt($('#'+z).val());
    // var penambahan = angka3+1;

    $.ajax({   
        type: 'post',   
        url: 'ngetes/'+z,   
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });
    
    //$('#'+z).val(penambahan);// melakukan penambahan isi dari inputan dan kembali ditampilkan pada inputan tersebut


});