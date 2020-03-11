<head>
<script>
						$( "li a.menu1" ).click(function() {
						$( "ul.cl-effect-2" ).slideToggle( 300, function() {
						// Animation complete.
						});
						});
			</script>

<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<a href="index.html"><img src="/images/logo.png" title="logo" /></a>
				</div>
				<!---End-logo---->
				<!---start-top-menu-search---->
			
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
			</div>