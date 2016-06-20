@extends('layouts.app')

@section('htmlheader_title')
    @lang('general.module')
@endsection
@section('contentheader_title')
    @lang('general.edittitle')
@endsection
@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('general.edittitle')</div>
                    <div class="panel-body">
                        @include('layouts.partials.error')
                        {!! Form::model($general, array('route' => array('general.update', $general->id), 'method' =>
                        'put')) !!}
                        <div>
                            {!! Form::label('order','Orden', ['class'=>'control-label']) !!}
                            {!! Form::text('order',null, ['class'=>'form-control']) !!}
                        </div>

                        <div>
                            {!! Form::label('deliver_date','Fecha de entrega', ['class'=>'control-label']) !!}
                            {!! Form::date('deliver_date',null, ['class'=>'form-control']) !!}
                        </div>
                        <h2>Examen Fisico:</h2>
                        <div>
                            {!! Form::label('volumen','Volumen:', ['class'=>'control-label']) !!}
                            {!! Form::text('volumen',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('color','Color:', ['class'=>'control-label']) !!}
                            {!! Form::text('color',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('olor','Olor:', ['class'=>'control-label']) !!}
                            {!! Form::text('olor',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('espuma','Espuma:', ['class'=>'control-label']) !!}
                            {!! Form::text('espuma',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('aspecto','Aspecto:', ['class'=>'control-label']) !!}
                            {!! Form::text('aspecto',null, ['class'=>'form-control']) !!}
                        </div>
                        <h2>Examen Quimico:</h2>
                        <div>
                            {!! Form::label('densidad','Densidad:', ['class'=>'control-label']) !!}
                            {!! Form::text('densidad',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('reaccion','Reaccion:', ['class'=>'control-label']) !!}
                            {!! Form::text('reaccion',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('proteinas','Proteinas:', ['class'=>'control-label']) !!}
                            {!! Form::text('proteinas',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('ccetonicos','Ccetonicos:', ['class'=>'control-label']) !!}
                            {!! Form::text('ccetonicos',null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="box body">
                            <div>
                                {!! Form::label('hemoglobina','Hemoglobina:', ['class'=>'control-label']) !!}
                                {!! Form::text('hemoglobina',null, ['class'=>'form-control']) !!}
                            </div>
                            <div>
                                {!! Form::label('glucosa','Glucosa:', ['class'=>'control-label']) !!}
                                {!! Form::text('glucosa',null, ['class'=>'form-control']) !!}
                            </div>
                            <div>
                                {!! Form::label('salbiliares','Salbiliares:', ['class'=>'control-label']) !!}
                                {!! Form::text('salbiliares',null, ['class'=>'form-control']) !!}
                            </div>
                            <div>
                                {!! Form::label('pigbiliares','Pigbiliares:', ['class'=>'control-label']) !!}
                                {!! Form::text('pigbiliares',null, ['class'=>'form-control']) !!}
                            </div>
                            <div>
                                {!! Form::label('urobilinogeno','Urobilinogeno:', ['class'=>'control-label']) !!}
                                {!! Form::text('urobilinogeno',null, ['class'=>'form-control']) !!}
                            </div>
                            <div>
                                {!! Form::label('nitritos','Nitritos:', ['class'=>'control-label']) !!}
                                {!! Form::text('nitritos',null, ['class'=>'form-control']) !!}
                            </div>
                            <h2>Examen Microscopico:</h2>
                            <div>
                                {!! Form::label('leucocitos','leucocitos:', ['class'=>'control-label']) !!}
                                {!! Form::text('leucocitos',null, ['class'=>'form-control']) !!}
                            </div>
                            <div>
                                {!! Form::label('hematies','Hematies:', ['class'=>'control-label']) !!}
                                {!! Form::text('hematies',null, ['class'=>'form-control']) !!}
                            </div>
                            <div>
                                {!! Form::label('celepiteliales','Celepiteliales:', ['class'=>'control-label']) !!}
                                {!! Form::text('celepiteliales',null, ['class'=>'form-control']) !!}
                            </div>
                            <div>
                                {!! Form::label('flbacteriana','Flora bacteriana:', ['class'=>'control-label']) !!}
                                {!! Form::text('flbacteriana',null, ['class'=>'form-control']) !!}
                            </div>
                            <div>
                                {!! Form::label('cristales','Cristales:', ['class'=>'control-label']) !!}
                                {!! Form::text('cristales',null, ['class'=>'form-control']) !!}
                            </div>
                            <div>
                                {!! Form::label('otros','Otros:', ['class'=>'control-label']) !!}
                                {!! Form::text('otros',null, ['class'=>'form-control']) !!}
                            </div>
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
