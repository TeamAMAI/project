<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <nav>





    </nav>

    <?php
        $pg = isset($_SESSION['pageNumber']) ? $_SESSION['pageNumber'] : 1;
        if(isset($_POST['back']) && $pg != 1)#if the user is not on the first 'page' of books, the can still go back
            {
                $pg = $pg-1;
                unset($_POST['back']);
            }
            else if (isset($_POST['next']) && $_SESSION['bookResults'] != 'no more') #if the user isn't on the last 'page' of books
            {
                $pg = $pg+1;
                unset($_POST['next']);
            }

            $_SESSION['pageNumber'] = $pg;


            
        if ($pg = 1)
        {
            ?>
                <form>
                    <p>hi</p>

                </form>

            <?php
        }
        else if ($pg = 2)
        {
            ?>
                <form>

                <p>hello</p>

                </form>

            <?php
        }
        else if ($pg = 3)
        {
            ?>
                <form>
                <p>hey</p>


                </form>

            <?php
        }

    ?>
        <div class="next_back_button_container">
            <form action="viewBooks.php" method="post">
                <input class="nextBackButton" type="submit" name="back" value="Back"> 
                <input class="nextBackButton" type="submit" name="next" value="Next">
            </form>
        </div>








</body>
</html>