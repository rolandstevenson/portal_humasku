@extends('layouts.default')

@section('content')
 <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            </div>
        </div>
    </div>
<div class="page-inner mt--5">    
    <div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Data Banner</div>
                        {{-- <a href="{{ route('iklan.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-plus"></i>    Tambah Banner</a> --}}
                      
					</div>
				</div>
				<div class="card-body">
                    {{-- @if (Session::has('success'))
                        <div class="alert alert-primary">
                            {{ Session('success') }}
                        </div>
                    @endif --}}
					<div class="table-responsive">
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul Banner Iklan</th>
                                <th>Link</th>
                                <th>Status</th>
                                <th>Gambar Banner Iklan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($iklan as $row)
                            <tr>

                                <td>{{ $row->id }}</td>
                                <td>{{ $row->judul_iklan}}</td>
                                <td>{{ $row->link }}</td>
                                <td>
                                    @if ($row->status == '1')
                                        Active
                                        @else
                                        Draft
                                    @endif
                                </td>
                                <td> 
                                    <img src=" {{ asset('uplouds/' . $row->gambar_iklan) }}" width="100" >  
                                </td>


                                <td>
                                    <a href="{{ route('iklan.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>
                                    
                                    {{-- <form action="{{ route('iklan.destroy', $row->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form> --}}
                                    
                                
                                </td>
                                


                            </tr>  
                            @empty
                            <tr>
                                <td colspan="7"class="text-center">Data Masih Kosong</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

