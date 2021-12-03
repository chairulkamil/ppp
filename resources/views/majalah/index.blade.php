@extends('layouts.master')

@section('content')
    <div class="container" style="padding-top: 3rem;">
        <div class="card p-4">
            <h4><b>Majalah</b></h4>
            <table class="table table-bordered table-hover" id="majalahTable">
                <thead>
                    <tr>
                        <th style="text-align: center; width: 7rem;">Gambar</th>
                        <th style="text-align: center; width: 7rem;">Tanggal Terbit</th>
                        <th style="text-align: center;">Judul</th>
                        <th style="text-align: center; width: 7rem;">Edisi</th>
                        <th style="text-align: center; width: 5rem;">File PDF</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($majalah as $data)
                        
                    <tr>
                        <td><img style="width: 8rem; height: 11rem; padding: 0.2rem;" src="{{ url('/data_file/'.$data->foto) }}"></td>
                        <td style="text-align: center;">{{ $data->tanggal_terbit }}</td>
                        <td style="text-align: center;">{{ $data->judul }}</td>
                        <td style="text-align: center;">{{ $data->edisi }}</td>
                        <td style="text-align: center;"><a href="{{ asset('data_url/'.$data->url) }}">Buka PDF!</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('after-script')
<script>
    $(document).ready( function () {
        var table = $('#majalahTable').DataTable( {
            pageLength : 5,
            lengthMenu: [[5, 10, 20], [5, 10, 20]]
        } )
    } );
</script>
@endpush