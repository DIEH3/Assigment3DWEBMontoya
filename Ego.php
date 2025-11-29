<?php
$shop = "L-Corp E.G.O. Terminal"; // "Name of the shop"
$tier = "MIXED GRADE ACQUISITION"; // " Gear grade"
$coin = "LOB Points"; // "Curerncy used"
$tax = 0.15; // "Taxxx"

$gearList = array( // "list of gear items"
    // --- 1 ALEPH GRADE ---
    array(
        "id" => "A-01-92-T",
        "name" => "Twilight (ALEPH)",
        "price" => 80000,
        "description" => "A magnificent suit woven from despair and hope. Exceptionally stable.",
        "isAvailable" => true,
        "imageUrl" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Ff9%2Fed%2F09%2Ff9ed09aab2348eacc8b6de17140a95a3.jpg&f=1&nofb=1&ipt=c2347463cec6e22ca6ac95c44be26ff5e24a0a79de544f33174239e3e4a1c79f" //Updated Image URL
    ),
    // --- 2 WAW GRADE ---
    array(
        "id" => "O-01-64-M",
        "name" => "Magic Bullet (WAW)",
        "price" => 55000,
        "description" => "A single-shot weapon capable of stopping a calamity, if aimed correctly.",
        "isAvailable" => true,
        "imageUrl" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.donmai.us%2Foriginal%2Fe0%2Ffe%2Fe0fe58747b26bb4b58ce5682144f2d57.png&f=1&nofb=1&ipt=b3d382aff9b3f081ab1362a3c104a00d10bb9bf079cfeee411dee0e81674aecc" // Updated Image URL
    ),
    array(
        "id" => "T-01-54-L",
        "name" => "Lamenting Heart (WAW)",
        "price" => 60500,
        "description" => "An armor that absorbs damage, but transfers fear to the wearer's allies.",
        "isAvailable" => false,
        "imageUrl" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fdb%2Fa5%2F7a%2Fdba57aabaff11f729b61afb4ac4131ac.jpg&f=1&nofb=1&ipt=0369157ede49796737163a695a414dd94db4979f98ae89c63294d274c20e5a86" // Updated Image URL
    ),
    // --- 2 HE GRADE ---
    array(
        "id" => "T-09-03-R",
        "name" => "Red Shoes (HE)",
        "price" => 32000,
        "description" => "A set of boots that compel the wearer to move without rest. Excellent mobility.",
        "isAvailable" => true,
        "imageUrl" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.wikia.nocookie.net%2Flobotomy-corporation%2Fimages%2F3%2F3d%2F652c257a1ecfdba17f3ffad33c8bc70032a43c40.jpg%2Frevision%2Flatest%2Fscale-to-width-down%2F185%3Fcb%3D20190210080437%26path-prefix%3Dja&f=1&nofb=1&ipt=93eb33f5d889da412c1c3aa1c7826b430aba3f336848c3241a9b2b35252d369c" // Updated Image URL
    ),
    array(
        "id" => "O-01-44-B", // Updated ID for Laetitia
        "name" => "Laetitia's Gift (HE)", // Updated Name
        "price" => 38000,
        "description" => "A colorful ribbon that offers protection, but demands constant attention.", // Updated Description
        "isAvailable" => true,
        "imageUrl" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.donmai.us%2Fsample%2Fef%2Fe0%2Fsample-efe0b1e9a84bc2b882575a418c98147d.jpg&f=1&nofb=1&ipt=7c0b41fa54b746805ea756ac6dca3a690977328a475c474411cec99c70bf0937" // Updated Image URL
    )
);

$basePrice = $gearList[0]['price']; // " enter comment here"
$isHigh = $tier != "LOW-GRADE ACCESS"; // " enter comment here"
$status = $isHigh ? "ONLINE & OPERATIONAL" : "ERROR: LOW-GRADE ACCESS"; // " enter comment here"

