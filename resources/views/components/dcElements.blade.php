<div class="dcElements">
    <div class="container d-flex flex-row">
        @foreach($dcElements as $element)
            <ul class="d-flex flex-row list-unstyled">
                <li class="mr-3">
                    <a href="">{{ $element['text'] }}</a>
                    <img src="{{ $element['img'] }}" />
                </li>
            </ul>
        @endforeach
    </div>
</div>
