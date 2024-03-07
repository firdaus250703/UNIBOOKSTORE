@extends('master')
@section('index')
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-danger">(*) wajib diisi</p>
                            {{-- enctype="multipart/form-data" ini wajib ada kalau mau ngirim file  --}}
                            <form action="{{ route('storepenerbit') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="basicInput">kode</label>
                                    <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" id="basicInput" placeholder="Masukkan kode">
                                    @error('kode')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                  </div>
                                  <div class="col-md-6">
                                    <label for="basicInput">nama penerbit<small class="text-danger">*</small></label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="basicInput" placeholder="Masukkan nama penerbit">
                                    @error('nama')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                  </div>
                                </div>
                                <div class="row mt-4">
                                    {{-- <div class="col-md-6">
                                        <label for="">Kategori</label>
                                        <select name="kategori" class="form-select" aria-label="Default select example">
                                            <option hidden></option>
                                            @foreach ($kategori as $item)
                                               <option value="{{ $item->id }}">{{ $item['kategori']}}</option> 
                                            @endforeach
                                          </select>
                                    </div> --}}
                                    <label for="basicInput">kota<small class="text-danger">*</small></label>
                                    <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" id="basicInput" placeholder="Masukkan kota penerbit">
                                    @error('kota')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    {{-- <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Sampul Buku <small>Max.500 Kb </small><small class="text-danger">*</small> </label>
                                            <input name="sampul" class="form-control @error('sampul') is-invalid @enderror" type="file" id="formFile">
                                            @error('sampul')
                                              <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                          </div>
                                    </div> --}}
                                    <label for="basicInput">telepon<small class="text-danger">*</small></label>
                                    <input type="text" name="telepon" class="form-control @error('telepon') is-invalid @enderror" id="basicInput" placeholder="Masukkan telepon penerbit">
                                    @error('telepon')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">alamat</label>
                                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                          </div>
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary mt-3" type="submit">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection