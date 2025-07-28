

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>B.B. Catering Services</title>
  <link rel="icon" type="image/png" href="images/chef.png" />

   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --max-width: 1200px;
    }
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: transparent;
      color: white;
    }
    #food-canvas {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    }
    nav {
      background: rgba(0, 0, 0, 0.8);
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      flex-wrap: wrap;
    }
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 5px;
      transition: transform 0.3s ease;
    }
    .hamburger span {
      width: 25px;
      height: 3px;
      background: white;
      border-radius: 2px;
      transition: all 0.3s ease;
    }
    .hamburger.active span:nth-child(1) {
      transform: rotate(45deg) translate(5px, 5px);
    }
    .hamburger.active span:nth-child(2) {
      opacity: 0;
    }
    .hamburger.active span:nth-child(3) {
      transform: rotate(-45deg) translate(6px, -6px);
    }
    .nav-links {
      list-style: none;
      display: flex;
      gap: 1.2rem;
      padding: 0;
      margin: 0;
      transition: max-height 0.4s ease;
    }
    .nav-links li a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      padding: 6px 12px;
      border-radius: 4px;
      transition: background 0.3s;
    }
    .nav-links li a:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .logo {
      color: white;
      font-size: 1.8rem;
      font-weight: bold;
    }
    header {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      text-align: center;
    }
    .hero-content h1 {
      font-size: clamp(2rem, 6vw, 3rem);
      margin-bottom: 0.5rem;
      animation: glow 2s infinite alternate;
    }
    .hero-content p {
      font-size: clamp(1rem, 4vw, 1.2rem);
    }
    @keyframes glow {
      0% { text-shadow: 0 0 10px #ffcc99, 0 0 20px #ffcc99, 0 0 30px #ff9966; }
      100% { text-shadow: 0 0 20px #ffcc99, 0 0 30px #ff9966, 0 0 40px #ff6633; }
    }
    section {
      padding: 4rem 2rem;
      max-width: var(--max-width);
      margin: auto;
      text-align: center;
    }
    section h2 {
      font-size: clamp(1.5rem, 5vw, 2.5rem);
    }
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 1.5rem;
      margin-top: 2rem;
    }
    .gallery-grid div {
      text-align: center;
    }
    .gallery-grid img {
      width: 100%;
      border-radius: 8px;
      transition: transform 0.3s;
    }
    .gallery-grid img:hover {
      transform: scale(1.05);
    }
    .gallery-grid p {
      margin-top: 0.5rem;
      font-size: 1rem;
    }
    footer {
      text-align: center;
      padding: 2rem 1rem;
      font-size: 0.95rem;
      background-color: rgba(0, 0, 0, 0.5);
    }
    footer a {
      color: #ffcccb;
      text-decoration: underline;
    }
    .booking-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      max-width: 800px;
      margin: auto;
      background: rgba(255,255,255,0.05);
      padding: 2rem;
      border-radius: 12px;
    }
    .booking-form input,
    .booking-form select,
    .booking-form textarea {
      padding: 0.8rem;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      background: rgba(255,255,255,0.1);
      color: white;
    }
    .booking-form button {
      background: #ff9966;
      color: white;
      border: none;
      padding: 0.8rem;
      font-size: 1.1rem;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .booking-form button:hover {
      background: #ff6633;
    }

    select {
  background-color: #1e1e1e; /* dark background */
  color: #ffffff;           /* white text */
  border: 1px solid #ccc;
  border-radius: 8px;
  padding: 10px;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

    .menu-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 0.5rem;
      text-align: left;
    }
    .menu-grid label {
      background: rgba(255,255,255,0.05);
      padding: 6px 10px;
      border-radius: 6px;
      cursor: pointer;
      display: block;
    }
    @media(max-width: 768px) {
      .hamburger {
        display: flex;
      }
      .nav-links {
        flex-direction: column;
        width: 100%;
        display: none;
      }
      .nav-links.active {
        display: flex;
      }
    }
    @media(max-width: 480px) {
      html {
        font-size: 14px;
      }
      .gallery-grid {
        grid-template-columns: 1fr;
      }
      footer {
        font-size: 0.9rem;
      }
    }
  </style>

  <style>
  select {
    background-color: #222; /* Dark background */
    color: #fff;
    padding: 8px;
    border: 1px solid #555;
    border-radius: 6px;
    appearance: none;         /* Remove default arrow */
    -webkit-appearance: none;
    -moz-appearance: none;
    cursor: pointer;
    position: relative;
  }

  /* Custom arrow using background-image or pseudo-element */
  select::after {
    content: "▼";
    position: absolute;
    right: 10px;
    pointer-events: none;
  }

  /* Optional: Style when focused */
  select:focus {
    outline: none;
    border-color: #888;
    background-color: #111;
  }

  option {
    background-color: #222;  /* Dropdown background */
    color: #fff;             /* Text color */
  }
</style>

</head>
<body>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      hamburger.classList.toggle('active');
    });
  });
