@extends('layout.admin')
@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb" style="margin: 20px 0">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Interior</li>
        </ol>
    </nav>
    <table class="table table-striped">
        <thead style="text-align: center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Testimoni</th>
            <th scope="col">Nama</th>
            <th scope="col">Button</th>
          </tr>
        </thead>
        <tbody>
            <?php $no=0; ?>
            @foreach ($datatesti as $testi)
                <tr>
                    <?php $no++; ?>
                    <th scope="row"></th>
                    <td>{{$no}}</td>
                    <td>{{$testi->testimoni}}</td>
                    <td>{{$testi->nama}}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-primary btn-sm" href="#" style="padding: 5px 20px; margin: 0 5px;background: #fdb827; border: none;">Edit</a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus ini?')" href="/hapustesti/{{$testi->id}}">
                                <button class="btn btn-primary btn-sm" type="submit" style="padding: 5px 20px; margin: 0 5px;background: #ec4646; border: none;">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$datatesti->link()}}
    <div class="row">
        <div class="col-lg-4">
            <form action="guru/tambahguru" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="testimoni" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Testimoni">
                    <input type="text" name="nama" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Nama">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
