<div class="background pt-4">
<div class="container comics_list">
    @foreach($comics as $comic)
        <div class="card-comic">
            <img src="{{ $comic['thumb'] }}" />
            <span class="title">{{ $comic['title'] }}</span>
        </div>
    @endforeach
    <button>LOAD MORE</button>
</div>

</div>