<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!---End-logo---->
				<!---start-top-menu-search---->
				<div class="top-menu">
					<div class="top-nav">
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Videos</a></li>
							<li><a href="categories.html">Categories</a></li>
                            <li><a href="{{ route('crud.create') }}" >Add</a></li>
							<li><a href="contact.html">Contact</a></li>
                            
                            <!-- @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif -->
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
			</div>
            </div>