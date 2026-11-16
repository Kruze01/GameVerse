<?php
/**
 * @filename        submit.php
 * @author          Kruze
 * @creationDate    November 24, 2025
 */

    foreach($_POST as $key=>$value) {
        if ($key==='game-name') $name = $value;
        if ($key==='game-genre') $genre = $value;
        if ($key==='game-sTags') $sTags = $value;
        if ($key==='game-price') $price = $value;
        if ($key==='game-platform') $platform = $value;
        if ($key==='game-filename') $filename = $value;
        if ($key==='game-url') $url = $value;
        if ($key==='game-description') $desc = $value;
        if ($key==='game-review') $review = $value;
    }

    $xmlpath = "data/xml/" . $genre . ".xml";
    $data = simplexml_load_file($xmlpath) or die("An error has occured! Please try again later."); //check whether respective game genre file exists and then load data (Criteria : Check that XML file exists.)


    $new_game = $data->addChild('game');
    $new_game->addAttribute("genre",$genre);


    $nameNode = $new_game->addChild('name',$name);
    $nameNode->addAttribute('lang','en');


    $new_game->addchild('desc',$desc);


    $priceNode = $new_game->addChild('price',$price);
    if ($price === "Free") 
        $currency = "";
    else {
        $currency = substr($price,0,3);
        $currency = strtolower($currency);
    } 
    $priceNode->addAttribute('currency',$currency);

    
    if (str_contains($sTags,',')) {
        $tags = explode(',',$sTags);
        for ($index=0; $index < sizeof($tags); $index++)
            $new_game->addChild('sTags', trim($tags[$index]));
    }
    else $new_game->addChild('sTags',$sTags);


    $new_game->addChild('platform',$platform);


    $reviewNode = $new_game->addChild('review',$review);
    $rating = '0';
    $pattern = '/\b(5(?:\.0)?|[0-4](?:\.\d)?)\s+out of 5 stars\b/i';
    if (preg_match($pattern, $review, $matches)){
        $rating = $matches[1];
        $rating = round($rating);
    }
    $reviewNode->addAttribute('score',$rating);
    

    $new_game->addChild('filename',$filename);


    $new_game->addChild('url',$url);


    $data->asXML($xmlpath); // Criteria : Details added to XML file.

    $genrepath = "http://mystore.com/genre.php?genre=" . strtolower($genre);
?>

<script>
    alert ("New game has beed added successfully!");    //Display success message.
    alert ("You wll be redirected to the game genre page where your game is listed.");
    window.location.href="<?= $genrepath; ?>";  //Redirect to genre page with new product listed.
</script>

<?php exit(); ?>


