<html>
<head>
	<title>This is php calculato</title>
	<style>
			
			*{   margin: 0 ; 
                 padding: 0;
             }
		header {
			background-color: #356D70;
			text-align: center;
			color: white;
			margin: 0;
			padding: 50px;
			font-size: 30px;
		}
		body{
			background-color: #54AEB3;
		}
		.form-box{
			padding: 30px;
			background-color: #F5E1C0 ;
			width: 50%;
			height:  25%;
			margin: 50px auto;
			display: flex;
			justify-content: center;	
			flex-direction: column;

		}
		.in{
			margin: 0px 0px 20px 0px;
			padding: 5px;
		}
		.s{
		background-color: blue;	
		color: white;

		}
		.result
		{
			margin-top: 10px;
			color: red;
			font-weight: bold;
			font-size: 30px;
		}
		


	</style>
</head>
<body>
	<header>
		<h3> SIMPLE CALCULATOR</h3>
	</header>
	<div class= "form-box">
	<div>	
	<form action="calculator.php" method="get">
     Number: <input class="in" type="Number" step="any" name="num1"><br>
     Number: <input class="in" type="Number" step="any" name="num2"><br>
     <label class="in">Choose your operation</label>
     <select name="operation">
     	<option>Add</option>
     	<option>Subtract</option>
     	<option>Divide</option>
     	<option>Multiply</option>
     </select>
 <input class="s" type="submit">
   </form>
   </div>
   <div class="result">
     <?php
     
        function Addition($num1,$num2)
        {
        	
        	$result= $num1+$num2;
        	echo "Your Answer is: ".$result;
        }

        function Subtraction ($num1,$num2)
        {
        	$result= $num1-$num2;
        	echo "Your Answer is: ".$result;
        }
        function Division($num1,$num2)
        {
        	if($num2 !=0 )
        	{
        		$result=$num1/$num2;
        		echo "Your Answer is: ".$result;
        	}
            else
            {
                echo "Division by zero is not possible";
            }
        }
        function Multiplication ($num1,$num2)
        {
        	$result= $num1*$num2;
        	echo "Your Answer is: ".$result;
        }
     
     if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation']) )
     {
     	$num1=$_GET['num1'];
        $num2=$_GET['num2'];
        $operation=$_GET['operation'];
        if ($num1!='' && $num2!='')
        {
        	if($operation=="Add")
        		$result=Addition($num1,$num2);
            if($operation=="Subtract")
        		$result=Subtraction($num1,$num2);
            if($operation=="Divide")
        		$result=Division($num1,$num2);
            if($operation=="Multiply")    		
                $result=Multiplication ($num1,$num2);  
        }   
     	else
        {
     	     echo "Fill all fields";
        }
     }
     
     ?>
     </div>
</div>
    
   
	
</body>
</html>