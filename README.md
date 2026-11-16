
# GameVerse 🎮

**GameVerse** is a gaming catalog website that showcases video games across different genres. It allows visitors to explore featured games, browse genre-specific collections, view game information, and contribute new game entries through a submission form.

## ✨ Features

- **Game Catalog** – Browse a collection of video games with images, descriptions, prices, platforms, and reviews.
- **Featured Games** – Discover selected games directly from the homepage.
- **Genre Browsing** – Explore games by genre, including:
  - First-Person Shooters (FPS)
  - Role-Playing Games (RPG)
- **Dynamic Content Rendering** – Generate genre pages dynamically using PHP and XML data.
- **Game Submission** – Submit new game entries through an interactive form.
- **Input Validation** – Validate game information, URLs, prices, platforms, and reviews before submission.
- **Search Tags** – Add multiple searchable tags to game entries.
- **External Game Links** – Navigate to external game pages for additional information.
- **Recently Visited Genre** – Remember the last visited genre page using browser cookies.
- **Responsive Styling** – Apply different layouts and font sizes for desktop and mobile screen widths.
- **Information Pages** – Include About Us and Contact pages.

## 🛠️ Technology Stack

| Technology | Purpose |
|---|---|
| HTML5 | Website structure and content |
| CSS3 | Styling and responsive layouts |
| JavaScript | Client-side interactions and form validation |
| PHP | Server-side processing and dynamic page generation |
| XML | Game catalog data storage |
| SimpleXML | Reading and updating XML data |
| Cookies | Remembering recently visited genre pages |

## 📂 Project Structure

```text
MyStore/
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
├── theme/
│   ├── style.css
│   ├── template.php
│   └── xmltemplate.php
│
└── README.txt
```

## ⚙️ Getting Started

### Prerequisites

- PHP 8.0 or later
- PHP SimpleXML extension
- A web browser
- A local PHP development environment (such as XAMPP, WAMP, or PHP's built-in development server)

### Installation

1. Clone the repository:

   ```bash
   git clone <repository-url>
   ```

2. Navigate to the project directory:

   ```bash
   cd MyStore
   ```

3. Ensure PHP and the SimpleXML extension are installed and enabled.

### Running the Application

You can use PHP's built-in development server.

From inside the `MyStore` directory, execute:

```bash
php -S localhost:8000
```

4. Open your browser and visit:

   ```text
   http://localhost:8000
   ```

The homepage will be displayed.

## 📖 Application Pages

| Page | Description |
|---|---|
| `index.php` | Homepage featuring selected games and recently visited genre information. |
| `about.php` | Displays website information, privacy policy, and terms and conditions. |
| `contact.php` | Provides a contact form for submitting questions and feedback. |
| `genre.php` | Dynamically displays games based on the selected genre. |
| `collection.php` | Provides a form for submitting new game entries. |
| `submit.php` | Processes submitted game information and updates the corresponding XML file. |

## 🗂️ Game Data Management

Game information is stored in XML files under `data/xml/`.

- `fps.xml` – Stores First-Person Shooter game information.
- `rpg.xml` – Stores Role-Playing Game information.
- `xmltemplate.xml` – Provides an XML data template.

Each game entry contains information such as:

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

The PHP application uses SimpleXML to retrieve game information and dynamically generate genre pages.

## ➕ Adding a New Game

1. Navigate to the **Collection** page.
2. Complete the required information.
3. Select the appropriate genre (FPS or RPG).
4. Add search tags if applicable.
5. Enter the game price and select supported platforms.
6. Provide an image source and external game URL.
7. Enter a game description and optional review.
8. Accept the terms and conditions.
9. Submit the form.

The application validates the submitted information and stores the new game entry in the corresponding XML file.

**Note:** The PHP process requires write permission for the relevant XML file and its directory for game submissions to work.

## 🎨 Interface

GameVerse uses a dark-themed interface with contrasting text, colorful navigation elements, and game thumbnails to create a gaming-oriented browsing experience.

The shared styling is maintained in:

```text
theme/style.css
```

Common page layouts are managed through:

- `theme/template.php` – Shared PHP page template.
- `theme/xmltemplate.php` – Dynamic template for displaying XML-based game information.

## 📂 Data and Storage

- Game catalog information is stored in local XML files.
- Game images are stored in the `data/images/` directory.
- Recently visited genre information is stored using browser cookies.
- New game submissions update the corresponding XML file through PHP.

The application does not use a relational database or a user account system.

---

**GameVerse** – Explore games, discover new adventures, and share your favorites.
