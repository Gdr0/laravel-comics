<section>
    <div class="container d-flex justify-content-between align-items-center">
        <div class="sign-up">
            <button>SIGN-UP NOW!</button>
        </div>
        <div class="social d-flex flex-row align-items-center">
            <span class="p-2"> Follow us</span>
            <ul class="list-unstyled d-flex flex-row align-items-center m-0 p-0">
                @foreach($socialMedia as $icon)
                    <li class="m-0 p-2"> 
                        <img src="{{$icon['img']}}" alt="" /> 
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
