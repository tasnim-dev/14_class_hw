<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BirthDate Validation</title>
    <style>
        *{
            box-sizing: border-box;

        }

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
        p{
            font-size: 12px;
        }
        section{
            background-color: #A7C7E7;
            padding: 0px 30px 30px 30px;
        }
        nav{
            position: relative;
            z-index: 2;
            margin-top: -20px;
            text-align: center;
            padding:20px;
            width: 80%;
            background-color: white;
            margin-left: 10%;
            border-radius: 10px;
            box-shadow:1px 1px 15px 0px gray ;
        }
        label{
            color: #191970;
        }
        input{
            background-color: #A7C7E7;
            padding: 10px 50px 10px 50px;
            border: none;
            font-size: 14px;
            color: #191970;

        }
        button{
            background-color: #FF5733;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 10px;
            font-size: 14px;
        }
        footer{
            background-color: #191970;
            padding: 10px;
            text-align: center;
            color: white;
        }

      
    </style>
</head>
<body>
    <div>
        <header>
            <h2>Age Calculator with Validation</h2>
            <p>To get your age calculated, just enter your birthday below!</p>
        </header>
    </div>

    <section>
        <nav>
            <form action="calculate.php" method="POST">
                <div style="margin-bottom:1.5rem;">
                    <label for="">Enter Your Date of Birth</label><br/><br/>
                    <input type="date" name="dob" value="<?php echo date('Y-m-d'); ?>">
                </div>
                    <button type="submit">Calculate your Age</button>
            </form>
        </nav>
    </section>

    <footer>
        <p> &copy; Farjana Tasnim 2015- <?php echo date('Y');?>. All right reserved</p>
    </footer>
    


    
</body>
</html>