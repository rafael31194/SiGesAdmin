<ul class="nav navbar-nav">
<li><a href="{{ url('/') }}">Home</a></li>
@if(Auth::user())
    @if(Auth::user()->rol == 'secretaria'  )
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Solicitud
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{url('solicitud')}}">Diferido</a></li>
                <li><a href="{{url('solicitud')}}">Repetido</a></li>
                <li><a href="#">Revision</a></li>
                <li><a href="#">Segunda Revision</a></li>
            </ul>
        </li>

    @endif
@endif
@if(Auth::user())
    <li><a href="{{url('/publicaciones')}}">Publicaciones</a></li>
@endif
@if(Auth::user())
    @if(Auth::user()->rol == 'admin')
        <li><a href="{{ url('admin/users') }}">Registro De Usuarios</a></li>
        @endif
        @endif
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li><a href="{{ url('/auth/login') }}">Login</a></li>
                <li><a href="{{ url('/auth/register') }}">Registro</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                    </ul>
                </li>
        @endif
        </ul>