</script>
<canvas id="food-canvas"></canvas>
<nav>
  <div class="logo">B.B. Catering</div>
  <div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
<ul class="nav-links">
  <li><a href="#hero">Home</a></li>
  <li><a href="#about">About Us</a></li>
  <li><a href="#gallery">Gallery</a></li>
  <li><a href="#services">Services</a></li>
  <li><a href="#book-online">Book</a></li>
</ul>

</nav>
  <header id="hero">
    <div class="hero-content">
      <h1>Welcome to B.B. Catering</h1>
      <p>Great Cuisine – Great Taste</p>
      <p>Kanpur, India</p>
    </div>
  </header>
  
  <section id="about">
    <h2>About Us</h2>
    <h3>Why Choose Us?</h3>
<ul style="max-width: 800px; margin: auto; text-align: left;">
  <li>✅ 30+ Years of Experience in Catering</li>
  <li>✅ 100% Pure Vegetarian Food</li>
  <li>✅ Hygienic Kitchen & Serving</li>
  <li>✅ Custom Menus as per Taste & Budget</li>
  <li>✅ Friendly & Professional Staff</li>
</ul>

<h3>Our Vision</h3>
<p style="max-width:800px; margin:auto;">
  To become Kanpur’s most trusted name in vegetarian catering, offering unforgettable flavors and impeccable service for every event.
</p>

<div style="max-width:800px; margin:auto; text-align: left;">
  <h3>Meet Our Founder – Dinesh Gaur</h3>
  <p>Dinesh Gaur, the visionary behind B.B. Catering, has over 15 years of culinary and hospitality experience. With a deep love for Indian vegetarian cuisine and an unwavering commitment to quality, he started B.B. Catering to serve happiness on every plate. Under his leadership, the company has catered for weddings, receptions, birthdays, and corporate events with unmatched professionalism and taste.</p>
  <div style="max-width:800px; margin:auto; text-align: left;">
      </p>
      <div style="display: flex; align-items: flex-start; gap: 1rem; margin-top: 1rem;">
        <img src="images/papa.jpg" alt="Dinesh Gaur" style="width: 140px; height: auto; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
        <div>
          <h4>Message from the Owner:</h4>
          <blockquote style="font-style: italic; color: #ffcccb; border-left: 4px solid #ffcccb; padding-left: 1rem;">
            "Catering isn’t just food, it’s an emotion. My goal is to bring warmth, authenticity, and great taste to every event in Kanpur."
          </blockquote>
        </div>
      </div>
    </div>
  </section>
  <section id="gallery">
    <h2>Gallery</h2>
    <div class="gallery-grid">
  <div><img src="images/reception2.jpg" alt="Wedding Setup"><p></p></div>
  <div><img src="images/pannerTikk.jpg" alt="Reception Buffet"><p></p></div>
  <div><img src="images/pexels-naimbic-2291367.jpg" alt="Live Counter"><p></p></div>
  <div><img src="images/eventwithWorker.jpg" alt="Birthday Theme"><p></p></div>
  <div><img src="images/dalMakahni.jpg" alt="Corporate Event"><p></p></div>
</div>

