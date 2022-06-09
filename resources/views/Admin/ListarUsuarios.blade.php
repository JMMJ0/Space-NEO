<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin.css">

    <title>Document</title>
</head>

<body>

    <x-nav />
    <div class="create-btn">
        <a href="{{ route('Admin.CrearUsuario') }}">Crear Usuario +</a>
    </div>
    <div class="cnt-table">

        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1"> Id</div>
                <div class="col col-2">Name</div>
                <div class="col col-3">Surname</div>
                <div class="col col-4">Email</div>
                <div class="col col-5">Phone Number</div>
                <div class="col col-6">City</div>
                <div class="col col-7">Acciones</div>
            </li>
            @foreach ($user as $usuario)
                <li class="table-row">
                    <div class="col col-1" data-label="Job Id">{{ $usuario->id }}</div>
                    <div class="col col-2" data-label="Customer Name">{{ $usuario->name }}</div>
                    <div class="col col-3" data-label="Amount">{{ $usuario->surname }}</div>
                    <div class="col col-4" data-label="Payment Status">{{ $usuario->email }}</div>
                    <div class="col col-5" data-label="Payment Status">{{ $usuario->phone_number }}</div>
                    <div class="col col-6" data-label="Payment Status">{{ $usuario->ciudad_usuario }}</div>
                    <div class="col col-7" data-label="Payment Status">


                        <a href="{{ route('Admin.EditarUsuarios', $usuario->id) }}">EDITAR</a>


                        <form action="{{ route('Admin.borrarUsuario', $usuario->id) }}" method="post">
                            @csrf
                            {{ method_field('delete') }}
                            <input class="borrar" type="submit" value="BORRAR">
                        </form>

                    </div>
                </li>
            @endforeach

        </ul>
    </div>





</body>

</html>