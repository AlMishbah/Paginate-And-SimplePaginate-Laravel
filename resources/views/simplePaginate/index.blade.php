@extends('template_backend.home')
@section('title', 'Simple Paginate')
@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
     {{ Session('success')}}
</div>
@endif

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($simple as $result => $hasil)
               <tr>
                    <td>{{ $result + $simple->firstitem() }}</td>
                    <td>{{ $hasil->name }}</td>
               </tr>
               @endforeach
           </tbody>
       </table>
       {{ $simple->links() }}

@endsection
