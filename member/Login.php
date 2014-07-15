<?php include "./Header.php"?>
<!-- 1. $BODY ======================================================================================
	
	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'     - Sets text direction to right-to-left
-->
<body class="theme-purple-hills page-signin" style="">
	<!-- Page background -->
	<div id="page-signin-bg">
		<!-- Background overlay -->
		<div class="overlay"></div>
		<!-- Replace this with your bg image -->
		<img src="../Images/signin-bg-2.jpg" alt="" style="">
	</div>
	<!-- / Page background -->

	<!-- Container -->
	<div class="signin-container">

		<!-- Left side -->
		<div class="signin-info">
			<a href="http://infinite-woodland-5276.herokuapp.com/index.html" class="logo">
				<img src="../Images/logo-big.png" alt="" style="margin-top: -5px;">&nbsp;
				Q. I. H.
			</a> <!-- / .logo -->
			<div class="slogan" style="font-size: 10pt;">
				당신이! 호서인이라면! 반드시!
			</div> <!-- / .slogan -->
			<ul>
				<li><i class="fa fa-sitemap signin-icon"></i>-</li>
				<li><i class="fa fa-file-text-o signin-icon"></i>-</li>
				<li><i class="fa fa-outdent signin-icon"></i>-</li>
				<li><i class="fa fa-heart signin-icon"></i>-</li>
			</ul> <!-- / Info list -->
		</div>
		<!-- / Left side -->

		<!-- Right side -->
		<div class="signin-form">

			<!-- Form -->
			<form action="http://infinite-woodland-5276.herokuapp.com/index.html" id="signin-form_id" novalidate="novalidate">
				<div class="signin-text">
					<span>로그인</span>
				</div> <!-- / .signin-text -->

				<div class="form-group w-icon">
					<input type="text" name="email" class="form-control input-lg" placeholder="이메일" required>
					<span class="fa fa-envelope signin-form-icon"></span>
				</div> <!-- / Username -->

				<div class="form-group w-icon">
					<input type="password" name="passwd" class="form-control input-lg" placeholder="비밀번호" required>
					<span class="fa fa-lock signin-form-icon"></span>
				</div> <!-- / Password -->

				<div class="form-actions">
					<input type="submit" value="로그인" class="signin-btn bg-primary">
					<a href="#" class="forgot-password" id="forgot-password-link">비밀번호를 잊어버렸나요?</a>
				</div> <!-- / .form-actions -->
			</form>
			<!-- / Form -->

			<!-- Password reset form -->
			<div class="password-reset-form" id="password-reset-form" style="display: none;">
				<div class="header">
					<div class="signin-text">
						<span>Password reset</span>
						<div class="close">×</div>
					</div> <!-- / .signin-text -->
				</div> <!-- / .header -->
				
				<!-- Form -->
				<form action="./index.html" id="password-reset-form_id" novalidate="novalidate">
					<div class="form-group w-icon">
						<input type="text" name="password_reset_email" id="p_email_id" class="form-control input-lg" placeholder="Enter your email">
						<span class="fa fa-envelope signin-form-icon"></span>
					</div> <!-- / Email -->

					<div class="form-actions">
						<input type="submit" value="SEND PASSWORD RESET LINK" class="signin-btn bg-primary">
					</div> <!-- / .form-actions -->
				</form>
				<!-- / Form -->
			</div>
			<!-- / Password reset form -->
		</div>
		<!-- Right side -->
	</div>
	<!-- / Container -->

	<div class="not-a-member">
		회원이 아니십니까? <a href="Join.php">회원 가입</a>
	</div>

<script src="../Static/bootstrap/js/bootstrap.min.js"></script>
<script src="../Static/js/pixel-admin.min.js"></script>
    <script type="text/javascript">
        var init = [];
	// Resize BG
	init.push(function () {
		var $ph  = $('#page-signin-bg'),
		    $img = $ph.find('> img');

		$(window).on('resize', function () {
			$img.attr('style', '');
			if ($img.height() < $ph.height()) {
				$img.css({
					height: '100%',
					width: 'auto'
				});
			}
		});
	});

	// Show/Hide password reset form on click
	init.push(function () {
		$('#forgot-password-link').click(function () {
			$('#password-reset-form').fadeIn(400);
			return false;
		});
		$('#password-reset-form.close').click(function () {
			$('#password-reset-form').fadeOut(400);
			return false;
		});
	});	

	window.PixelAdmin.start(init);
</script>
<?php include "./Footer.php"?>
