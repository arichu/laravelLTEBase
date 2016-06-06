@extends('layouts.app')

@section('htmlheader_title')
    @lang('eform.module')
@endsection

@section('contentheader_title')
    @lang('eform.createtitle')
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('eform.createtitle')</div>
                    <div class="panel-body">
                        @include('layouts.partials.error')
                        {!! Form::open(array('url' => 'eform')) !!}
                        <div>
                            {!! Form::label('order','Orden', ['class'=>'control-label']) !!}
                            {!! Form::text('order',null, ['class'=>'form-control']) !!}
                        </div>
                         {!! Form::hidden('user_id', $paciente->id) !!} 
                        <div>
                            {!! Form::label('deliver_date','Fecha de entrega', ['class'=>'control-label']) !!}
                            {!! Form::date('deliver_date',null, ['class'=>'form-control']) !!}
                        </div>
                        <h2>Descripcion:</h2>
                        <div>
                            {!! Form::label('description','Descripcion:', ['class'=>'control-label']) !!}
                            {!! Form::textarea('description',null, ['class'=>'form-control']) !!}
                        </div>
                        <h2></h2>
                        {!! Form::submit('Guardar datos',['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('pagescripts')
<script>
                CKEDITOR.replace('description');
               // $('#deliver_date').datepicker({});
            </script>
            @endpush