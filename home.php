<?php
session_start();

if (empty($_SESSION['fullname'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Wave To East</title>
  <meta name="title" content="Shoppie - Man summer collection">
  <meta name="description" content="This is an eCommerce html template made by codewithsadee">
 
  <link rel="shortcut icon" href="./assets/images/lgo.jpg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/fonts/font.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  
  
  

</head>

<body>


  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
      

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">
          <li>
            <a href="#" class="navbar-link">Home</a>
          </li>      
          <li>
            <a href="home.php#recom" class="navbar-link">Shop</a>
          </li>
          <li class="dropdown">
           <a class="navbar-link"><?php echo $_SESSION['fullname'] ?></a>
           <ul class="dropdown-content">
           <li><a href="profil.php">profil</a></li>
           <li><a href="logout.php">Logout</a></li>
          </ul>
          </li>
          </ul>

        <button class="cart-btn">
          <ion-icon name="bag" aria-hidden="true"></ion-icon>


        <a href="contact.html" class="btn">Contact Us</a>
      </nav>

      <button class="nav-open-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>
  </header>


  <main>
    <article>

      <div class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle title">Direct by Wave2East</p>

            <h1 class="h1 hero-title title">Pusat Pemasaran <br> Kerajinan</h1>

            <p class="hero-text">
              The Craft Marketing Center is a place or institution that functions as a distribution and marketing center for handicraft products. Craft products produced by craftsmen or small businesses can be collected and marketed through this center. The main function of the Craft Marketing Center is to help introduce, market and distribute handicraft products to consumers.
            </p>

            <a href="home.php#recom" class="btn btn-primary">
              <span class="span">Shop Now</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <div class="hero-banner">
            <figure class="img-holder" style="--width: 704; --height: 700;">
              <img src="./assets/images/tampakdepansourcemaps.jpg" width="704" height="700" alt="hero banner" class="img-cover">
            </figure>

            <img src="./assets/images/hero-shape-1.png" width="255" height="249" alt="shape" class="shape shape-1">
          </div>

          <img src="./assets/images/hero-shape-2.png" width="360" height="133" alt="shape" class="shape shape-2">

        </div>
      </div>


<?php
function getTitleFromImage($imageURL) {
  
    $imageName = pathinfo($imageURL, PATHINFO_FILENAME);

    $productName = ucwords(str_replace('_', ' ', $imageName));

    return $productName;
}

function getRandomImage() {
   
    $imageURLs = [
        'assets/images/pecihd.png',
        'assets/images/tapis kain.jpg',
        'assets/images/gajahhd.png',
        'assets/images/kipasbali.png',
        'assets/images/anyamanpandan.jpg',
        'assets/images/tapis kain.jpg',
        'assets/images/wayangkulit.jpg',
        'assets/images/noken.jpg',
        'assets/images/getahnyatu.jpeg',
        // Tambahkan URL gambar lebih banyak jika diperlukan
    ];

    // Dapatkan indeks acak dari array
    $randomIndex = array_rand($imageURLs);

    // Kembalikan URL gambar acak
    return $imageURLs[$randomIndex];
}

// Contoh penggunaan
$numProducts = 3; // Anda perlu mendefinisikan $numProducts di suatu tempat dalam kode Anda
$randomImage = getRandomImage();
?>

<section class="section product" aria-label="product" id="recom">
    <div class="container">
        <h2 class="h2 section-title title text-center">Product Recommendations</h2>
        <ul class="product-list has-scrollbar">
            <?php for ($i = 1; $i <= $numProducts; $i++) : ?>
                <li class="scrollbar-item">
                    <div class="product-card text-center">
                        <div class="card-banner">
                            <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                                <?php
                                // ngebuat generate gambar baru ini
                                $randomImage = getRandomImage();
                                ?>
                                <img src="<?php echo $randomImage; ?>" width="448" height="470" loading="lazy"
                                     alt="Product Image <?php echo $i; ?>" class="img-cover">
                            </figure>
                        </div>
                        <div class="card-content">
                            <h3 class="h4 title">
                                <a href="# ?>"
                                   class="card-title"><?php echo getTitleFromImage($randomImage); ?></a>
                            </h3>
                        </div>
                    </div>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</section>




      <section class="section feature" aria-label="feature-label">
        <div class="container">

          <h2 class="h2 section-title title text-center" id="feature-label">other products</h2>

          <ul class="feature-list">

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/baju.png" width="448" height="470" loading="lazy"
                      alt="Pakaian Tapis Wanita" class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="bajutapis.php" class="card-title">Pakaian Tapis Wanita</a>
                  </h3>

                  <span class="price">Rp 260.000</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/tas kulit ya.png" width="448" height="470" loading="lazy"
                      alt="Kerajinan Tas kulit" class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="taskulit.php" class="card-title">Kerajinan Tas kulit</a>
                  </h3>

                  <span class="price">Rp 199.999</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/selendang.png" width="448" height="470" loading="lazy"
                      alt="" class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="selempang.php" class="card-title">Selempang Tapis</a>
                  </h3>

                  <span class="price">Rp 149.999</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/tas.jpg" width="448" height="470" loading="lazy"
                      alt="Anyaman Tas Tapis" class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="anyamantastapis.php" class="card-title">Anyaman Tas Tapis</a>
                  </h3>

                  <span class="price">Rp 225.000</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/dompetya.png" width="448" height="470" loading="lazy"
                      alt="Dompet Motif Tapis" class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="dompet.php" class="card-title">Dompet Motif Tapis</a>
                  </h3>

                  <span class="price">Rp 199.000</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/kayu jam.jpg" width="448" height="470" loading="lazy" 
                    alt="Kerajinan Jam Kayu"class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="jam.php" class="card-title">Kerajinan Jam Kayu</a>
                  </h3>

                  <span class="price">Rp 125.000</span>
                </div>

              </div>
            </li>

            
            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/wayangkulit.jpg" width="448" height="470" loading="lazy" 
                    alt="Wayang Kulit Asli Yogyakarta"class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="wayang.php" class="card-title">Wayang Kulit Yogyakarta</a>
                  </h3>

                  <span class="price">Rp 1.370.000</span>
                </div>

              </div>
            </li>
          
            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/getahnyatu.jpeg" width="448" height="470" loading="lazy" 
                    alt="Getah Nyatu Kalimantan"class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="getahnyatu.php" class="card-title">Getah Nyatu Kalimantan</a>
                  </h3>

                  <span class="price">Rp 345.000</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/songket.jpg" width="448" height="470" loading="lazy" 
                    alt="Songket palembang"class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="songket.php" class="card-title">Songket Palembang</a>
                  </h3>

                  <span class="price">Rp 225.000</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/noken.jpg" width="448" height="470" loading="lazy" 
                    alt="Noken Papua"class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="nokenpapua.php" class="card-title">Noken Papua</a>
                  </h3>

                  <span class="price">Rp 299.000</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/anyamanpandan.jpg" width="448" height="470" loading="lazy" 
                    alt="Anyaman Pandan"class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="anyamanpadan.php" class="card-title">Anyaman Pandan</a>
                  </h3>

                  <span class="price">Rp 150.000</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/kipasbali.png" width="448" height="470" loading="lazy" 
                    alt="Anyaman Pandan"class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="kipasbali.php" class="card-title">Kipas Kayu Cendana Lukis Tradisi Bali</a>
                  </h3>

                  <span class="price">Rp 650.000</span>
                </div>

              </div>
            </li>

            
            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/wayanggolek.png" width="448" height="470" loading="lazy" 
                    alt="Wayang Golek"class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="wayanggolek.php" class="card-title">Wayang Golek Jawa Barat</a>
                  </h3>

                  <span class="price">Rp 699.999</span>
                </div>

              </div>
            </li>

            
            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/kopiahiya.png" width="448" height="470" loading="lazy" 
                    alt="Kopiah Meukeutop"class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="kopiah.php" class="card-title">Kopiah Meukeutop</a>
                  </h3>

                  <span class="price">Rp 900.000</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/angklungya.png" width="448" height="470" loading="lazy" 
                    alt="Angklung"class="img-cover">
                  </figure>
                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="angklung.php" class="card-title">Angklung Jawa Barat</a>
                  </h3>

                  <span class="price">Rp 626.000</span>
                </div>

              </div>
            </li>






          </ul>
        </div>
      </section>


  <script src="./assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
