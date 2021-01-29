@extends('layout.admin')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb" style="margin: 20px 0">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Interior</li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <div class="upload-img">
            <p>Upload Image</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>
        </div>
        <div class="judul">
            <p>Input Judul</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
        </div>
        <div class="isi">
            <p>Input Deskripsi</p>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Deskripsi</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
        </div>
        <div class="d-flex justify-content-end" style="margin: 10px">
            <button class="btn btn-primary btn-sm" type="submit" style="padding: 5px 20px; margin: 15px -10px 0 0; background: #21209c; border: none;">Submit</button>
        </div>
    </div>
@endsection