<section id="services" style="padding: 40px 20px;">
  <h2 style="text-align: center; font-size: 2em; margin-bottom: 10px;">Our Catering Packages</h2>
  <p style="text-align: center; max-width: 800px; margin: auto;">
    Explore our thoughtfully curated vegetarian plates — perfect for weddings, parties, and corporate events.
  </p>

  <div style="display: grid; gap: 2rem; max-width: 1000px; margin: 2rem auto;">

    <!-- ₹400 Package -->
    <div style="padding: 1rem; border: 1px solid #ccc; border-radius: 12px;">
      <h3>₹400 Per Plate</h3>
      <ul>
        <li><strong>Main Course:</strong> Shahi Paneer, Aloo Gobhi, Arhar Dal</li>
        <li><strong>Rice:</strong> Jeera Rice</li>
        <li><strong>Bread:</strong> Poori, Tandoori Roti</li>
        <li><strong>Raita:</strong> Boondi Raita</li>
        <li><strong>Salad & Sides:</strong> Onion Rings, Lemon Wedges, Green Chutney, Pickle</li>
        <li><strong>Dessert:</strong> Gulab Jamun (1 pc)</li>
        <li><strong>Drinks:</strong> Mineral Water (Glass Dispenser)</li>
        <li><strong>Service Style:</strong> Buffet with Uniformed Servers</li>
      </ul>
    </div>

    <!-- ₹500 Package -->
    <div style="padding: 1rem; border: 1px solid #ccc; border-radius: 12px;">
      <h3>₹500 Per Plate</h3>
      <ul>
        <li><strong>All ₹400 items, plus:</strong></li>
        <li><strong>Main Course:</strong> Kadai Paneer, Mix Veg</li>
        <li><strong>Rice:</strong> Peas Pulao</li>
        <li><strong>Bread:</strong> Add Butter Naan, Lachha Paratha</li>
        <li><strong>Raita:</strong> Pineapple Raita</li>
        <li><strong>Salad:</strong> Full Veg Platter with Cucumber, Carrot, Beetroot, Sprouts</li>
        <li><strong>Desserts:</strong> Rasgulla (1 pc), Sooji Halwa</li>
        <li><strong>Drinks:</strong> Add Buttermilk (Chhach)</li>
        <li><strong>Live Counter:</strong> Papdi Chaat Station</li>
      </ul>
    </div>

    <!-- ₹600 Package -->
    <div style="padding: 1rem; border: 1px solid #ccc; border-radius: 12px;">
      <h3>₹600 Per Plate</h3>
      <ul>
        <li><strong>All ₹500 items, plus:</strong></li>
        <li><strong>Main Course:</strong> Paneer Butter Masala, Veg Kofta, Chana Masala</li>
        <li><strong>Rice:</strong> Add Veg Biryani (with Raita)</li>
        <li><strong>Bread:</strong> Add Stuffed Kulcha, Missi Roti</li>
        <li><strong>Raita:</strong> Mix Veg Raita</li>
        <li><strong>Salad:</strong> Add Corn & Peanut Chaat</li>
        <li><strong>Desserts:</strong> Rabri, Jalebi (Live), Gajar Halwa</li>
        <li><strong>Drinks:</strong> Add Jaljeera Shots</li>
        <li><strong>Live Counter:</strong> Aloo Tikki Chaat, Golgappa (6 Varieties of Water)</li>
        <li><strong>Extras:</strong> Table Decor with Themed Cutlery & Napkins</li>
      </ul>
    </div>

    <!-- ₹700 Package -->
    <div style="padding: 1rem; border: 1px solid #ccc; border-radius: 12px;">
      <h3>₹700 Per Plate</h3>
      <ul>
        <li><strong>All ₹600 items, plus:</strong></li>
        <li><strong>Starter:</strong> Paneer Tikka, Veg Seekh Kebab, Dahi ke Sholay</li>
        <li><strong>Main Course:</strong> Malai Kofta, Matar Mushroom, Paneer Lababdar</li>
        <li><strong>Rice:</strong> Add Kashmiri Pulao with Dry Fruits</li>
        <li><strong>Bread:</strong> Add Garlic Naan, Rumali Roti</li>
        <li><strong>Raita:</strong> Pudina Raita</li>
        <li><strong>Salad:</strong> Add Fruit Chaat with Chat Masala</li>
        <li><strong>Desserts:</strong> Moong Dal Halwa, Ice Cream (2 Flavors), Rasmalai</li>
        <li><strong>Drinks:</strong> Kesar Milk, Masala Soda, Soft Drink (250ml)</li>
        <li><strong>Live Counter:</strong> Jalebi with Rabri, Dahi Bhalla, Chinese (Veg Manchurian)</li>
        <li><strong>Extras:</strong> Dedicated Live Chat Section, Elegant Crockery, Chef-on-spot</li>
      </ul>
    </div>

  </div>
</section>


  </section>
  <section id="book-online">
    <h2>Book Your Event Online</h2>
    <form class="booking-form" id="bookingForm" action="https://formspree.io/f/mkgjnben" method="POST">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="tel" name="phone" placeholder="Phone Number" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <select  name="event_type" required>
        <option value="">Select Event Type</option>
        <option>Wedding</option>
        <option>Engagement</option>
        <option>Reception</option>
        <option>Birthday</option>
        <option>Corporate</option>
        <option>Other</option>
      </select>
      <!-- Include Flatpickr CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Input field -->
