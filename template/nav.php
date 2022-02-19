<?php defined('BASEPATH') OR exit('no direct script access allowed');
?>
<!-- ======== sidebar-nav start =========== -->
<aside class="sidebar-nav-wrapper">
	<div class="navbar-logo">
		<h1 class="text-light fw-bold">
			<?php echo $webconfig['title']; ?>
		</h1>
	</div>
	<nav class="sidebar-nav">
		<ul>
			<li class="nav-item <?php if(preg_match("/\/[a-z]+\/$/",$_SERVER['REQUEST_URI']) or $_SERVER['REQUEST_URI'] == '/'){echo "active";}?>">
				<a href="./">
					<span class="icon"><i class="lni lni-dashboard"></i></span>
					<span class="text">Dashboard</span>
				</a>
			</li>

			<span class="divider"><hr></span>

			<li class="nav-item nav-item-has-children">
				<a href="javascript:;" class="<?php if(isset($_GET['module']) AND preg_match('/\parsehtml.*/', $_GET['module'])){echo "";}else{echo "collapsed";}?>" data-bs-toggle="collapse" data-bs-target="#ddmenuparsehtml" aria-controls="ddmenuparsehtml" aria-expanded="<?php if(isset($_GET['module']) AND preg_match('/\parsehtml.*/', $_GET['module'])){echo "true";}else{echo "false";}?>" aria-label="Toggle navigation"> 
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">Parse HTML </span>
				</a>
				<ul id="ddmenuparsehtml" class="dropdown-nav <?php if(isset($_GET['module']) AND preg_match('/\parsehtml.*/', $_GET['module'])){echo "collapse show";}else{echo "collapse";}?>">
					<li>
						<a href="./?module=parsehtml" class="<?php if(isset($_GET['module']) AND $_GET['module'] == 'parsehtml'){echo "active";}?>"> 
							<i class="lni lni-arrow-right"></i> Parse HTML
						</a>
					</li>
					<li>
						<a href="./?module=parsehtmlsimple" class="<?php if(isset($_GET['module']) AND $_GET['module'] == 'parsehtmlsimple'){echo "active";}?>">
							<i class="lni lni-arrow-right"></i> Parse HTML Simple
						</a>
					</li>
				</ul>
			</li>

			<li class="nav-item <?php if($_GET['module'] == 'htmlcompressor'){echo "active";}?>">
				<a href="./?module=htmlcompressor">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">HTML Compressor</span>
				</a>
			</li>
			<li class="nav-item <?php if($_GET['module'] == 'htmlencrypter'){echo "active";}?>">
				<a href="./?module=htmlencrypter">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">HTML Encrypter</span>
				</a>
			</li>
			<li class="nav-item <?php if($_GET['module'] == 'cssminifier'){echo "active";}?>">
				<a href="./?module=cssminifier">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">CSS Minifier</span>
				</a>
			</li>
			<li class="nav-item <?php if($_GET['module'] == 'javascriptminifier'){echo "active";}?>">
				<a href="./?module=javascriptminifier">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">Javascript Minifier</span>
				</a>
			</li>

			<span class="divider"><hr></span>

			<li class="nav-item <?php if($_GET['module'] == 'urldecenc'){echo "active";}?>">
				<a href="./?module=urldecenc">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">URL Decode/Encode</span>
				</a>
			</li>	

			<span class="divider"><hr></span>

			<li class="nav-item <?php if($_GET['module'] == 'jsoncookieconvert'){echo "active";}?>">
				<a href="./?module=jsoncookieconvert">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">JSON Cookie Convert</span>
				</a>
			</li>

			<li class="nav-item <?php if($_GET['module'] == 'curltophp'){echo "active";}?>">
				<a href="./?module=curltophp">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">CURL to PHP</span>
				</a>
			</li>

		</ul>
	</nav>
</aside>
<div class="overlay"></div>
<!-- ======== sidebar-nav end =========== -->