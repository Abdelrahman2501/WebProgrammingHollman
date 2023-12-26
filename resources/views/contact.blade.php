<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        body {
  background-color: #000 !important;
  color: rgb(171, 141, 63) !important;
}
#map-section {
  padding: 50px 0; /* Add padding for spacing */
}

/* Responsive styling for the map */
iframe {
  width: 100%;
  height: 400px;
  border: none; /* Remove the border around the iframe */
  border-radius: 10px; /* Add a border radius for a modern look */
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
}

#contact-section {
  position: relative;
  text-align: center;
}

#contact-info-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  color: rgb(171, 141, 63); /* Set text color to white or a contrasting color */
  background: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
  padding: 20px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

#contact-info-overlay p {
  margin: 10px 0;
}

#contact-section img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#map-section iframe {
  width: 100%;
  height: 450px;
  border: 0;
}

    </style>
</head>

<body>
    @include('components/navbar')
  <div class="container">
    <section id="contact-section" class="text-dark py-5">
      <div class="contact-box">
        <img src="{{ asset('homeImages/baner.png') }}" alt="Hollmann" />
        <div id="contact-info-overlay">
          <h2>Contact Us</h2>
          <p>
            <i class="fas fa-map-marker-alt"></i> Charlotte-Auerbach-Straße 4,
            28816 Stuhr, Germany
          </p>
          <p><i class="fas fa-envelope"></i> Hollmann&#64;car.com</p>
          <p><i class="fas fa-phone"></i> +201277416612, +201288577048</p>
        </div>
      </div>
    </section>

    <div id="map-section" class="container my-5">
      <h3>Our Location:</h3>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9605.039607542805!2d8.775393!3d52.997711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b0d8b6ff39a02b%3A0x7449c6862c2b56c5!2sHollmann%20International!5e0!3m2!1sen!2seg!4v1699995153306!5m2!1sen!2seg"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </div>
    @include('components/footer')
</body>
<script src="js/bootstrap.min.js"></script>

</html>