<input type="text" id="event_date" name="event_date" placeholder="DD-MM-YYYY" required>

<!-- Init flatpickr -->
<script>
  flatpickr("#event_date", {
    dateFormat: "d-m-Y",
  });
</script>

      <input type="text" name="location" placeholder="Event Location" required>

      <h3>Select Menu Type</h3>
      <label><input type="radio" name="menu_mode" value="plate" required onchange="toggleMenuType('plate')"> Plate-wise Menu</label>
      <label><input type="radio" name="menu_mode" value="custom" onchange="toggleMenuType('custom')"> Custom Menu Selection</label>

      <div id="plateMenu" style="display:none;">
        <h3>Plate-wise Menu</h3>
        <input type="number" name="plate_count" placeholder="No. of Plates (e.g., 100)" min="50">
        <select name="plate_rate">
          <option value="">Select Per Plate Rate</option>
          <option value="400">₹400</option>
          <option value="500">₹500</option>
          <option value="600">₹600</option>
          <option value="700">₹700</option>
        </select>
      </div>

      <div id="customMenu" style="display:none;">
        <h3>Main Course</h3>
<div class="menu-grid">
  <label><input type="checkbox" name="menu[]" value="Shahi Paneer"> Shahi Paneer</label>
  <label><input type="checkbox" name="menu[]" value="Kadai Paneer"> Kadai Paneer</label>
  <label><input type="checkbox" name="menu[]" value="Palak Paneer"> Palak Paneer</label>
  <label><input type="checkbox" name="menu[]" value="Matar Paneer"> Matar Paneer</label>
  <label><input type="checkbox" name="menu[]" value="Malai Kofta"> Malai Kofta</label>
  <label><input type="checkbox" name="menu[]" value="Dum Aloo"> Dum Aloo</label>
  <label><input type="checkbox" name="menu[]" value="Aloo Gobhi"> Aloo Gobhi</label>
  <label><input type="checkbox" name="menu[]" value="Baingan Bharta"> Baingan Bharta</label>
  <label><input type="checkbox" name="menu[]" value="Stuffed Capsicum"> Stuffed Capsicum</label>
  <label><input type="checkbox" name="menu[]" value="Bhindi Masala"> Bhindi Masala</label>
  <label><input type="checkbox" name="menu[]" value="Mix Veg"> Mix Veg</label>
  <label><input type="checkbox" name="menu[]" value="Veg Kolhapuri"> Veg Kolhapuri</label>
  <label><input type="checkbox" name="menu[]" value="Rajma"> Rajma</label>
  <label><input type="checkbox" name="menu[]" value="Chole"> Chole</label>
  <label><input type="checkbox" name="menu[]" value="Dal Makhani"> Dal Makhani</label>
  <label><input type="checkbox" name="menu[]" value="Tadka Dal"> Tadka Dal</label>
  <label><input type="checkbox" name="menu[]" value="Moong Dal Fry"> Moong Dal Fry</label>
  <label><input type="checkbox" name="menu[]" value="Punjabi Kadhi"> Punjabi Kadhi</label>
  <label><input type="checkbox" name="menu[]" value="Kofta Curry"> Kofta Curry</label>
  <label><input type="checkbox" name="menu[]" value="Methi Malai Matar"> Methi Malai Matar</label>
  <label><input type="checkbox" name="menu[]" value="Lauki Kofta"> Lauki Kofta</label>
  <label><input type="checkbox" name="menu[]" value="Jackfruit Curry (Kathal)"> Jackfruit Curry (Kathal)</label>
  <label><input type="checkbox" name="menu[]" value="Paneer Lababdar"> Paneer Lababdar</label>
  <label><input type="checkbox" name="menu[]" value="Navratan Korma"> Navratan Korma</label>
</div>

