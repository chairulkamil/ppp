@extends('layouts.master')

@section('title', 'PPP Book')

@section('content')
    <nav aria-label="breadcrumb" style="padding: 3rem 0rem 0rem 8rem; margin-bottom: -2rem;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active-menu" aria-current="page">PPP Book</li>
        </ol>
    </nav>

    <div class="container" style="padding-top: 3rem;">
        <div class="card p-4">
            <h4><b>PPP Book</b></h4>
            <table class="table table-bordered table-hover" id="pppTable">
                <thead>
                    <tr>
                        <th style="text-align: center; width: 25%;">Gambar</th>
                        <th style="text-align: center;">Judul</th>
                        <th style="text-align: center; width: 25%;">File PDF</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ppp as $data)
                        
                    <tr>
                        <td style="text-align: center;"><img style="width: 8rem; height: 11rem; padding: 0.2rem;" src="{{ url('/data_file/'.$data->foto) }}"></td>
                        <td style="text-align: center;">{{ $data->judul }}</td>
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
        var table = $('#pppTable').DataTable( {
            pageLength : 5,
            lengthMenu: [[5, 10, 20], [5, 10, 20]]
        } )
    } );
</script>
@endpush