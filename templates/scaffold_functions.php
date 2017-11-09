<?php

  class Page{
    public $display_name;
    public $link;

    function __construct($n, $l){
      $this->display_name = $n;
      $this->link = $l;
    }
  }

  class PageList{
    public $page_list;
    public $page_name;

    function __construct($p, $n){
      $this->list = $p;
      $this->display_name = $n;
    }

    function singlePage(){
      return(count($this->list) == 1);
    }
  }

  $site_root = "/metabolomics_center";
  $pages = array();
  $pages["request_form"] = new Page("Contact", "$site_root/apply.php");
  $pages["samples"] = new Page("Sample preparation", "$site_root/apply.php#sampleprep");
  $pages["info"] = new Page("Sample information", "$site_root/apply.php#sampleinfo");
  $pages["people"] = new Page("People", "$site_root/people.php");
  $pages["publications"] = new Page("Publications", "$site_root/publications.php");
  $pages["dataanalysis"] = new Page("Data analysis", "$site_root/services.php#dataanalysis");
  $pages["sampletypes"] = new Page("Sample types", "$site_root/services.php#sampletypes");
  $pages["workflow"] = new Page("Workflow", "$site_root/services.php#workflow");
  /*$pages["contact"] = echo "<a href='mailto:"danielbraas@gmail.com"'>";*/
  $page_lists = array(
    new PageList( array($pages["workflow"],$pages["dataanalysis"], $pages["sampletypes"]), "Services"),
    new PageList( array($pages["request_form"], $pages["samples"], $pages["info"]), "Sample Preparation"),
    new PageList( array($pages["people"]), ""),
	new PageList( array($pages["publications"]), "")
	/*new PageList( array($pages["contact"], "")*/
  );

  function makeHeader($title, $css = array(), $js = array(), $other_lines = array(), $continue_head = False){
    $bootstrap_css = "static/css/bootstrap-3.3.2-dist/css/flatlybootstrap.min.css";
    $bootstrap_js = "static/css/bootstrap-3.3.2-dist/js/bootstrap.min.js";
    $jquery_url = "https://code.jquery.com/jquery-2.1.3.min.js";
    $helper_css = "static/css/base.css";
  
    echo "<html lang=\"en\">";
    echo "<head>";
  
    echo "<meta charset=\"utf-8\" />";
    echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
  
    echo "<link rel=\"shortcut icon\" href=\"http://systems.crump.ucla.edu/favicon.ico\" />";
    echo "<link rel=\"stylesheet\" href=\"$bootstrap_css\" />";
    echo "<link rel=\"stylesheet\" href=\"$helper_css\" />";
    for($i = 0; $i < count($css); $i++){
      echo "<link rel=\"stylesheet\" href=\"$css[$i]\" />";
    }
  
    echo "<script src=\"$jquery_url\"></script>";
    echo "<script src=\"$bootstrap_js\"></script>";
    for($i = 0; $i < count($js); $i++){
      echo "<script src=\"$js[$i]\"></script>";
    }
  
    for($i = 0; $i < count($other_lines); $i++){
      echo "$otherlines[$i]";
    }
  
    echo "<title>$title</title>";
    if(!$continue_head) echo "</head>";
  }

  function echoPageLi($page){
    echo "<li><a class=\"base-navitem\" href=\"".$page->link."\">".$page->display_name."</a></li>";
  }

  function navItem($pl){
    if($pl->singlePage()){
      $page = $pl->list[0];
      echoPageLi($page);
    }else{
      echo "<li class=\"dropdown\">";
      echo "<a class=\"base-navitem dropdown-toggle\" data-toggle=\"dropdown\" href=\"".$pl->link."\" role=\"button\" aria-expanded=\"false\">";
      echo $pl->display_name." <span class=\"base-navitem caret\"></span></a>";
      echo "<ul class=\"base-navbar dropdown-menu\" role=\"menu\">";
      for($i = 0; $i < count($pl->list); $i++){
        $page = $pl->list[$i];
        echoPageLi($page);
      }
      echo "</ul>\n</li>\n</li>";
    }
  }


  function makeBottom(){
    echo "</div>";
    echo "</div>";
    echo "</body>";
  }

  function makeTopBar(){
    global $page_lists;
    global $site_root;

    echo "<div class=\"navbar navbar-default navbar-fixed-top\">";

    echo "<a class=\"base-navitem navbar-brand color:#33ccff\" href=\"$site_root/index.php\">UCLA Metabolomics Center</a>";

    echo "<div class=\"navbar-header\">";
    echo "<button class=\"navbar-toggle collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main\" aria-expanded=\"false\">";
    echo "<span class=\"icon-bar\"></span>";
    echo "<span class=\"icon-bar\"></span>";
    echo "<span class=\"icon-bar\"></span>";
    echo "</button>";
    echo "</div>";

    echo "<div class=\"navbar-collapse collapse\" id=\"navbar-main\" aria-expanded=\"false\" style=\"height: 1px;\">";
    echo "<ul class=\"nav navbar-nav\">";
    for($i = 0; $i < count($page_lists); $i++){
      navItem($page_lists[$i]);
    }
    echo "</ul>";

    echo "</div>";
    echo "</div>";
  }

  function makeTop(){

    echo "<body>";
    echo "<div class=\"container-fluid\">";
    makeTopBar();
    echo "<div class=\"container\" id=\"main-content\">";
    
  }
?>
