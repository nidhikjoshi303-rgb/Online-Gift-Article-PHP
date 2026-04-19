<?php
include("hhh.php");

echo <<<HTML
<!DOCTYPE html>
<html lang="en-us"
prefix="content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>This Page Does Not Exist</title>
<meta name="description" content="Oops, looks like the page is lost.">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=DM+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>

<body>

<div class="page-not-found">

<img class="image" alt="Page Not Found" src="/htdocs_error/page_not_found.svg" />

<h1 class="title">This Page Does Not Exist</h1>

<p class="text">
Sorry, the page you are looking for could not be found. It's just an accident that was not intentional.
</p>

</div>

<style>

body{
color:#1d1e20;
background:#f4f5ff;
font-size:14px;
font-family:"DM Sans","Roboto",sans-serif !important;
font-weight:400;
}

.page-not-found{
display:flex;
flex-direction:column;
align-items:center;
justify-content:center;
height:100vh;
padding:0 16px;
}

.image{
max-width:100%;
margin-bottom:32px;
height:auto;
object-fit:contain;
}

.title{
text-align:center;
margin-top:0;
margin-bottom:8px;
font-size:24px;
line-height:32px;
font-weight:700;
}

.text{
text-align:center;
max-width:650px;
margin-bottom:24px;
font-size:16px;
line-height:24px;
font-weight:400;
color:#6D7081;
}

</style>

</body>
</html>
HTML;

include("fff.php");
?>