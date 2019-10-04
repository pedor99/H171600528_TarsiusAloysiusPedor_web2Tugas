@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Berita</div>

                <div class="card-body">
                   <table border="1">
		<tr>
			<td>ID</td>
			<td>Judul</td>
			<td>Isi</td>
			<td>User_id</td>
			<td>Create</td>
			<td>Update</td>
			<td>Kategori Berita Id</td>
		</tr>

		@foreach($listBerita as $item)

		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->isi !!}</td>
			<td>{!! $item->users_id !!}</td> 
			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
			<td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
			<td>{!! $item->kategori_berita_id !!}</td>
		</tr>

		@endforeach
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
