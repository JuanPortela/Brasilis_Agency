<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Cadastro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <title>Brasilis Agency</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    

  
  
    <header> 
    
        <div class="collapse bg-dark" id="navbarHeader">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
              </div>
              <div class="col-sm-4 offset-md-1 py-4">
              </div>
            </div>
          </div>
        </div>
      <div class="navbar navbar-light" style="background-color: #a5a5a4;">
          <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
              <img src="Imagens/IMG2.jpg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle> 
              <strong>Brasilis Agency</strong>
            </a>
          </div>
        </div>
      </header>
    </style>
    </script>
    </head>
    <body>
    <form id="cadastro" name="cadastro" method="post" action="processa.php">
     <table width="625" border-type="0">
     <tr>
     <td width="69">Nome:</td>
     <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
     <span class="style1">*</span></td>
     </tr>
     <tr>
     <td>Email:</td>
     <td><input name="email" type="text" id="email" size="70" maxlength="60" />
     <span class="style1">*</span></td>
     </tr>
     <tr>
     <td>Sexo:</td>
     <td><input name="sexo" type="radio" value="Masculino" checked="checked" />
     Masculino
     <input name="sexo" type="radio" value="Feminino" />
     Feminino <span class="style1">*</span> </td>
     </tr>
     <tr>
     <td>DDD:</td>
     <td><input name="ddd" type="text" id="ddd" size="4" maxlength="2" />
     Telefone:
     <input name="telefone" type="text" id="telefone" />
     <span class="style3">Apenas n&uacute;meros</span> </td>
     </tr>
     <tr>
     <td>Endere&ccedil;o:</td>
     <td><input name="ender" type="text" size="70" maxlength="70" />
     <span class="style1">*</span></td>
     </tr>
     <tr>
     <td>Cidade:</td>
     <td><input name="cidade" type="text" id="cidade" maxlength="20" />
     <span class="style1">*</span></td>
     </tr>
     <tr>
     <td>Estado:</td>
     <td><select name="estado" id="estado">
     <option>Selecione...</option>
     <option value="AC">AC</option>
     <option value="AL">AL</option>
     <option value="AP">AP</option>
     <option value="AM">AM</option>
     <option value="BA">BA</option>
     <option value="CE">CE</option>
     <option value="ES">ES</option>
     <option value="DF">DF</option>
     <option value="MA">MA</option>
     <option value="MT">MT</option>
     <option value="MS">MS</option>
     <option value="MG">MG</option>
     <option value="PA">PA</option>
     <option value="PB">PB</option>
     <option value="PR">PR</option>
     <option value="PE">PE</option>
     <option value="PI">PI</option>
     <option value="RJ">RJ</option>
     <option value="RN">RN</option>
     <option value="RS">RS</option>
     <option value="RO">RO</option>
     <option value="RR">RR</option>
     <option value="SC">SC</option>
     <option value="SP">SP</option>
     <option value="SE">SE</option>
     <option value="TO">TO</option>
     </select>
     <span class="style1">* </span></td>
     </tr>
     <tr>
     <td>Bairro:</td>
     <td><input name="bairro" type="text" id="bairro" maxlength="20" />
     <span class="style1">*</span></td>
     </tr>
     <tr>
     <td>Pa&iacute;s:</td>
     <td><input name="pais" type="text" id="pais" maxlength="20" />
     <span class="style1">*</span></td>
     </tr>
     <tr>
     <td>Login:</td>
     <td><input name="login" type="text" id="login" maxlength="12" />
     <span class="style1">*</span></td>
     </tr>
     <tr>
     <td>Senha:</td>
     <td><input name="senha" type="password" id="senha" maxlength="12" />
     <span class="style1">*</span></td>
     </tr>
     <tr>
     </tr>
     <tr>
     <td colspan="2"><p>
     <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" />
     <br />
     <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
     <br />
     <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios! </span></p>
     <p>&nbsp; </p></td>
     </tr>
     </table>
    </form>
    </body>
    </head>
    