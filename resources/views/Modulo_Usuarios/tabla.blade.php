
        <table id="Tabla_consulta" class="table table-striped">
            <thead>
                <tr>
                    <th>documento de identidad</th>
                    <th>Tipo de usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>celular</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th>Modificar</th>
                    <th>Inhabilitar</th>
                </tr>
            </thead>
            <tbody>
                @if(!isset($Select))
                @php($Select = '')
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                @else
                @foreach($Select as $value)
                <tr>
                    <td>{{ $value-> {'Numero del documento de identidad'} }}</td>
                    <td>{{ $value-> {'Tipo de usuario'} }}</td>
                    <td>{{ $value-> {'Nombres'} }}</td>
                    <td>{{ $value-> {'Apellidos'} }}</td>
                    <td>{{ $value-> {'Direccion'} }}</td>
                    <td>{{ $value-> {'Telefono fijo'} }}</td>
                    <td>{{ $value-> {'Numero de celular'} }}</td>
                    <td>{{ $value-> {'Correo electronico'} }}</td>
                    <td>
                        @switch($value->{'Estado del usuario'})
                        @case(1)
                        Activo
                        @break

                        @case(0)
                        Inactivo
                        @break

                        @default
                        Erros
                        @endswitch
                    </td>

                    <!------ BOTONES DE EDITAR Y ELIMINAR ------->

                    <td> 

                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
                        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">


                        @include('Modulo_Usuarios.modificar') 



                    </td>
                    <td>
                        <form action="{{ url('Usuario.'.$value-> {'Numero del documento de identidad'})}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}

                            
                            <input hidden name="Estado_Usuario" value="0"/>
                            <input type="submit" onclick="return confirm('Desea inhabilitar?')" value="Inhabilitar">

                        </form>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
