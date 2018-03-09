<?php
    header("Content-type: text/css; charset: UTF-8");
?>

/*top navigatie logged in*/
*{
  font-family: "Times New Roman", Times, serif;
}
body { 
  margin: 0;
  
}

.topnav1 {
  overflow: hidden;
  background-color: #333;
  border-radius: 0px 0px 0px 10px;
  height:45px;
}

.topnav1 a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  font-size: 17px;
  text-decoration: none;
  
}

.topnav1 a:hover {
  background-color: #ddd;
  color: black;
}

.topnav1 a.active1 {
  background-color: #4271f4;
  color: white;
}

div.regandlog1{
  float:right;
}

.drpbtn1 {
    background-color: #333;
    color: white;
    padding: 14px 16px;
    font-size: 17px;
    border: none;
    cursor: pointer;
    border-radius: 0px 0px 10px 0px;
    height:45px;
}

.dropdown1 {
  float:right;
  position: relative;
  display: inline-block;
  
}

.dropdowncontent1 {
    display: none;
    position: absolute;
    right: 0;
    text-align: right;
    background-color: #ddd;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 10px 10px 10px 10px;
}

.dropdowncontent1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    background-color:#ddd;
}
.dropdowncontent1 a .active1{
  
}

.dropdowncontent1 a:hover {
  background-color: #f9f9f9;
}

.dropdown1:hover .drpbtn1 {
  background-color: #ddd;
  color: black;
  border-radius: 0px 0px 0px 0px;
}

.dropdown1:hover .dropdowncontent1 {
    display: block;
    border-radius: 10px 10px 0px 0px;
}
body {
  background-color: darkgrey;
}

  /*top navigatie niet logged in*/
body {
  margin: 0;
  
}

.topnav {
  overflow: hidden;
  background-color: #333;
  border-radius: 0px 0px 10px 10px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4271f4;
  color: white;
}

div.regandlog{
  float:right;
}

.drpbtn {
    background-color: #333;
    color: white;
    padding: 14px 16px;
    font-size: 17px;
    border: none;
    cursor: pointer;
    border-radius: 0px 0px 10px 0px;
}

.dropdown {
  float:right;
    position: relative;
    display: inline-block;
}

.dropdowncontent {
    display: none;
    position: absolute;
    right: 0;
    text-align: right;
    background-color: #ddd;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 10px 10px 10px 10px;
}

.dropdowncontent a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    background-color:#ddd;
}

.dropdowncontent a:hover {
  background-color: #f9f9f9;
}

.dropdown:hover .drpbtn {
    background-color: #ddd;
    color:black;
    border-radius: 0px 0px 0px 0px;
}

.dropdown:hover .dropdowncontent {
    display: block;
    border-radius: 10px 10px 0px 0px;

  }  


/*slideshow*/

h2{
  text-align: center;
}

.Slideshow{
  margin-left: auto;
  margin-right: auto;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}