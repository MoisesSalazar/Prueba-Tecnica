@extends('Plantilla.plantilla')

@section('content')
<br>
<br><br><br><br>
<div class="card col-lg-4 mx-auto bg-gradient">

    <div class="card-body px-5 py-5">
        <h3 class="card-title text-left mb-3 text-center">Login</h3>

        <form autocomplete="off" action="{{route('autenticar')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Correo</label>
                <input name="email" type="text" class="form-control " value="{{old('email')}}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input name="password" type="password" class="form-control p_input ">
                @error('text')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-rounded btn-lg">Ingresar</button>
            </div>

        </form>
    </div>
</div>
@endsection