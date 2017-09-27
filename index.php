<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css\styles.css" rel="stylesheet" />
    <link href="css\bootstrap.min.css" rel="stylesheet" />

    <title>medica.me</title>
  </head>
  <body>
  	<div id="wrapper">
	    <header>
	    	<div id="page-banner">
	    		<h1 class="title">medica.me</h1>
          <p>Gerenciador de Ingestão de Medicamentos</p>
          <form id="search">
            <input type="text" placeholder="Buscar" />
          </form>
	    	</div>
	    </header>
	    <div id="list-usuarios" class="main-list">
	    	<h2 class="title">Usuários Cadastrados</h2>
	    	<ul>

	    	</ul>
	    </div>
      <div id="add-form">
        <form id="adicionar">
          <input type="text" placeholder="Adicionar" />
          <button>+</button>
        </form>
      </div>


    </div>
    <script src="js\user-list.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/7913ddad50.js"></script>


  </body>
</html>
