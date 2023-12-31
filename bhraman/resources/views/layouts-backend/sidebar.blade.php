<aside class="main-sidebar sidebar-dark-primary elevation-4">

	<a href="index3.html" class="brand-link">
		<img src="{{asset('/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Bharaman AAdesh</span>
	</a>

	<div class="sidebar">

		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">{{Auth::user()->name}}</a>
			</div>
		</div>

		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Config
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{route('header.index')}}" class="nav-link active">
								<i class="far fa-circle nav-icon"></i>
								<p>Header</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="{{route('employee.index')}}" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Employee
							<span class="right badge badge-danger">New</span>
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{route('bharam.index')}}" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Bhraman
							<span class="right badge badge-danger">New</span>
						</p>
					</a>
				</li>
			</ul>
		</nav>

	</div>

</aside>