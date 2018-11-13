<!DOCTYPE HTML>
<html>

<head>
  <title>textured_blue - a page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="Template/style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">textured<span class="logo_colour">blue</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
            
<?php
            $sql = "select id, titlu_pagina from pages";
            $result = $conn->query($sql);
            
            if($result->num_rows) {
                while($menu_item = $result->fetch_assoc() ) {
                    echo '<li><a href="?id='.$menu_item['id'].'">'.$menu_item['titlu_pagina']. ' </a></li>';
                }
            }
?>
            
          
        </ul>
      </div>
    </div>