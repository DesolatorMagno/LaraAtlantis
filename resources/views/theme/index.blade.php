@extends('layouts/master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">
                            <h2>{{ trans('general.dashboard') }}</h2>
                        </h4>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <span class="text">
                        You are logged in!
                    </span>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('sidebar')
<li class="nav-item">
    <a data-toggle="collapse" href="#theme">
        <i class="fas fa-users"></i>
        <p>@lang('theme.theme')</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="theme">
        <ul class="nav nav-collapse">
            <li class="li-list">
                <a href="{{ route('theme.list') }}">
                    <i class="fas fa-list"></i>
                    <span>@lang('general.listing')</span>
                </a>
            </li>
            <li class="li-add">
                <a href="">
                    <i class="fas fa-plus"></i>
                    <span>{{ trans('general.new', ['model' => trans('theme.theme')]) }}</span>
                </a>
            </li>
        </ul>
    </div>
</li>

@endpush
