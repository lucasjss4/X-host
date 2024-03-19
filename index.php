<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-Host</title>
    <link rel="stylesheet" type="text/css" href="CabStyle.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="icon" href="img/logo-removebg-preview.png">
</head>
<body>
     <!--Cabeçalho do site -->
     <header id="cabecalho">
        <!--Div para controlar o tudo do cabeçalho-->
        <div class="virtualCab">
            <div id="afLogo"><img src="img/logo-removebg-preview.png" id="logo"></div>
            <div class="virtualCab2">
                <li class="pacPas"><a href="#">Home</a></li>
                <li class="pacPas"><a href="#">Preços</a></li>
                <li class="pacPas"><a href="#">Contato</a></li>
                <li class="submit"><input type="submit" value="Entrar" id="entrar"></input></li>
            </div>
        </div>
    </header>
     <!--Div para controlar a imagem da homepage-->
     <section>
        <div id="divImgHome">
            <img src="img/download.jpg" id="imgHome">
        </div>
         <!--Div para controlar os textos de beneficios-->
         <div class="first-benefics">
            <div class="benefics">
                <div class="txtBenefic">
                    <h3>Segurança</h3>
                    <p>Aqui você tem segurança, confibilidade e sigilo de dados. Onde todos os seus arquivos são
                        criptografados, assim os mantendo seguros</p>
                </div>
            </div>
            <div class="benefics">
                <h3>Disponibilidade</h3>
                <p>Aqui você tem disponibilidade 24 horas, logo você terá acesso 100% do tempo, a hora e no momento que
                    precisar </p>
            </div>
            <div class="benefics">
                <h3>Suporte</h3>
                <p>Aqui você tem o melhor suporte que um site de hospedagem pode ter, onde se tem o suporte mais
                    disponível e mais rápido do mercado</p>
            </div>
        </div>
          <!--Titulo e subtitulo do planos e suporte-->
          <h1 id="titlePlano">Planos e Preços</h1>
          <h5 id="subtitlePlano">Selecione o plano que melhor atende as suas necessidades</h5>
              <br>
               <!--Box do plano básico-->
            <div class="boxPlanoEPrecos">
               <div id="flexboxPlanos">
                <div class="planoEPrecos1">
                    <div class="titleTipe1">
                        <h1>Básico</h1>
                    </div>
                    <div class="ballPlano1">
                        <h1>R$20,00/mês</h1>
                    </div>
                    <div class="informations1">
                        <p>
                            2GB de espaço<br>
                            1 Subdomínio<br>
                            25 contas de email<br>
                            C-panel<br>
                            Suporte 24/7<br>
                        </p>
                    </div>
                    <div class="saberMais1">
                        <h1><a href="#">Saber mais</a></h1>
                    </div>
                </div>
                <!--Box do plano dedicado-->
                <div class="planoEPrecos2">
                    <div class="titleTipe2">
                        <h1>Dedicado</h1>
                    </div>
                    <div class="ballPlano2">
                        <h1>R$35,00/mês</h1>
                    </div>
                    <div class="informations2">
                        <p>
                            5GB de espaço<br>
                            10 Subdomínio<br>
                            50 contas de email<br>
                            C-panel<br>
                            Suporte 24/7<br>
                        </p>
                    </div>
                    <div class="saberMais2">
                        <h1><a href="#">Saber mais</a></h1>
                    </div>
                </div>
                <!--Box do plano dedicado plus-->
                <div class="planoEPrecos3">
                    <div class="titleTipe3">
                        <h1>Dedicado PLUS</h1>
                    </div>
                    <div class="ballPlano3">
                        <h1>R$55,00/mês</h1>
                    </div>
                    <div class="informations3">
                        <p>
                            10GB de espaço<br>
                            10 Subdomínio<br>
                            100 contas de email<br>
                            C-panel<br>
                            Suporte 24/7<br>
                        </p>
                    </div>
                    <div class="saberMais3">
                        <h1><a href="#">Saber mais</a></h1>
                    </div>
                </div>
                <!--Box do plano cloud-->
                <div class="planoEPrecos4">
                <div class="titleTipe4">
                    <h1>X-Cloud</h1>
                </div>
                <div class="ballPlano4">
                    <h1>R$100,00/mês</h1>
                </div>
                <div class="informations4">
                    <p>
                        20GB de espaço<br>
                        20 Subdomínio<br>
                        200 contas de email<br>
                        C-panel<br>
                        Suporte 24/7<br>
                    </p>
                </div>
                <div class="saberMais4">
                    <h1><a href="#">Saber mais</a></h1>
                </div>
               </div>
             </div>
            </div>
            <!--Buscador de dominios-->        
              <div class="search">
              <h1 id="titleSearch">Qual domínio você gostaria de utilizar para seu site ?</h1>
                <h3 id="subTitleSearch">Verifique se o domínios está disponível</h3>
                <div class="search-box">
                <div><input placeholder="Digite o domínio que gostaria de utilizar" size="100px" id="entrada"></div>
                <div id="bottomSearch"><input type="submit" value="Verique seu domínio" name="search" id="buscador"></div>
            </div>
            </div>
            <!--Seção de contato-->
    <div id="contact">
        <h2 id="titleContact">Entre em contato conosco</h2>
        <h4 id="subtitleContact">Envie sua mensagem e será respondida por um dos nossos especialistas em até 24 horas</h4>
        <div id="boxName">
            <input placeholder="Digite seu nome aqui" size="50px" name="nomeDoUsuario" id="name">
        </div>
        <div id="boxEmail">
            <input placeholder="Digite aqui seu email" size="50px" name="emailDoUsuario" id="email">
        </div>
        <div id="boxMensagem">
            <textarea placeholder="Digite aqui sua mensagem para nossos especialistas te ajudarem..." size="50px" name="mensagemDoUsuario" id="mensagem"></textarea>
        </div>
        <div id="boxButtonEnviar">
            <input type="submit" value="Enviar" name="enviar" id="enviar">
        </div>
    </div>
        </section>
        <!-- Rodapé do site-->
        <footer>
            <p>Copyright 2023 - Todos os direitos reservados.
                <br>
                Feito por X-Host
            </p>
        </footer>
</body>
</html>