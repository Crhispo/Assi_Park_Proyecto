
<h2>Editar apartamento</h2>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Formulario de Apartamento</h3>
                        <p class="animated fadeInDown">
                          Admin <span class="fa-angle-right fa"></span> Editar Apartamento
                        </p>
                    </div>
                  </div>
</div>

<form action="{{ url('/apartamento/'.$apartamento->ID_APARTAMENTO)}}" method="POST">
@csrf
{{ method_field('PUT') }}
@include('apartamento.form',['modo'=>'Editar'])

</form>

