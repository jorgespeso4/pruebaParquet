<form action="{{ url('/maderas/'.$maderas->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('catalogo.formulario',['modo'=>'Editar'])
</form>