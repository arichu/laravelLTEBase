@extends('layouts.app')

@section('htmlheader_title')
    @lang('eform.module')
@endsection
@section('contentheader_title')
    @lang('eform.edittitle')
@endsection
@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('eform.edittitle')</div>
                    <div class="panel-body">
                        @include('layouts.partials.error')
                        {!! Form::model($eform, array('route' => array('eform.update', $eform->id), 'method' =>
                        'put')) !!}
                        <div>
                            {!! Form::label('order','Orden', ['class'=>'control-label']) !!}
                            {!! Form::text('order',null, ['class'=>'form-control']) !!}
                        </div>
                         
                        <div>
                            {!! Form::label('deliver_date','Fecha de entrega', ['class'=>'control-label']) !!}
                            {!! Form::date('deliver_date',null, ['class'=>'form-control']) !!}
                        </div>
                        <h2>Descripcion:</h2>
                        <div>
                            {!! Form::label('description','Descripcion:', ['class'=>'control-label']) !!}
                            {!! Form::text('description',null, ['class'=>'form-control']) !!}
                        </div>
                        <h2></h2>
                        <input type="submit" value="Actualizar Datos" onclick="return actualizarCK();" />
                        {!! Form::close() !!}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@push('pagescripts')
<script>
CKEDITOR.replace( 'description' );
               var html = `{!!$eform->description!!}`;
               CKEDITOR.instances['description'].setData(html);
function actualizarCK(){
        document.getElementById("description").value=CKEDITOR.instances.description.getSnapshot();}
               CKEDITOR.instances.description.on('blur', function(){CKEDITOR.instances.description.updateElement();});
CKEDITOR.on('instanceReady', function(){
  $.each( CKEDITOR.instances, function(instance) {

    CKEDITOR.instances[instance].on("instanceReady", function() {
      this.document.on("keyup", CK_jQ);
      this.document.on("paste", CK_jQ);
      this.document.on("keypress", CK_jQ);
      this.document.on("blur", CK_jQ);
      this.document.on("change", CK_jQ);
    });
  });

});

function CK_jQ() {
  for ( var instance in CKEDITOR.instances ) { CKEDITOR.instances[instance].updateElement(); }
}
               
               </script>
            @endpush