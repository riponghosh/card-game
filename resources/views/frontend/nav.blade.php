<header id="header" class="header-narrow" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": false}'>
	<div class="header-body">
		<div class="header-top header-top-secondary header-top-style-3">
			<div class="container">
				<div class="header-search">
							<form id="searchForm" action="page-search-results.html" method="get">
								<div class="input-group">
									<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</form>
						</div>
				<nav class="header-nav-top pull-right">
					<ul class="nav nav-pills">
						
						
						<li>
							<a href="#" class="dropdown-menu-toggle" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								English
								<i class="fa fa-sort-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
								<li>
									<a href="#english"><img src="/frontend/img/blank.gif" class="flag flag-us" alt="English"> English</a>
								</li>
								<li>
									<a href="#espanol"><img src="/frontend/img/blank.gif" class="flag flag-es" alt="Español"> Español</a>
								</li>
								<li>
									<a href="#francaise"><img src="/frontend/img/blank.gif" class="flag flag-fr" alt="Française"> Française</a>
								</li>
							</ul>
						</li>
						<li class="hidden-xs">
							<span class="ws-nowrap"><i class="fa fa-envelope"></i> <a href="mailto:mail@example.com">mail@example.com</a></span>
						</li>

					</ul>
				</nav>
				<p class="hidden-xs text-color-tertiary">
					The best place to eat in  !
				</p>
			</div>
		</div>
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-logo">
						<router-link to="/" tag='span' exact>
						<a>
							<img alt="Porto" width="164" height="55" src="/frontend/img/demos/restaurant/logo-restaurant.png">
						</a>
						</router-link>
					</div>
				</div>
				<div class="header-column">
					<div class="header-row">
						<div class="header-nav">
							<span class="btn header-btn-collapse-nav" style="background-color: white;margin: 0px; padding-left: 0px; padding-right: 0px;">
								<ul class="nav" style="background-color: white; padding-left: 0px;">
									<li style="line-height: 0px;">
										<a href="demo-restaurant-press.html">
											<i class="fa fa-user"></i> Sign in
										</a>
									</li>
									<li style="line-height: 0px;">
										<a href="demo-restaurant-contact.html">
											<i class="fa fa-user-plus"></i> Sign Up
										</a>
									</li>
								</ul>
									
								

							</span>
							<ul class="nav nav-pills header-btn-collapse-nav ph" style="background-color: white; margin: 5px 0 0px 15px;">

								<router-link to="/save-post" tag='li' class="activedropdown-full-color dropdown-secondary" style="line-height: 0px;">
								
									<a>
										My Post
									</a>
								
								</router-link>
								<li class="dropdown-full-color dropdown-secondary" style="line-height: 0px;">
									<a href="demo-restaurant-menu.html">
										My Save Post
									</a>
								</li> 
								<li class="dropdown-full-color dropdown-secondary" style="line-height: 0px;">
									<a href="demo-restaurant-about.html">
										Profile
									</a>
								</li>
								
							</ul>
							<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">

										<router-link to="/new-post" tag='li' class="dropdown-full-color dropdown-secondary">
											<a href="demo-restaurant.html">
												New Post
											</a>
										</router-link>

										<router-link to="/my-post" tag='li' class="dropdown-full-color dropdown-secondary">
											<a href="demo-restaurant.html">
												My Post
											</a>
										</router-link>
										<router-link to="/save-post" tag='li' class="dropdown-full-color dropdown-secondary">
										
											<a href="demo-restaurant-menu.html">
												My Save Post
											</a>
										</router-link>

										<router-link to="/profile" tag='li' class="dropdown-full-color dropdown-secondary">
										
											<a href="demo-restaurant-about.html">
												Profile
											</a>
										</router-link>
										
										<router-link to="/register" tag='li' class="dropdown-full-color dropdown-secondary">
										
											<a href="demo-restaurant-contact.html">
												<i class="fa fa-user-plus"></i> Sign Up
											</a>
										</router-link>

										<router-link to="/login" tag='li' class="dropdown-full-color dropdown-secondary">
										
											<a href="demo-restaurant-press.html">
												<i class="fa fa-user"></i> Sign in
											</a>
										</router-link>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>