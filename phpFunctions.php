<?php
    function showDate(){
        date_default_timezone_set("America/Chicago");   // sets the date to central US time since server is in EU
        $date = date("m/d/Y");                          // assign formatted date in $date variable
        return $date; 
    }// end showDate()
    
    function showInternationalDate(){
        date_default_timezone_set("America/Chicago");   // sets the date to central US time since server is in EU
        $date = date("d/m/Y");                           // assign formatted date in $date variable
        return $date; 
    }// end showInternationalDate()
    
    function formatString($inString){

        $inStringLength = strlen($inString);
        $inStringNoWhiteSpace = trim($inString);
        $inStringLower = strtolower($inString);
        $word = "DMACC";

        if(stripos($inString, $word) !== false){  // condition outputs if string contains "dmacc" or not
            $contain = " does contain ";
        }else{
            $contain = " does not contain ";
        }// end if/else

        echo "<p>The string: <span>" . $inString . "</span> contains <span>" . $inStringLength . " </span>characters.</br>";
        echo "The string <span>" . $inString . "</span> with whitespace removed is: <span>" . $inStringNoWhiteSpace . "</span>.</br>";
        echo "The string <span>" . $inString . "</span> in all lowercase is: <span>" . $inStringLower . "</span>.</br>";
        echo "The string <span>" . $inString . $contain . "</span>DMACC in upper or lowercase.</p>";
        
    }// end formatString()

    function formatPhoneNum($inPhoneNum){
        strval($inPhoneNum);
        $inPhoneNum = "(" . substr($inPhoneNum, 0, 3) . ")" . substr($inPhoneNum, 3, 3) . "-" . substr($inPhoneNum, 6, 4);
        echo $inPhoneNum;
    }// end formatPhoneNum()

    function formatCurrencyUS($inCurrency){
       
        $format = numfmt_create('en_US', NumberFormatter::CURRENCY);
        echo numfmt_format_currency($format, $inCurrency, "USD");
    
    }// end formatCurrencyUS
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>PHP Functions Assignment</title>
        <!--WDV341 Functions Assignment
            Jeremy Brannen-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
            h1, h2{
                color: purple;
                font-weight: bold;
            }
            h1, h2, .centerLinks{
                text-align: center;
                font-family: 'Open Sans', sans-serif;
            } 
            hr{
                border-color:black;
            }
            span{
                color: purple;
                font-weight: bold;
            }
            a:hover{
                color: purple;
                text-decoration: none;
            }
        </style>
    </head>

    <body class="container-fluid">
        <div class="col-8 mx-auto">
            <h1> WDV341 Intro PHP</h1>

            <h2> PHP Functions </h2>

            <hr>

            <p>
                Create a function that will accept a timestamp and format it into mm/dd/yyyy format.</br>
                <span><?php echo showDate(); ?></span>
            </p>

            <p>
                Create a function that will accept a timestamp and format it into dd/mm/yyyy format to use when working with international dates.</br>
                <span><?php echo showInternationalDate(); ?></span>
            </p>

            <p>
                Create a function that will accept a string input.</br>
                It will do the following things to the string:</br>
                <ol>
                    <li>Display the number of characters in the string. </li>
                    
                    <li>Trim any leading or trailing whitespace</li>
                    
                    <li>Display the string as all lowercase characters</li>

                    <li>Will display whether or not the string contains "DMACC" either upper or lowercase</li>
                </ol>
                <?php formatString("     jRbRANneN@dMACc.eDu    "); ?>
            </p>

                
            <p>
                Create a function that will accept a number and display it as a formatted phone number.   Use 1234567890 for your testing.</br>
                <span><?php formatPhoneNum(1234567890); ?></span>
            </p>

            <p>
                Create a function that will accept a number and display it as US currency with a dollar sign.  Use 123456 for your testing.</br>
                <span><?php formatCurrencyUS(123456) ?></span>       
            </p>   
        </div>

        <p class="centerLinks">
            <a target="_blank"href="https://github.com/jrbrannen/PHP-Functions.git">GitHub Repo Link</a>
        </p>

        <p class="centerLinks">
            <a href="../wdv341.php">PHP Homework Page</a>
        </p>
    </body>
</html>