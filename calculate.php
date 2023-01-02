<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculated Age!</title>
    <style>
          body {
            font-family: Arial, Helvetica, sans-serif;
            width: 80%;
            vertical-align: middle;
            margin:50px auto;
        }
        /* style the header */
        header{
            position: relative;
            text-align: center;
            background-color:#191970 ;
            padding: 30px;
            font-size: 20px;
            color: aliceblue;
        }
    </style>
</head>
<body><div>
        <header>
            <h2>Age Calculated!</h2>
                <?php
                
                    $now = strtotime(date('Y-m-d'));
                    $dob = strtotime($_POST['dob']);

                    $diff = $now - $dob;

                    $year = floor ($diff / ((60 * 60 * 24) * 365));

                    $month = floor($diff-($year * ((60 * 60 * 24) * 365))) / ((60 * 60 * 24) * 30);

                    $day =floor($diff-($year * ((60 * 60 * 24) * 365))) - ($month * ((60 * 60 * 24) * 30)) / (60 * 60 * 24);

                    printf("Your age : %d Year %d Month %d day", $year, $month, $day );

                    echo "<br/>";
                    //validation msg and condition using if..else
                        if(isset($_POST)){
                            if($year >= 18){
                                echo "<br/><span style='color: #00FFFF ;'>Being 18 means you can purchase lottery tickets, buy fireworks, own a credit card, and get married!";
                            }elseif($year >=25){
                                echo "<br/><span style='color:#00FFFF;'>Silver birthdays are when either a man or woman turns 25 years old.";
                            }elseif($year >=32){
                                echo "<br/><span style='color:#00FFFF;'>It is 32 years spreading constant love, success, and kindness.";
                            }elseif($year >=40){
                                echo "<br/><span style='color:#00FFFF;'>40 and Fabulous!";
                            }elseif($year >=60){
                                echo "<br/><span style='color:#00FFFF;'>You've grown older and wiser.";
                            }elseif($year >=70){
                                echo "<br/><span style='color:#00FFFF;'>When you are 70, you need to take your time";
                            }else{
                                echo "<br/><span style='color:#00FFFF;'> 'Welcome kid!'";
                            }
                        }
                ?>
        </header>
    </div>

</body>
</html>









