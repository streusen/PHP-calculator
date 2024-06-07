<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: pink;
            font-size: 2rem;
            font-family:'Raleway',san-serif;
            margin:0%;
        }
        html{
            background-color:cyan;
        }
        h1{
            text-decoration:underline;
            text-align:center;
            color:cyan;
            margin:0%;
        }
        .bt:hover{
            font-weight:700;
            background:linear-gradient(120deg,transparent,red,transparent);
            transform:translate(-10%);
            transition:0.6s;

        }
        .bt2:hover{
            font-weight:700;
            background:linear-gradient(120deg,transparent,lime,transparent);
            transform:translate(10%);
            transition:0.6s;

        }
        .bx:hover{
            background:transparent;
            box-shadow:0 0 20px 5px cyan;
        }
        .bx2:hover{
            background:transparent;
            box-shadow:0 0 20px 5px gold;
        }
    </style>
</head>
<body>
    <h1>PHP Multipurpose Calculator</h1>
    <fieldset class="bx">
        <legend>Basic Arithmetic</legend>
    <form action="" method="post">
        <label for="">Enter first integer:</label>
        <input type="number" name="int1">
        <br>
        <label for="">Enter your operator:</label>
        <input type="text" name="op">
        <br>
        <label for="">Enter second integer:</label>
        <input type="number" name="int2"><br>
        <br>
        <input color="cyan" class="bt" type="submit" name="submit" value="Compute">
        <input color="cyan" class="bt2" type="reset" value="Reset">
    </form>
    
   
    <?php
    if(isset($_POST['submit'])){
        $int1=$_POST['int1'];
        $op=$_POST['op'];
        $int2=$_POST['int2'];
  
        switch($op){
            case '*':
                echo "Multiplication of $int1 and $int2=".$int1*$int2;
                break;
            case '+':
                echo "Addition of $int1 and $int2=".$int1+$int2;
                break;
            case '-':
                echo "subtraction of $int1 and $int2=".$int1-$int2;
                break;
            case '/':
                echo "Division of $int1 and $int2=".$int1/$int2;
                break;
            default:
            echo "Enter a valid operator value";
        }
       
    } ?>
    </fieldset >
     <fieldset class="bx2"><legend>Complex Arithmetic</legend>
    <form method="post">
        <label for="">Find Square:</label>
        <input type="number" name ="expo">
        <br>
        <label for="">Find percentage :</label>
        <input type="number" name="per">
        <input type="number" name="per2">
        <br>
        <label for="">Find square root:</label>
        <input type="number" name="sqr">
        <br>
        <label for="">Find log:</label>
        <input type="number" name="log">
        <br>
        <br>
        <input class="bt" color="cyan" type="submit" name="submyt" value="Compute">
    </form>
    
    <?php
    if(isset($_POST['submyt'])){
        $sq=$_POST['expo'];
        $perce=$_POST['per'];
        $sqr=$_POST['sqr'];
        $log=$_POST['log'];
        $perce2=$_POST['per2'];

        //function to calculate squares
        function sqr($ss){
            return $ss*$ss;
        }
     
       //conditional statements to handle second for element above
        if($sq!=null){
            $res=sqr($sq);
            echo "The square of $sq is $res";
        }
        else if($perce!=null && $perce2!=null){
            $res=($perce/$perce2)*100;
            echo "The percentage of $perce/$perce2 is $res%";
        }
        else if($sqr!=null){
            $res=sqrt($sqr);
            echo "The square root of $sqr is $res";
        }
        else if($log!=null){
            $res=log($log);
            echo "The log of $log is $res";
        }
        else{
            echo "Enter valid values";
        }
        

    }
    ?>
    </fieldset>
</body>
</html>