<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="Aplicacao">
    <head>
        <title>Quatro Rodas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
       
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/controlador.js"></script>
    </head>
    <body ng-controller="controlador as controlador1">
        <div id="principal">
            <img id="carros" src="<?php bloginfo('template_url'); ?>/Carros.png" ng-mousemove="controlador1.mostrar=true" ng-mouseleave="controlador1.mostrar=false"  >
            <div id="carroMenu1" ng-hide="controlador1.mostrar==false">Seção1</div>
            <div id="carroMenu2" ng-hide="controlador1.mostrar==false">Seção2</div>
            <div id="carroMenu3" ng-hide="controlador1.mostrar==false">Seção3</div>
            
            <img id="teste" src="<?php bloginfo('template_url'); ?>/Teste.png" ng-mousemove="controlador1.mostrar1=true" ng-mouseleave="controlador1.mostrar1=false"  >
            <div id="testeMenu1" ng-hide="controlador1.mostrar1==false">Seção1</div>
            <div id="testeMenu2" ng-hide="controlador1.mostrar1==false">Seção2</div>
            <div id="testeMenu3" ng-hide="controlador1.mostrar1==false">Seção3</div>
            
            <img id="noticias" src="<?php bloginfo('template_url'); ?>/Noticias.png" ng-mousemove="controlador1.mostrar2=true" ng-mouseleave="controlador1.mostrar2=false">
            <div id="noticiaMenu1" ng-hide="controlador1.mostrar2==false">Seção1</div>
            <div id="noticiaMenu2" ng-hide="controlador1.mostrar2==false">Seção2</div>
            <div id="noticiaMenu3" ng-hide="controlador1.mostrar2==false">Seção3</div>
            
            <img id="auto-serviço" src="<?php bloginfo('template_url'); ?>/Auto-serviço.png" ng-mousemove="controlador1.mostrar3=true" ng-mouseleave="controlador1.mostrar3=false">
            <div id="servicoMenu1" ng-hide="controlador1.mostrar3==false">Seção1</div>
            <div id="servicoMenu2" ng-hide="controlador1.mostrar3==false">Seção2</div>
            <div id="servicoMenu3" ng-hide="controlador1.mostrar3==false">Seção3</div>
            
            
            <img id="tabela" src="<?php bloginfo('template_url'); ?>/Tabela-fipe.png" ng-mousemove="controlador1.mostrar4=true" ng-mouseleave="controlador1.mostrar4=false">
            <div id="tabelaMenu1" ng-hide="controlador1.mostrar4==false">Seção1</div>
            <div id="tabelaMenu2" ng-hide="controlador1.mostrar4==false">Seção2</div>
            <div id="tabelaMenu3" ng-hide="controlador1.mostrar4==false">Seção3</div>
        </div>
    </body>
</html>