@extends('layouts.master')
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</h2>
			
			<div class="col-lg-8 mx-auto my-5">	

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group p-3">
						<b>File Gambar</b><br/>
						<input type="file" name="foto">
					</div>

					<div class="form-group p-3">
						<b>Tanggal Terbit</b><br>
						<input type="date" name="tanggal_terbit">
					</div>
                    
					<div class="form-group p-3">
						<b>Judul</b>
						<textarea class="form-control" name="judul"></textarea>
					</div>

					<div class="form-group p-3">
						<b>Edisi</b>
						<textarea class="form-control" name="edisi"></textarea>
					</div>

					<div class="form-group p-3">
						<b>URL</b><br>
						<input type="file" name="url">
					</div>
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
