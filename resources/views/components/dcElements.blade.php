<div class="dcElements">
    <div class="container d-flex justify-content-around p-3 align-items-center">
        <ul class="d-flex flex-row list-unstyled justify-content-around">
            @foreach($dcElements as $element)
                <li class="mr-3">
                    <a href="">{{ $element['text'] }}</a>
                    <img src="{{ $element['img'] }}" alt="{{ $element['text'] }}" />
                </li>
            @endforeach
        </ul>
    </div>
</div>
