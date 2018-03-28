<div {!! $attributes !!}>
    <div class="white-box">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $title }}
                @if(!empty($tools))
                    <div class="panel-action">
                        @foreach($tools as $tool)
                            {!! $tool !!}
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    {!! $content !!}
                </div>
            </div>

            @if($footer != '')
                <div class="panel-footer"> {!! $footer !!}</div>
            @endif

        </div>
    </div>
</div>