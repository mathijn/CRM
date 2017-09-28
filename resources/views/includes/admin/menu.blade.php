<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav col-lg-1">
            @foreach($menuItems as $menuItem)
                <li><a href="/{{$menuItem->url}}"><i class="{{$menuItem->icon}}"></i> {{$menuItem->name}}</a></li>
            @endforeach
        </ul>
</div>