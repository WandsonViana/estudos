<?php 
      

     
      $_numero = 14654;
      $_nume = '14654';


      ?>
<!doctype html>
<html>
<header>
    <meta charset ="UTF-8">

    <title>Aula php 01 </title>
   <sytle>

  </style>
</header>
<body>

<p>
 <?php  
 //echo $_marca . " " . $_modelo; 
 // streln retorna a quantidade de letras e caracteres de um variavel.
 //echo strlen($_nome); 
 // stripos -  retorna primeira ocorrêcia
// echo stripos($_nome, 'r');
 // strripos -  retorna a última ocorrência
 //echo strripos($_nome,'a');
 // strolower - converte para min.
  //echo strtolower($_nome);
 // echo strtoupper($_nome);
 // substr_count retorna - letrar ou nomes iguais em uma variavel
 //echo substr_count($_nome,'viana');
 
 echo  " $_nume " . is_numeric($_nume);
 
 error_clear_last($_numero);


 ?>
</P>
<section id="etapas">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="titulo-secao-dark bold text-center">Após enviar o formulário, o que irá acontecer?</h2>
                </div>
            </div>
            <div class="itens-etapas" style="
    font-size: 1rem;
">
                <div class="row justify-content-center">
                    <div class="col-md-3 align-self-center">
                        <div class="row">
                            <div class="col-md-2 align-self-center">
                                <span>1</span>
                            </div>
                            <div class="col-md-8">
                                <p>A nossa equipe de consultores entrará em contato com o seu indicado para fechar a matrícula.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 align-self-center text-center">
                        <img src="https://unyleya.edu.br/assets/landing-page/new_landingpage/img/seta-laranja.png" alt="" class="img-fluid seta-laranja">
                    </div>

                    <div class="col-md-3 align-self-center" style="
">
                        <div class="row">
                            <div class="col-md-2 align-self-center">
                                <span>2</span>
                            </div>
                            <div class="col-md-8">
                                <p>Caso ele se matricule, você receberá o seu bônus em até 15 dias e poderá resgatá-lo diretamente no seu portal do aluno ou do egresso.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 align-self-center text-center">
                        <img src="https://unyleya.edu.br/assets/landing-page/new_landingpage/img/seta-laranja.png" alt="" class="img-fluid seta-laranja">
                    </div>

                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-2 align-self-center">
                                <span>3</span>
                            </div>
                            <div class="col-md-8">
                                <p> Escolha uma das opções de resgate, ifood ou cartão virtual mastercard.
                                    Pronto. Aproveite o seu bônus e indique mais amigos!
                                    
                              </p>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
</body>




</html>
