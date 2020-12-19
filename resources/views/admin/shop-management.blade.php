@extends('admin.layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{url('/admin')}}">Dashboard</a></div>
        <div class="breadcrumb-item">Table</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Produk</h2>
      <p class="section-lead">Produk Toko Online TokoBuku</p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h4>
                    <button class="btn btn-primary">Tambah Buku Baru</button>
                </h4>
              <div class="card-header-form">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                   
                    <th>Judul Buku</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($data as $item)     
                    <tr>
                      
                        <td>{{$item->title}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                        <img alt="image" src="{{asset('vendor/stisla/img/avatar/avatar-5.png')}}" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                        </td>
                        <td>{{$item->stock}}</td>
                        <td>{{$item->category[0]->category_name}}</td>
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                  @endforeach
                  {{$data->links()}}
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
@endsection