<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">  
        <link rel="icon" href="awesome.webp" type="image/jpeg">
    
    </head>

<body style="float: right;width: 90%;background-image: url(zz.png);">
<div style="font-size: 25px;font-family: Arial, Helvetica, sans-serif;">
<h2><span class="badge bg-warning text-dark">This is bill of your order.</span></h2>
<?php
  if ( isset( $_GET['submit'] ) ) 
  {
    $name = $_GET['name']; 
    $mobile = $_GET['mobile'];
    $Address = $_GET['Address'];
    $city = $_GET['city'];
    $state = $_GET['state'];
    $zip = $_GET['zip'];
    echo 'Name :'.$name.'<br>';
    echo 'Mobile :'.$mobile.'<br> ';
    echo 'Address :'.$Address.'<br> ';
    echo 'City :'.$city.'<br> ';
    echo 'State :'.$state.'<br> ';
    echo 'Zip :'.$zip.' <br><br><br>';
    echo'<table align="center"  width="50%" style="float:left;">
    <tr bgcolor="#9acd32">
      <th style="text-align:left;font-size:25px;" >Food-Item</th>
      <th style="text-align:left;font-size:25px;">Quantity</th>
      <th style="text-align:left;font-size:25px;">Price</th>
    </tr>
    </table>
    <br><br>';
    $food1 = $_GET['food1'];
    $value1=106*$food1;
    if ( $food1 >0 ){
        
        echo 'Fench fries &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$food1. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value1.'/-<br>';
    }
    $food2 = $_GET['food2'];
    $value2=90*$food2;
    if ( $food2 >0  ){       
        
        echo '	Chilli Cheese Toast &emsp;&emsp;&emsp; '.$food2. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value2.'/-<br>';
    }
    $food3 = $_GET['food3'];
    $value3=98*$food3;
    if ( $food3 >0){

        
        echo '	Garlic Bread &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; '.$food3. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value3.'/-<br>';
    }
    $food4 = $_GET['food4'];
    $value4=110*$food4;
    if ( $food4 >0 ){

        
        echo '	Garlic Bread with Cheeses  '.$food4. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value4.'/-<br>';
    }
    $food5 = $_GET['food5'];
    $value5=170*$food5;
    if ($food5 >0 ){

        
        echo 'Plain Sandwich &emsp;&emsp;&emsp;&emsp;&emsp;'  .$food5. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value5.'/-<br>';
    }
    $food6= $_GET['food6'];
    $value6=190*$food6;
    if ( $food6 >0 ){

        
        echo '	Grilled Sandwich &emsp;&emsp;&emsp;&emsp; '.$food6. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value6.'/-<br>';
    }
    $food7 = $_GET['food7'];
    $value7=210*$food7;
    if ( $food7 >0 ){
 
        
        echo '	Club Sandwich &emsp;&emsp;&emsp;&emsp;&emsp; '.$food7. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value7.'/-<br>';
    }
    $food8 = $_GET['food8'];
    $value8=210*$food8;
    if ( $food8 >0){

       
        echo 'Plain Pizza &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$food8. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value8.'/-<br>';
    }
    $food9 = $_GET['food9'];
    $value9=210*$food9;
    if ( $food9 >0 ){

        
        echo '	Capsicum,Onion Pizza . &emsp; '.$food9. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value9.'/-<br>';
    }
    $food10 = $_GET['food10'];
    $value10=210*$food10;
    if ( $food10 >0 ){

       
        echo '	Tomato,Onion Pizza . &emsp;&emsp;  '.$food10. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value10.'/-<br>';
    }
    $food11 = $_GET['food11'];
    $value11=250*$food11;
    if ( $food11 >0){

      
        echo '	Mashroom Pizza &emsp;&emsp;&emsp;&emsp; '.$food11. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value11.'/-<br>';
    }
    $food12 = $_GET['food12'];
    $value12=110*$food12;
    if ( $food12 >0 ){

        
        echo '	Russian Salad &emsp;&emsp;&emsp;&emsp;&emsp; '.$food12. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value12.'/-<br>';
    }
    $food13 = $_GET['food13'];
    $value13=100*$food13;
    if ( $food13 >0 ){

        
        echo '	Veg Burgers. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$food13. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value13.'/-<br>';
    }
    $food14 = $_GET['food14'];
    $value14=130*$food14;
    if ($food14 >0 ){

        
        echo '	Cheese Burgers. &emsp;&emsp;&emsp;&emsp; '.$food14. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value14.'/-<br>';
    }
    $food15 = $_GET['food15'];
    $value15=50*$food15;
    if ( $food15 >0 ){

        
        echo '	Tomato Soup . &emsp;&emsp;&emsp;&emsp;&emsp; '.$food15. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value15.'/-<br>';
    }
    $food16 = $_GET['food16'];
    $value16=60*$food16;
    if ( $food16 >0 ){
 
        
        echo 'Sweet Corn Soup . &emsp;&emsp;&emsp; '.$food16. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value16.'/-<br>';
    }
    $food17 = $_GET['food17'];
    $value17=50*$food17;
    if ( $food17 >0){
        
      
        echo '	Hot-Sour Soup &emsp;&emsp;&emsp;&emsp;&emsp; '.$food17. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value17.'/-<br>';
    }
    $food18 = $_GET['food18'];
    $value18=70*$food18;
    if ( $food18 >0 ){
        
       
        echo '	Lemon-Coriander Soup:&emsp; '.$food18. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value18.'/-<br>';
    }
    $food19 = $_GET['food19'];
    $value19=70*$food19;
    if ( $food19 >0){
        
        
        echo '	Plain Dosa . &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; '.$food19. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value19.'/-<br>';
    }
    $food20= $_GET['food20'];
    $value20=90*$food20;
    if ( $food20 >0){
        
        echo '	Onion Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; '.$food20. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value20.'/-<br>';
    }
    $food21 = $_GET['food21'];
    $value21=140*$food21;
    if ( $food21 >0 ){
       
        
        echo '	Mysore Dosa. &emsp;&emsp;&emsp;&emsp;&emsp; '.$food21. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value21.'/-<br>';
    }
    $food22 = $_GET['food22'];
    $value22=170*$food22;
    if ( $food22 >0 ){
      
        
        echo '	Special Dosa. &emsp;&emsp;&emsp;&emsp;&emsp; '.$food22. '(quantity)&emsp;&emsp;&emsp;&emsp;'.$value22.'/-<br>';
    }
    $totalvalue=$value1+$value2+$value3+$value4+$value5+$value6+$value7+$value8+$value9+$value10+$value11+$value12
    +$value13+$value14+$value15+$value16+$value17+$value18+$value19+$value20+$value21+$value22;
   echo'<h3> <span class="badge bg-success">The Total Amount is </span>'.$totalvalue.'/-</h3><br><br>';

} 
?>

<h3><span class="badge bg-warning text-dark">Provide your bank details for payment</span></h3>
</div>
<form class="row g-3">
            <div class="col-md-6">
              <label for="Bank" class="form-label">Bank Name</label>
              <input type="Bank" class="form-control" id="Bank" name="Bank" required>
            </div>
            <div class="col-md-6">
              <label for="Card" class="form-label">Card Number</label>
              <input type="Card" class="form-control" id="Card" name="Card" required>
            </div>
            <div class="col-12">
              <label for="month" class="form-label" >Exp. month</label>
              <input type="text" class="form-control" id="month" name="month" style="width:50%;" required>
            </div>
            <div class="col-md-6">
              <label for="year" class="form-label">Exp. year</label>
              <input type="text" class="form-control" id="year" name="year" required>
            </div>
            <div class="col-md-2">
              <label for="Cvv" class="form-label">Cvv</label>
              <input type="text" class="form-control" id="Cvv" name="Cvv" required>
            </div>
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary">Pay</button>
          </form>    
 

</body>
</html>