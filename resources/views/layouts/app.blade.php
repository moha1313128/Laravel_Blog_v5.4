<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <a class="navbar-item" >
              <img src="{{asset('images/devmarketer-logo.png')}}"  width="112" height="100">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
          </div>

          <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
              <a class="navbar-item">
                Learn
              </a>

              <a class="navbar-item">
                Discuss
              </a>

              <a class="navbar-item">
                Share
              </a>

              <div class="navbar-item has-dropdown is-hoverable" style="overflow: visible;">
                <a class="navbar-link">
                  Hey There
                </a>

                <div class="navbar-dropdown">
                  <a class="navbar-item">
                    Profile
                  </a>
                  <a class="navbar-item">
                    Notifications
                  </a>
                  <a class="navbar-item">
                    Settings
                  </a>
                  <hr class="navbar-divider">
                  <a class="navbar-item">
                    Logout
                  </a>
                </div>
              </div>
            </div>

            <div class="navbar-end">
              <div class="navbar-item">
                <div class="buttons">
                @if (!Auth::guest())
                  <a class="button is-primary">
                    <strong>Sign up</strong>
                  </a>  
                  <a class="button is-light">
                    Log in
                  </a>
                @else
                  <a class="button is-primary">
                      <strong>Log out</strong>
                  </a>
                @endif  
                </div>
              </div>
            </div>
          </div>
        </nav>
        </div>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
