@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Kategori Pengumuman</div></center>
                <center>
                <div class="card-body">
                	
                   <table border="1">
                   	    <thead class="btn-lg bg-info">
                   			<tr>
								<th scope="col"><center>ID</center></th>
								<th scope="col"><center>Nama</center></th>
								<th scope="col"><center>Users Id</center></th>
								<th scope="col"><center>Create</center></th>
								<th scope="col"><center>Update</center></th>
								<th scope="col"><center>Aksi</center></th>
							</tr>
                  	 	</thead>


		@foreach($listKategoriPengumuman as $item)

		<tr>
			<td><center>{!! $item->id !!}</center></td>
			<td><center>{!! $item->nama !!}</center></td>
			<td><center>{!! $item->users_id !!}</center></td> 
			<td><center>{!! $item->created_at->format('d/m/Y H:i:s') !!}</center></td>
			<td><center>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</center></td>
			<td>
				<a href=" {!! route('kategori_pengumuman.show',[$item->id]) !!}" class="btn btn-lg btn-success">Lihat</a>
			
				<a href=" {!! route('kategori_pengumuman.edit',[$item->id]) !!}" class="btn btn-lg btn-warning">Edit</a>

				{!! Form::open( ['route' => ['kategori_pengumuman.destroy', $item->id],'method'=>'delete']) !!}
				{!! Form::submit('Hapus',['class'=>'btn btn-lg btn-danger','onclick'=>"return confirm('Apakah Kamu Yakin Ingin Menghapus ?')"]); !!}
				{!! Form::close() !!}
			</td>
		</tr>

		@endforeach
	</table>
</center>
	<a href="{!! route('kategori_pengumuman.create') !!}" class="btn btn-secondary">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
