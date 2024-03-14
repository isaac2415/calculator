<!DOCTYPE html>
<html lang="en">
    <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

    <h1 class="head">Simple calculator</h1>
<div class="main">
    <div class="photo"></div>
<div id="container">
    <h2>Insert Numbers</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="number" name="num1" placeholder="enter first number">
<input type="number" name="num2" placeholder="enter second number">
<label for="options" class="op">Choose operator</label>
<select name="operator" id="options">
    <option value="+">Addition</option>
    <option value="-">Subtraction</option>
    <option value="*">Multiplication</option>
    <option value="/">Division</option>
    <option value="%">Modulus</option>
</select>

<input type="submit" value="Solve">

</div> 

</html>
<div class="display">
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
    $operator = isset($_POST['operator']) ? $_POST['operator'] : '';
    if($num1 == null || $num2 == null){
        echo "please insert the numbers";
    }else{
        switch($operator){
            case '-':
                $result = $num1 - $num2;
                echo "$num1 - $num2 = $result";
                break;
            case '*':
                $result = $num1 * $num2;
                echo "$num1 x $num2 = $result";
                break;
            case '/':
                if($num2==0){
                    echo "Division by zero not allowed";
                }else{
                    $result = $num1 / $num2;
                    echo "$num1 / $num2 = $result";
                }
                break;
            case '+':
                
                $result = $num1 + $num2;
                echo "$num1 + $num2 = $result";
                break;
            case '%':
                $result = $num1 % $num2;
                echo "$num1 % $num2 = $result";
                break;
        }
   
    
    }
}
?>
</div>

</form>
</div>
<div class="measurements">
    <a href="measurements.php">Calculate Measurements</a>
</div>
<footer> &copy; By ibrahim isaac company 2024: call +265990088193. All rights reserverd.
    <p>Develped by ibrahim isaac as a first project in his software engineering career.</p>
    <li>Develper   isaac</li>
    <li>Designer   ibrahim</li>
    <li>contact: +265990088193 or +265993644417</li>
    <li>Malawi</li>
</footer>
</body>
</html>
<style>
h3,h2,h1{
    color: black;
    margin-top: 30px;
    font-style: italic;
    text-transform: uppercase;

}
.display{
    box-shadow: 0px 0px 40px;
    width: 350px;
    height: 50px;
    background-color: white;
    border-style: groove;
    border: 10px;
    margin-top: 20px;
    border-radius: 10px;
    align-items: center;
    flex-grow: inherit;
    display: flex;
    justify-content: center;
    overflow-x: scroll;
}
.photo{
    background-image: url(ibrah.jpg);
    border-radius: 40%;
    width: 100px;
    height: 100px;
    background-repeat: round;
    box-shadow: 0px 0px 50px blue;
}
body{
    display: flex;
    flex-direction: column;
    align-items: center;
    
    background-size: cover;
}
.head{
    text-shadow: 0px 3px 5px blue;
    font-family: 'Courier New', Courier, monospace;
}
#options{
    color: blue;
    margin-top: 10px;
    margin-left: 30px;
    
}
.op{
    text-shadow: 20px;
    
}
#container{
    width: 250px;
    height: 250px;
    display: flex;
    justify-content: center;
    background-color: transparent;
    backdrop-filter: 30px;
    flex-direction: column;
    padding: 10px;
    border-radius: 15px;
    align-items: center;
    box-shadow: 0px 0px 30px blue;
    margin-top: 30px;
    
    
}
.main{
    background-color: transparent;
    box-shadow: blue 0px 0px 40px inset;
    border-style: ridge;
    padding: 30px;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
footer{
    margin-top: 50px;
    background-color: transparent;
    width: 100%;
    padding: 10px;
    align-items: center;
    display: flex;
    flex-direction: column;
    box-shadow: 0px 0px 80px blue;
}
h2{
    margin-top: -20px;
}
input[type="number"]{
    width: 90%;
    margin-left: 5px;
    margin-top: 15px;
    height: 25px;
    border-radius: 5px;
}
input[type="submit"]{
    background-color: blue;
    height: 40px;
    border-radius: 15px;
    margin-top: 15px;
    width: 90%;
    margin-left: 7px;
    color: black;
    background-color: transparent;
}
input[type="submit"]:hover{
    background-color: blue;
    height: 40px;
    transition: 0.7s;
    width: 90%;
    margin-left: 7px;
    color: black;
    background-color: blue;
    color: white;
}
</style>