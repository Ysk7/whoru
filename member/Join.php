<?php include "./Header.php"?>
<!-- 1. $BODY ======================================================================================
	
	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'     - Sets text direction to right-to-left
-->
<body class="theme-purple-hills page-signup">
	<!-- Page background -->
	<div id="page-signup-bg">
		<!-- Background overlay -->
		<div class="overlay"></div>
		<!-- Replace this with your bg image -->
		<img style="" src="../Images/signin-bg-1.jpg" alt="">
	</div>
	<!-- / Page background -->

	<!-- Container -->
	<div class="signup-container">
		<!-- Header -->
		<div class="signup-header">
			<a href="../index.php" class="logo">
				<img src="../Images/logo-big.png" alt="" style="margin-top: -5px;">&nbsp;
				Q. I. H.
			</a> <!-- / .logo -->
			<div class="slogan">
				당신이! 호서인이라면! 반드시!
			</div> <!-- / .slogan -->
		</div>
		<!-- / Header -->

		<!-- Form -->
		<div class="signup-form">
			<form action="mem_proc.php" method="POST" id="signup-form_id">
				
				<div class="signup-text">
					<span>회원가입</span>
				</div>

				<div class="form-group w-icon"> <!-- 이메일 -->
					<input name="email" class="form-control input-lg" placeholder="이메일" type="text" required>
					<span class="fa fa-envelope signup-form-icon"></span>
				</div>
                
                <div class="form-group w-icon">
					<input name="passwd" class="form-control input-lg" placeholder="패스워드" type="password" required>
					<span class="fa zfa-lock signup-form-icon"></span>
				</div>
                
                <div class="form-group w-icon">
					<input name="passwd_chk" class="form-control input-lg" placeholder="패스워드 확인" type="password" required>
					<span class="fa fa-lock signup-form-icon"></span>
				</div>

				<div class="form-group w-icon">
					<input name="name" class="form-control input-lg" placeholder="이름" type="text" required>
					<span class="fa fa-user signup-form-icon"></span>
				</div>

				<div class="form-group w-icon">
					<input name="nickname" class="form-control input-lg" placeholder="닉네임" type="text" required>
					<span class="fa fa-user signup-form-icon"></span>
				</div>
                
                <div class="form-group w-icon">
					<input name="dept" class="form-control input-lg" placeholder="학과" type="text" required>
					<span class="fa fa-university signup-form-icon"></span>
				</div>

				<div class="form-group" style="margin-top: 20px;margin-bottom: 20px;">
					<label class="checkbox-inline">
						<input name="confirm" class="px" type="checkbox" required>
						<span class="lbl"><a href="#" target="_blank">약관 동의</a></span>
					</label>
				</div>

				<div class="form-actions">
					<input value="확인" class="signup-btn bg-primary" type="submit">
				</div>
			</form>
			<!-- / Form -->
		</div>
		<!-- Right side -->
	</div>

		<div class="have-account">
		이미 가입하셨습니까? <a href="Login.php">로그인</a>
	</div>

<script type="text/javascript">
	// Resize BG
	init.push(function () {
		var $ph  = $('#page-signup-bg'),
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

		$("#signup-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });

		// Validate name
		$("#name_id").rules("add", {
			required: true,
			minlength: 1
		});

		// Validate email
		$("#email_id").rules("add", {
			required: true,
			email: true
		});
		
		// Validate username
		$("#username_id").rules("add", {
			required: true,
			minlength: 3
		});

		// Validate password
		$("#password_id").rules("add", {
			required: true,
			minlength: 6
		});

		// Validate confirm checkbox
		$("#confirm_id").rules("add", {
			required: true
		});
	});

	window.PixelAdmin.start(init);
</script>
<?php include "./Footer.php"?>