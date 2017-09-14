<html><head>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Acme">
<script src="scripts/jQuery.js"></script>
<script src="scripts/jQuery_Cycle2.js"></script>
<script src="scripts/Cycle2_centre-mod.js"></script>
<style>
/* loading style */
.cycle-slideshow img:first-child {
    position: static; 
	z-index: 100;
}

/* pager */
.cycle-pager {
    text-align: center; 
	width: 100%; 
	position: absolute; 
	bottom: 5px; 
}
.cycle-pager span {
	font-size: 50px; 
	width: 16px; 
	height: 16px; 
	color: #ddd; 
	cursor: pointer; 
}
.cycle-pager span.cycle-pager-active {color: #D69746;}
.cycle-pager > * {cursor: pointer;}
</style>
</head>

<body>
<!-- div de ciclo de images em destaque -->
<div class="cycle-slideshow"
    data-cycle-timeout=3500
    data-cycle-center-horz=true
    data-cycle-slides="> a"
    >
    <div class="cycle-pager"></div>
    
    <!-- IMGS 800x400 --> 
<a href="http://www.oic.org.br/cursos/170901_semana" target="_blank"><img src="images/cycle/semana.jpg"></a>

    
	<a href="oic" target="_parent"><img src="images/cycle/sobreOIC.jpg"></a>
        
    <a href="consciencioterapia" target="_parent"><img src="images/cycle/consciencioterapia.jpg" alt="Foto de uma simulação de atendiemento"></a>
    
        <a href="http://www.oic.org.br/cursos/170822_ATENDIMENTOS" target="_blank"><img src="images/cycle/atendimentos.jpg"></a>

    
    	<a href="agenda" target="_blank"><img src="images/cycle/agenda.jpg"></a>
        
	<a href="http://www.oic.org.br/cursos/170306_imersao" target="_blank"><img src="images/cycle/imersao.jpg" alt="Divulgação de curso avançado em São Paulo"></a>
    
</div><!-- fim cycle-slideshow -->
</body>
</html>