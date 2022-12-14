<div class="bg-banner">
    @if(\Illuminate\Support\Facades\Session::get('locale') == "en")

        <a href="{{ asset('images/Component 1.png') }}" class="progressive replace">
            <img src="{{ asset('images/Component 1.png') }}" class="preview img-fluid "
                 style="object-fit: cover; width:100%;"
                 alt="No image"/>
        </a>

        {{--        <img src="{{ asset('images/Component 1.png') }}" class="img-fluid" style="object-fit: cover; width:100%;">--}}

    @elseif (\Illuminate\Support\Facades\Session::get('locale') == "bn")

        <a href="{{ asset('images/Component_Bangla.png') }}" class="progressive replace">
            <img src="{{ asset('images/Component_Bangla.png') }}" class="preview img-fluid "
                 style="object-fit: cover; width:100%;"
                 alt="No image"/>
        </a>

        {{--        <img src="{{ asset('images/Component_Bangla.png') }}" class="img-fluid" style="object-fit: cover; width:100%;">--}}
    @else

        <a href="{{ asset('images/Component 1.png') }}" class="progressive replace">
            <img src="{{ asset('images/Component 1.png') }}" class="preview img-fluid "
                 style="object-fit: cover; width:100%;"
                 alt="No image"/>
        </a>

        {{--        <img src="{{ asset('images/Component 1.png') }}" class="img-fluid" style="object-fit: cover; width:100%;">--}}
    @endif
</div>
