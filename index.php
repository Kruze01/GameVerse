<?php
/**
 * @filename        index.php
 * @author          Kruze
 * @creationDate    November 15, 2025
 */
    $title = "Home";
    $cssDirectory="theme/style.css";
    $embeddedCSS="
    <!-- Criteria : Document-level style sheet in Homepage. -->
        header {
            display: flex;
            justify-content: center;
            margin: 0;
        }

        #welcome {
            width: 900px; 
            justify-self: center; 
            text-align: center; 
            margin-bottom: 80px; 
            font-size:18px;
            position:relative;
            z-index:1;
        }

        table {
            width: 850px;
            border: 10px;
            border-color: #80AAC0;
            justify-items: center;
        }

        td a:link {color: #00BFFF;}

        td a:visited {color: #ff9900;}

        td a:hover {
            color: #FFD700;
            font-size: larger;
        }

        td a:active {color: #dec328;}

        h4 {color: #7698ee;}

        abbr {
            text-decoration: none; 
            cursor:help;
            font-style: italic;
        }

        table {border: #424242 1px;}

        tbody tr {height: 150px;}

        tbody td {padding-left: 10px;}
        
        #recent-visited {text-align: center;}
        ";
    
    $embeddedJs = '
        function showRecentVisit() {
            if (document.cookie.length > 0) {

                let cookies = document.cookie.split(";");
                let lastInput = cookies[cookies.length-1].split("=");
                let showTime = lastInput[0];
                let showGenre = lastInput[1];

                let tag = document.getElementById("recent-visited");
                tag.innerText = `You have previously visited our ${showGenre} genre page at ${showTime}.`;
            } 
        }

        function displayGenre(){
            document.querySelectorAll(".genreBtn").forEach(element => {
                let genreBox = element;
                if (genreBox.style.display == "none")
                    genreBox.style.display = "block";
                else
                    genreBox.style.display = "none";
            });
        }'
        ;

    $content= '
        <header>
            <img src="data/images/website/logo.png" width="250" height="250" alt="Logo Image">
        </header>

        <nav>
            <ul>
                <!-- Criteria : inline style in Homepage. -->
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
        </nav>

        <div id="welcome">
            <blockquote cite="AI-generated">
                <span><em>"Halt, weary traveler! Leave the weight of the world at the door. <br>Here, the only journey required is
                    the one into the limitless worlds waiting behind the screen."</em></span>
            </blockquote>
            <h2 style="margin-top: 40px;">Welcome to GameVerse, the ultimate crossroads for every kind of digital adventure!</h2>
            <p>
                We are proud to feature a diverse catalog spanning decades and genres, from the hyper-competitive eSports
                arena of tactical shooters to the boundless narrative worlds of role playing epics. Our mission is to
                connect you with games that challenge, inspire, and delight, ensuring that whether you\'re seeking a
                nostalgic indie gem or the biggest global blockbuster, you\'ll find the perfect title to fit your unique
                passion and playstyle.
            </p>
        </div>

        <section style="justify-items: center;">
            <table>
                <thead>
                    <tr>
                        <th id="list-header">Featured Games</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <!-- game 1 -->
                    <tr>
                        <td class="game-info">
                            <div>
                                <a href="https://store.steampowered.com/app/1091500/Cyberpunk_2077/"
                                    title="Go to source website">
                                    <img src="data/images/games/cyberPunk.webp" width="255" height="150" alt="Game 1 image">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h4><a href="https://store.steampowered.com/app/1091500/Cyberpunk_2077/" title="Go to source website">Cyberpunk 2077</a></h4>
                            <p>Platforms: Windows, MacOS</p>
                            <p>A sprawling <strong>open-world action-adventure <abbr title="Role-playing game">RPG</abbr></strong> set in <em>Night City</em>, a megalopolis 
                                obsessed with power, glamour, and body modification. Play as <em>V</em>, a mercenary outlaw chasing a 
                                one-of-a-kind implant that is the key to immortality, making choices that shape your story and the world
                                around you.</p>
                        </td>
                    </tr>

                    <!-- game 2 -->
                    <tr>
                        <td class="game-info">
                            <div>
                                <a href="https://store.steampowered.com/app/730/CounterStrike_2/" title="Go to source website">
                                    <img src="data/images/games/cs2.webp" width="255" height="150" alt="Game 2 image">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h4><a href="https://store.steampowered.com/app/730/CounterStrike_2/" title="Go to source website">Counter-Strike 2</a></h4>
                            <p>Platforms: Windows, Linux</p>
                            <p>A premier tactical <strong>5v5 first-person shooter</strong> that pits two teams, <em>Terrorists and 
                                Counter-Terrorists</em>, against one another in objective-based rounds focused on bomb control 
                                or hostage rescue, featuring a highly competitive environment and precise, skill-based gunplay.</p>
                        </td>
                    </tr>

                    <!-- game 3 -->
                    <tr>
                        <td class="game-info">
                            <div>
                                <a href="https://store.steampowered.com/app/2358720/Black_Myth_Wukong/" title="Go to source website">
                                    <img src="data/images/games/blackMyth_wukong.webp" width="255" height="150" alt="Game 1 image">
                                </a>
                            </div>
                        </td>
                        <td>
                            <h4><a href="https://store.steampowered.com/app/2358720/Black_Myth_Wukong/" title="Go to source website">Black Myth: Wukong</a></h4>
                            <p>Platforms: Windows</p>
                            <p>A highly anticipated <strong>Action <abbr title="Role-playing game">RPG</abbr></strong> inspired by the classic Chinese novel, <em>Journey to the West</em>. 
                                Players take on the role of the <em>Destined One</em>, the <em>legendary Sun Wukong</em>, who must embark on a 
                                treacherous journey to uncover the truth behind a glorious legend.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Criteria : Remind user of last viewed catergory page in homepage.-->
        <p id="recent-visited"><script>showRecentVisit()</script></p>

        <hr>

        <footer>
            <p>&copy; All Copyrights Reserved.</p>
            <address>
                Kruze | GameVerse
            </address>
            
        </footer>';
?>

<?php include("theme/template.php"); ?>