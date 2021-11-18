@extends('front.layouts.frontend')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="div">
                <img src="{{ asset('uplouds/'. $artikel->gambar_artikel) }}" class="img-fluid" alt="gambar artikel">
            </div>

            <div class="detail-artikel mt-2 p-4">
                <div class="detail-badge">
                    <a href="" class="badge badge-warning">{{ $artikel->kategori->nama_kategori }}</a>
                    <a href="" class="badge badge-primary">{{ $artikel->users->name }}</a>
                </div>
                <h2>{{ $artikel->judul }}</h2>
                <div class="detail-body">
                    {!! $artikel->body !!}
                </div>
            </div>

        </div>

        <div class="col-lg-4 mt-4">
                <div class="detail-sidebar-iklan">
                    <h4>{{ $iklanA->judul_iklan }}</h4>
                    <hr>
                    <a href="">
                        <img src="{{ asset('uplouds/'. $iklanA->gambar_iklan) }}" width="350" alt="">
                    </a>
                </div>
                
                <div class="detail-sidebar-kategori mt-4">
                    <h4 class="mt-2">Kategori</h4>
                    <hr>
                    @foreach ($category as $row)
                    <div class="sidebar-kategori d-flex flex-wrap">
                        <a href="" style="text-decoration: none">
                            <p>{{ $row->nama_kategori }}</p>
                        </a>
                        <p class="ml-auto text-right">
                            <span class= "badge badge-dark">{{ $row->artikel->count() }}</span>
                        </p>
                    </div>
                    @endforeach
                    
                    {{-- <div class="sidebar-kategori d-flex flex-wrap">
                        <a href="" style="text-decoration: none">
                            <p>Nama Kategori</p>
                        </a>
                        <p class="ml-auto text-right">
                            <span class= "badge badge-dark">7</span>
                        </p>
                    </div>
                    <div class="sidebar-kategori d-flex flex-wrap">
                        <a href="" style="text-decoration: none">
                            <p>Nama Kategori</p>
                        </a>
                        <p class="ml-auto text-right">
                            <span class= "badge badge-dark">7</span>
                        </p>
                    </div>
                    <div class="sidebar-kategori d-flex flex-wrap">
                        <a href="" style="text-decoration: none">
                            <p>Nama Kategori</p>
                        </a>
                        <p class="ml-auto text-right">
                            <span class= "badge badge-dark">7</span>
                        </p>
                    </div> --}}

                </div>

                <div class="detail-artikel-terbaru">
                    <h4 class="mt-4">Artikel Terbaru</h4>
                    <hr>
                    @foreach ($postinganTerbaru as $row)
                    <div class="media mt-3">
                        <img src="{{ asset('uplouds/'. $row->gambar_artikel) }}" width="70px" class="mr-3" alt="...">
                        <div class="media-body">
                          <h6 class="mt-0">{{ $row->judul }}</h6>
                        </div>
                    </div>
                        
                    @endforeach

                </div>
        </div>
    </div>
</div>
@endsection
