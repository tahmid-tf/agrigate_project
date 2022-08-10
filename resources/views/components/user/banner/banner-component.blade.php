<div class="bg-banner">
    @if(\Illuminate\Support\Facades\Session::get('locale') == "en")
        <img src="{{ asset('images/Component 1.png') }}" class="img-fluid" style="object-fit: cover; width:100%;">
    @elseif (\Illuminate\Support\Facades\Session::get('locale') == "bn")
        <img src="{{ asset('images/Component_Bangla.png') }}" class="img-fluid" style="object-fit: cover; width:100%;">
        @else
        <img src="{{ asset('images/Component 1.png') }}" class="img-fluid" style="object-fit: cover; width:100%;">
    @endif
</div>
