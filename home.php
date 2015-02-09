<?php
include 'get_json.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ProvDb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
        .content a.left {
            float: left;
        }

        #yz {
            margin-left: 110px;
        }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>

</head>

<body>

<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            </a>
            <a class="brand" href="#">
				<img src="img/logo.jpg" style="width:18px;height:18px">
				<b>ProvDB</b>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
					<li class="active"><a href=""><img src="img/home-50.png" style="width:18px;height:18px"></a></li>
                    <li class="active"><a href="#instruction">Introduction</a></li>
                    <li class="active"><a href="#API">API</a></li>
                    <li class="active"><a href="#Responses">Responses</a></li>
                    <li class="active"><a href="#Authentication">Authentication</a></li>
                    <li class="active"><a href="#database_schema">Database Schema</a></li>
                    <li class="active"><a href="#Related_Links">Related Links</a></li>
                    <li class="active"><a href="https://github.com/SciCrunch/CINERGI-PROV">Github Repository</a></li>
					<li class="active"><a href=""><img src="img/search-50.png" style="width:18px;height:18px"></a></li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<div id="instruction" class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit" style="height:200px;">
        <h2>Instruction</h2><br>
        <ul>
            ProvDB's API provides a RESTful web service for storage and access of provenance documents in various formats of the W3C's <class="active"><a href="http://www.w3.org/TR/prov-dm/">PROV Data Model</a>. Using the API, any client can upload PROV-compliant documents and query them using the PROV description model.

            This document provides details and examples of the available endpoints and resources at a low level. Existing libraries can be used instead to publish and access provenance documents available through ProvDB.
        </ul>
    </div>
</div> <!-- /container -->


<div id="API" class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit" style="height:800px;">
        <h2>API</h2><hr>			
		<ul>
		<div class="span3">
            <li class="active"><a href="">Link for API 1</a></li>
            <p>show the description foor API 1<br></p>
            <button class="btn btn-primary btn-lg" id="1" onClick="reply_click(this.id)">Try API 1</button>
            <li class="active"><a href="">Link for API 2</a></li>
            <p>show the description foor API 2<br></p>
            <button class="btn btn-primary btn-lg" id="2" onClick="reply_click(this.id)">Try API 2</button>
        </div>
        <div class="span4">
            <li class="active"><a href="">Link for API 3</a></li>
            <p>show the description foor API 3<br></p>
            <button class="btn btn-primary btn-lg" id="3" onClick="reply_click(this.id)">Try API 3</button>
            <li class="active"><a href="">Link for API 4</a></li>
            <p>show the description foor API 4<br></p>
            <button class="btn btn-primary btn-lg" id="4" onClick="reply_click(this.id)">Try API 4</button>
        </div>
        <div class="span3">
            <li class="active"><a href="">Link for API 5</a></li>
            <p>show the description foor API 5<br></p>
            <button class="btn btn-primary btn-lg" id="5" onClick="reply_click(this.id)">Try API 5</button>
            <li class="active"><a href="">Link for API 6</a></li>
            <p>show the description foor API 6<br></p>
            <button class="btn btn-primary btn-lg" id="6" onClick="reply_click(this.id)">Try API 6</button>
        </div>
        <div class="span10">
            <br><a href="" class="btn btn-lg btn-link  pull-right" role="button">Explore More</a><br>
        </div>
        </ul>

        <div class="span5 pull-right">
        	<br>
        	<img src="img/sampledata1.png" style="width:400px;height:400px">       	
        </div>
        <div class="span5 pull-left">		
        <br>
        <form method="post" action="showdata.php">
        <textarea id="myTextarea" name="JsonRaw" class="span5" rows ="19"><?php echo $page1; ?></textarea>
        <p><br><button class="btn btn-info btn-lg pull-right" type="submit">try it by yourself &raquo;</button></p>
        </form>
		</div>

		<script>
		function reply_click(clicked_id) {
			if(clicked_id==1)
   				document.getElementById("myTextarea").value = "1";
   			else if(clicked_id==2)
   				document.getElementById("myTextarea").value = "2";
   			else if(clicked_id==3)
   				document.getElementById("myTextarea").value = "3";
   			else if(clicked_id==4)
   				document.getElementById("myTextarea").value = "4";
   			else if(clicked_id==5)
   				document.getElementById("myTextarea").value = "5";
   			else if(clicked_id==6)
   				document.getElementById("myTextarea").value = "6";
		}
		</script>

    </div>
