@extends('layout.app')

@section('content')

<h2>Bus Berdasarkan Kota</h2>

<table id="table" class="display">

<thead>
<tr>
<th>ID</th>
<th>Nama Bus</th>
<th>Plat</th>
<th>Kota Asal</th>
<th>Kota Tujuan</th>
</tr>
</thead>

<tbody>

@foreach($bus as $b)

<tr>
<td>{{ $b->id }}</td>
<td>{{ $b->nama_bus }}</td>
<td>{{ $b->plat_nomor }}</td>
<td>{{ $b->kota_asal }}</td>
<td>{{ $b->kota_tujuan }}</td>
</tr>

@endforeach

</tbody>

</table>

@endsection