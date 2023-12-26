<style>

body {
  margin: 0;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.navbar {
  background-color: #040404;
  transition: background-color 0.3s;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}

.navbar-brand img {
  height: 2.5em;
  width: auto;
  transition: transform 0.3s;
}

.navbar-toggler {
  border: none;
  transition: background-color 0.3s;
}

.nav-link {
  color: rgb(171, 141, 63) !important; /* Gold color */
  transition: color 0.3s;
}

.navbar-nav .nav-link:hover {
  color: #fff !important;
}

.navbar-toggler-icon {
  background-color: rgb(171, 141, 63); /* Gold color */
  transition: background-color 0.3s;
}

.navbar-toggler:hover {
  background-color: rgb(171, 141, 63); /* Gold color */
}

/* Animation for navbar elements */
.nav-item {
  position: relative;
}

.nav-item::before {
  content: "";
  position: absolute;
  bottom: -2px;
  left: 50%;
  width: 0%;
  height: 2px;
  background-color: rgb(171, 141, 63); /* Gold color */
  transition: width 0.3s, left 0.3s;
}

.nav-item:hover::before {
  width: 100%;
  left: 0;
}

/* Add animation for navbar links */
.navbar-nav .nav-link {
  position: relative;
  overflow: hidden;
}

.navbar-nav .nav-link::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0%;
  height: 2px;
  background-color: rgb(171, 141, 63); /* Gold color */
  transform: translateX(-50%);
  transition: width 0.3s;
}

.navbar-nav .nav-link:hover::before {
  width: 100%;
}

/* Add animation for navbar brand image
  .navbar-brand:hover img {
    transform: rotate(360deg) scale(1.1);
  } */

/* Add smooth scrolling for anchor links */
.scroll-to-section {
  cursor: pointer;
  transition: color 0.3s;
}

.scroll-to-section:hover {
  color: rgb(171, 141, 63); /* Gold color */
}

</style>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #040404">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('homeImages/hollmann logo.png') }}" alt="Platinum Auto" style="height: 50px; width: 250px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Hollmann</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cars') }}">Vehicles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Purchase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Signup</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
