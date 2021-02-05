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
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col-6">Deskripsi</th>
            <th scope="col">Button</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($items as $no => $item)
                <tr>
                    <th scope="row">{{$no+1}}</th>
                    <td>
                        <img src="{{Storage::url($item->image)}}" alt="image" style="width: 150px" class="img-thumbnail">
                    </td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-primary btn-sm" href="{{route('interior.edit', $item->id)}}" style="padding: 5px 20px; margin: 0 5px;background: #fdb827; border: none;">Edit</a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus ini?')">
                            <form action="{{route('interior.destroy', $item->id)}}" method="POST" >
                                @csrf
                                @method('delete')
                                <button class="btn btn-primary btn-sm" type="submit" style="padding: 5px 20px; margin: 0 5px;background: #ec4646; border: none;">Delete</button>
                            </form>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="
                    text-center">Data belum ada</td>
                </tr>

            @endforelse

        </tbody>
      </table>
      <div class="d-flex justify-content-end" style="margin: 10px">
        <a class="btn btn-primary btn-sm" type="submit" href="{{route('interior.create')}}" style="padding: 5px 20px; margin: 0 5px; background: #54e346; border: none;">Create</a>
      </div>
    </div>
@endsection
