<h1>{{ $modo }} Empleado</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach( $errors->all() as $error )
            <li> {{ $error }} </li>
        @endforeach
        </ul>
    </div>

@endif

<div class="form-group">

<label for="Foto"></label>
@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="100">
@endif
<input class="form-control" type="file" name="Foto" value="" id="Foto">

</div>

<div class="form-group">

<label for="Nombre">Nombre</label>
<input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">

</div>

<div class="form-group">

<label for="ApellidoPaternoNombre">Apellido Paterno</label>
<input class="form-control" type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">

</div>

<div class="form-group">

<label for="ApellidoMaterno">Apellido Materno</label>
<input class="form-control" type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">

</div>

<div class="form-group">

<label for="Correo">Correo</label>
<input class="form-control" type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}"  id="Correo">

</div>

<br>
<input class="btn btn-success" type="submit" value="{{$modo}} Datos">

<a class="btn btn-primary" href="{{ url('empleado/') }}">Volver</a>