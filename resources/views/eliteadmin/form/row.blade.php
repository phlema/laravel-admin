
<div class="row">
    <div class="white-box">
        @foreach($fields as $field)
        <div class="col-md-{{ $field['width'] }}">
            {!! $field['element']->render() !!}
        </div>
        @endforeach
    </div>
</div>