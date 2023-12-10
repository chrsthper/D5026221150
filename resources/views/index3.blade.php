@extends('master3')
@section('title', 'Database Bank')

@section('judul_halaman')
<h3>Data Bank</h3>

<a href="/bank/tambah3"> + Tambah Data Baru</a>

<br/>
<br/>
@endsection

@section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Bank</th>
			<th>Merk Bank</th>
			<th>Jumlah Bank</th>
            <th>Tersedia</th>
		</tr>
        @foreach($bank as $p)
		<tr>
			<td>{{ $p->kodebank }}</td>
			<td>{{ $p->merkbank }}</td>
            <td>{{ $p->jumlahbank}}</td>
			<td>{{ $p->tersedia }}</td>
		</tr>
		@endforeach
	</table>
@endsection
