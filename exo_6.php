<?php 
    require_once "common/header.php";
    require_once "common/menu.php";
?>
   
<h1>Exercise 6</h1>
<h2>Selection Character</h2>

<form action="#" method="POST">
    <label for="character">Select Character : </label> 
    <select name="character" id="character" onChange = "submit()"> <!-- submit select informations on change option-->
        <!-- this php script in option tag is to fix the name selected -->
        <option value="pokko" <?php if(isset($_POST["character"]) && $_POST["character"] === "pokko") echo "selected" ?> >Pokko</option>
        <option value="peak" <?php if(isset($_POST["character"]) && $_POST["character"] === "peak") echo "selected" ?>>Peak</option>
    </select>
    <br> <br>
</form>

<?php 

    $pokko = array(
        "Name" => "Pokko",
        "Age" => "17 ans",
        "Gender" => "Male",
        "Titan" => "The Jaw Titan",
        "Strength" => "5",
        "agility" => "9"
    );
    
    $peak = array(
        "Name" => "peak",
        "Age" => "16 ans",
        "Gender" => "Female",
        "Titan" => "The Cart Titan",
        "Strenth" => "5",
        "agility" => "9"
    );  

    switch(isset($_POST["character"])){
        //Insert characters information in a table and run assiciate array in the loop to echo key and value.
        case $_POST["character"] === "pokko" :
            echo    '<table>',
                        '<tr>',
                            '<td style="padding: 5px 20px;"><img src="imgs/pokko.jpg" alt="picture pokko"></td>',
                            '<td style="padding: 5px 20px;">';
                            foreach($pokko as $key => $value){
                                echo $key.' : '.$value.'<br>';
                            }
            echo            '<td style="padding: 5px 20px;"><img src="imgs/machoire.jpg" alt="picture pokko"></td>',
                            '</td>',
                        '</tr>',
                    '</table>';
        break;

        case $_POST["character"] === "peak" :
            echo    '<table>',
            '<tr>',
                '<td style="padding: 5px 20px;"><img src="imgs/peak.jpg" alt="picture pokko"></td>',
                '<td style="padding: 5px 20px;">';
                foreach($peak as $key => $value){
                    echo $key.' : '.$value.'<br>';
                }
echo            '<td style="padding: 5px 20px;"><img src="imgs/charette.jpg" alt="picture pokko"></td>',
                '</td>',
            '</tr>',
        '</table>';
        break;
        default :
            echo "no choice.";
    }
?>

<?php require_once "common/footer.php";?>