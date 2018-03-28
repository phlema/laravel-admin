@extends('admin::index')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">{{ $header or trans('admin.title') }}
                <small>{{ $description or trans('admin.description') }}</small></h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Trade Now</a>
            <!-- breadcrumb start -->
            @if ($breadcrumb)
                <ol class="breadcrumb" style="margin-right: 30px;">
                    <li><a href="{{ admin_url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    @foreach($breadcrumb as $item)
                        @if($loop->last)
                            <li class="active">
                                @if (array_has($item, 'icon'))
                                    <i class="fa fa-{{ $item['icon'] }}"></i>
                                @endif
                                {{ $item['text'] }}
                            </li>
                        @else
                            <li>
                                <a href="{{ admin_url(array_get($item, 'url')) }}">
                                    @if (array_has($item, 'icon'))
                                        <i class="fa fa-{{ $item['icon'] }}"></i>
                                    @endif
                                    {{ $item['text'] }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ol>
            @endif
            <!-- breadcrumb end -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <section class="content">

        @include('admin::partials.error')
        @include('admin::partials.success')
        @include('admin::partials.exception')
        @include('admin::partials.toastr')
            {!! $content !!}

    </section>
@endsection