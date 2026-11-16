<?php    
/**
 * @filename        genre.php
 * @author          Kruze
 * @creationDate    November 21, 2025
 */
    switch ($_GET['genre']){
        case "fps" : $xmlpath = "data/xml/fps.xml"; $genreHeading = "First-person Shooting"; $genre = "FPS"; break;
        case "rpg" : $xmlpath = "data/xml/rpg.xml"; $genreHeading = "Role-play Games"; $genre = "RPG"; break;
        default: break;
    }
    $title = "Genre";
    $cssDirectory = "theme/style.css";
    
    $embeddedJs = '
        function displayGenre(){
            document.querySelectorAll(".genreBtn").forEach(element => {
                let genreBox = element;
                if (genreBox.style.display == "none")
                    genreBox.style.display = "block";
                else
                    genreBox.style.display = "none";
            });
        }';
    $firstPart = '
        <header>
            <table>
                <tr>
                    <td><img src="../data/images/website/logo.png" width="200" height="200" alt="GameVerse Logo"></td>
                    <td style="font-size: 100px; font-weight: 1000">Games</td>
                </tr>
            </table>
        </header>

        <nav>
            <ul>
                <li><a href="index.php" style="border: 2px outset #6be2fcff">Home</a></li>
                <li><a href="about.php" style="border: 2px outset #00ffddff">About Us</a></li>   
                <li><a href="contact.php" style="border: 2px outset #52ff89ff">Contact</a></li>
                <li>
                    <a style="border: 2px outset #e1fb1eff" onclick="displayGenre()">Genre</a>
                    <div id="genreBtn-container">
                    <form id="btn-form" action="genre.php" method="get">
                        <button type="submit" class="genreBtn" style="display:none;" value="fps" name="genre">FPS</button>
                        <button type="submit" class="genreBtn" style="display:none;" value="rpg" name="genre">RPG</button>
                    </form>
                    </div>
                </li>
                <li><a href="collection.php" style="border: 2px outset #fbeb59ff">Collection</a></li>
            </ul>
        </nav>';


    $secondPart = '
        <hr>

        <footer>
            <p>&copy; All Copyrights Reserved.</p>
            <address>
                Kruze | GameVerse
            </address>
            
        </footer>';

?>

<?php include("theme/xmltemplate.php"); ?>