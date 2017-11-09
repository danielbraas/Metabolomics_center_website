<?php
  include("templates/scaffold_functions.php");

  makeHeader("UCLA Metabolomics Center", array("static/css/index.css"));
?>

<?php makeTop(); ?>

<div class="row featurette index-featurette" id="section0">
  <h1 class="featurette-heading">
    UCLA Metabolomics Shared Resource
  </h1>
  <div class="div1 col-xs-4">
	<img class="img-responsive" src="static/images/UCLA_MMPharm_logo.JPG">
  </div>
  <p class="lead">
    Our center has an emphasis on metabolomics, proteomics related to metabolism, and other proteomics projects. Our emphasis is on collaborative projects that push mass spectrometry-based methods forward, and on sharing these advances with faculty at UCLA and at other top-ranking universities throughout the country.
  </p>
</div>

<div class="row featurette index-featurette" id="section1">
  <h2 class="featurette-heading">
    Overview of Facility History
  </h2>
  <p class="lead">
    The UCLA Metabolomics and Proteomics Shared Resource was established in the spring of 2013. The mission of the center is to develop and apply cutting-edge approaches for quantitative metabolomics and proteomics.
  </p>
</div>

<div class="row featurette index-featurette" id="section2">
  <h2 class="featurette-heading">
    About our services
  </h2>
  
  <div id="MetabolomicsCarousel" class="carousel-fade div1 col-xs-4" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img class="img-responsive" src="static/images/cnsi1.jpg" >
		</div>
		<div class="item">
			<img class="img-responsive" src="static/images/Crump_big_logo.JPG">
		</div>
		<div class="item">
			<img class="img-responsive" src="static/images/ucla-med-logo.png">
		</div>
		<div class="item">
			<img class="img-responsive" src="static/images/CNSI_image.png">
		</div>
	</div>
  </div>
  <!--<div class="row">-->
    <p class="lead">
      Our facility is collaborating with users from over 70 different labs, including 52 at UCLA, labs off campus (e.g. Caltech, Harvard, Stanford, UCSD, UCSF and USC) and labs in Europe.
	</p>
	 <p class="lead">
     The nature of the projects is very diverse, ranging from metabolite level measurements in organelles (eg. liver mitochondria) to mouse blastospheres and from determining changes in cell culture medium (metabolic footprint) to metabolic differences in blood and tumors from human brain trauma patients and transgenic mice, respectively.<br>
	 For an introduction into sample preparation, our analysis pipeline and output as well as for an overview of the types of samples we have prepared previously, <a href="apply.php">please click here.</a>
	</p> 
  <!--</div>-->
</div>

<div class="row featurette index-featurette" id="instruments">
  <h2 class="featurette-heading">
    Instruments
  </h2>

  <div class="div1 col-xs-4">
    <!--<div class="col-xs-4">-->
      <p><img class="img-responsive" src="static/images/qe1.jpg" /></p>
      <p><img class="img-responsive" src="static/images/qe2.jpg" /></p>
      <img class="img-responsive" src="static/images/gcms.jpg" />
    <!--</div>-->
  </div>

  <!--<div class="row">-->
    <p class="lead">
      Data is collected using two Thermo Scientific Q Exactive mass spectrometers coupled to a UltiMate 3000 UPLC chromatography systems, which allows us to look for metabolites and proteins in a targeted (SIM) and untargeted (full scan) approach. In addition, this instrument allows for fragmentation of selected ions, which allows us to sequence peptides and analyze the structure of small molecules.
    </p>
  <!--</div>-->
</div>



<?php makeBottom(); ?>
