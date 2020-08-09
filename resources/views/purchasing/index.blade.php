@extends('main')

@section('content')
<div class="container-fluid">
       
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Permintaan Barang</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="card-title">
           
        </div>
        @php
            $no = 1;
        @endphp
        <div class="card-body">
            <a href="{{ route('request.create') }}" class="btn btn-primary btn-sm">Tambah Permintaan</a>
            <br>
            <br>
            <a href="{{ route('pdf') }}" class="btn btn-info btn-sm">PDF</a>
            <table class="table border" id="myTable">
                <thead>
                    <tr>
                        {{-- <th>Tanggal Buat</th> --}}
                        <th>No</th>
                        <th>Barang</th>
                        <th>Supplier</th>
                        <th>Tanggal Order</th>
                        <th>Jumlah</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->item->name }}</td>
                            <td>{{ $item->purchase->name }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->total }}</td>
                            <td>{{ Illuminate\Support\Str::limit($item->description, 20) }} </td>
                            @if ($item->status == 0)
                                <td> <span class="badge badge-warning">Belum Diproses</span></td>
                            @elseif ($item->status == 1)
                                <td> <span class="badge badge-success">Diterima</span></td>
                            @else
                                <td> <span class="badge badge-danger">Ditolak</span></td>
                            @endif
                            <td> 
                                @if ($item->status != 0)
                                    
                                @else
                                <div class="row">
                                        <div class="col-md-2">
                                            <a href="{{ route('request.edit', $item->id ) }}" class="btn btn-warning btn-sm">Edit</a>
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-2">
                                            <form action="{{ route('request.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

@endsection