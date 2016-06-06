@extends('layouts.app')

@section('htmlheader_title')
    @lang('paciente.module')
@endsection

@section('contentheader_title')
    @lang('paciente.indextitle')
@endsection


@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('tables.list')

                    <a href="{{url('paciente/create')}}" class='btn btn-xs btn-primary pull-right'>
                        @lang('tables.add') @lang('paciente.record')</a>
                </div>
                <div class="panel-body">
                    <table id='table' class="table table-bordered table-hover dataTable">
                        <thead>
                        <tr>
                            <th>@lang('tables.actions')</th>
                            <th>@lang('paciente.first_name')</th>
                            <th>@lang('paciente.last_name')</th>
                            <th>@lang('paciente.dni')</th>
                            <th>@lang('paciente.gender')</th>
                            <th>@lang('paciente.age')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <td>
                                    <div class="btn-group">
                                    <form action="{{ url('paciente/'.$row->id) }}" method="POST">
                                            {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                        <a href="{{route('paciente.show', $row->id)}}" class="btn btn-primary btn-xs"><i
                                                    class='fa fa-eye'></i> </a>
                                        <a href="{{route('paciente.edit', $row->id)}}" class="btn btn-info btn-xs"><i
                                                    class='fa fa-edit'></i> </a>

                                 <button class="btn btn-danger btn-xs" onclick="return confirm('Esta seguro que desea eliminar este elemento?') ">
                           <i class="fa fa-trash"></i>
                      </button>
                </form>
                                    </div>

                                </td>
                                <td>{{$row->first_name}}</td>
                                <td>{{$row->last_name}}</td>
                                <td>{{$row->dni}}</td>
                                <td>
                                    @if($row->gender == '1')
                                        <small class="label bg-blue">@lang('paciente.genderm')</small>
                                    @else
                                        <small class="label bg-red">@lang('paciente.genderf')</small>
                                    @endif
                                </td>
                                <td>{{$row->age}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
@endsection
@push('pagescripts')
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            "language": {
                "lengthMenu": "@lang('tables.lengthMenu')",
                "zeroRecords": "@lang('tables.zeroRecords')",
                "info": "@lang('tables.info')",
                "infoEmpty": "@lang('tables.infoEmpty')",
                "infoFiltered": "@lang('tables.infoFiltered')",
                "search":"@lang('tables.search')",
                "paginate": {
                    "first": "@lang('tables.first')",
                    "last": "@lang('tables.last')",
                    "next": "@lang('tables.next')",
                    "previous": "@lang('tables.previous')"
                }
            }
        })
    });
</script>
@endpush
