<?php
echo "<h1> Hello From PHP Land</h1>";

// GET method
echo "<pre>";
print_r($_GET);
echo isset($_GET["name"]) ? $_GET["name"] : NULL;
echo "</pre>";

// POST method
echo "<pre>";
print_r($_POST);
echo isset($_POST["name"]) ? $_POST["name"] : NULL;
echo "</pre>";
