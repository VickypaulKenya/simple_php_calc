<?php
include_once "include/autoload.inc.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body style="background:black; display: flex; flex-direction: column;align-items: center; justify-content: center;width: 100%; height: 100vh;">
    <form class="form" action="include/calc.inc.php" method="post" style="display: flex;flex-direction: column; padding: 10px; gap: 10px ; margin-top: 10px; width:200px">
        <input type="number" placeholder="Enter number one" name="num1" style="padding:10px;font-size:1.5rem;
        border: 0; border-radius: 10px;">
        <div style="display:flex; gap:20px; justify-content: space-between;align-items: center;justify-content: center;">
             <p style="color:white">Select Operator</p>
        <select name="oper">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mult">*</option>
            <option value="div">/</option>
        </select>
        </div>
       
        <input type="number" placeholder="Enter number two" name="num2" style="padding:10px;font-size:1.5rem;
        border: 0; border-radius: 10px;">
         <button type="submit" style="padding: 10px; font-size: 2 rem; background: blue; color: white; cursor: pointer; outline: none; border: 0; margin-top:5px">calculate</button>
    </form>
          
</body>
</html>