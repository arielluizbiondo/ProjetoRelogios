<section class="login">
    <div class="esquedo">
        <img src="assets/imgs/bannerLoginCadastro.png" class="img-login" alt="Imagem de login">
    </div>

    <div class="direito">
        <form action="<?= URL_BASE?>/cadastro-admin" method="post" class="form-login">
            <a href="<?= URL_BASE ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-short text-dark" viewBox="0 0 16 16">
                    <path d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                </svg>
            </a>
            <h1 class="h1-login">
                Cadastrar
            </h1>
            <hr>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" name="nome">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Password</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com ninguém.</div>
            </div>

            <button type="submit" class="btn btn-dark">
                Cadastrar
            </button>
            <a href="<?= URL_BASE ?>/login" class="a-login">
                Logar
            </a>
        </form>
    </div>
</section>