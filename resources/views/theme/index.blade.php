@extends('layouts/master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">
                            <h2>{{ trans('theme.theme') }} {{ trans('general.list') }}</h2>
                        </h4>
                        <a href="" class="btn btn-primary btn-round ml-auto btn-add">
                            <i class="fa fa-plus"></i>
                            {{ trans('general.new', ['model' => trans('general.company')]) }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display table table-striped table-hover" id="theme-table">
                            <thead>
                                <tr>
                                    <th>@lang('theme.name')</th>
                                    <th>@lang('theme.age')</th>
                                    <th>@lang('theme.location')</th>
                                    <th style="width: 100px;" class="label-align-center" >@lang('general.actions')</th>
                                </tr>
                            </thead>
                            <!--
                            <tfoot>
                                <tr>
                                    <th>@lang('theme.name')</th>
                                    <th>@lang('theme.age')</th>
                                    <th>@lang('theme.location')</th>
                                    <th>@lang('general.actions')</th>
                                </tr>
                            </tfoot>
                        -->
                            <tbody>
                             @foreach ($themes as $theme)
                                <tr>
                                    <td>{{ $theme->name }}</td>
                                    <td>{{ $theme->age }}</td>
                                    <td>{{ $theme->location }}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <a data-toggle="tooltip" title="" class="btn btn-link btn-primary" data-original-title="Details" href="{{ route('theme.show', ['id'=>$theme->id]) }}">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a data-toggle="tooltip" title="" class="btn btn-link btn-success" data-original-title="Edit Task" href="{{ route('theme.edit', ['id'=>$theme->id]) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('theme.destroy', ['id'=>$theme->id]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="button" data-toggle="tooltip"  title="" class="btn btn-link btn-danger crud-delete" data-original-title="@lang('general.delete')" onclick="deleteForm(this)">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('theme') }}" class="btn btn-outline-dark text-white">@lang('general.back')</a>
                </div>
                @include('partials.datable', ['tableName' => 'theme-table'])
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
activateMenu('theme','li-list');
</script>
@endpush
@include('theme.sidebar-extra')
