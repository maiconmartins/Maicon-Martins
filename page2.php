<?php include'Include/header.php';?>
<div class="container">
    <table class="table table-hover">


        <!-- I used a hover to have a better aspect to my table -->
        <tr>
            <th>Country</th>
            <th>Capital</th>
        </tr>

        <form action=""></form>


        <?php  
$countries = array (  "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
 "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
  "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
   "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");


    $user  = filter_input (INPUT_GET, 'country');
      echo isset($countries[$user]) ? ( $countries[$user]) : 'These are the countries available  ';    
foreach($countries as $x => $x_value) {

    echo "<tr><td>" .$x."</td><td>".$x_value."</td></tr>";
 
} 
        ?>
    </table>
</div>
<?php include'Include/footer.php';?>