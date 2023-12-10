@extends('master3')
@section('konten')
    <h3>Data Bank</h3>

    <a href="/bank"> Kembali</a>

    <br />
    <br />

    <form action="/bank/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}

        <div class = "form-group">
            <label for = "merkbank" class = "col-sm-2 control-label">Merk Bank</label>
            <div class = "col-sm-10">
                <input name="merkbank" type = "text" class = "form-control" id = "merkbank"
                    placeholder = "Masukan Merk Bank">
            </div>
        </div>

        <div class = "form-group">
            <label for = "jumlahbank" class = "col-sm-2 control-label">Jumlah Bank</label>
            <div class = "col-sm-10">
                <input name="jumlahbank" type = "number" class = "form-control" id = "jumlahbank"
                    placeholder = "Masukan Jumlah Bank">
            </div>
        </div>

        <div class = "form-group">
            <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
            <div class = "col-sm-10">
                <input name="tersedia" type = "text" class = "form-control" id = "tersedia"
                    placeholder = "Tersedia">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">

    </form>
@endsection
