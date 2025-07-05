<!-- Preloader Start -->
<div class="preloader">
	<div class="loading-container">
		<div class="loading"></div>
		<div id="loading-icon"><img src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') }} Loading"></div>
	</div>
</div>
<!-- Preloader End -->

<header class="main-header topbar">
	<div class="header-sticky">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand logo" href="{{ config('app.url') }}">
					<img class="img-fluid" src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') }} - {{ config('app.slogan') }}">
				</a>
				<div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                        </ul>
                    </div>
				</div>
			</div>
		</nav>
		<div class="responsive-menu"></div>
	</div>
</header>