// --- HTML Header Content ---
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $shop ?> [<?= $tier ?>]</title>
    <!-- INLINE STYLES -->
    <style>
        /* --- css na medyo dark themed I suppose --- */

        /* --- Proper structure so everything looks aligned properly --- */
        body {
            font-family: Arial, sans-serif;
            background-color: #111; /* Dark background */
            
            /* Background Image (Kept for the visual theme) */
            background-image: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwallpaperaccess.com%2Ffull%2F13265040.jpg&f=1&nofb=1&ipt=53f0ab46ccde842bfa481167fe803836bcb02269e73648556146a5d6a0f3fbb5');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            
            color: #ddd; /* Light text */
            margin: 0;
            padding: 20px 0;
            
            /* Center the entire page content */
            display: flex;
            flex-direction: column;
            align-items: center; 
        }

        .container {
            max-width: 1400px;
            width: 95%;
            background-color: rgba(0, 0, 0, 0.85); /* Semi-transparent overlay */
            padding: 30px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h1 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        .status-bar {
            text-align: center;
            margin-bottom: 30px;
            padding: 10px;
            background-color: #333;
            border-radius: 4px;
            color: #d83e01ff;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* --- Product Grid this--- */
        .product-grid {
            display: flex;
            flex-wrap: wrap; 
            gap: 20px; 
            justify-content: center;
            padding: 10px 0;
        }

        .product-card {
            width: 250px; 
            min-height: 450px;
            background-color: #222;
            border: 1px solid #444;
            border-radius: 4px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: box-shadow 0.2s;
        }

        .product-card:hover {
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* Just to make it look more appeaing I guess */
        }

        /* --- Card Content Sections bali lima sila kasi--- */
        .product-header {
            background-color: #444;
            color: #ffa600ff;
            padding: 8px 15px;
            font-size: 1em;
            font-weight: bold;
            text-align: center;
        }

        .card-content {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-image {
            width: 100%;
            height: 140px;
            overflow: hidden;
            margin-bottom: 10px;
            background-color: #000;
            border-radius: 2px;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .product-description h3 {
            margin-top: 0;
            margin-bottom: 5px;
            color: #e00f0fff;
            font-size: 1.2em;
        }

        .product-description p {
            font-size: 0.85em;
            color: #ccc;
        }

        /* --- Price and Status Displays --- */
        .product-footer {
            margin-top: auto; 
            border-top: 1px solid #444;
            padding-top: 10px;
        }

        .price-display {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1em;
            font-weight: bold;
            color: #fff;
        }

        .status {
            padding: 5px 8px;
            border-radius: 2px;
            font-size: 0.75em;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            margin-top: 10px;
        }

        /* Conditional Status Colors */
        .status-available {
            background-color: #000000ff; /* Dark Green */
            color: #02ff02ff;
        }
        .status-unavailable {
            background-color: #000000ff; /* Dark Red */
            color: #ff0026ff;
        }

        /* --- Footer --- */
        .info-footer {
            text-align: center;
            margin-top: 30px;
            padding: 10px;
            background-color: #333;
            border-radius: 4px;
            font-size: 0.8em;
            color: #00c3ffff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><?= $shop ?></h1>
        <div class="status-bar">
            E.G.O. TIER: <?= $tier ?> | SYSTEM STATUS: <?= $status ?>
        </div>

        <div class="product-grid">
<?php
// --- End HTML Header Content ---
?>

        <?php
        foreach ($gearList as $item) { // " enter comment here"
            $text = $item['isAvailable'] ? "Extraction Available" : "Extraction UNAVAILABLE"; // " enter comment here"
            $class = $item['isAvailable'] ? "status-available" : "status-unavailable"; // " enter comment here"
            $finalPrice = $item['price'] * (1 + $tax); // " enter comment here"
            ?>
            <div class='product-card'>
                
                <div class='product-header'>
                    E.G.O. ID: <?= $item['id'] ?>
                </div>

                <div class='card-content'>
                    
                    <div class='product-image'>
                        <img src="<?= $item['imageUrl'] ?>" alt="<?= $item['name'] ?> E.G.O. Gear">
                    </div>

                    <div class='product-description'>
                        <h3><?= $item['name'] ?></h3>
                        <p><?= $item['description'] ?></p>
                    </div>
                
                    <div class='product-footer'>
                        <div class='price-display'>
                            <span>COST:</span>
                            <span><?= number_format($finalPrice, 0) . " " . $coin ?></span>
                        </div>
                        
                        <div class='status <?= $class ?>'><?= $text ?></div>
                    </div>

                </div>
            </div>
        <?php
        }
        ?>

<?php
include 'footer.php'; // " enter comment here"
?>