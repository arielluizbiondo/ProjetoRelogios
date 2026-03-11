<section class="login">
    <div class="esquedo">
        <img src="assets/imgs/bannerLoginCadastro.png" class="img-login" alt="Imagem de login">
    </div>

    <div class="direito">
        <form action="<?= URL_BASE?>/login-admin" method="post" class="form-login">
            <a href="<?= URL_BASE ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-short text-dark" viewBox="0 0 16 16">
                    <path d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                </svg>
            </a>
            <h1 class="h1-login">
                Login
            </h1>
            <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com ninguém.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
            </div>
            <button type="submit" class="btn btn-dark">Entrar</button>
            <a href="<?= URL_BASE  ?>/cadastrar" class="a-login">
                Cadastrar-se
            </a>
        </form>
    </div>
</section>