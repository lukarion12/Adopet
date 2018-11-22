<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" type="text/css" href="styleshtml.css">
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  
  <title> Project HTML </title>

  <link rel="stylesheet" href="{{ asset('css/stilodoprojeto.css') }}">
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
  <link rel="stylesheet" type="text/css" href="stiloprojeto.css">
  -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/estiloprojeto.css') }}" rel="stylesheet">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
  <![endif]-->
</head>
<body >

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img class="d-block imagemlogo img-thumbnail " src="adopet.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Início<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galeria<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="SobreAdocao.html">Sobre Adoção<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dicas e Cuidados <span class="sr-only ">(current)</span></a>
        <div class="dropdown-menu">
          <a class="dropdown-item " href="alimentacao.html">Alimentação</a>
          <a class="dropdown-item" href="Dicas.html">Saúde e higiene</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Fala Conosco<span class="sr-only">(current)</span></a>
      </li>
    
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Entrar
          </a>
          <div class="dropdown-menu">
            <a id="login" class="dropdown-item " href="login.html">
              <button class="btn btn-link text-dark">
                Login
              </button>
            </a>
            <a id="Cadatro" class="dropdown-item" href="cadastro.html">
              <button class="btn btn-link text-dark">
                Cadastrar-se
              </button></a>                
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Minha Conta
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Meus Pets</a>
              <a class="dropdown-item" href="CadastroAnimais.html">Cadastre um novo Pet</a>
              <a class="dropdown-item" href="AdocaoAnimal.html">Adote um Pet</a>
              <a class="dropdown-item" href="#">Editar</a>
              <a class="dropdown-item" href="#">Sair</a>
            </div>
          </li>
          </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisa">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>



  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block imagemcarousel " src="logo1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block imagemcarousel" src="logo1.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block imagemcarousel" src="logo1.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



     