</div> <!-- /container -->

<div id="Responses" class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
	<div class="hero-unit" style="height:300px;">
        <h2>Responses</h2>
        <hr>
        <ul>
            <div class="span2">
            	GET
            </div>
            <div class="span2">
                <span class="label label-success">200 OK</span>
            </div>
            <div class="span6">
                The resource was successfully retrieved.
                <hr>
            </div>

            <div class="span2">
                POST
            </div>
            <div class="span2">
                <span class="label label-success">201 OK</span>
            </div>
            <div class="span6">
                The resource was successfully created. The information held in the new resource will be provided in the response body.
                <hr>
            </div>

            <div class="span2">
                POST
            </div>
            <div class="span2">
                <span class="label label-success">202 Accepted</span>
            </div>
            <div class="span6">
                The sub-resource was successfully added to the target resource.
                <hr>
            </div>
        </ul>
	</div>
            
</div> <!-- /container -->


<div id="Authentication" class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit" style="height:400px;">
        <h2>Authentication</h2><hr>
        <ul>
            The API supports authentication by either API key or OAuth. The API can also be accessed anonymously if you do not wish to authenticate. In this case only public documents will be visible and documents may not be added/modified.<br>
            <li class="active"><a href="">Authentication API 1</a></li>
            <p>show the description foor API 1<br></p>
            <li class="active"><a href="">Authentication API 2</a></li>
            <p>show the description foor API 2<br></p>
            <li class="active"><a href="">Authentication API 3</a></li>
            <p>show the description foor API 3<br></p>       
        </ul>
    </div>
</div> <!-- /container -->

<div id="database_schema" class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit" style="height: 100px;">
        <h2>Database schema</h2><hr>
        <!-- <div class="span5">
            <div class="content">
                <div class="jumbotron">
                <h3><p>sample data 1</h3>
                description of sample data 1<br><br>
                <img src="img/sampledata1.png" style="width:500px;height:500px">
                <p>
                   <br><a href="" class="btn btn-large btn-primary" role="button">Try it!</a><br>
                </p>
                </div>
            </div>
        </div>
        <div class="span5">
            <div class="content">
                <div class="jumbotron">
                <h3><p>sample data 2</h3>
                description of sample data 2<br><br>
                <img src="img/sampledata2.jpg" style="width:500px;height:500px">
                <p>
                   <br><a href="" class="btn btn-primary btn-large" role="button">Try it!</a><br>
                </p>
                </div>
            </div>
        </div>
        <br>
        <div class="span5">
            <div class="content">
                <div class="jumbotron">
                <h3><p>sample data 3</h3>
                description of sample data 3<br><br>
                <img src="img/sampledata3.jpg" style="width:500px;height:500px">
                <p>
                   <br><a href="" class="btn btn-primary btn-large" role="button">Try it!</a><br>
                </p>
                </div>
            </div>
        </div>
        <div class="span10">
            <div class="content  pull-right">
                <p>
                   <br><a href="" class="btn btn-lg btn-link" role="button">More sample</a><br>
                </p>
                </div>
            </div>
        </div> -->
    </div>
</div> <!-- /container -->

<div id="Related_Links" class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit" style="height:190px;">
        <h2>Related Links</h2><hr>
        <ul>
            <li><class="active"><a href="">Link 1</a></li> 
            <li><class="active"><a href="">Link 2</a></li>
            <li><class="active"><a href="">Link 3</a></li>
            <li><class="active"><a href="">Link 4</a></li>
        </ul>
    </div>
</div> <!-- /container -->






