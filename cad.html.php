 <div class="container" style="margin-top: 1%;">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel">
        <h2 style="text-align:center;">Identificação</h2>
      
            <form class="form-horizontal" role="form" id="frmCadPro" name="frmCadPro" method="POST" action="cadastro.php">
                 <div class="row">
                    <div class="form-group">
                         <div class="input-group">
                              <label for="lblNome">Nome:</label>
                              <input type="text" maxlength="35" minlength="10" class="form-control" id="txtNome" name="txtNome" required>
                              <br></br>
                              <label for="lblSobrenome">Sobrenome:</label>
                              <input type="text" maxlength="30" minlength="10" class="form-control" name="txtSobrenome" id="txtSobrenome" required>
                              <br></br>
                              <label for="lblNascimento">Data de Nascimento:</label>
                              <input type="date" class="form-control" name="txtNascimento" id="txtNascimento" required>
                              <br></br>
                              <label for="lblEmail">Email:</label>
                              <input type="email" class="form-control" name="txtEmail" id="txtEmail" required>
                              <br></br>
                              <label for="lblCidade">Cidade:</label>
                              <input type="text" maxlength="30" class="form-control" name="txtCidade" id="txtCidade" required>
                              <br></br>
                              <label for="lblUf">UF:</label>
                              <input type="text" maxlength="2" minlength="2" class="form-control" name="txtUf" id="txtUf" required>
                              <br></br>
                              <label for="lblCelular">Celular:</label>
                              <input type="text" class="form-control" name="txtCelular" id="txtCelular" required>
                              <br></br>
                              <label for="lblCelular">Telefone:</label>
                              <input type="text" class="form-control" name="txtTelefone" id="txtTelefone" required>
                              <br></br>
                              <label for="lblSenha">Senha:</label>
                              <input type="password" maxlength="20" minlength="10" class="form-control" name="txtSenha" id="txtSenha" required>
                              <br></br>
                              <label for="lblSenha2">Confirme a senha:</label>
                              <input type="password" class="form-control" name="txtSenha2" id="txtSenha2" required onblur="Vsenha();">
     
    </div>
         </div>
           <input style="background: rgba(255,255,255,0); box-shadow:3px 2px 3px rgba(0,0,0,.3);" name="bt_cad" id="bt_cad" class="btn btn-primary btn-lg btn-block" type="submit" value="Cadastrar"> 
        </form>
    </div>
    </div>    
    </div> 