@extends('Plantilla.plantilla')
@section('content')
<!-- Para la table -->


<a href="{{route('logout')}}" class="btn-primary dropdown-item preview-item">
    <div class="preview-item-content">
        <p class="preview-subject mb-1">Cerrar Sesión</p>
    </div>
</a>
<div class="table-responsive">
    <table table id="example" class="table table-striped table-dark" style="width:100%">
        <thead>
            <tr>
                <th> Codigo ID </th>
                <th> Nombres </th>
                <th> Correo </th>
                <th> Fecha email </th>
                <th> Fecha token </th>

            </tr>
        </thead>
        <tbody id="myTable" class="text-light">
            @foreach($usuarios as $user)
            <tr>
                <th> {{$user->id}} </th>
                <th> {{$user->name}} </th>
                <th> {{$user->email}} </th>
                <th> {{$user->email_verified_at}} </th>
                <th> {{$user->remember_token}} </th>

            </tr>
            @endforeach

        </tbody>
        <thead>
            <tr>
                <th> Codigo ID </th>
                <th> Nombres y Apellidos </th>
                <th> Correo </th>
                <th> Fecha email </th>
                <th> Fecha token </th>
            </tr>
        </thead>
    </table>
</div>
@endsection