<nav id="nav" class="nav-primary hidden-xs nav-vertical">
        <ul class="nav" data-spy="affix" data-offset-top="50">
            <li class="active"><a href="{{route('home')}}"><i class="fa fa-dashboard fa-lg"></i><span>Dashboard</span></a></li>
            <li class="dropdown-submenu"> <a href="#"><i class="fa fa-bars fa-lg"></i><span>Sliders</span></a>
                <ul class="dropdown-menu">
               
                    <li><a href="{{route('slider.add')}}">Add New</a></li>
                    <li><a href="{{route('slider.list')}}">List</a></li>
                   
                </ul>
            </li>
            <li class="dropdown-submenu"> <a href="#"><i class="fa fa-picture-o fa-lg"></i><span>Portfolio</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('portfolio.add')}}">Add New</a></li>
                    <li><a href="{{route('portfolio.list')}}">List</a></li>
                   
                </ul>
            </li>
            
        </ul>
    </nav>