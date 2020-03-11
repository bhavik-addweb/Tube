<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<a href="index.html"><img src="/images/logo.png" title="logo" /></a>
				</div>
				<!---End-logo---->
				<!---start-top-menu-search---->
				<div class="top-menu">
					<div class="top-nav">
						<ul>
							<li><a href="<?php echo e(route('crud.create')); ?>">Add</a></li>
							<li><a href="#">Videos</a></li>
							<li><a href="categories.html">Categories</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
					</div>
					<div class="search">
						<form>
							<input type="text" class="textbox" value="Search:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value=" " />
						</form>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<!---End-top-menu-search---->
			</div><?php /**PATH /var/www/Laravel-5.8-Crud-Tutorial-master/resources/views/assets/header.blade.php ENDPATH**/ ?>