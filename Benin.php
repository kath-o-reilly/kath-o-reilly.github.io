<?php
$example = 'example';
$wellArray = array (
'Arrays are a lot of fun.',
'Bootstrap is an amazing development tool to use with PHP',
'With bootstrap you can quickly code and design beautiful websites'
);
?>
<html>
<head>
  <title>Benin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- updated to local style sheet -->
  <link rel="stylesheet" type="text/css" href="js/css/bootstrap.min.css"> 
  <!-- scripts that code is reliant on -->
  <script src='js/d3/d3.min.js' charset="utf-8"></script>
  <script src='js/crossfilter/crossfilter.js' type='text/javascript'></script>
  <script src='js/dc/dc.js' type='text/javascript'></script>
  <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"></script>
 
</head>
<body class>
  
<!-- add in navbar that it consistent with mainpage -->  
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
		  	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		    		<span class="sr-only">Toggle navigation</span>
		    		<span class="icon-bar"></span>
		    		<span class="icon-bar"></span>
		    		<span class="icon-bar"></span>
		  	</button>
		  	<a class="navbar-brand" href="#">Vaccine Epidemiology</a>
		</div>
	        <div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav navbar-right">
	            		<li><a href="http://kath-o-reilly.github.io/">Main page</a></li>
	            		<li><a href="#">Option 2</a></li>
	            		<li><a href="#">Option 3</a></li>
	            		<li><a href="#">Help (br)</a></li>
	          	</ul>
	          	<form class="navbar-form navbar-right">
	            		<input type="text" class="form-control" placeholder="Search (br)...">
	          	</form>
	        </div>
        </div>
</div>

<!-- whole page needs to be in a container -->
<div class="container">
	<div class="page-header" id="banner">
		<div class="row">
			<div class="col-lg-12">
				<h2>Benin DHS survey 2001</h2>
		  		<p>Estimates of DPT vaccination. </p>     
			</div>
		</div>
	</div>
	<div class="bs-docs-section">
		<div class="row">
			<div class="col-sm-4">
  				<a href="images/Benin2001_dpt_spatial_num.png" class="thumbnail">
    				<p>Numbers unvaccinated</p>
    				<img src="images/Benin2001_dpt_spatial_num.png" alt="unvaccinated" style="width:200px;height:300px">
  				</a>
			</div> <!-- first item -->
			<div class="col-sm-4"> <!-- second item -->
  				<a href="images/Benin2001_dpt_spatial_num.png" class="thumbnail">
    				<p>Vaccination coverage</p>    
    				<img src="images/Benin2001_dpt_spatial_name.png" alt="coverage" style="width:200px;height:300px">
				</a>
			</div> <!-- second item  -->
			<div class="col-sm-4" > <!-- third item id="chart1" -->

			</div> <!-- third item  -->
		</div> <!-- row -->	
	</div>  <!-- doc section -->
	<div class="bs-docs-section"> <!-- section for pie chart -->
		<div class="row">
			<div class="col-md-8">
				<div class="bs-component">
					<p>The numbers unvaccinated is estimated from vaccination coverage and the number of children aged under 5 years of age. Vaccination coverage is estimated from a spatial analysis of the most recent DHS survey.</p>
					<p>We also explore whether some factors are associated with changes in vaccination coverage. Where factors are associated with vaccination coverage, we explore the impact of removing the inequities associated with this factor. For example, if wealth is associated with vaccination coverage, we estimate the increase in number of vaccinated individuals if the ineqities associated with this risk factor were removed. </p>
				</div>
			</div>	
		</div>
	</div>
	<div class="bs-docs-section"> <!-- section for table -->
		<div class="row">
			<div class="col-md-8">
				<div class="bs-component">
					<div class="table tale-striped table-hover" id="table1">

					</div> 
				</div>
			</div>
		</div>
	</div>
</div>

<!-- script for loading in data into the table above 
<script>
	// load csv using d3
	d3.csv("images/Benin2001_DPT_inter_results.csv", function(data){
		// create table and link to div
        console.log(data);
	}); // end of table
	
</script> -->

<script> // for reading in DPT file
var margin = {top: 20, right: 20, bottom: 70, left: 40},
    width = 400 - margin.left - margin.right,
    height = 600 - margin.top - margin.bottom;
// Parse the date / time
var parseDate = d3.time.format("%Y").parse;
var x = d3.scale.ordinal().rangeRoundBands([0, width], .05);
var y = d3.scale.linear().range([height, 0]);
var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom")
    .tickFormat(d3.time.format("%Y"));
var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .ticks(10);
// this one defines what the chart is 
var svg = d3.select("#chart1")
    .append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", 
          "translate(" + margin.left + "," + margin.top + ")");
d3.csv("images/dpt3_annual_estimates_WHO_T.csv", function(error, data) {
    data.forEach(function(d) {
        d.Year = parseDate(d.Year);
        d.Benin = +d.Benin;
    });
	
  x.domain(data.map(function(d) { return d.Year; }));
  //y.domain([0, d3.max(data, function(d) { return d.Benin; })]);
y.domain([0, 100]);
  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis)
    .selectAll("text")
      .style("text-anchor", "end")
      .attr("dx", "-.8em")
      .attr("dy", "-.55em")
      .attr("transform", "rotate(-90)" );
  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("DPT coverage");
  svg.selectAll("bar")
      .data(data)
    .enter().append("rect")
      .style("fill", "steelblue")
      .attr("x", function(d) { return x(d.Year); })
      .attr("width", x.rangeBand())
      .attr("y", function(d) { return y(d.Benin); })
      //.attr("height", 100 );
      .attr("height", function(d) { return height - y(d.Benin); });
});
</script>

<script>
	d3.text("images/Benin2001_DPT_inter_results2.txt", function(datasetText) {
	var parsedCSV = d3.csv.parseRows(datasetText);
	var sampleHTML = d3.select("#table1")
	    .append("table")
	    .style("border-collapse", "collapse")
	    .style("border", "2px black solid")
	
	    .selectAll("tr")
	    .data(parsedCSV)
	    .enter().append("tr")
	
	    .selectAll("td")
	    .data(function(d){return d;})
	    .enter().append("td")
	    .style("border", "1px black solid")
	    .style("padding", "5px")
	    .on("mouseover", function(){d3.select(this).style("background-color", "aliceblue")})
	    .on("mouseout", function(){d3.select(this).style("background-color", "white")})
	    .text(function(d){return d;})
	    .style("font-size", "12px");
	});
</script>
 
<footer>
        <div class="row">
        	<div class="col-lg-12">
            		<ul class="list-unstyled">
              			<li class="pull-right"><a href="#top">Back to top</a></li>
              			<li><a href="http://news.bootswatch.com" onclick="pageTracker._link(this.href); return false;">Blog</a></li>
              			<li><a href="http://feeds.feedburner.com/bootswatch">RSS</a></li>
              			<li><a href="https://twitter.com/bootswatch">Twitter</a></li>
              			<li><a href="https://github.com/thomaspark/bootswatch/">GitHub</a></li>
              			<li><a href="../help/#api">API</a></li>
              			<li><a href="../help/#support">Support</a></li>
            		</ul>
            		<p>Vaccine Epidemiology Info here. Contact <a href="mailto:k.oreilly@imperial.ac.uk">Kath O'Reilly</a>.</p>
            		 <p>Based on <a href="http://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>
        	</div>
	</div>
</footer>

</body>
</html>
