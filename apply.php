<?php
  include("templates/scaffold_functions.php");

  makeHeader("UCLA Metabolomics Center");
?>

<?php makeTop(); ?>

<div class="row featurette index-featurette" id="apply">
	<h2 class="featurette-heading">
		Contact
	</h2>
  <div class="row">
	<div class='div1'>
		<img class='img-responsive center-block' src='static/images/ctsi-logo.png'>
	</div>
    <p class="lead">
      To discuss your project with us, contact Daniel Braas <a href="mailto:uclametabolomicscenter@gmail.com">&ltuclametabolomicscenter@gmail.com&gt</a>
    </p>
	<p class="lead">
		<b><i>Shipping information:</b></i><br>Daniel Braas<br>4338 CNSI, UCLA<br>570 Westwood Plz<br>Los Angeles, CA, 90095<br>Phone: 3102067054
	</p>
    <p class="lead">
      The UCLA Metabolomics Center is endorsed by the UCLA Clinical and Translational Science Institute (CTSI). <br>Apply for vouchers here: <a href="http://ctsi.ucla.edu/funding/pages/fund">http://ctsi.ucla.edu/funding/pages/fund</a>
    </p>
	
  </div>
</div>

<div class="row featurette index-featurette" id="sampleprep">
	<h2 class="featurette-heading">
		Sample Preparation
	</h2>	
	<div class="row">
		<div class="div1">
			<img class="img-responsive center-block" src="static/images/samplepreparation.png" width=640 height=480 />
		</div>
		<p class="lead">
			Refer to our protocols for sample preparation: 
			<ul>
				<li><a href="Cell metabolite extraction protocol.pdf">Cell metabolite extraction protocol.pdf</a> </li>
				<li><a href="Metabolite extraction from cell culture medium.pdf">Metabolite extraction from cell culture medium.pdf</a> </li>
				<li><a href="Metabolite extraction from blood plasma and serum.pdf">Metabolite extraction from blood plasma and serum.pdf</a> </li>
				<li><a href="Metabolite extraction from CSF.pdf">Metabolite extraction from CSF.pdf</a> </li>
				<li><a href="Tissue metabolite extraction protocol.pdf">Tissue metabolite extraction protocol.pdf</a> </li>
				<li><a href="Cecum Metabolite Extraction.pdf">Cecum Metabolite Extraction.pdf</a> </li>
			</ul>
		</p>	
		<p class="lead">	
			Cells are usually plated onto 6well plates. The targeted cell number at the time of extraction is >= 200k cells / well. For metabolite extraction, we prefer a 1-phase method (MeOH only), but a 2-phase extraction (including CHCl3) works well, also. <br>
			For simplicity, please label your sample tubes with 1, 2, 3, etc and fill out the <a href="Daniel-GBM-1,2-13C Glc-Ctrl vs Trx-10222015.xlsx">sample information sheet</a> accordingly. Please save the sample information sheet with the <strong>name of the study including a date</strong>. 
		</p>
		<p class="lead">
			<b><i>Shipping information:</b></i><br>Daniel Braas<br>4338 CNSI, UCLA<br>570 Westwood Plz<br>Los Angeles, CA, 90095<br>Phone: 3102067054
		</p>
	</div>
</div>

<div class="row featurette index-featurette" id="sampleinfo">
	<h2 class="featurette-heading">
		Sample Information
	</h2>
	<div class='row'>
		<div class="div1">
			<img class="img-responsive center-block" src="static/images/formpreparation.png" width=800 height=600/>
		</div>
		
		<p class="lead">
		Please fill out and email the <a href="Daniel-GBM-1,2-13C Glc-Ctrl vs Trx-10222015.xlsx">sample information sheet</a> to Daniel when you submit your samples. Please remember to check if the funding information is up-to-date. For UCLA clients, please provide a valid recharge ID or FAU. Once you have filled out the sample info sheet, please save the .xlsx file with the <strong>name of the study including a date</strong>.
		Please be careful with leading and trailing spaces in the condition names as this will cause the same conditions to appear as distinct conditions in our scripts and lead to more work for us.
		</p>
		<p class="lead">
			<b><i>Shipping information:</b></i><br>Daniel Braas<br>4338 CNSI, UCLA<br>570 Westwood Plz<br>Los Angeles, CA, 90095<br>Phone: 3102067054
		</p>
		
	</div>
</div>

<?php makeBottom(); ?>
