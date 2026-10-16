<?php
// this is a block of php code, if you write code outside of this block, the PHP interpreter will assume it is HTML code

// variable - chunk of code that holds a value
// PHP is loosely types, just like JavaScript
// each of your php variables, starts with a $
// variables must begin with a letter or _ underscore; there should only alpha-numeric characters and _ underscores in variable names
// no spaces in PHP variables names, PHP variables name are case sensitive

$name = "Marlevion"; // use lower case for regular variable names
// $Name = "Marlevion"; avoid using capital letter unless working with a CONSTANT (variable where the value does not change)

// PHP Data Types - String, Integer (whole number), float (number with decimal point), Boolean (true/false), Array, Object

// Variable scope - where your variable exists; There are 4 variable scopes: local (in a function), global (outside a function), static (function variable that remebers its value),function parameters

// this function will calculate payroll; it does not take any parameters
function calcPayroll(){ // snake case would be calc_payroll
 // local variable - it only exists within this function
 $hoursPerWeek = 20;
 $payRate = 20;

 $totalPay = $hoursPerWeek * $payRate;

 //echo is the print statement of the PHP world
 //to concatenate separate text, in PHP use the . instead of the +
 echo "Total Pay:" . $totalPay;
}

//call the calc payroll function
calcPayroll();


// global variable 
$hoursWorkedPerWeek = 30;

function calcuatePayroll(){
    //reference to the global variable
    global $hoursWorkedPerWeek;

    //local variable
    $payRate = 20;

    $totalPay = $hoursWorkedPerWeek * $payRate;
    echo "Total Pay:" . $totalPay;
}

//call the calcuatePayroll function
calcuatePayroll();

// function parameters are like local variables - they are local to the function
// function parameters can only be accessed inside the function
function calcPayHours($hoursWorked){
    // local variable
    $payRate = 20;

    $totalPay = $hoursWorked * $payRate;
    echo "<p>Total Pay: " . $totalPay . "</p>";
}

calcPayHours(50);

// static allows us to retain the value of a variable in a function
function calcMoreHours(){
    $hoursPerWeek = 4;
    static $calc = 3;
    $calc = $calc * $hoursPerWeek;
    echo $calc . "<BR>";
}
calcMoreHours();
calcMoreHours();
calcMoreHours();

?>
