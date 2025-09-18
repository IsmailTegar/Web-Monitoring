
<div class="sidebar sidebar-style-2">			
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="/dashboard" class="collapsed">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>

				<li class="nav-item active">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-signal"></i>
                        <p>PPPoE</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('pppoe.secret') }}">
                                    <span class="sub-item">PPPoE Secret</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </li>
				
				<li class="nav-item active">
					<a href="{{ route('hotspot.hotspot') }}" aria-expanded="false">
						<i class="fas fa-broadcast-tower"></i>
						<p>Monitoring Hostpot</p>
					</a>
				</li>

				<li class="nav-item active">
					<a href="{{ route('blockedip.blockedip') }}" aria-expanded="false">
						<p>Akses Terlarang</p>
					</a>
					<div class="collapse" id="dashboard">
						<ul class="nav nav-collapse">
							<li>
								<a href="../demo1/index.html">
									<span class="sub-item">Web Diblokir</span>
								</a>
							</li>
							<li>
								<a href="../demo2/index.html">
									<span class="sub-item">Web Akses User</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				
				<li class="nav-item active">
					<a href="/notification" class="collapsed">
						<p>Notification</p>
					</a>
				</li>

				<li class="nav-item active">
					<a href="/Monitoring-User" class="collapsed">
						<p>Monitoring</p>
					</a>
				</li>
			</ul>	
		</div>
	</div>
</div>
