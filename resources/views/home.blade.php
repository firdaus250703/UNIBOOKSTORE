@extends('master')
@section('index')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="text-secondary"><b>Data Penerbit</b></h4>
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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="text-secondary"><b>Data Buku</b></h4>
            </div>
            <div class="card-body">
                <div id="chart-profile-visit">
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>KODE</th>
                                    <th>KATEGORI</th>
                                    <th>NAMA BUKU</th>
                                    <th>HARGA</th>
                                    <th>STOK</th>
                                    <th>PENERBIT</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buku as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td class="text-bold-500">{{ $item->kode }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td class="text-bold-500">{{ $item->nama_buku }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td class="text-bold-500">{{ $item->stok }}</td>
                                    <td>{{ $item->penerbit }}</td>
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