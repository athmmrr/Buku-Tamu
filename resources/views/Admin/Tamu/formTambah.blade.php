@extends('app')
@section('content')

    <div class="d-flex justify-content-center">...</div>
            <div class="card" >
        <div class="card-header">
            Form Tambah Buku Tamu
        </div>
        <div class="card-body">
                    <form action="{{url('admin/simpan-data')}}" method="post">
                        @csrf
                        <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama">
            </div>
                        <div class="mb-3">
                <label for="tlp" class="form-label">No.Telp</label>
                <input type="text" class="form-control" name="tlp" id="tlp" aria-describedby="tlp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="formcontrol"></textarea>
            </div>
            <div class="mb-3">
                <label for="keperluan" class="form-label">Keperluan</label>
                <textarea name="keperluan" class="formcontrol"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
        </div>
    </div>
@endsection