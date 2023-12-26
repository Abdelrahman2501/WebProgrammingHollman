<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <style>
    body {
  background-color: #000;
  color: #dba808;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

#welcome-section {
  background-color: rgba(28, 28, 28, 0.8);
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
  margin-bottom: 50px;
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.display-4 {
  font-size: 3rem;
  color:  rgb(171, 141, 63);
  animation: slideInDown 1s ease-in-out;
}

@keyframes slideInDown {
  from {
    transform: translateY(-50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.lead {
  font-size: 1.5rem;
  color:  rgb(171, 141, 63);
  animation: fadeInUp 1s ease-in-out;
}

@keyframes fadeInUp {
  from {
    transform: translateY(50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.carousel-inner img {
  border-radius: 5px; /* unchanged */
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 45px; /* Larger width for better visibility */
  height: 45px; /* Larger height for better visibility */
  background-color: rgba(0, 0, 0, 0.6); /* Darker background for contrast */
  border: none;
  border-radius: 0; /* Square shape */
  align-items: center;
  justify-content: center;
  transition: transform 0.3s ease, background-color 0.3s ease;
}

.carousel-control-prev {
  left: 10px; /* Adjust for spacing from the left edge */
}

.carousel-control-next {
  right: 10px; /* Adjust for spacing from the right edge */
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
  background-color: rgba(0, 0, 0, 0.8); /* Even darker on hover */
  transform: translateY(-50%) scale(1.15); /* Slightly larger on hover */
}

/* Custom Modern Arrow Icons */
.carousel-control-prev-icon,
.carousel-control-next-icon {
  /* background-image: url("path-to-modern-arrow-icon"); Replace with modern arrow icon path */
  background-size: 20px 20px; /* Adjust the size of the icon */
  filter: invert(1); /* Ensures high visibility */
}

    </style>
</head>
</head>

<body>
   @include('components.navbar')
    <main class="container my-5">
        <section id="welcome-section">
            <div class="text-center py-5">
                <h1 class="display-4 mb-3">Welcome to <strong>Hollmann</strong></h1>
                <p class="lead">
                    LOGIN NOW TO PURCHASE A CAR!<br>
                    Your premier destination for exquisite cars. Explore our diverse range
                    of vehicles from the world's leading manufacturers.
                </p>
            </div>
        </section>
        <div class="image-container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach($images as $index => $image)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach($images as $index => $image)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ $image }}" class="d-block w-100" alt="Slide {{ $index + 1 }}" />
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>
    @include('components.footer')
</body>
<script src="js/bootstrap.min.js"></script>
</html>