<h3>Rice & Breads</h3>
<div class="menu-grid">
  <label><input type="checkbox" name="menu[]" value="Plain Rice"> Plain Rice</label>
  <label><input type="checkbox" name="menu[]" value="Jeera Rice"> Jeera Rice</label>
  <label><input type="checkbox" name="menu[]" value="Veg Pulao"> Veg Pulao</label>
  <label><input type="checkbox" name="menu[]" value="Peas Pulao"> Peas Pulao</label>
  <label><input type="checkbox" name="menu[]" value="Kashmiri Pulao"> Kashmiri Pulao</label>
  <label><input type="checkbox" name="menu[]" value="Veg Biryani"> Veg Biryani</label>
  <label><input type="checkbox" name="menu[]" value="Hyderabadi Veg Biryani"> Hyderabadi Veg Biryani</label>
  <label><input type="checkbox" name="menu[]" value="Fried Rice (Indian Style)"> Fried Rice (Indian Style)</label>
  <label><input type="checkbox" name="menu[]" value="Lemon Rice"> Lemon Rice</label>
  <label><input type="checkbox" name="menu[]" value="Tandoori Roti"> Tandoori Roti</label>
  <label><input type="checkbox" name="menu[]" value="Butter Naan"> Butter Naan</label>
  <label><input type="checkbox" name="menu[]" value="Lachha Paratha"> Lachha Paratha</label>
  <label><input type="checkbox" name="menu[]" value="Stuffed Kulcha"> Stuffed Kulcha</label>
  <label><input type="checkbox" name="menu[]" value="Missi Roti"> Missi Roti</label>
  <label><input type="checkbox" name="menu[]" value="Garlic Naan"> Garlic Naan</label>
  <label><input type="checkbox" name="menu[]" value="Rumali Roti"> Rumali Roti</label>
  <label><input type="checkbox" name="menu[]" value="Plain Paratha"> Plain Paratha</label>
  <label><input type="checkbox" name="menu[]" value="Poori"> Poori</label>
  <label><input type="checkbox" name="menu[]" value="Bedmi Puri"> Bedmi Puri</label>
  <label><input type="checkbox" name="menu[]" value="Makke ki Roti"> Makke ki Roti</label>
</div>

<h3>Accompaniments</h3>
<div class="menu-grid">
  <label><input type="checkbox" name="menu[]" value="Boondi Raita"> Boondi Raita</label>
  <label><input type="checkbox" name="menu[]" value="Pineapple Raita"> Pineapple Raita</label>
  <label><input type="checkbox" name="menu[]" value="Mix Veg Raita"> Mix Veg Raita</label>
  <label><input type="checkbox" name="menu[]" value="Plain Curd"> Plain Curd</label>
  <label><input type="checkbox" name="menu[]" value="Green Chutney"> Green Chutney</label>
  <label><input type="checkbox" name="menu[]" value="Tamarind Chutney"> Tamarind Chutney</label>
  <label><input type="checkbox" name="menu[]" value="Pickle"> Pickle</label>
  <label><input type="checkbox" name="menu[]" value="Salad Platter"> Salad Platter</label>
  <label><input type="checkbox" name="menu[]" value="Onion Rings"> Onion Rings</label>
  <label><input type="checkbox" name="menu[]" value="Lemon Wedges"> Lemon Wedges</label>
  <label><input type="checkbox" name="menu[]" value="Roasted Papad"> Roasted Papad</label>
  <label><input type="checkbox" name="menu[]" value="Fried Papad"> Fried Papad</label>
  <label><input type="checkbox" name="menu[]" value="Masala Papad"> Masala Papad</label>
  <label><input type="checkbox" name="menu[]" value="Chhach (Buttermilk)"> Chhach (Buttermilk)</label>
  <label><input type="checkbox" name="menu[]" value="Jeera Chhach"> Jeera Chhach</label>
</div>

<h3>Desserts</h3>
<div class="menu-grid">
  <label><input type="checkbox" name="menu[]" value="Gulab Jamun"> Gulab Jamun</label>
  <label><input type="checkbox" name="menu[]" value="Rasgulla"> Rasgulla</label>
  <label><input type="checkbox" name="menu[]" value="Jalebi"> Jalebi</label>
  <label><input type="checkbox" name="menu[]" value="Imarti"> Imarti</label>
  <label><input type="checkbox" name="menu[]" value="Moong Dal Halwa"> Moong Dal Halwa</label>
  <label><input type="checkbox" name="menu[]" value="Gajar Halwa"> Gajar Halwa</label>
  <label><input type="checkbox" name="menu[]" value="Sooji Halwa"> Sooji Halwa</label>
  <label><input type="checkbox" name="menu[]" value="Kheer"> Kheer</label>
  <label><input type="checkbox" name="menu[]" value="Phirni"> Phirni</label>
  <label><input type="checkbox" name="menu[]" value="Rabri"> Rabri</label>
  <label><input type="checkbox" name="menu[]" value="Ice Cream"> Ice Cream</label>
  <label><input type="checkbox" name="menu[]" value="Kulfi"> Kulfi</label>
  <label><input type="checkbox" name="menu[]" value="Shahi Tukda"> Shahi Tukda</label>
  <label><input type="checkbox" name="menu[]" value="Rasmalai"> Rasmalai</label>
  <label><input type="checkbox" name="menu[]" value="Malpua"> Malpua</label>
  <label><input type="checkbox" name="menu[]" value="Ladoo"> Ladoo</label>
  <label><input type="checkbox" name="menu[]" value="Coconut Barfi"> Coconut Barfi</label>
  <label><input type="checkbox" name="menu[]" value="Milk Cake"> Milk Cake</label>
  <label><input type="checkbox" name="menu[]" value="Chamcham"> Chamcham</label>
  <label><input type="checkbox" name="menu[]" value="Anjeer Halwa"> Anjeer Halwa</label>
