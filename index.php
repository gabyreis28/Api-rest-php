<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SEARCH CLIENT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="http://vidaclass.com.br/xfavicon.ico,q1507295400.pagespeed.ic.uYXfQ8NC6t.webp"
      type="image/x-icon"
      rel="icon"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    />
  </head>
  <body>
	 <div class="container-fluid" style="margin-top: 2%;">
      <div class="row">
        <div class="col-md-6">
          <h2>PROCURAR CLIENTE POR CPF</h2>
			<form action="curl.php" method="get">
			  <span class="input-group-text" >CPF: &emsp;
				<input type="text" class="form-control" type="cpf" id="idCpf" placeholder="000.000.000-00" />&emsp;
				<button class="btn btn-primary" id="btn1" >BUSCAR</button>
			  </span>
			</form>
        </div>
      </div>
    </div>
  </body>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<script>
		// ao iniciar o DOM#html rodar o mask cpf;
		$(document).ready(function() {
		  // mascarar cpf no formato 000.000.000-00 (apenas números);
		  $("#idCpf").mask("000.000.000-00");
		});
	</script>
</html>
