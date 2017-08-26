<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <title>chatTXT</title>
</head>
<body>
    <header>
        <section class="top-bar w3-block">
            <div class="w3-left">
                <h2>chatTXT</h2>
            </div>
            <div class="w3-right w3-dropdown-hover">
                <button class="w3-button w3-hover-white w3-hover-text-blue">Guilherme Rodrigues</button>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                    <a href="#" class="w3-bar-item w3-button w3-text-blue w3-hover-blue w3-hover-text-white">Convites</a>
                    <a href="#" class="w3-bar-item w3-button w3-text-blue w3-hover-blue w3-hover-text-white">Editar perfil</a>
                    <a href="#" class="w3-bar-item w3-button w3-text-blue w3-hover-blue w3-hover-text-white">Sair</a>
                </div>
            </div>
        </section>
    </header>
    
    <main>
        <div class="area">
            <div class="w3-row">
                <div class="container-esquerda w3-third w3-margin-right">
                    <section class="container-contatos">
                        <div class="w3-bar w3-light-grey w3-border-top w3-border-left  w3-border-right w3-broder-grey">
                            <button class="w3-bar-item w3-button w3-hover-blue w3-text-blue tablink w3-white" onclick="showTab(event,'Contatos')">Contatos</button>
                            <button class="w3-bar-item w3-button w3-hover-blue w3-text-blue tablink" onclick="showTab(event,'Grupos')">Grupos</button>
                        </div>

                        <div id="Contatos" class="tab w3-container w3-white w3-border-bottom w3-border-left w3-border-right w3-broder-grey">
                            <div class="w3-container w3-margin-top w3-margin-bottom w3-border-bottom w3-padding">
                                <button class="w3-button w3-text-grey w3-hover-white w3-hover-text-blue">
                                    <i class="fa fa-plus w3-xlarge w3-left w3-margin-right"></i>
                                </button>
                                <button class="w3-button w3-text-grey w3-hover-white w3-hover-text-blue">
                                    <i class="fa fa-search w3-xlarge w3-left w3-margin-right"></i>
                                </button>                               
                            </div>

                            <div class="lista-contatos">
                                <?php for ($i=0; $i < 10; $i++) { ?>                     
                                    <div class="w3-container w3-border-top w3-border-bottom w3-padding w3-margin-bottom">
                                        <div class="foto-contato">
                                            <img src="assets/img/fotos-perfil/padrao.png" alt="Foto do contato">
                                        </div>
                                        <div class="nome-contato">
                                            <p>Nome do contato</p>
                                            <p>emaildo@contato.com.br</p>
                                        </div>
                                    </div>
                                <?php }?>
                            </div><!-- fim da lista-contatos -->
                            
                        </div><!-- fim da div#contatos -->
                        

                        <div id="Grupos" class="w3-container tab w3-white w3-border-bottom w3-border-left  w3-border-right w3-broder-grey" style="display:none">
                            <div class="w3-container w3-margin-top w3-margin-bottom w3-border-bottom w3-padding">
                                <button class="w3-button w3-text-grey w3-hover-white w3-hover-text-blue">
                                    <i class="fa fa-plus w3-xlarge w3-left w3-margin-right"></i>
                                </button>
                                <button class="w3-button w3-text-grey w3-hover-white w3-hover-text-blue">
                                    <i class="fa fa-search w3-xlarge w3-left w3-margin-right"></i>
                                </button>                               
                            </div>

                            <div class="lista-grupos">
                                <?php for ($i=0; $i < 10; $i++) { ?>                     
                                    <div class="w3-container w3-border-top w3-border-bottom w3-padding w3-margin-bottom">
                                        <div class="foto-grupo">
                                                <img src="assets/img/fotos-grupo/mr-robot.jpg" alt="Foto do contato">
                                        </div>
                                        <div class="nome-grupo">
                                            <p>Nome do Grupo</p>
                                            <p>Participantes: 6</p>
                                        </div>
                                    </div>
                                <?php }?>
                            </div><!-- fim da lista-grupos --> 
                        </div><!-- fim da div#grupos -->
                    </section> <!-- fim container-contatos -->
                   
                </div><!-- fim container-esquerda -->
                
                <div class="container-direita w3-rest">
                    <section class="container-mensagens">
                        CONVERSA
                    </section>

                    <section class="container-editor">
                        EDITOR    
                    <!-- <div class="editor">
                            <textarea name="" id=""></textarea>
                        </div> -->
                    </section>
                </div><!-- fim container-direita -->
            </div>
        </div>
    </main> 

    <script src="assets/js/functions.js"></script>
    <script src="assets/js/jquery.js"></script>
   
</body>
</html>