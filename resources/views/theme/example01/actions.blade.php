@extends('layouts/master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">
                            <h2>@lang('theme.theme') @lang("actions.title_$type")</h2>
                        </h4>
                    </div>
                </div>
                <form action="{{ $type == 'store' ? route('theme.store') : route('theme.update', $theme->id) }}" role="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        @if ($type == 'update')
                        @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="name">@lang('theme.name')</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="" placeholder="@lang('theme.name')" value="{{ $theme ? old('name', $theme->name) : old('name', '') }}" {{ $type == "show" ? 'disabled' : ''}}>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="age">@lang('theme.age')</label>
                            <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" id="" placeholder="@lang('theme.age')" value="{{ $theme ? old('age', $theme->age) : old('age', '') }}" {{ $type == "show" ? 'disabled' : ''}}>
                            @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location">@lang('theme.location')</label>
                            <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" id="" placeholder="@lang('theme.location')" value="{{ $theme ? old('location', $theme->location) : old('location', '') }}" {{ $type == "show" ? 'disabled' : ''}}>
                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('theme.index') }}" class="btn btn-outline-dark">@lang('general.back')</a>
                        <button type="submit" class="btn btn-outline-primary" {{ $type== "show" ? 'disabled hidden' : ''}}>@lang("actions.button_$type")</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
<style>
    :disabled {
        color: #6c757d!important;
    }
</style>
@endpush
@push('script')
<script>
@if ($type == 'store')
    activateMenu('theme','li-add');
@else
    activateMenu('theme','');
@endif
</script>
@endpush
@include('theme.sidebar-extra')
