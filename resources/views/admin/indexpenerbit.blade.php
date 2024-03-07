@extends('master')
@section('index')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12">
                        <h3>Data Penerbit</h3>
                    </div>
                    <div class="col-md-8">
                        <a href="">
                            <button class="btn btn-primary mt-2">
                                <i class="fa fa-plus-circle"></i> Tambah Data
                            </button>
                        </a>
                    </div>
                    <div class="col-md-4 ps-5">
                        <div class="d-flex">
                            <div class="col-8">
                        <input type="text" id="last-name" class="form-control ms-3" name="fname"
                            placeholder="Search">
                        </div>
                        <button class="btn btn-success ms-4"><i class="fa fa-search"></i> Cari</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="chart-profile-visit">
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                
                                <tr>
                                    <th>#</th>
                                    <th>KODE</th>
                                    <th>NAMA</th>
                                    <th>KOTA</th>
                                    <th>TELEPON</th>
                                    <th>ALAMAT</th>
                                    <th style="width: 25%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penerbit as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td class="text-bold-500">{{ $item->kode }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td class="text-bold-500">{{ $item->kota }}</td>
                                    <td>{{ $item->telepon }}</td>
                                    <td class="text-bold-500">{{ $item->alamat }}</td>
                                
                                    <td>
                                        <a href="#" class="btn icon btn-primary"><i class="bi bi-info-circle"></i></a>
                                        <a href="#" class="btn icon btn-warning ms-3"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn icon btn-danger ms-3"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
