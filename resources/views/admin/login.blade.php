<!doctype html>
<html lang="pt-br" data-bs-theme="auto">
	
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Supliu Tecnologia - Discografia Tião Carreiro e Pardinho">
        <meta name="author" content="Carlos Eduardo Bertucio">

        <title>Login - Administração</title>

		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">

    </head>
   
	<section>

		<div class="modal modal-sheet position-static d-block p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
			<div class="modal-dialog" role="document">
				<div class="modal-content rounded-4 shadow">

					<div class="modal-header p-5 pb-4 border-bottom-0">
						<h1 class="fw-bold mb-0 fs-2">Login</h1>
					</div>

					<div class="modal-body p-5 pt-0">

					<form class="">
						<div class="form-floating mb-3">
							<input type="email" class="form-control rounded-3 is-invalid" id="floatingInput" placeholder="name@example.com">
							<label for="floatingInput">Usuário ou E-mail</label>
						</div>
							<div class="form-floating mb-3">
							<input type="password" class="form-control rounded-3 is-invalid" id="floatingPassword" placeholder="Password">
							<label for="floatingPassword">Senha</label>
						</div>

						<small class="error_text">Usuário ou senha inválido.</small>
						<div class="modal-body p-3 pt-0"></div>

						<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Logar</button>

					</form>

					<small class="text-body-secondary">Faça o login para administrar a discografia.</small>

					</div>
				</div>
			</div>
		</div>

	</section>

</html>