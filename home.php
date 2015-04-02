<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="personal home page">
        <meta name="author" content="Lingduo Kong">
        <link rel="icon" href="img/icon.png">
        <title>ProvDB</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.js"></script>
    </head>
    <body style="background-color: #FFECFF;">
        <nav class="navbar navbar-custom navbar-fixed-top" style="background-color:#3399FF;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/icon.png" style="width:25px;height:25px">
                </a>
                <a class="navbar-brand" href="#">
                    <b>ProvDB</b>
                </a>
                <ul class="nav navbar-nav pull-right">
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
        </nav>
        <div class="container" style="padding-top:70px">
            <div id="instruction" class="jumbotron" >
                <h2>Instruction</h2>
                <hr>
                <p>
                    <small>
                    ProvDB's API provides a RESTful web service for storage and access of provenance documents in various formats of the W3C's <a href="#">PROV Data Model</a>. Using the API, any client can upload PROV-compliant documents and query them using the PROV description model.<br>
                    This document provides details and examples of the available endpoints and resources at a low level. Existing libraries can be used instead to publish and access provenance documents available through ProvDB.
                    </small>
                </p>
            </div>
            <div id="API" class="jumbotron" style="height:1000px;">
                <h2>API</h2><hr>
                <div class="col-md-4">
                    <p>
                        <small>
                        <a href="">Link for POST API</a><br>
                        show the description for API 1<br>
                        </small>
                    </p>
                    <button class="btn btn-primary btn" id="post" value="post_client">POST API</button>
                    <hr>
                    <p>
                        <small>
                        <a href="">Link for API 1</a><br>
                        show the description for API 1<br>
                        </small>
                    </p>
                    <button class="btn btn-primary btn" id="q1" value="q1_client">GET API 1</button>
                </div>
                <div class="col-md-4">
                    <p>
                        <small>
                        <a href="">Link for API 2</a><br>
                        show the description for API 2<br>
                        </small>
                    </p>
                    <button class="btn btn-primary btn" id="q2" value="q2_client">GET API 2</button>
                    <hr>
                    <p>
                        <small>
                        <a href="">Link for API 3</a><br>
                        show the description for API 3<br>
                        </small>
                    </p>
                    <button class="btn btn-primary btn" id="q3" value="q3_client">GET API 3</button>
                </div>
                <div class="col-md-4">
                    <p>
                        <small>
                        <a href="">Link for API 5</a><br>
                        show the description for API 5<br>
                        </small>
                    </p>
                    <button class="btn btn-primary btn" id="q5" value="q5_client">GET API 5</button>
                    <hr>
                    <p>
                        <small>
                        <a href="">Link for API 7</a><br>
                        show the description for API 7<br>
                        </small>
                    </p>
                    <button class="btn btn-primary btn" id="q7" value="q7_client">GET API 7</button>
                </div>
                <div class="col-md-12">
                    <br><a href="" class="btn btn-lg btn-link pull-right" role="button">Explore More</a><br>
                </div>
                <div class="col-md-6 ">
                    <br>
                    <textarea id="myTextarea" name="JsonRaw" cols="60" rows ="20"></textarea>
                </div>
                <div class="col-md-6">
                    <br>
                    <img src="img/sampledata1.png" style="width:400px;height:400px">
                </div>
                <div class="col-md-12" id="interactive"></div>
                <script src="js/api.js">
                </script>
            </div>
            <div id="Responses" class="jumbotron" style="height:400px">
                <h2>Responses</h2>
                <hr style="padding:5px">
                <div class="col-md-2"><h4>
                    GET
                </h4></div>
                <div class="col-md-2"><h4>
                    <span class="label label-success">200 OK</span>
                </h4></div>
                <div class="col-md-8"><h4>
                    The resource was successfully retrieved.
                </h4></div>
                <hr style="padding:5px">
                <div class="col-md-2"><h4>
                    POST
                </h4></div>
                <div class="col-md-2"><h4>
                    <span class="label label-success">201 OK</span>
                </h4></div>
                <div class="col-md-8"><h4>
                    The resource was successfully created. The information held in the new resource will be provided in the response body.
                </h4></div>
                <hr style="padding:5px">
                <div class="col-md-2"><h4>
                    POST
                </h4></div>
                <div class="col-md-2"><h4>
                    <span class="label label-success">202 Accepted</span>
                </h4></div>
                <div class="col-md-8"><h4>
                    The sub-resource was successfully added to the target resource.
                </h4></div>
                <hr style="padding:5px">
            </div>
            <div id="Authentication" class="jumbotron" style="height:500px">
                <h2>Authentication</h2><hr>
                <p>
                    <small>
                    The API supports authentication by either API key or OAuth. The API can also be accessed anonymously if you do not wish to authenticate. In this case only public documents will be visible and documents may not be added/modified.<br>
                    </small>
                </p>
                <hr>
                <p>
                    <small>
                    <a href="">Authentication API 1</a><br>
                    show the description foor API 1<br>
                    </small>
                </p>
                <p>
                    <small>
                    <a href="">Authentication API 2</a><br>
                    show the description foor API 2<br>
                    </small>
                </p>
                <p>
                    <small>
                    <a href="">Authentication API 3</a><br>
                    show the description foor API 3<br>
                    </small>
                </p>
            </div>
            <div id="database_schema" class="jumbotron">
                <h2>Database schema</h2><hr>
            </div>
            <div id="Related_Links" class="jumbotron">
                <h2>Related Links</h2><hr>
                <p>
                    <small>
                    <class="active"><a href="">Link 1</a><br>
                    <class="active"><a href="">Link 2</a><br>
                    <class="active"><a href="">Link 3</a><br>
                    <class="active"><a href="">Link 4</a><br>
                    </small>
                </p>
            </div>
            <button id="hide">Hide</button>
            <button id="show">Show</button>
        </div>
    </div>
</body>
