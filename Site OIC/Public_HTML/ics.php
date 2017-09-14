<? require "head.php" ?>
<title>OIC - Instituições parceiras</title>
</head>
<body> 
<?php require "header.html" ?>
<div id="main_container">
    <?php require "menu.html" ?>
    
    <div id="inner_container">
    
        <div id="div_titulo">
            <h2 id="titulo">Instituições parceiras</h2>
        </div><!-- Fim div_titulo --> 

<?php
 ##########################  
 #####REDIRECIONAMENTO#####  
 ##########################  
 $redirect = "http://www.conscienciologia.org.br/instituicoes/";
 header("location:$redirect");
?>

  <p>&nbsp;</p>
	</div><!-- Fim inner_container -->
</div><!-- Fim main_container -->
    <?php require "footer.php" ?>
</body>
</html>
