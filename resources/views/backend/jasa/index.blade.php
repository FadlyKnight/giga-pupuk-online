@extends('layouts.backend.a-navbar')
{{-- @extends('layouts.backend.b-navbar') --}}

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title mb-4">Data Jasa</h4>
            <table 
                {{-- id="datatable" --}}
                class="table table-striped table-bordered dt-responsive nowrap" 
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kota / Kabupaten</th>
                        <th>Harga Ongkir</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($jasa as $jasas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jasas->tujuan }}</td>
                        <td><input disabled required type="number" value="{{ $jasas->harga_jasa }}" class="form-control autonumber" id="inputan{{ $jasas->id }}"> </td>
                        <td>
                            <a href="#" class="btn-sm btn-primary unlock un{{ $jasas->id }}" id="{{ $jasas->id }}"><i class="fa fa-lock"></i></a>
                            <a href="#" class="btn-sm btn-success simpan sim{{ $jasas->id }}" id="{{ $jasas->id }}"><i class="fa fa-save"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script>
    $('.simpan').hide();

    $('.unlock').click( function(){
        var id = $(this).attr('id');
        
        $(this).hide();
        $('#inputan'+id).removeAttr('disabled');
        $('.sim'+id).show();
    });

    $('.simpan').click( function(){
        var id = $(this).attr('id');

        $(this).hide();
        $('#inputan'+id).attr('disabled','disabled');
        $('.un'+id).show();

        
        var harga = $('#inputan'+id).prop("value");

        $.ajax({   
        type: 'post',   
        url: '{{ route("jasa.updateAjax") }}',    
        // headers: {
        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        // },
        
        data: { 
            _token : "{{ csrf_token() }}",
            id: parseInt(id), harga : parseInt(harga) },

        success: function(data,response, textStatus, xhr) {
            console.log(data);
            console.log(id,harga);
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log('GAGAL');
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
                    
        });
    });

    // $("#add").click(function() {

    //     $.ajax({
    //         type: 'post',
    //         url: '/addItem',
    //         data: {
    //             _token: "{{ csrf_token() }}",
    //             name : $('input[name=name]').val()
    //         },
    //         success: function(data) {
    //             if ((data.errors)){
    //               $('.error').removeClass('hidden');
    //                 $('.error').text(data.errors.name);
    //             }
    //             else {
    //                 $('.error').addClass('hidden');
    //                 $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
    //             }
    //         },

    //     });
    //     $('#name').val('');

    // });

</script>

@endsection