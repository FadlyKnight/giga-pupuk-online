<h1> MANTAP </h1>

<form action="{{ route('add.cart') }}">
    
    <input type="text" name="item">
    <br>
    <input type="text" name="barang">
    <br> 
    <button type="submit"> TAMBAH </button>

</form>

<h1> {{ $sini }}</h1>
<h2> {{$userId}} </h2>

<h3> {{ $hitung }} </h3>