<?php
/**
 * @filename        xmltemplate.php
 * @author          Kruze
 * @creationDate    November 15, 2025
 */
    $data = simplexml_load_file($xmlpath) or die("An error has occured! Please try again later.");
    
    function showAllData($innerArray,$count) {
        for ($i=0; $i<$count; $i++){
                if ($i===$count-1)
                    echo ($innerArray[$i]);
                else
                    echo ($innerArray[$i]) . ", ";
        }
    }

    function showLastData($innerArray,$count) {
        echo $innerArray[$count-1];
    }

    function readOptionalData($array,$index,$element){        
            $innerArray = $array->children()[$index]->$element;
            $count = count($innerArray);
            if ($count===0) {echo "Nothing to show yet";}
            elseif ($count === 1) {echo $innerArray[$count-1];}
            else {
                if ($element === "review") showLastData($innerArray,$count); //if it's review
                else showAllData($innerArray,$count);   //if it's sTags
            }
        
    }

    function readData($array,$index,$element) {
        if ($array->children()[$index]->$element === null)
            {echo "Nothing to show yet";}
        else {
            $innerArray = $array->children()[$index]->$element;
            $count = count($innerArray);
            if ($element === "filename"){
                showLastData($innerArray,$count);
            }
            else if ($element === "review" or $element === "sTags"){
                readOptionalData($array,$index,$element);
            }
            else {
                showAllData($innerArray,$count);
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $cssDirectory ?>">
    <style>     

        h1 {
            font-size: 50px;
            font-family:\'Franklin Gothic Medium\', \'Arial Narrow\', Arial, sans-serif;
            background-image: linear-gradient(to right, #00BFFF, #7FFC80, #FFD700);
            background-clip: text;
            color: transparent;
        }
        main {
            width: 80vw;
            margin-left: 5vw; 
            margin-right: 5vw;
        }
        table {
            width:inherit;
            margin-bottom:20px;
        }
        .game-data {
            padding:5px;
            text-align: left;
        }
        .desc {
            padding-left: 25px;
            padding-right: 25px;
            padding-bottom: 25px;
        }
        .game-name{
            font-size: 28px;
            font-weight:bolder;
            text-align: left;
            color: #00BFFF;
        }
        #genre-name{
            margin-top: 50px;
            margin-left: 100px;
            font-weight:1000;        
        }

        a:link {color: #0066ffff;}

        a:visited {color: #ff9900;}

        a:active {color: #dec328;}

    </style>

    <!--Criteria : Store last viewed category page information in browser cookie. -->
    <script>
        <?php echo $embeddedJs ?>
        const genre = <?php echo json_encode($genre); ?>;
        document.cookie = `${new Date()}=${genre}`
    </script>
</head>
<body>
    <?php echo $firstPart ?>

    <div id="genre-name"><h1><?= $genreHeading ?></h1></div>    <!-- Criteria : level 1 heading for Genre page -->
    
    <main>

        <?php for ($i=0; $i<count($data->children()); $i++):?>

        <table style="border: 0px solid azure; border-radius: 10px; border-collapse: collapse; background-color: #0d0c0cff">
            
            <tr>
                <td style="width:40%">
                    <div> 
                        <a href="<?= readData($data,$i,"url") ?>" title="Go to source website">
                            <img src="<?= readData($data,$i,"filename") ?>" width="380" height="200" alt="Game 2 image"> <!--Criteria : contain product picture -->
                        </a>
                    </div>
                </td>
                <td>
                    <table> <!-- Criteria : contain product names, reviews, pricings, urls, search tags(sTags)-->
                        <tr><td ><div class="game-data; game-name"><?= readData($data,$i,"name") ?></div></td></tr>
                        <tr><td><div class="game-data"><strong>Platforms:</strong> <?= readData($data,$i,"platform") ?></div></td></tr>
                        <tr><td><div class="game-data"><strong>Review</strong>: <?= readData($data,$i,"review") ?></div></td></tr>
                        <tr><td><div class="game-data"><strong>Price</strong>: <?= readData($data,$i,"price") ?></div></td></tr>
                        <tr><td><div class="game-data"><strong>Details</strong>: <a style="text-decoration: underline;" href="<?= readData($data,$i,"url") ?>" title="Go to source website"><?= readData($data,$i,"url") ?></a></div></td></tr>
                        <tr><td><div class="game-data"><strong>Tags</strong>: <?= readData($data,$i,"sTags") ?> </div></td></tr>
                    </table>
                </td>
            </tr>

            <tr>    <!-- Criteria : contain product descriptions-->
                <td colspan="2"><div class="desc"><strong>Game Description</strong>: <?= readData($data,$i,"desc") ?></div></td>
            </tr>
            
        </table>

        <?php endfor; ?>

    </main>

    <?php echo $secondPart ?>

</body>
</html>