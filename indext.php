<h2>First Asainment</h2>
<?php
/***Question 01: 

	We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.

Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)

Step 2: Then check the total number of factors of that number

Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. Because When a number is divisible by only one and itself, then it is a prime number. */
//Associative array//
$prime_number=true;
$all_arry = [12,34,2,6,78];
foreach($all_arry as $kays => $number ){
    for($i=2; $i <= $number-2; $i++){
        if($number % $i ==0 ){
            $prime_number=false;
        }
    }
}
if($prime_number){
    echo "{$number} this is a prime number  ";
}
else{
    echo "{$number} this is not prime number  ";
}
?>

<h2>Second Asainment</h2>
<?php
/**Question 02: 

	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.

Go to daraz website and pick any 5 products and make your array.

Must mention Which type of array you have made. */

$laptop=[
    ['lanovo 80' , '4gb' , '100gb' ,'30,000'],
    ['lanovo 81' , '8gb' , '200gb' ,'45,000'],
    ['lanovo 82' , '16gb' , '300gb' ,'50,000'],
    ['lanovo 83' , '32gb' , '1tb' ,'65,000']
];
echo" Brand= " . $laptop[0][0]. "ram" . $laptop[0][1]. "rom" . $laptop[0][2]. "per prize:" . $laptop[0][3]."<br>";
echo" Brand= " . $laptop[1][0]. "ram" . $laptop[1][1]. "rom" . $laptop[1][2]. "per prize:" . $laptop[1][3]."<br>";
echo" Brand= " . $laptop[2][0]. "ram" . $laptop[2][1]. "rom" . $laptop[2][2]. "per prize:" . $laptop[2][3]."<br>";
echo" Brand= " . $laptop[3][0]. "ram" . $laptop[3][1]. "rom" . $laptop[3][2]. "per prize:" . $laptop[3][3]."<br>";


?>
<h2>Third Asainment</h2>
<?php
/**Question 03: 

		This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 

Find the maximum value from this array.

Must use a foreach loop. */
$my_arry=[0,10,80,67,60,89,91,56,45,30,95,83,99 ] ;
$amount=0;
foreach($my_arry as $kays => $value){
    if($value > $amount){
        $amount=$value;
    }
}
echo "High value is . {$amount}";
?>
<h2>Four Asainment</h2>
<?php
/**Question 04: 

		Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3….

 */
$my_arry2=[0,10,80,67,60,89,91,56,45,30,95,83,99];

echo max($my_arry2);
?>