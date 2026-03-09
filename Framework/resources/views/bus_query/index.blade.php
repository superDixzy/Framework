@extends('layout.app')

@section('content')

<h2>Data Bus</h2>

<table id="table" class="display">

<thead>
<tr>
<th>ID</th>
<th>Nama Bus</th>
<th>Plat Nomor</th>
<th>Kapasitas</th>
<th>Status</th>
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
</tr>

@endforeach

</tbody>

</table>

@endsection