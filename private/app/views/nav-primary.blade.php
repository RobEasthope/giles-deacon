<ul>
	<li{{ Request::addClassIfActive('collections*', 'nav-active'); }}>
		<a href="{{ URL::to('collections'); }}">Collections</a>
	</li>
	<li{{ Request::addClassIfActive('couture*', 'nav-active'); }}>
		<a href="{{ URL::to('couture'); }}">Couture</a>
	</li>
	<li{{ Request::addClassIfActive('archive*', 'nav-active'); }}>
		<a href="{{ URL::to('archive'); }}">Archive</a>
	</li>
	<li{{ Request::addClassIfActive('studio*', 'nav-active'); }}>
		<a href="{{ URL::to('studio'); }}">Studio</a>
	</li>
	<li{{ Request::addClassIfActive('press*', 'nav-active'); }}>
		<a href="{{ URL::to('press'); }}">Press</a>
	</li>
	<li{{ Request::addClassIfActive('stockists*', 'nav-active'); }}>
		<a href="{{ URL::to('stockists'); }}">Stockists</a>
	</li>
</ul>