@extends('admin.layouts.app')
@section('content')

<section class="section">
  <div class="section-header">
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{url('/admin')}}">Dashboard</a></div>
      <div class="breadcrumb-item">Kategori Buku</div>
    </div>
  </div>
  @if (session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
  @endif
  <div class="section-body">
    <h2 class="section-title">Kategori Buku</h2>
    <p class="section-lead">kategori Buku Toko Online TokoBuku</p>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
              <h4>
                  <button class="btn btn-primary" id="tambahKategori" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Kategori Buku Baru</button>
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
                  <th>Nama Kategori Buku</th>
                  <th>Aksi</th>
                </tr>
                @foreach (App\Category::all() as $item)     
                  <tr>
                    
                      <td>{{$item->category_name}}</td>
                      <td>
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                          <button class="btn btn-primary editkategori" id="editkategori-{{$item->id}}" data-id="{{$item->id}}"><i class="fas fa-edit"></i></button>
                          <a href="{{url('/admin/categoryadm/').'/'.$item->id}}" class="btn btn-primary" onclick="
                            event.preventDefault()
                            if(confirm('yakin')){
                              document.querySelector('#form-{{$item->id}}').submit()
                            }
                          "><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                  </tr>
                <form id="form-{{$item->id}}" action="{{url('/admin/categoryadm/').'/'.$item->id}}" method="post" style="display: none">
                  @csrf
                  @method('delete')
                </form>
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

