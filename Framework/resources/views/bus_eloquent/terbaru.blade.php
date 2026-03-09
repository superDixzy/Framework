@extends('layout.app')

@section('content')

<h2>Bus Terbaru</h2>

<table id="table" class="display">

<thead>
<tr>
<th>ID</th>
<th>Nama Bus</th>
<th>Plat</th>
<th>Kapasitas</th>
<th>Status</th>
<th>Tanggal Dibuat</th>
</tr>
</thead>

<tbody>

@foreach($bus as $b)

<tr>
<td>{{ $b->id }}</td>
<td>{{ $b->nama_bus }}</td>
<td>{{ $b->plat_nomor }}</td>
<td>{{ $b->kapasitas }}</td>
<td>{{ $b->status }}</td>
<td>{{ $b->created_at }}</td>
</tr>

@endforeach

</tbody>

</table>

@endsection