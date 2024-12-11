<?php include ("/xamppp/htdocs/se2/backend/backend.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="/design/pracdesign.css">
    
    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>ACCOUNT</title>
</head>
<body>

    
    
    <div class="account_main_bg">
        <div class="account_option">
            <div class="option_icons">
            </div>    
        </div>
        <form action="search_house.php" method="POST">
            <div class="searchbar_bg">
                <div class="searchbar_bg_details">
                    <input type="text", class="input__box", name="search_bar", placeholder="SEARCH">
                    <button type="submit" class="ri-search-line button" name="searchbutton" id="searchbutton"></button>
                </div>  
            </div>
        </form>
    </div>
    <div class="searched" id="searched_info">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Block And Lot</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Part</th>
                </tr>
                </thead>
                    <tbody>
                        <?php 
                            $db_server = "localhost";
                            $db_user = "root";
                            $db_pass = "";
                            $db_name = "housedb";
                            $conn = new mysqli($db_server, 
                                                $db_user,
                                                $db_pass,
                                                $db_name);

                            $search = null;

                            if($_SERVER['REQUEST_METHOD'] && isset($_POST['searchbutton'])){

                            $search = $_POST['search_bar'];

                            if (!is_numeric($search) || strlen($search) != 4) {

                                    echo "Invalid Input . $search . a 4-digit Combination" ;

                                } else {

                                    $search_house = $conn->prepare("SELECT blklot, l_name, part FROM personal_info WHERE blklot = ?");
                                    $search_house->bind_param('i',$search);
                                    $search_house->execute();
                                    $result = $search_house->get_result();

                                    while ($row = $result->fetch_assoc()){
                                        echo "<tr>
                                        <td>" . $row['blklot'] . "</td>
                                        <td>" . $row['l_name'] . "</td>
                                        <td>" . $row['part'] . "</td>
                                    </tr>";
                                    }
                                }
                            }
                            ?>
                </tbody>
            </table>
        </div>

</body>
</html>