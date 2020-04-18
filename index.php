<php
  
     /*
     *  Author: Antonio Skopin
     *  Date: 17th of april 2020
     */
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rock Paper Scissors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background-color: silver;
            text-align: center;
        }

        .box{
            margin: 2rem auto 0;
            padding: 2rem;
            background-color: #f3f3f3;
            height: 500px;
            width: 440px;
            border-radius: 10px;
        }

        form{
            display: flex;
            margin-top: 5rem;
        }

    </style>
</head>
<body>
    <div class="box">
        <h1>Rock Paper Scissors</h1>
        <form method="get" action="index.php" autocomplete="off">
            <input type="text" name="keuze" placeholder="Make your choice" class="form-control">
            <input type="submit" name="submit" value="Shoot!" class="btn btn-success mb-2">
        </form>
        <?php
            if(isset($_GET['submit'])){
                $keuze = $_GET['keuze'];
                $compkeuze = rand(0, 2);

                if($keuze == ""){
                    echo "<div class=\"alert alert-danger\" role=\"alert\">Please enter a valid choice.</div>";
                }else if ($keuze == "rock" || $keuze == "paper" || $keuze == "scissors"){
                    echo "<div class=\"alert alert-dark\" role=\"alert\">Your choice is $keuze.</div>";
                    switch ($compkeuze){
                        case 0:
                            echo "<div class=\"alert alert-warning\" role=\"alert\">The computer chooses rock.</div>";
                            break;
                        case 1:
                            echo "<div class=\"alert alert-warning\" role=\"alert\">The computer chooses paper.</div>";
                            break;
                        case 2:
                            echo "<div class=\"alert alert-warning\" role=\"alert\">The computer chooses scissors.</div>";
                            break;
                    }
                    if (($keuze == "rock" && $compkeuze == 0) || ($keuze == "paper" && $compkeuze == 1) || ($keuze == "scissors" && $compkeuze == 2)){
                        echo "<div class=\"alert alert-info\" role=\"alert\">You chose the same as the computer it's a tie!</div>";
                    }else if(($keuze == "rock" && $compkeuze == 2) || ($keuze == "paper" && $compkeuze == 0) || ($keuze == "scissors" && $compkeuze == 1)){
                        echo "<div class=\"alert alert-success\" role=\"alert\">You have beaten the computer!</div>";
                    }else {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">The computer beats you!</div>";
                    }
                }else{
                    echo "<div class=\"alert alert-danger\" role=\"alert\">Please enter a valid choice.</div>";
                }
            }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
