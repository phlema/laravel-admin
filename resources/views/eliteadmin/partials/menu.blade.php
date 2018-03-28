@if(Admin::user()->visible($item['roles']))
    @if(!isset($item['children']))
        <li>
            @if(url()->isValidUrl($item['uri']))
                <a href="{{ $item['uri'] }}" class="waves-effect" target="_blank">
                    @else
                        <a href="{{ admin_base_path($item['uri']) }}" class="waves-effect">
                            @endif
                            <i class="linea-icon linea-basic fa-fw fa {{$item['icon']}}" ></i>
                            <span class="hide-menu">{{$item['title']}}</span>
                        </a>
        </li>
    @else
        <li>
            <a href="#" class="waves-effect">
                <i class="linea-icon linea-basic fa-fw fa {{$item['icon']}}"></i>
                <span class="hide-menu">{{$item['title']}}</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level">
                @foreach($item['children'] as $item)
                    @include('admin::partials.menu', $item)
                @endforeach
            </ul>
        </li>
    @endif
@endif