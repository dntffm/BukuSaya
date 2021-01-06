<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <title>Ecommerce Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    {{-- <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css"> --}}

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('vendor/stisla/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/stisla/css/components.css')}}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{asset('vendor/stisla/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{Auth::user()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{url('/logout')}}"  class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); document.querySelector('#logout-form').submit()">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form action="{{url('/logout')}}" method="POST" style="display: none" id="logout-form">
                              @csrf
                          </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{url('/admin')}}">TokoBuku AdminPage</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li><a href="{{url('/admin')}}" class="nav-link"><i
                          class="fas fa-fire"></i><span>Dashboard</span></a></li>
                        <li class="menu-header">Shop</li>
                        <li><a class="nav-link" href="{{url('/admin/shop')}}"><i class="far fa-square"></i> <span>Kelola Toko</span></a></li>
                        <li><a class="nav-link" href="{{url('/admin/categories')}}"><i class="far fa-square"></i> <span>Kategori</span></a></li>
                        
                        <li class="menu-header">Transaksi</li>
                        <li><a href="{{url('/admin/transaction')}}" class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Histori Transaksi</span></a></li>
                      
                       
                        <li class="menu-header">User</li>
                        <li><a class="nav-link" href="#"><i class="far fa-user"></i> <span>Kelola User</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('errorfile'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ session('errorfile') }}</li>
                    </ul>
                </div>
                @endif
                @yield('content')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>
    
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{asset('/vendor/stisla/js/stisla.js')}}"></script>
    

    <!-- JS Libraies -->
    {{-- <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script> --}}

    <!-- Template JS File -->
    <script src="{{asset('vendor/stisla/js/scripts.js')}}"></script>
    <script src="{{asset('vendor/stisla/js/custom.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{asset('vendor/stisla/js/page/index.js')}}"></script>
    <script>
        function reqData(url,method,async,datas)
        {
            let data = null;
            let xhr = new XMLHttpRequest()
            if(method === 'GET')
            {
                xhr.open(method,url,async)
                try{
                    xhr.send()
                    if(xhr.status != 200)
                    {
                        alert(`Error ${xhr.status}: ${xhr.statusText}`);
                    }else{
                        data = xhr.responseText
                    }
                }catch(err){
                    alert(err)
                }
            }
            /* else if(method === 'PATCH'){
                xhr.open(method,url,async)
                xhr.setRequestHeader('Content-Type','Application/x-www-form-urlencoded')
                xhr.setRequestHeader('Accept','application/json')
                xhr.setRequestHeader('x-csrf-token',$('meta[name="csrf-token"]').attr('content'))
                try{
                    xhr.send(data)
                    if(xhr.status != 200)
                    {
                        alert(`Error ${xhr.status}: ${xhr.statusText}`);
                    }else{
                        data = xhr.responseText
                    }
                }catch(err){
                    alert(err)
                }
            } */
            return JSON.parse(data)
        }

        $('#tambahBuku').fireModal({
            title : 'Tambah Buku Baru',
            body : `
                <form action="{{url('/admin/product-admin')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Gambar Buku (png,jpg)</label>
                      <input name="cover" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Judul Buku</label>
                      <input name="judul" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Harga Buku</label>
                      <input name="harga" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Penerbit</label>
                      <input name="penerbit" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Penulis</label>
                      <input name="penulis" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Stock</label>
                      <input name="stock" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Kategori</label>
                      <select name="kategori" class="form-control">
                        <option>--Pilih Kategori--</option>
                        @foreach(App\Category::all() as $item)
                            <option value="{{$item->id}}">{{$item->category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                   
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    
                  </div>  
                </form>
            `,
            center : true
        })
        $('#tambahKategori').fireModal({
            title : 'Tambah Kategori Buku Baru',
            body : `
                <form action="{{url('/admin/categoryadm')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Nama Kategori</label>
                      <input name="kategori" type="text" class="form-control">
                    </div>
                    
                   
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    
                  </div>  
                </form>
            `,
            center : true
        })
        $('.detailbuku').on('click',function(){
            let id = this.dataset.id
            let uri = encodeURI('http://localhost/tokobuku/BukuSaya/public/admin/product-admin/' + id)
            let data = reqData(uri, 'GET', false)
            $('#detailbuku-'+id).fireModal({
                title: 'Detail ' + data.title,
                body: `
                        <ul class="list-group">
                            <li class="list-group-item">Judul Buku: ${data.title}</li>
                            <li class="list-group-item">Harga : ${data.price}</li>
                            <li class="list-group-item">Kategori : ${data.category[0].category_name}</li>
                            <li class="list-group-item">Penulis : ${data.author}</li>
                            <li class="list-group-item">Penerbit : ${data.publisher}</li>
                        </ul>
                        `
            })
        })
        $('.editbuku').on('click',function(){
            let id = this.dataset.id
            let uri = encodeURI('http://localhost/tokobuku/BukuSaya/public/admin/product-admin/' + id +'/edit')
            let data = reqData(uri,'GET',false)
            console.log(data)
            $('#editbuku-'+id).fireModal({
                title : 'Edit Product',
                body : `
                <form action="{{url('/admin/product-admin/${data.id}')}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input name="catid" type="hidden" value="${data.category[0].id}" class="form-control">
                    <div class="form-group">
                      <label>Gambar Buku (png,jpg)</label>
                      <input name="cover" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Judul Buku</label>
                      <input name="judul" type="text" value="${data.title}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Harga Buku</label>
                      <input name="harga" type="number" value="${data.price}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Penerbit</label>
                      <input name="penerbit" type="text" value="${data.author}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Penulis</label>
                      <input name="penulis" type="text" value="${data.author}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Stock</label>
                      <input name="stock" type="number" value=${data.stock} class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Kategori</label>
                      <select name="kategori" class="form-control">
                        <option value="1">--Pilih Kategori--</option>
                        @foreach(App\Category::all() as $item)
                            <option value="{{$item->id}}">{{$item->category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                    
                   
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    
                  </div>  
                </form>
                `,
                center : true
            })
        })
        $('.editkategori').on('click',function(){
            let id = this.dataset.id
            let uri = encodeURI('http://localhost/tokobuku/BukuSaya/public/admin/categoryadm/' + id +'/edit')
            let data = reqData(uri,'GET',false)
            $('#editkategori-'+id).fireModal({
                title : 'Edit Kategori',
                body : `
                <form action="{{url('/admin/categoryadm/${data.id}')}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                      <label>Nama Kategori</label>
                      <input value="${data.category_name}" name="kategori" type="text" class="form-control">
                    </div>
                    
                   
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    
                  </div>  
                </form>
                `,
                center : true
            })
        })
        $('.detailtrns').on('click',function(){
            let id = this.dataset.id
            let uri = encodeURI('http://localhost/tokobuku/BukuSaya/public/admin/product-admin/' + id)
            let data = reqData(uri, 'GET', false)
            $('#detailtrns-'+id).fireModal({
                title: 'Detail Transaksi : no. #' + id,
                body: `
                        <ul class="list-group">
                            <li class="list-group-item">Judul Buku: ${data.title}</li>
                            <li class="list-group-item">Harga : ${data.price}</li>
                            <li class="list-group-item">Kategori : ${data.category[0].category_name}</li>
                            <li class="list-group-item">Penulis : ${data.author}</li>
                            <li class="list-group-item">Penerbit : ${data.publisher}</li>
                        </ul>
                        `
            })
        })
    </script>
</body>

</html>
