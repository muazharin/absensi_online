<!-- /section:basics/navbar.layout -->
<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try {
			ace.settings.loadState('main-container')
		} catch (e) {}
	</script>

	<!-- #section:basics/sidebar -->
	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try {
				ace.settings.loadState('sidebar')
			} catch (e) {}
		</script>



		<ul class="nav nav-list">
			<!-- <li class="">
				<a href="<?= base_url();?>dashboard" onclick="return confirm('Maaf.. Fitur ini sedang dalam proses pengembangan');">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li> -->
			<li class="">
				<a href="<?= base_url();?>laporan">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?= base_url();?>users">
					<i class="menu-icon fa fa-users"></i>
					<span class="menu-text"> Users </span>
				</a>

				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?= base_url();?>track">
					<i class="menu-icon fa fa-map"></i>
					<span class="menu-text"> Tracking </span>
				</a>

				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?= base_url();?>administrator" >
					<i class="menu-icon fa fa-user-plus"></i>
					<span class="menu-text"> Administrator </span>
				</a>

				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="#" onclick="mn_logout()">
					<i class="menu-icon fa fa-power-off"></i>
					<span class="menu-text"> Logout </span>
				</a>

				<b class="arrow"></b>
			</li>
		</ul><!-- /.nav-list -->

		<!-- #section:basics/sidebar.layout.minimize -->
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>

		<!-- /section:basics/sidebar.layout.minimize -->
	</div>