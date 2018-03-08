<title>Rekap User</title>
<center>
  <h1>Rekap Daftar User</h1>
</center>

@foreach($user as $q)
<hr>
Username : {{$q->username}} <br>
Status : @if($q->status==1)Admin @elseif($q->status==2)Operator @endif<br>
<hr>
@endforeach