</div>

<h3>Beverages</h3>
<div class="menu-grid">
  <label><input type="checkbox" name="menu[]" value="Cold Drink"> Cold Drink</label>
  <label><input type="checkbox" name="menu[]" value="Mineral Water"> Mineral Water</label>
  <label><input type="checkbox" name="menu[]" value="Jaljeera"> Jaljeera</label>
  <label><input type="checkbox" name="menu[]" value="Shikanji"> Shikanji</label>
  <label><input type="checkbox" name="menu[]" value="Masala Chaas"> Masala Chaas</label>
  <label><input type="checkbox" name="menu[]" value="Sweet Lassi"> Sweet Lassi</label>
  <label><input type="checkbox" name="menu[]" value="Salted Lassi"> Salted Lassi</label>
  <label><input type="checkbox" name="menu[]" value="Rose Milk"> Rose Milk</label>
  <label><input type="checkbox" name="menu[]" value="Badam Milk"> Badam Milk</label>
  <label><input type="checkbox" name="menu[]" value="Thandai"> Thandai</label>
  <label><input type="checkbox" name="menu[]" value="Kesar Doodh"> Kesar Doodh</label>
  <label><input type="checkbox" name="menu[]" value="Hot Tea"> Hot Tea</label>
  <label><input type="checkbox" name="menu[]" value="Masala Chai"> Masala Chai</label>
  <label><input type="checkbox" name="menu[]" value="Filter Coffee"> Filter Coffee</label>
  <label><input type="checkbox" name="menu[]" value="Cappuccino"> Cappuccino</label>
</div>
      </div>

      <textarea name="requirements" placeholder="Any specific menu items or instructions?" rows="5"></textarea>
      <button type="submit">Submit Booking Request</button>
      <div id="form-message" style="margin-top: 15px; color: lightgreen; font-weight: bold;"></div>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 B.B. Catering. All rights reserved.</p>
    <p>Contact: <a href="tel:+918299533677">+91 8299533677</a> | Email: <a href="mailto:bbcateringkanpur@gmail.com">bbcateringkanpur@gmail.com</a></p>
    <p>Follow us: <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">YouTube</a></p>
  </footer>

  <!-- Scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const hamburger = document.querySelector('.hamburger');
      const navLinks = document.querySelector('.nav-links');
      hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
      });

      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
        });
      });
    });

    function toggleMenuType(selected) {
      document.getElementById('plateMenu').style.display = (selected === 'plate') ? 'block' : 'none';
      document.getElementById('customMenu').style.display = (selected === 'custom') ? 'block' : 'none';
    }

    document.getElementById('bookingForm').addEventListener('submit', async function(e) {
      e.preventDefault();
      const form = e.target;
      const formData = new FormData(form);

      try {
        const response = await fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: {
            'Accept': 'application/json'
          }
        });

        if (response.ok) {
          document.getElementById('form-message').textContent = "Thanks! Your submission is successful.";
          form.reset();
        } else {
          document.getElementById('form-message').textContent = "Oops! Something went wrong. Please try again.";
        }
      } catch (error) {
        document.getElementById('form-message').textContent = "Error submitting form. Check your connection.";
      }
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const hamburger = document.querySelector('.hamburger');
      const navLinks = document.querySelector('.nav-links');
      hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
      });
    });
  </script>

  <!-- Floating WhatsApp Button -->
  <a href="https://wa.me/919876543210" target="_blank" class="whatsapp-float">
  <img src="whatsapp-icon.png" />
</a>

</body>
</html>