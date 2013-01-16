<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<script language="javascript">
//    $(document).ready(function(){
//        $.mobile.click();
//    });
</script>
<div data-role="page">

	<div data-role="header">
		<h1>About Us</h1>
	</div><!-- /header -->

	<div data-role="content">
		<p>This is a "static" page. You may change the content of this page by updating the file <code><?php echo __FILE__; ?></code>.</p>
		<ul data-role="listview" data-inset="true" data-filter="true">
			<li><a href="#">Acura</a></li>
			<li><a href="#">Audi</a></li>
			<li><a href="#">BMW</a></li>
			<li><a href="#">Cadillac</a></li>
			<li><a href="#">Ferrari</a></li>
		</ul>
                
	</div><!-- /content -->
	
	
	<div class="ui-grid-a">
	  <div class="ui-block-a"><button type="button" data-theme="a">Previous</button></div>
	  <div class="ui-block-b">
	    <button type="button" data-theme="b">Next</button>
	    <label for="foo">
		<select name="foo" id="foo">
			<option>Select Country</option>
			<option value="a">A</option>
			<option value="b">B</option>
			<option value="c">C</option>
		</select>
	  </div>
	</div>
	<div class="ui-grid-solo">
	  <div class="ui-block-a"><button type="button" id="test" data-theme="c">Submit</div></div>
	</div>
