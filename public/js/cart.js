//tombol minus-----------------------------------------------------
$('.mb').on('click' , function(){
    
    console.log('hi');
    var z = $(this).prop("value");//mengambil value dari tombol yaitu id dari keranjang
    
    var angka3 = parseInt($('#'+z).val());// memasukkan isi pada inputan yautu jumlah item, sesuai dengan id keranjang (value tombol)
    var pengurangan = angka3-1; // melakukan perhitungan 
    
    //melakukan update data
    $.ajax({   
        type: 'post',   
        url: 'update',   
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { id: parseInt(z), jumlah : pengurangan}
     });

    $('#'+z).val(pengurangan);// memasukkan hasil perhitungan isi dari inputan dan kembali ditampilkan pada inputan tersebut

});

$('.add-keranjang').on('click', function()
{
    // var produkd = $(this).prop("value");
    var id = $(this).attr('id');

    console.log( 'hai',id );

    $.ajax({   
        type: 'get',   
        url: '/cart',   
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { id: parseInt(id) }
     });

});

// tombol plus--------------------------------------------------------
$('.pb').on('click' , function(){ 
    var z = $(this).prop("value");
    var angka3 = parseInt($('#'+z).val());
    var penambahan = angka3+1;

    $.ajax({   
        type: 'post',   
        url: 'update',   
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { id: parseInt(z), jumlah : penambahan}
     });
    
    $('#'+z).val(penambahan);// melakukan penambahan isi dari inputan dan kembali ditampilkan pada inputan tersebut


});