<br>
<div class="container">
  <div class="row">
    <div class="caixa col-md-9 col-sm-9 col-xs-9">
     <div class = "page-header">
     </div>
     <center><p class="Estilot">Não Compre, Adote!</p></center>
     <center><p class="Estilot2">Se entendermos que animais não são mercadorias, mas seres capazes de sentimento, que têm necessidades de amar e de serem amados, concordaremos que não há sentido em se comprar animais. Comprando um animal, você estará incentivando um comércio muito injusto, o comércio de seres vivos. Lembre-se que só haverá vendedor se houver comprador.</p></center>
     <br>
     <br>
     <p class="Estilot">Animais para adoção</p>
     <br>
     <table class="table table-hover">
       <thead>
        <tr>
         <td>
          <img src="cachorro.jpg" class="img-thumbnail img-responsive">
        </td>
        <td>
          <img src="gato.jpg" class="img-thumbnail img-responsive">
        </td>
        <td>
          <img src="cachorro2.jpg" class="img-thumbnail img-responsive">
        </td>

      </tr>
    </thead>
    <tbody>
      <tr>
       <td>
        <center><a class="text-dark" href="#" ><p>Cachorro para Adoção</p>
          <p class="text-dark">Fêmea|Filhote|Médio</p></a></center>
        </td>
        <td>
          <center><a class="text-dark" href="#" ><p>Gato para Adoção</p>
            <p class="text-dark">Macho|Adulto|Médio</p><a href="#" ></center>
            </td>
            <td>
              <center><a class="text-dark" href="#" ><p>Cachorro para Adoção</p>
                <p class="text-dark">macho|adulto|Médio</p></a></center>
              </td>


            </tbody>
          </table>

          <table class="table table-hover">
           <thead>
            <tr>
             <td>
              <img src="cachorro3.jpg" class="img-thumbnail img-responsive">
            </td>
            <td>
              <img src="gato2.jpg" class="img-thumbnail img-responsive">
            </td>
            <td>
              <img src="gato3.jpg" class="img-thumbnail img-responsive">
            </td>
          </tr>
        </thead>
        <tbody>
          <tr>
           <td>
            <center><a class="text-dark" href="#" ><p>Cachorro para Adoção</p>
              <p class="text-dark">Fêmea|Filhote|Médio</p></a></center>
            </td>
            <td>
              <center><a class="text-dark" href="#" ><p>Gato para Adoção</p>
                <p class="text-dark">Fêmea|Adulto|Médio</p></a></center>
              </td>
              <td>
                <center><a class="text-dark" href="#" ><p>Gato para Adoção</p>
                  <p class="text-dark">Macho|Adulto|Médio</p></a></center>
                </td>

              </tr>

            </tbody>
          </table>
        </table>

        <table class="table table-hover">
         <thead>
          <tr>
           <td>
            <img src="gato4.jpg" class="img-thumbnail img-responsive">
          </td>
          <td>
            <img src="cachorro4.jpg" class="img-thumbnail img-responsive">
          </td>
          <td>
            <img src="gato3.jpg" class="img-thumbnail img-responsive">
          </td>
        </tr>
      </thead>
      <tbody>
        <tr>
         <td>
          <center><a class="text-dark" href="#" ><p>Gato para Adoção</p>
            <p class="text-dark">Fêmea|Filhote|Médio</p></a></center>
          </td>
          <td>
            <center><a class="text-dark" href="#" ><p>Cachorro para Adoção</p>
              <p class="text-dark">Femêa|Adulto|Médio</p></a></center>
            </td>
            <td>
              <center><a class="text-dark" href="#" ><p>Gato para Adoção</p>
                <p class="text-dark">Macho|Adulto|grande</p></a></center>
              </td>

            </tr>

          </tbody>
        </table>
      </div>




      <div class="caixa col-md-3 col-sm-3 col-xs-3">
       <div class = "page-header">
       </div>
      <center><p class="Estilot">Notícias</p></center>
       <div class = "container">
        <div class = "page-header">

        </div>
        <table class="table table-hover table-responsive" class="img-thumbnail img-responsive">
          <thead>
           <tr>
            <th> <img src="feed1.jpg" class="img-thumbnail img-responsive"> </th>
          </tr>
          <thead>
            <tbody>
             <tr class= "warning">
              <td><a class="text-dark" href="#"> Os cães também podem sentir frio? </a></td>
            </tr>
          </tbody>
        </table>  
      </div>
      <div>
       <table class="table table-hover table-responsive">
        <thead>
         <tr>
          <th> <img src="feed2.jpg" class="img-thumbnail img-responsive"> </th>
        </tr>
        <thead>
          <tbody>
           <tr class= "warning">
            <td><a class="text-dark" href="#"> Como prevenir e tratar o ciúmes nos bichos de estimação? </a></td>
          </tr>
        </tbody>
      </table>  
    </div>
    <div>
     <table class="table table-hover table-responsive">
      <thead>
       <tr>
        <th> <img src="feed3.jpg" class="img-thumbnail img-responsive"> </th>
      </tr>
      <thead>
        <tbody>
         <tr class= "warning">
          <td><a class="text-dark" href="#"> Como fazer carinho em um gato </a></td>
        </tr>
      </tbody>
    </table>  
  </div>
  <div>
   <table class="table table-hover table-responsive">
    <thead>
     <tr>
      <th> <img src="feed4.jpg" class="img-thumbnail img-responsive"> </th>
    </tr>
    <thead>
      <tbody>
       <tr class= "warning">
        <td><a class="text-dark" href="#"> Seu cão não confia em você? Siga estas dicas! </a></td>
      </tr>
    </tbody>
  </table>  
</div>


</div>
</div>
</div>


<br>
<br>
<br>

<!-- Inicio rodape -->
  <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>A Empresa</h5>
          <ul class="list-unstyled quick-links">
            <a href="javascript:void();"><i class="fa fa-angle-double-right"></i>  Somos um site desenvolvido para adoção e cadastro de animais. Feito para facilitar e mostrar para as pessoas a importancia da adoção e saber que sempre se pode doar em vez de abandonar.</a>
            
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Animais</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Curiosidades</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Raças</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Doenças mais recorrentes</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Brincadeiras</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Costumes</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Adoção</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Curiosidades</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Leis</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Como Adotar</a></li>
            
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fab fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p><u><a href="https://www.nationaltransaction.com/">Site Desenvolvido por:</a></u> Tamires Santos Almeida e Lucas Silva Araujo</p>
         
        </div>

        <button class="btn botao"><a href="#" id="toTop">
    <span id="toTopHover" style="opacity: 3; color: #4080bf;">topo</span>
  </a></button>
        </hr>
      </div>  
    </div>
  </section>
  <!-- fim rodape -->

  
</div>
</div>
<script src="{{ asset ('//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
<script src="{{ asset ( 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
<script src="{{ asset ( 'js/bootstrap.min.js')}}"></script>
<script src="{{ asset ( 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{ asset ('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/app.js') }}"></script>           


</body>
</html>