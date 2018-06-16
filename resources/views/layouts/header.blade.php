@if(isset($background_image) && $background_image)
    <style>
        @media screen and (min-width: 768px) {
            .main-header {
                background: url("{{ $background_image }}") no-repeat center center;
                background-size: 100% auto;
                position: static;
            }
        }
    </style>
@endif
<header class="main-header">
    <div class="container-fluid" style="margin-top: -15px">
        <nav class="navbar site-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#blog-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ route('index') }}"
                   class="navbar-brand">
                    <img src="{{asset('site/img/logos/logo-pitagoras_bl.png')}}" height="80" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse fix-top" id="blog-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a class="menu-item" href="{{ route('achieve') }}">Arquivo</a></li>
                    @if(XblogConfig::getValue('github_username'))
                        <li><a class="menu-item" href="{{ route('projects') }}">Projetos</a></li>
                    @endif
                    @foreach($pages as $page)
                        <li><a class="menu-item"
                               href="{{ route('page.show',$page->name) }}">{{ $page->display_name }}</a></li>
                    @endforeach
                </ul>
                <ul class="nav navbar-nav navbar-right blog-navbar">
                    @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                $user = auth()->user();
                                $unreadNotificationsCount = $user->unreadNotifications->count();
                                ?>
                                @if($unreadNotificationsCount)
                                    <span class="badge required">{{ $unreadNotificationsCount }}</span>
                                @endif
                                {{ $user->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('user.show',auth()->user()->name) }}">Perfil</a></li>
                                @if(isAdmin(Auth::user()))
                                    <li><a href="{{ route('admin.index') }}">Admin</a></li>
                                @endif
                                <li><a href="{{ route('user.notifications') }}">
                                        <?php
                                        $user = auth()->user();
                                        $unreadNotificationsCount = $user->unreadNotifications->count();
                                        ?>
                                        @if($unreadNotificationsCount)
                                            <span class="badge required">{{ $unreadNotificationsCount }}</span>
                                        @endif
                                            Notificações
                                    </a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ url('login') }}">Login</a></li>
                        <li><a href="{{ url('register') }}">Cadastrar</a></li>
                    @endif
                </ul>
                <form class="navbar-form navbar-right" role="search" method="get" action="{{ route('search') }}">
                    <input type="text" class="form-control" name="q" placeholder="Buscar" required>
                </form>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="description">{{ $description or 'Stay Hungry. Stay Foolish.' }}</div>
    </div>
</header>