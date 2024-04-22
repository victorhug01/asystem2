<section class="vh-100 d-flex align-content-center flex-wrap" style="background-color: #ffffff;">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Cadastro</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Nome</label>  
                    <input type="text" id="form3Example1c" class="form-control" placeholder="Digite seu nome"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Email</label>
                      <input type="email" id="form3Example3c" class="form-control" placeholder="Digite seu email" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4c">Senha</label>
                      <input type="password" id="form3Example4c" class="form-control" placeholder="Digite sua senha"/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                     <label class="form-label" for="form3Example4cd">Repita sua senha</label>
                      <input type="password" id="form3Example4cd" class="form-control" placeholder="Digite sua senha" required/>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required />
                    <label class="form-check-label" for="form2Example3">
                      Eu aceito todas condições de <a href="#!" style="color: #842dd0; margin: 5px;">Termos de
                        serviço</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                      class="btn"
                      style="background-color: #842dd0; margin: 5px; color: #ffffff;">Cadastrar</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="image/pessoa.svg" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro realizado com sucesso!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        O seu cadastro foi realizado continue e entre em sua conta.
      </div>
      <div class="modal-footer">
        <a href="index.php?p=6"><button type="button" class="btn " style="background-color: #842dd0; color: #fff" onclick="">Continuar</button></a>
      </div>
    </div>
  </div>
</div>


