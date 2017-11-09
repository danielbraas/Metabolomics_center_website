<?php
  include("templates/scaffold_functions.php");

  makeHeader("UCLA Metabolomics Center", array("static/css/index.css"), array("static/js/jquery.waypoints.min.js", "static/js/index.js"));
?>

<?php makeTop(); ?>

<div class="row featurette index-featurette waypoint-hidden" id="workflow">
  <h2 class="featurette-heading">
    Metabolomics Center Workflow
  </h2>

  <div class="row">
    <img class="img-responsive center-block" src="static/images/metabolomics_workflow.png" />
  </div>

</div>

<div class="row featurette index-featurette waypoint-hidden" id="dataanalysis">
  <h2 class="featurette-heading">
    Data analysis
  </h2>

  <div class="row">
    <div class="col-xs-4">
      <img class="img-responsive center-block" src="static/images/isotopologuedist.png" />
    </div>
    <div class="col-xs-4">
      <img class="img-responsive center-block" src="static/images/heatmap.png" />
    </div>
    <div class="col-xs-4">
      <img class="img-responsive center-block" src="static/images/ExampleMAP2_small.png" />
    </div>
  </div>

  <div class="row">
    <p class="lead">
      Services include data analysis such as heatmapping, principal component analysis, cytoscape mapping and isotopologue distrubution analysis.
    </p>
  </div>
</div>

<div class="row featurette index-featurette" id="sampletypes">
	<h2 class="featurette-heading">
		Sample types we can process
	</h2>
	<div class="div1">
		<img class="img-responsive center-block" src="static/images/sampletypes.png" width=500 height=300 />
	</div>
    <p class="lead">
      Our projects are very diverse, including metabolite level measurements, determining changes in cell culture medium (metabolic footprint) and metabolic flux differences.  The types of samples we process range from organelles (eg. liver mitochondria) to mouse blastospheres and from blood and tumors to human leukemia cells.
    </p>
</div>



<?php makeBottom(); ?>
