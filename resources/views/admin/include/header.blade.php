<header id="header" class="navbar bg bg-black">
        <ul class="nav navbar-nav navbar-avatar pull-right">
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs-only">{{ Auth::user()->name }}</span> <span class="thumb-small avatar inline"><img src="{{asset('admin_asset/images/avatar.png')}}" alt="{{ Auth::user()->name }}"
                            class="img-circle"></span> <b class="caret hidden-xs-only"></b> </a>
                <ul class="dropdown-menu pull-right">                   
                    <li><a href="{{route('profile')}}">Profile</a></li>               
                    <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                  

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </ul>
            </li>
        </ul> <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('admin_asset/images/logo.png')}}" alt="{{ env('APP_NAME') }}"
                            class=" text-center"></a> <button type="button" class="btn btn-link pull-left nav-toggle visible-xs"
            data-toggle="class:slide-nav slide-nav-left" data-target="body"> <i class="fa fa-bars fa-lg text-default"></i>
        </button>
        
    </header> <!-- / header -->