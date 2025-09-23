
<div class="sidebar sidebar-style-2">			
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<ul class="nav nav-primary">
				<li class="nav-item">
					<a href="/dashboard" class="nav-link">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>

				<li class="nav-item">
                    <a href="{{ route('pppoe.secret') }}" class="nav-link">
                        <i class="fas fa-signal"></i>
                        <p>PPPoE</p>
                    </a>
                </li>
				
				<li class="nav-item">
					<a href="{{ route('hotspot.hotspot') }}" class="nav-link">
						<i class="fas fa-broadcast-tower"></i>
						<p>Monitoring Hostpot</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="{{ route('blockedip.blockedip') }}" class="nav-link">
						<i class="fas fa-globe"></i>
						<p>Akses Terlarang</p>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="/notification" class="nav-link">
						<i class="fas fa-bell"></i>
						<p>Notification</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="/Monitoring-User" class="nav-link">
						<i class="fas fa-chart-bar"></i>
						<p>Monitoring</p>
					</a>
				</li>
			</ul>	
		</div>
	</div>
</div>
