<h1>Server Side flow OA Auth Facebook - Teste</h1>

<pScript para autentica�nao de uma aplica��o para o Facebook. fluxo 1</a>


<a href="https://www.facebook.com/dialog/oauth?client_id=145781085505624&redirect_uri=http://www.trevobr.com/facebook/index.php&scope=email,read_stream">Autenticando Aplica��o</a>

<h2>C&oacute;digo de Autoriza&ccedil;&atilde;o</h2>


<?php echo "Codigo de acesso \$code: $code <br>\n"; ?>

<?php echo $_REQUEST['code']; ?>


<h2>Conseguindo o token</h2>

<a href="https://graph.facebook.com/oauth/access_token?client_id=145781085505624&redirect_uri=http://www.trevobr.com/facebook/&client_secret=ec97fcf283708082d6ed945a36a14b49&code=<?php echo $_REQUEST['code'] ?>">Pegar Token</a>