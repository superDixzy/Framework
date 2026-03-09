@extends('layout.app')

@section('content')

<h2>Bus Dengan Supir & Rute</h2>

<table id="table" class="display">

<thead>
<tr>
<th>ID</th>
<th>Nama Bus</th>
<th>Supir</th>
<th>Kota Asal</th>
<th>Kota Tujuan</th>
</tr>
</thead>

<tbody>

@foreach($bus as $b)

<tr>
<td>{{ $b->id }}</td>
<td>{{ $b->nama_bus }}</td>
<td>{{ $b->supir->nama_supir }}</td>
<td>{{ $b->rute->kota_asal }}</td>
<td>{{ $b->rute->kota_tujuan }}</td>
</tr>

@endforeach

</tbody>

</table>

@endsection