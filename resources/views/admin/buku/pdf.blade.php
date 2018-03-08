<title>Rekap Data Buku</title>
<center>
  <h1>Rekap Daftar Buku</h1>
</center>

@foreach($buku as $q)
<hr>
Kode Buku : {{$q->kodebuku}} <br>
Judul Buku : {{$q->judulbuku}} <br>
Pengarang Buku : {{$q->pengarang}} <br>
Kategori Buku : {{$q->kategori}} <br>
<hr>
@endforeach