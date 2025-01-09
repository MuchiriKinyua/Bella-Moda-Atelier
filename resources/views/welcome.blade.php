<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bella Moda Artelier</title>

         <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

        <!-- FontAwesome for icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: aliceblue;
                color: #333;
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
                overflow-x: hidden; /* Prevent sliding left and right */
            }

            .welcome-card {
                background: linear-gradient(120deg, #d4f1f9, #6dd5ed);
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
                width: 100%;
                padding: 1rem;
                color: black;
                position: fixed;
                top: 0;
                left: 0;
                z-index: 1000;
                margin: 0;
            }

            .welcome-card li {
                list-style: none;
                display: inline;
                margin: 7px;
                color: black;
            }

            .welcome-card a {
                text-decoration: none;
                color: black;
            }

            .logo {
                font-family: papyrus;
            }

            .home {
                background-image: url(https://cdn.concreteplayground.com/content/uploads/2019/07/meet.that_.store_.supplied2.jpg);
                width: 100%;
                margin: 0;
                height: 70vh;
                background-repeat: no-repeat;
                padding-top: 5rem; /* Adjusted to account for fixed welcome card */
            }

            .home h1 {
                text-align: center;
                font-family: papyrus;
                margin-top: 1px;
            }

            .home p {
                text-align: center;
                margin-top: 1px;
            }

            .cards {
                display: flex;
                justify-content: center;
                gap: 1.5rem;
                flex-wrap: wrap;
                max-width: 1200px;
                width: 100%;
                margin-top: 2rem;
            }

            .card {
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
                padding: 2rem;
                flex: 1 1 calc(33.333% - 2rem);
                max-width: calc(33.333% - 2rem);
                box-sizing: border-box;
                position: relative;
                overflow: hidden;
            }

            .card h2 {
                font-size: 1.5rem;
                margin-bottom: 0.5rem;
                color: #2a9d8f;
            }

            .card p {
                font-size: 1rem;
                margin: 0;
                color: #555;
            }

            .card[data-icon]::before {
                content: attr(data-icon);
                font-family: 'FontAwesome';
                position: absolute;
                top: 33%;
                left: 75%;
                transform: translate(-50%, -50%);
                font-size: 5rem;
                color: rgba(0, 0, 0, 0.1);
                opacity: 10;
            }

            footer {
                text-align: center;
                padding: 1rem;
                background-color: #f3f4f6;
                width: 100%;
                margin-top: 2rem;
            }

            footer span {
                font-size: 0.9rem;
                color: #666;
            }

.container {
  display: flex;
  gap: 2rem;
  flex-wrap: wrap;
  justify-content: center;
  width: 90%;
  max-width: 1200px;
}

.section {
  padding: 1.5rem;
  width: 100%;
  text-align: center;
  position: relative;
}

.section h2 {
  font-size: 1.8rem;
  margin-bottom: 1rem;
}

.section p {
  font-size: 1rem;
  line-height: 1.6;
  margin-bottom: 1.5rem;
  margin-left: 2rem;
  margin-right: 2rem;
}

.btn {
  background-color: #004d3e;
  color: #fff;
  padding: 0.8rem 1.5rem;
  font-size: 1rem;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
  transition: background 0.3s ease;
}

.btn:hover {
  background-color: #00332a;
}

.image-wrapper {
  margin: 1.5rem 0;
  position: relative; 
  display: inline-block;
}

.image-wrapper::before {
  content: "";
  position: absolute;
  top: -10%;
  left: 25%;
  width: 90%;
  height: 100%;
  background-color: #e6f2f0;
  border: 2px solid #008080;
  border-radius: 10px;
  z-index: -1; /* Ensures the rectangle is behind the image */

}
.image-wrapper img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.section:first-of-type .image-wrapper {
  position: absolute;
  top: 0;
  right: 3rem;
  width: 150px;
}

.section:last-of-type .image-wrapper {
  position: absolute;
  top: 0;
  left: 3rem;
  width: 150px;
}

@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }

  .section .image-wrapper {
    position: relative;
    margin: 0 auto;
    width: 80%;
  }

  .section:first-of-type .image-wrapper,
  .section:last-of-type .image-wrapper {
    position: relative;
    top: auto;
    left: auto;
    right: auto;
  }
}

            /* Responsive Design */
            @media (max-width: 768px) {
                .card {
                    flex: 1 1 calc(50% - 1rem);
                    max-width: calc(50% - 1rem);
                }
            }

            @media (max-width: 480px) {
                .card {
                    flex: 1 1 100%;
                    max-width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <!-- Welcome Card -->
        <div class="welcome-card">
            <nav>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li class="logo">Bella Moda Artelier</li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Gallery</a></li>
            </nav>
        </div>
        <main>
            <div class="home">
                <h1>Bella Moda <br> Artelier</h1>
                <p>Welcome to Bella Moda Atelier, your ultimate destination for exquisite fashion, <br>
                timeless elegance, and bespoke experiences. Our brand is built on the foundation of <br>
                delivering style that celebrates individuality and caters to every unique moment in your life.
                </p>
            </div>

            <div class="container">
    <div class="section">
      <h2>Bella Moda Kids</h2>
      <p>
        Dress Your Little Ones In Style! <br> We Offer A Curated Collection Of Playful, Elegant, And Comfortable Outfits For Kids. <br> From Casual Wear To Special Occasion Attire, We Ensure Your Kids Look Their Best Every Day.
      </p>
      <button class="btn">Get Started</button>
      <div class="image-wrapper">
        <img src="https://www.shutterstock.com/image-photo/smiling-pretty-small-curly-afro-600nw-1859994604.jpg" alt="Bella Moda Kids">
      </div>
    </div>

    <div class="section">
      <div class="image-wrapper">
        <img src="https://www.shutterstock.com/image-photo/smiling-pretty-small-curly-afro-600nw-1859994604.jpg" alt="Bella Moda Bridal">
      </div>
      <h2>Bella Moda Bridal</h2>
      <p>
        Step Into Your Fairytale With Bella Moda Bridal. <br> Our Bridal Division Specializes In Creating Unforgettable Moments With A Range Of  <br> Wedding Gowns, Bridesmaids’ Dresses, And Accessories To Make Your Special Day Perfect.
      </p>
      <button class="btn">Get Started</button>
    </div>
  </div>
            <!-- Footer -->
            <footer>
                <span>&copy; {{ date('Y') }} <a href="https://www.learnsoftbeliotechsolutions.co.ke/">Learnsoft Beliotech Solutions</a> All Rights Reserved.</span>
                <span>Version 1.1.0</span>
            </footer>
        </main>
    </body>
</html>
