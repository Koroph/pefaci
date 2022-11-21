@extends("web.layouts.index")

@section('main')
    <div id="web-main" class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <ul id="left-menu">
                    <li>
                        <a
                            href="{{ route('web.account') }}"
                            class="{{ \Illuminate\Support\Facades\Route::currentRouteName()==="web.account" ? "active":"" }}">
                            <x-icon name="account_circle"></x-icon>
                            <span>
                                Votre compte
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('web.subscription') }}"
                            class="{{  in_array(\Illuminate\Support\Facades\Route::currentRouteName(),["web.subscription","web.subscription_show","web.subscription_create"]) ? "active":"" }}">
                            <x-icon name="recent_actors"></x-icon>
                            <span>
                                Souscriptions
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('web.payment') }}"
                            class="{{ \Illuminate\Support\Facades\Route::currentRouteName()==="web.payment" ? "active":"" }}">
                            <x-icon name="payments"></x-icon>
                            <span>Versements</span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#" onclick="event.preventDefault();document.getElementById('logout_form').submit();">
                            <x-icon name="power_settings_new"></x-icon>
                            <span>Déconnexion</span>
                        </a>
                        <form
                            id="logout_form"
                            style="display: none;"
                            method="post"
                            action="{{ route('web.logout') }}">
                            @csrf
                            @method("PUT")
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-9 px-3" id="web-main-content">
                @yield('content')
            </div>
        </div>
    </div>
@endsection

@section('title')
    @yield('title')
@endsection
