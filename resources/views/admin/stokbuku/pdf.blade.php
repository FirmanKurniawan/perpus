<title>Rekap Stok Buku</title>
<center>
  <h1>Rekap Daftar Stok Buku</h1>
</center>

@foreach($buku as $q)
<hr>
Judul Buku : {{$q->judulbuku}} <br>
Nomer Rak Buku : {{$q->nomor_rak}} <br>
Jumlah Buku : {{$q->jumlahbuku}} <br>
<hr>
@endforeach