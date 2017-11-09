<?php
  include("templates/scaffold_functions.php");

  makeHeader("UCLA Metabolomics Center", array("static/css/index.css"));
?>

<?php makeTop(); ?>

<div id="main_carousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#main_carousel" data-slide-to="0" class="active"></li>
    <li data-target="#main_carousel" data-slide-to="1"></li>
    <li data-target="#main_carousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <div class="container">
        <div class="carousel-caption">
          <h1>UCLA Metabolomics Shared Resource</h1>
          <p>
            Our center has an emphasis on metabolomics, proteomics related to metabolism, and other proteomics projects. Our emphasis is on collaborative projects that push mass spectrometry-based methods forward, and on sharing these advances with faculty at UCLA and at other top-ranking universities throughout the country.
          </p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="container">
        <div class="carousel-caption">
          <h1>Overview of Facility History</h1>
          <p>
            The UCLA Metabolomics and Proteomics Shared Resource was established in the spring of 2013. The mission of the center is to develop and apply cutting-edge approaches for quantitative metabolomics and proteomics.
          </p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="container">
        <div class="carousel-caption">
          <h1>UCLA Metabolomics and Proteomics Shared Resource’s contribution to scientific publications</h1>
          <p>
            <a href="http://www.ncbi.nlm.nih.gov/pubmed/24828042">The metabolite α-ketoglutarate extends lifespan by inhibiting ATP synthase and TOR.</a> Chin RM, Fu X, Pai MY, Vergnes L, Hwang H, Deng G, Diep S, Lomenick B, Meli VS, Monsalve GC, Hu E, Whelan SA, Wang JX, Jung G, Solis GM, Fazlollahi F, Kaweeteerawat C, Quach A, Nili M, Krall AS, Godwin HA, Chang HR, Faull KF, Guo F, Jiang M, Trauger SA, Saghatelian A, Braas D, Christofk HR, Clarke CF, Teitell MA, Petrascheck M, Reue K, Jung ME, Frand AR, Huang J. Nature. 2014 Jun 19;510(7505):397-401. doi: 10.1038/nature13264. Epub 2014 May 14.
          </p>
          <p>
            <a href="http://www.ncbi.nlm.nih.gov/pubmed/24703700">Adenovirus E4ORF1-induced MYC activation promotes host cell anabolic glucose metabolism and virus replication.</a> Thai M, Graham NA, Braas D, Nehil M, Komisopoulou E, Kurdistani SK, McCormick F, Graeber TG, Christofk HR. Cell Metab. 2014 Apr 1;19(4):694-701. doi: 10.1016/j.cmet.2014.03.009.
          </p>
        </div>
      </div>
    </div>

  </div>

  <a class="left carousel-control" href="#main_carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#main_carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>


<?php makeBottom(); ?>
