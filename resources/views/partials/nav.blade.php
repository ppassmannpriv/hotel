    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
                @include('partials.header.logo')
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
                @include('partials.header.contact')
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <nav>
                    <ul>
                        @foreach($navigation as $name => $url)
                            <li><a href="{{$url}}">{{$name}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="col-sm-4">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </div>