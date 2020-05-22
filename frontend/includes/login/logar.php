<div class="wrap-login100">
				<form id="loginArea" class="login100-form "  method="post"  >
					<span class="login100-form-logo">
						<i class="zmdi zmdi-account"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="usuario" placeholder="Usuário">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

				

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn"  > 
							Login
						</button>
					</div>

					
				</form>
				<?php  require_once 'includes/growl.php'; ?>
			</div>