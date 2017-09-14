<? require "head.php" ?>
<title>OIC - Publicações</title>

<script type="text/javascript" language="JavaScript"><!--
//CODIGO RESPONSAVEL POR FAZER SHOW/HIDE
function DoViewIFRAME(tid1,tid2,tid3) {
document.getElementById(tid1).style.display = "none";
document.getElementById(tid2).style.display = "";
document.getElementById(tid3).style.display = "";
}
function DoHideIFRAME(tid1,tid2,tid3) {
document.getElementById(tid1).style.display = "none";
document.getElementById(tid2).style.display = "none";
document.getElementById(tid3).style.display = "";
}
//--></script>

</head>
<body> 
<?php require "header.html" ?>
    <?php require "menu.html"?>
    
<div id="main_container">
    <div id="inner_container">
    
        <div id="div_titulo">
            <h2 id="titulo">Publicações</h2>
        </div><!-- Fim div_titulo -->  
	<div style="height:316px"><!-- início caption -->
<!-- deixar o texto ao lago da imagem da revista -->
<p><img src="images/revista.jpg" align="right" alt="Foto da revista 'Saúde Consciencial'" width="250px"/></p>
	<p>Em 2012, a OIC lançou o primeiro periódico científico  do mundo sobre Consciencioterapia, inicialmente intitulado Saúde Consciencial.</p>
	<p>&nbsp;</p>    
	<p>Em 2015, o periódico foi relançado com o nome <i>"Conscientiotherapia: Revista Científica de Consciencioterapeuticologia"</i>.</p>
<p>&nbsp;</p>
	<p>Nesta Revista você poderá encontrar o resultado de  pesquisas consciencioterápicas, propostas de paratecnologias aplicadas  à Consciencioterapia e de experiências de autoconsciencioterapia de  consciencioterapeutas e evolucientes. 
<p>&nbsp;</p>

		<!--p><a href="http://www.oic.org.br/revista" target="_blank">Revista Conscientiotherapia  - 4ª Edição</a></p-->
    <p><a href="http://oic.org.br/publicado/downloads/RevistaConscientiotherapia05.pdf" target="_blank">Revista Conscientiotherapia  - 5ª Edição - 2016 <img src="images/pdf.jpg"/></a></p>    <p><a href="http://oic.org.br/publicado/downloads/RevistaConscientiotherapia04.pdf" target="_blank">Revista Conscientiotherapia  - 4ª Edição - 2015 <img src="images/pdf.jpg"/></a></p>
        <p><a href="publicado/downloads/revista3.pdf" target="_blank">Revista Saúde Consciencial - 3ª Edição - 2014 <img src="images/pdf.jpg"/></a></p>
    <p><a href="publicado/downloads/revista2.pdf" target="_blank">Revista Saúde Consciencial - 2ª Edição - 2013 <img src="images/pdf.jpg"/></a></p>
        <p><a href="publicado/downloads/revista1.pdf" target="_blank">Revista Saúde Consciencial - 1ª Edição - 2012 <img src="images/pdf.jpg"/></a></p>
    </div><!-- fim caption -->
<p>&nbsp;</p>
    
<h2 id="titulo">Outras publicações</h2>
<!-- FIM ANAIS1 -->
	  <p id="subtitulo" style="font-size:12px">Anais do I Simp&oacute;sio de Autoconsciencioterapia - 
<!-- LINK MOSTRAR/ESCONDER -->
<span 
   id="view_anais1" 
   onclick="DoViewIFRAME('view_anais1','hide_anais1','frame_anais1');" 
   style="	color: #6DA6E2;
   			cursor: pointer;">
<nobr>Mostrar</nobr>
</span>
<span 
   id="hide_anais1" 
   onclick="DoHideIFRAME('hide_anais1','frame_anais1','view_anais1');" 
   style=" 	display: none;
   			color: #6DA6E2;
            cursor: pointer;">
<nobr>Esconder</nobr>
</span>
<!-- FIM - LINK MOSTRAR/ESCONDER -->

<!-- IFRAME MOSTRAR/ESCONDER-->
<div 
   id="frame_anais1" 
   align="center" 
   style="display: none;">
<iframe 
   src="publicado/anais1.php" 
   scrollbars="no" 
   frameborder="0"
   width="800" 
   height="330px">
</iframe>
</div>
<!-- FIM - IFRAME MOSTRAR/ESCONDER-->
<!-- FIM ANAIS1 -->

	<p>&nbsp;</p>
		<p id="subtitulo" style="font-size:12px">Anais do II Simp&oacute;sio de Autoconsciencioterapia (Revista <i>Conscientia</i>) - 
    
<!-- LINK MOSTRAR/ESCONDER -->
<span 
   id="view_anais2" 
   onclick="DoViewIFRAME('view_anais2','hide_anais2','frame_anais2');" 
   style="	color: #6DA6E2;
   			cursor: pointer;">
<nobr>Mostrar</nobr>
</span>
<span 
   id="hide_anais2" 
   onclick="DoHideIFRAME('hide_anais2','frame_anais2','view_anais2');" 
   style=" 	display: none;
   			color: #6DA6E2;
            cursor: pointer;">
<nobr>Esconder</nobr>
</span>
<!-- FIM - LINK MOSTRAR/ESCONDER -->

<!-- IFRAME MOSTRAR/ESCONDER-->
<div 
   id="frame_anais2" 
   align="center" 
   style="display: none;">
<iframe 
   src="publicado/anais2.php" 
   scrollbars="no" 
   frameborder="0"
   width="800" 
   height="850px">
</iframe>
</div>
<!-- FIM - IFRAME MOSTRAR/ESCONDER-->
<p>&nbsp;</p>
  
	</div><!-- Fim inner_container -->
</div><!-- Fim main_container -->
<?php require "footer.php" ?>
</body>
</html>
