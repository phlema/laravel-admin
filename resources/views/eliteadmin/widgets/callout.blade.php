<div {!! $attributes !!} >
    <div class="white-box">
        @if(isset($title))
        <h4>{{ $title }}</h4>
        @endif
        {!! $content !!}
    </div>
</div>