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
                <a href="{{ route('theme.index') }}">
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
