<!-- header.php -->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Find and share quiet spaces" />
    <meta name="keywords" content="quiet, sensory-friendly, low sensory, cafe, libray" />
    <meta name="author" content="Abigail David, Ruhaani Sethi, Hiruni Wijayanayaka,  Jess Dunn" />
    <title><?php echo $pageTitle ?? 'My Website'; ?></title>
    <link rel="icon" href="../STATIC/sofa.png" />
    <link rel="stylesheet" href="shop.css">


</head>

<body>
    <header>
        <nav class="topnav">
            <nav class="localswitch">
                <div class="dropdown">
                    <a class="dropbtn">Language
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#">English</a>
                        <a href="#">Spanish</a>
                        <a href="#">German</a>
                    </div>
            </nav>

            <ul class=userprofile>
                <li><a href="../CART/mycart.html">Cart</a></li>
                <li><a href="../CART/checkout.html">Checkout</a></li>
                <li><a href="../CART/create_user.html">User</a></li>
            </ul>
        </nav>
        <a href="../homepage.html">
            <h1>The Quiet Network</h1>
        </a>
        <nav class="navbar">
            <ul class="pages">
                <li><a href="../BLOG/main_blog_page.html">Blog</a></li>
                <li><a href="../REVIEW/main_review.html">Reviews</a></li>
                <li><a href="../FORUM/main_forum.html">Forum</a></li>
                <li><a href="../CART/main_shop.html">Shop</a></li>
            </ul>
        </nav>
    </header>