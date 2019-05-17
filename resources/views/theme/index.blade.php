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
                        <table class="display table table-striped table-hover" id="company-table">
                            <thead>
                                <tr>
                                    <th>@lang('theme.name')</th>
                                    <th>@lang('theme.age')</th>
                                    <th>@lang('theme.location')</th>
                                    <th>@lang('general.actions')</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($themes as $theme)
                                <tr>
                                    <td>{{ $theme->name }}</td>
                                    <td>{{ $theme->age }}</td>
                                    <td>{{ $theme->location }}</td>
                                    <td>
                                        <div class="btn-toolbar" role="toolbar" aria-label="">
                                            <div class="btn-group" role="group" aria-label="">
                                                <a href="" class="btn btn-sm btn-info">@lang('general.details')</a>
                                                <a href="" class="btn btn-sm btn-success">@lang('general.edit')</a>
                                            <form action="{{ route('theme.destroy', ['id'=>$theme->id]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger crud-delete" type="button" onclick="">@lang('general.delete')</button>
                                                </form>
                                            </div>
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
                @include('partials.datable', ['tableName' => 'company-table'])
            </div>
        </div>
    </div>
</div>
@endsection
@push('scrypt')
<script>
activateMenu('theme','li-list');
</script>
@endpush
@include('theme.sidebar-extra')
