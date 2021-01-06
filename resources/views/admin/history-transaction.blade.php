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
              
            <div class="card-header-form">
              <form>
              </form>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>     
                  <th>Tanggal</th>
                  <th>Username</th>
                  <th>Nama Penerima</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $item)     
                    <tr>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->recipient}}</td>
                        <td>{{$item->recipient}}</td>
                        <td>
                            <div class="btn-group mb-3" role="group" aria-label="Basic example">
                              <button class="btn btn-primary detailtrns" id="detailtrns-{{$item->id}}" data-id="{{$item->id}}"><i class="fas fa-eye"></i></button>
                            </div>
                          </td>
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

