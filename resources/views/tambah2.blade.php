@extends('master3')
@section('konten')
    <h3>Data Nilai Kuliah</h3>

    <a href="/nilaikuliah"> Kembali</a>

    <br />
    <br />

    <form action="/nilaikuliah/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}

        <div class = "form-group">
            <label for = "nrp" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-10">
                <input name="nrp" type = "text" class = "form-control" id = "nrp"
                    placeholder = "Masukan NRP">
            </div>
        </div>

        <div class = "form-group">
            <label for = "nilai_angka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-10">
                <input name="nilai_angka" type = "number" class = "form-control" id = "nilai_angka"
                    placeholder = "Masukan Nilai Angka">
            </div>
        </div>

        <div class = "form-group">
            <label for = "sks" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-10">
                <input name="sks" type = "text" class = "form-control" id = "sks"
                    placeholder = "Masukan SKS">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">

    </form>
@endsection
