<?php

require "Session.php";

// Set & Get
Session::set("name", "Hatem");

echo Session::get("name");
echo "<br>";

// Flash
Session::flash("message", "Product Added Successfully");

echo Session::getFlash("message");
echo "<br>";

// Check
var_dump(Session::check("name"));
echo "<br>";

// Get All
var_dump(Session::getAll());
echo "<br>";

// Remove
Session::remove("name");

var_dump(Session::check("name"));
echo "<br>";

// Remove All
Session::set("email", "hatem@gmail.com");

Session::removeAll();

var_dump(Session::getAll());


