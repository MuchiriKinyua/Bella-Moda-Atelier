<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bella Moda Artelier</title>

         <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

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
                margin:0;

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
                background-image: url(https://www.kickfurther.com/wp-content/uploads/2021/09/howtogrowyourclothingbrand.jpeg);
                width: 100%;
                margin: 0;
                height: 70vh;
                background-repeat: no-repeat;
                padding-top: 1rem; 
                margin-top: 10%;
                background-position: center;
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
.categories {
    display: flex;
    justify-content: space-around;
    padding: 4px;
    border-radius: 5px; /* Rounded corners */
}

.categories a {
    text-decoration: none;
    color: #333; /* Dark gray text color */
    font-weight: bold;
    padding: 8px 16px;
    border-radius: 3px;
    transition: background-color 0.3s ease;
}

.categories a:hover {
    background-color: lightseagreen; 
}

        .separator {
    border-bottom: 1px solid #000; /* You can customize the color and thickness */
    margin: 10px 0; /* Adjust the margin as needed */
}

.social-icons {
    margin-right: 10%;
    display: flex;
    gap: 6rem;

}

.social-icons a {
    text-decoration: none;
    color: #333; 
    font-size: 18px;
    transition: color 0.3s ease;
    align-items: end;
}

.social-icons a:hover {
    color: #1da1f2; /* Change color on hover (customize as needed) */
}


.container {
  display: flex;
  gap: 4rem;
  flex-wrap: wrap;
  justify-content: center;
  width: 90%;
  max-width: 1200px;
  margin-top: 4rem;
}

.section {
  padding: 1.5rem;
  width: 100%;
  text-align: center;
  position: relative;
  margin-top: 2rem;
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
  width: 150%;
  height: 100%;
  background-color: #e6f2f0;
  border: 2px solid #008080;
  border-radius: 10px;
  z-index: -1; /* Ensures the rectangle is behind the image */

}
.image-wrapper img {
  width: 150%;
  height: 80%;
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
    /* review cards */
    /* Slider container styling */
.slider {
  position: relative;
  overflow: hidden;
  max-width: 340px;
  margin: auto;
  padding: 20px 0;
}

/* Wrapper for all cards */
.slider-wrapper {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

/* Card styling */
.card {
  flex: 0 0 100%;
  box-sizing: border-box;
  padding: 15px;
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin: 0 10px;
  max-width: 320px;
}

.cards{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}
.reviews h2, h3{
    text-align: center;
}
.reviews h2{
    font-family: sofia;
    font-size: 1.5rem;
    margin-top: 4%;
}


.stars {
  display: flex;
  grid-gap: 0.125rem;
  gap: 0.125rem;
  color: rgb(238, 203, 8);
}

.star {
  height: 1.25rem;
  width: 1.25rem;
}

.infos {
  margin-top: 1rem;
}

.date-time {
  color: rgba(7, 63, 216, 1);
  font-size: 12px;
  font-weight: 600;
}

.description {
  margin-top: 0.4rem;
  line-height: 1.625;
  color: rgba(107, 114, 128, 1);
}

.author {
  margin-top: 1.3rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  color: rgba(107, 114, 128, 1);
}

footer {
         
            color: #111;
            padding: 40px 20px;
            position: relative;
            width: 100%;
            animation: fadeIn 2s ease-in-out;
        }
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }
        .footer-section {
            flex: 1;
            min-width: 250px;
            margin: 10px;
            animation: slideIn 1s ease-in-out;
        }
        .footer-section h3 {
            border-bottom: 2px solid #fff;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .social-media a {
            margin: 0 10px;
            color: #111;
            text-decoration: none;
            font-size: 1.5em;
            transition: color 0.3s;
        }
        .social-media a:hover {
            color: #1da1f2;
        }
        .map-container {
            width: 100%;
            height: 200px;
            margin-top: 20px;
        }
        .newsletter input[type="email"] {
            padding: 10px;
            width: calc(100% - 22px);
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }
        .newsletter button {
            padding: 10px 20px;
            background-color: #1da1f2;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .newsletter button:hover {
            background-color: #6dd5ed;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        </style>
    </head>
    <body>
        <!-- Welcome Card -->
        <div class="welcome-card">
            <nav>
                <li><a href="#home">Home</a></li>
                <li><a href="#home">About Us</a></li>
                <li class="logo">Bella Moda Artelier</li>
                <li><a href="#categories">Categories</a></li>
                <li><a href="#">Gallery</a></li>
                <li class="social-icons"> 
                    <a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
            </nav>
            <div class="separator"></div>
            <nav class="categories">
    <a href="{{ url('/kids') }}">Bella Moda Kids</a>
    <a href="#kings">Bella Moda Bridal</a>
    <a href="#bridal">Bella Moda Kings </a>
    <a href="#lingerie">Bella Moda Lingerie</a>
    <a href="#ready-to-wear">Bella Moda Ready to Wear</a>
    <a href="#jewellery">Bella Moda Jewellery</a>
    <a href="#shoes">Bella Moda Shoes</a>
</nav>
        </div>
        <div>
            <div class="home" id="home">
                <h1>Bella Moda <br> Artelier</h1>
                <p> <b> Welcome to Bella Moda Atelier!  <br>
                your ultimate destination for exquisite fashion,
                timeless elegance, and <br> bespoke experiences. Our brand is built on the foundation of
                delivering  <br> style that celebrates individuality and caters to every unique moment in your life.
               <br> we are more than just fashion—we are a lifestyle. <br> Explore our world, and let us help you create memories in style.</b>
                </p>
            </div>

<div class="container">
    <div class="section" id="categories">
      <h2 style="margin-right: 20%;">Bella Moda Kids</h2>
      <p style="margin-right: 20%;">
        Dress Your Little Ones In Style! <br> We Offer A Curated Collection Of Playful, Elegant, And Comfortable Outfits For Kids. <br> From Casual Wear To Special Occasion Attire, We Ensure Your Kids Look Their Best Every Day.
      </p>
      <button class="btn" style="margin-right: 20%;">Get Started</button>
      <div class="image-wrapper">
        <img src="https://www.shutterstock.com/image-photo/smiling-pretty-small-curly-afro-600nw-1859994604.jpg" alt="Bella Moda Kids">
      </div>
    </div>

    <div class="section">
      <div class="image-wrapper">
        <img src="https://i.pinimg.com/736x/ed/d4/96/edd496198bf6882f72f6c9a788736a25.jpg" alt="Bella Moda Bridal">
      </div>
      <h2 style="margin-left: 25%;">Bella Moda Bridal</h2>
      <p  style="margin-left: 25%;">
        Step Into Your Fairytale With Bella Moda Bridal. <br> Our Bridal Division Specializes In Creating Unforgettable Moments With A Range Of  <br> Wedding Gowns, Bridesmaids’ Dresses, And Accessories To Make Your Special Day Perfect.
      </p>
      <button class="btn" style="margin-left: 25%;">Get Started</button>
    </div>

  </div>
  <div class="container">
    <div class="section">
      <h2 style="margin-right: 20%;">Bella Moda Kings</h2>
      <p style="margin-right: 20%;">
      Celebrate modern masculinity with Bella Moda Kings, our premium collection for men. <br> We provide tailored suits, casual wear, and accessories designed to reflect confidence, sophistication, and charm.
      </p>
      <button class="btn" style="margin-right: 20%;">Get Started</button>
      <div class="image-wrapper">
        <img src="https://i.pinimg.com/736x/44/5b/11/445b1121caefd34f631a37fdb30c6b81.jpg" alt="Bella Moda Kings">
      </div>
    </div>

    <div class="section">
      <div class="image-wrapper">
        <img src="https://i.pinimg.com/474x/4d/95/22/4d952298b289ee919d3431c2db2e36b2.jpg" alt="Bella Moda Bridal">
      </div>
      <h2 style="margin-left: 25%;">Bella Moda Lingerie</h2>
      <p  style="margin-left: 25%;">
      Indulge in comfort and sensuality with Bella Moda Lingerie. <br> We offer a diverse range of intimate wear that combines luxury with functionality, <br> ensuring you feel confident inside and out.

      </p>
      <button class="btn" style="margin-left: 25%;">Get Started</button>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <h2 style="margin-right: 20%;">Bella Moda Ready to wear</h2>
      <p style="margin-right: 20%;">
      Stay effortlessly chic with Bella Moda Ready to Wear. <br> Our ready-to-wear line features trendy, versatile pieces for every occasion, <br> blending comfort with style to match your dynamic lifestyle.
      </p>
      <button class="btn" style="margin-right: 20%;">Get Started</button>
      <div class="image-wrapper">
        <img src="https://i.pinimg.com/originals/44/37/e8/4437e81a9e9d25400d7345eeea41619a.jpg" alt="Bella Moda ready to wear">
      </div>
    </div>

    <div class="section">
      <div class="image-wrapper">
        <img src="https://i.pinimg.com/originals/5b/a6/32/5ba6326289404c7a81ed446e1292bcea.png" alt="Bella Moda Bridal">
      </div>
      <h2 style="margin-left: 25%;">Bella Moda Jewellery</h2>
      <p  style="margin-left: 25%;">
      Add the perfect finishing touch with Bella Moda Jewellery. <br> From statement pieces to delicate designs, our collection celebrates craftsmanship <br> and elegance, ensuring you shine at every occasion.

      </p>
      <button class="btn" style="margin-left: 25%;">Get Started</button>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <h2 style="margin-right: 20%;">Bella Moda Shoes</h2>
      <p style="margin-right: 20%;">
      Stay effortlessly chic with Bella Moda Ready to Wear. <br> Our ready-to-wear line features trendy, versatile pieces for every occasion, <br> blending comfort with style to match your dynamic lifestyle.
      </p>
      <button class="btn" style="margin-right: 20%;">Get Started</button>
      <div class="image-wrapper" style="margin-left: 80%;">
        <img src="https://i.pinimg.com/736x/9d/eb/00/9deb005da3e21bda91f5e92296a08296.jpg" alt="Bella Moda ready to wear">
      </div>
    </div>
  </div>
   <!-- review cards -->
<div class="reviews">
<h2>Come and Join</h2>
<h3>OUR HAPPY CUSTOMERS</h3>
</div>
<div class="slider">
<div class="slider-wrapper">

<div class="card">
    <div class="stars">
    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>
    </div>

    <div class="infos">
      <p class="date-time">
                      2 day ago
      </p>
      <p class="description">
      "These jeans are amazing! They fit like a glove and are so versatile. 
      I can dress them up or down, and they're incredibly comfortable."
      </p>
  </div>
  <div class="author">
    — Jared Mwanduka
  </div>
 </div>
<!-- card 2 -->
<div class="card">
<div class="stars">
    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-star-half-alt" style="color: #FFD43B;"></i>
    </div>

    <div class="infos">
      <p class="date-time">
                      2 days ago
      </p>
    <p class="description">
      "Absolutely love this store! The bridal collection is stunning, and the staff is incredibly helpful and friendly.
       I found my dream dress here, and they even helped with alterations. Highly recommend!"

    </p>
  </div>
  <div class="author">
    — Nyokabi
  </div>
 </div>
 <!-- card 3 -->
 <div class="card">
 <div class="stars">
    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>
    </div>

    <div class="infos">
      <p class="date-time">
                      2 days ago
      </p>
      <p class="description">
      "I love this brand! The clothes are stylish and comfortable, and they have
       a great selection of sizes for growing kids. My son looks so cute in his new outfits."
      </p>
  </div>
  <div class="author">
    — Muchiri
  </div>
 </div>
 <!-- card 4 -->
 <div class="card">
 <div class="stars">
    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-solid fa-star" style="color: #FFD43B;"></i>

    <i class="fas fa-star-half-alt" style="color: #FFD43B;"></i>
    </div>

    <div class="infos">
      <p class="date-time">
                      1 days ago
      </p>
      <p class="description">
      "These pajamas are a hit with my kids. They're cozy and warm, and
       the designs are adorable. They've become a favorite bedtime staple."
      </p>
  </div>
  <div class="author">
    — Kevin Soy
  </div>
 </div>

 </div>
        </div>
</div>
    <!-- Accordion for the review form -->
<div style="margin: 2% auto; border: 1px solid #ddd; border-radius: 5px; overflow: hidden; max-width: 600px; padding: 0 10px;">
  <button onclick="toggleAccordion()" style="width: 100%; padding: 15px; text-align: left; background-color: #008080; color: white; border: none; cursor: pointer; font-size: 16px;">
    Leave A Review <i class="fas fa-caret-down" style="float:right;"></i>
  </button>
  <div id="accordionContent" style="display: none; padding: 1rem; border-top: 1px solid #ddd;">
    <form id="reviewForm" style="max-width: 500px; margin: auto;" onsubmit="submitReview(event)">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" required style="width: 100%; padding: 8px; margin-bottom: 1rem;">

      <label for="rating">Rating (1-5):</label>
      <input type="number" id="rating" name="rating" min="1" max="5" required style="width: 100%; padding: 8px; margin-bottom: 1rem;">

      <label for="review">Your Review:</label>
      <textarea id="review" name="review" rows="4" required style="width: 100%; padding: 8px; margin-bottom: 1rem;"></textarea>

      <button type="submit" style="padding: 10px 20px; background-color: #008080; color: white; border: none; cursor: pointer;">Submit Review</button>
    </form>
  </div>
</div>

        <!-- Footer -->
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>We are more than just fashion— We are a lifestyle!! Explore our world, and let us help you create memories in style.</p>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: info@bellamodaartelier.com</p>
                <p>Phone: +254745416760</p>
                <div class="social-media">
                    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Visit Us</h3>
                <div class="map-container">
                    <iframe
                        width="100%"
                        height="100%"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3095.485943661672!2d36.81808400915704!3d-1.2855360986968323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f118e570022f3%3A0xfa292d8be20ca531!2s680%20Hotel!5e1!3m2!1sen!2ske!4v1736927030685!5m2!1sen!2ske">
                        </iframe>
                </div>
            </div>
            <div class="footer-section newsletter">
                <h3>Newsletter</h3>
                <p>Subscribe to our newsletter to stay updated on our latest news and offers.</p>
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </div>
        </div>
        <div style="text-align: center; margin-top: 20px;">
            <p>&copy; <span id="year"></span> Bella Moda Atelier. All rights reserved.</p>
        </div>
    </footer>
        </main>
        <script>
        // Set the current year in the footer
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
        <script>
  function toggleAccordion() {
    const content = document.getElementById('accordionContent');
    if (content.style.display === 'none' || content.style.display === '') {
      content.style.display = 'block'; // Show the form
    } else {
      content.style.display = 'none'; // Hide the form
    }
  }

  const reviews = [];

  function submitReview(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const rating = document.getElementById('rating').value;
    const review = document.getElementById('review').value;

    reviews.push({ name, rating, review });

    document.getElementById('reviewForm').reset();
    displayReviews();
  }

  function displayReviews() {
    const reviewList = document.getElementById('reviewList');
    reviewList.innerHTML = `<h3>What Others Are Saying</h3>`; // Reset list

    reviews.forEach((r) => {
      reviewList.innerHTML += `
        <div style="margin-bottom: 1rem; border: 1px solid #ddd; padding: 1rem; background: #fff;">
          <h4>${r.name} <span style="color: #f39c12;">★ ${r.rating}</span></h4>
          <p>${r.review}</p>
        </div>
      `;
    });
  }
  let currentIndex = 0;

function slideToIndex(index) {
  const sliderWrapper = document.querySelector('.slider-wrapper');
  const totalSlides = document.querySelectorAll('.card').length;

  // Ensure the index is within bounds
  if (index < 0) {
    currentIndex = totalSlides - 1; // Loop to the last slide
  } else if (index >= totalSlides) {
    currentIndex = 0; // Loop to the first slide
  } else {
    currentIndex = index;
  }

  // Move the wrapper to show the current slide
  sliderWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Auto-slide every 5 seconds
setInterval(() => {
  slideToIndex(currentIndex + 1);
}, 5000);

</script>

    </body>
</html>


