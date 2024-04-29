@extends('app')
@section('content')
<div class="card">
      @if (session('status'))
					    <div class="alert alert-success">
							{{session('status')}}
						</div>
					@endif
    <div class="card-header">
        Data Buku Tamu  <a href="{{url('admin/form-tambah')}}" class="btn btn-success">Tambah Data</a>
    </div> 
    <div class="card-body">
    <table class="table" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">No.Telp</th>
      <th scope="col">E-mail</th>
      <th scope="col">Alamat</th>
      <th scope="col">Keperluan</th>
      <th scope="col" style="width: 15%">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $value)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$value->nama}}</td>
            <td>{{$value->tlp}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->alamat}}</td> 
            <td>{{$value->keperluan}}</td>
            <td>
                <div class="row">
                  <div class="col-4">
                  <a href="{{url('admin/form-edit', $value->id)}}" class="btn btn-warning">Edit</a>
                  </div>
                  <div class="col-4">
                      <form action="{{url('admin/hapus-data')}}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{$value->id}}">
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                </div>
                
                
            </td> 
        </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection

@section('script')
    <script>
       let table = new DataTable('#myTable');


        </script>
@endsection