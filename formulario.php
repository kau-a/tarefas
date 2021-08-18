<html>
<head>
</head>
<style>

body{
    background-color: cornflowerblue;
    text-align: center;
    width: 500px;
    
}

input[type=submit name="nome"] {
    width: 100px;
}   

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

  
}

input[type=text] {
  border: 2px solid lightblue;
  border-radius: 8px;
  align: center;

}

input[type=text]:focus {
  border: 3px solid #555;
}

input[type=submit] {
  width: 100%;
  background-color: white;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius: 4px;
 
}

input[type=reset] {
  width: 100%;
  background-color: white;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius: 4px;
 
}

</style>
<body>

<form action="querecebe.php" method="post">
Nome completo: <input type="text" name="nome"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
<input type="reset">
</form>

</body>
</html>
