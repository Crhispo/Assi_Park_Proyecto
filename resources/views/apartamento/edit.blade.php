
<h2>Editar apartamento</h2>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


<form action="{{ url('/apartamento/'.$apartamento->ID_APARTAMENTO)}}" method="POST">
@csrf
{{ method_field('PATCH') }}
@include('apartamento.form',['modo'=>'Editar'])

</form>

