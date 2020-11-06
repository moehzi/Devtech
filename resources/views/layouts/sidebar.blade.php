<div class="menu">
	<h4>Main Menu</h4>
	<div class="homepage">
		<img src="{{ asset('assets/img/home.svg') }}">
		<a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Homepage</a>
	</div>
	<div class="members">
			<img src="{{ asset('assets/img/community.svg') }}" alt="">
			<a class="{{ request()->is('member') ? 'active' : '' }}" href="member">Members</a>
	</div>
</div>