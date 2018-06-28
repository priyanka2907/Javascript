<html>
<head>
<title>Fibonacci Series Using Javascript</title>

</head>

<body>
<script type="text/javascript">
var fib1=0,fib2=1,fib=0;
var num=prompt("Enter a Numbaer :\n","");
if(num!==null && num >0)
	
	{
	document.write("<h2>The First "+num+" numbers in the Fibonacci series</h2>");

if (num ==1)
{
	
	document.write("<h2> "+ fib1+"</h2>");
	
	
}	else{
	
	document.write("<h2> "+ fib1+"</h2>");
	document.write("<h2> "+ fib2+"</h2>");
}
		
	for(i=3;i<=num;i++)
	{
	fib=fib1+fib2; // add first and second number
	
		document.write("<h2> "+ fib+"</h2>"); // display number
		fib1=fib2; // swapn numbers
		fib2=fib;
	}		
		
		
	}
else{
	
	
	alert("Invalid Input:");
}




</script>
</body>
</html>