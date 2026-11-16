
# GameVerse 🎮

GameVerse is a gaming catalog website built with PHP, HTML, CSS, and JavaScript. It allows users to explore video games by genre, view game information, discover featured titles, and submit new games to the catalog.

## ✨ Features

- **Game Catalog** – Browse video games with images, descriptions, prices, platforms, and reviews.
- **Featured Games** – Discover selected games on the homepage.
- **Genre Browsing** – Explore games by genre, including First-Person Shooters (FPS) and Role-Playing Games (RPG).
- **Dynamic Content Rendering** – Generate genre pages dynamically using PHP and XML data.
- **Game Submission** – Add new games through an interactive submission form.
- **Input Validation** – Validate game information, URLs, prices, platforms, and reviews.
- **Search Tags** – Associate multiple searchable tags with game entries.
- **External Game Links** – Access additional game information through external links.
- **Recently Visited Genre** – Remember the last visited genre using browser cookies.
- **Responsive Styling** – Adapt the website layout for different screen sizes.
- **Information Pages** – Include About and Contact pages.

## 🛠️ Technology Stack

| Technology | Purpose |
|---|---|
| HTML5 | Website structure |
| CSS3 | Styling and responsive layouts |
| JavaScript | Client-side interactions and validation |
| PHP | Server-side processing and dynamic content |
| XML | Game catalog data storage |
| SimpleXML | Reading and updating XML data |
| Cookies | Remembering recently visited genres |

## 📂 Project Structure

```text
GameVerse/
│
├── index.html
├── index.php
├── about.html
├── about.php
├── contact.html
├── contact.php
├── collection.html
├── collection.php
├── genre.php
├── genreFPS.html
├── genreRPG.html
├── submit.php
│
├── data/
│   ├── images/
│   │   ├── games/
│   │   │   ├── blackMyth_wukong.webp
│   │   │   ├── cs2.webp
│   │   │   ├── cyberPunk.webp
│   │   │   ├── eldenRing.webp
│   │   │   ├── pubg.webp
│   │   │   └── wwz.webp
│   │   │
│   │   └── website/
│   │       ├── logo.png
│   │       └── nav.png
│   │
│   └── xml/
│       ├── fps.xml
│       ├── rpg.xml
│       └── xmltemplate.xml
│
└── theme/
    ├── style.css
    ├── template.php
    └── xmltemplate.php
```

## ⚙️ Getting Started

### Prerequisites

- PHP 8.0 or later
- PHP SimpleXML extension
- A modern web browser
- A local PHP development environment (XAMPP, WAMP, or PHP built-in development server)

### Installation

1. Clone the repository:

   ```bash
   git clone <repository-url>
   ```

2. Navigate to the repository directory:

   ```bash
   cd <repository-name>
   ```

3. Ensure PHP and the SimpleXML extension are installed and enabled.

### Running the Application

Start the PHP development server from the repository root:

```bash
php -S localhost:8000
```

Open the following address in your browser:

```text
http://localhost:8000
```

The application homepage will be displayed.

**Note:** Use the PHP pages (`.php`) when running the application through a PHP server. Static HTML pages may not support all dynamic functionality.

## 📖 Application Pages

| Page | Description |
|---|---|
| `index.php` | Homepage featuring selected games and recently visited genre information. |
| `about.php` | Displays website information, privacy policy, and terms and conditions. |
| `contact.php` | Provides a contact form for questions and feedback. |
| `genre.php` | Dynamically displays games based on the selected genre. |
| `collection.php` | Provides a form for submitting new game entries. |
| `submit.php` | Processes submitted game information and updates the corresponding XML file. |

## 🗂️ Game Data Management

Game information is stored in XML files inside `data/xml/`.

| File | Description |
|---|---|
| `fps.xml` | Stores First-Person Shooter game information. |
| `rpg.xml` | Stores Role-Playing Game information. |
| `xmltemplate.xml` | Provides the XML data template. |

Each game entry contains:

| Field | Description |
|---|---|
| Name | Game title |
| Description | Game overview |
| Price | Game price and currency |
| Search Tags | Keywords associated with the game |
| Platform | Supported gaming platforms |
| Review | Game review or rating |
| Filename | Game image path |
| URL | External game information link |

PHP and SimpleXML are used to retrieve game information and dynamically generate genre pages.

## ➕ Adding a New Game

1. Navigate to the **Collection** page.
2. Enter the game name and description.
3. Select the appropriate genre (FPS or RPG).
4. Add search tags.
5. Enter the game price and supported platforms.
6. Provide the game image path and external URL.
7. Enter a review if applicable.
8. Accept the terms and conditions.
9. Submit the form.

The application processes the submitted information and adds the new game entry to the corresponding XML file.

**Note:** The PHP process requires write permission for the relevant XML file and its directory.

## 🎨 Styling and Templates

The website uses a shared stylesheet and PHP templates to maintain consistent layouts.

- `theme/style.css` – Website styling and responsive layouts.
- `theme/template.php` – Shared page template.
- `theme/xmltemplate.php` – Dynamic template for displaying XML-based game information.

## 💾 Storage

- **Game data:** Stored in local XML files.
- **Game images:** Stored in `data/images/`.
- **Recently visited genre:** Stored using browser cookies.
- **New game submissions:** Written to the corresponding XML file through PHP.

The application does not currently use a relational database or cloud-based storage.

## 📄 License

No license has currently been specified for this project.

---

**GameVerse** – Explore games, discover new adventures, and share your favorites.
