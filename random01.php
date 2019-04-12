<?php 

/*  settings for the script: how many lines and columns you need  */

    $lines = 20;
    $columns = 100;

?>
<!DOCTYPE html>
<html lang="en">
<!--
   Random01.php
   Copyright 2019 
   
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
   
   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
   
   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.
-->

<head>
<meta charset="utf-8" />
<title>Random 0,1 ;)</title>
<meta name="generator" content="Geany 1.34.1" />
</head>

<body>
	<pre>
<?php

/* 
 * simple code: two for loops, one inside the other
 * one echo to echo the random generated char and one
 * echo with new line character (html and text)
 */

for($z = 0; $z < $lines; $z++) {
	 for($i = 0; $i < $columns; $i++) {
	echo rand(0,1)." " ;
   }
   echo "<br />\n"  ;
}
?>
</pre>
</body>
</html>