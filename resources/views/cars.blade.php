<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
.simple-list-example-scrollspy {
  background-color: #f8f9fa;
  padding: 15px;
  border-radius: 5px;
}

.simple-list-example-scrollspy a {
  display: block;
  padding: 10px 15px;
  color: #333;
  text-decoration: none;
  transition: background-color 0.3s, color 0.3s;
  border-radius: 5px;
  margin-bottom: 5px;
}

.simple-list-example-scrollspy a:hover {
  background-color: #e9ecef;
  color: #000;
}

.scrollspy-example h4 {
  margin-top: 40px;
  font-weight: bold;
}

.scrollspy-example p {
  margin-bottom: 30px;
  color: #555;
}
body {
  background-color: #000 !important;
  color: rgb(171, 141, 63) !important;
}
#scrollable-manufacturers {
  background-color: #333;
  padding: 10px;
  border-radius: 5px;
  overflow-x: auto;
  white-space: nowrap;
}

#scrollable-manufacturers a {
  color: rgb(171, 141, 63); /* Text color for links */
  text-decoration: none;
  transition: background-color 0.3s, color 0.3s;
  margin-right: 10px;
}

#scrollable-manufacturers a:hover {
  background-color: #555;
}

.card {
  background-color: #333; /* Dark background color for cards */
  color: rgb(171, 141, 63); /* Text color for cards */
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card p,
.card a {
  color: rgb(171, 141, 63); /* Set text color inside the card */
}

.scrollspy-example {
  color: rgb(
    171,
    141,
    63
  ); /* Set text color for the content inside the scrollspy */
}
.custom-btn {
  background-color: #000; /* Set button background color to black */
  color: rgb(171, 141, 63); /* Set button text color to gold */
}

.custom-btn:hover {
  background-color: #140303; /* Change button background color on hover */
  color: #fff; /* Change button text color on hover */
}

    </style>
</head>
</head>

<body>
   @include('components.navbar')
   <body>
  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <div
          class="d-flex flex-nowrap overflow-auto mb-4"
          id="scrollable-manufacturers"
        >
          <a class="rounded px-3 py-2" href="#simple-list-item-1">Porsche</a>
          <a class="rounded px-3 py-2" href="#simple-list-item-2">Audi</a>
          <a class="rounded px-3 py-2" href="#simple-list-item-3">BMW</a>
          <a class="rounded px-3 py-2" href="#simple-list-item-4"
            >Mercedes Benz</a
          >
        </div>
      </div>
      <div class="col-12">
        <div
          data-bs-spy="scroll"
          data-bs-target="#scrollable-manufacturers"
          data-bs-offset="0"
          data-bs-smooth-scroll="true"
          class="scrollspy-example"
          tabindex="0"
        >
          <h4 id="simple-list-item-1">Porsche</h4>
          <div class="card w-90">
            <br />
            <img
              class="card-img-top"
              src="{{ asset('CarsLogo/Porsche_logo.svg.png') }}"
              style="width: 200px; margin: 0 auto"
              alt="Logo of Porsche"
            />
            <div class="card-body">
              <p class="card-text">
                Porsche AG is a German automobile manufacturer specializing in
                high-performance sports cars, SUVs, and sedans. The company is
                well-known for the iconic 911, which has evolved over decades
                but retains the classic rear-engine sports car formula.
                Porsche's lineup has expanded to include the Panamera, a luxury
                sedan, and the Cayenne and Macan SUVs, which have been highly
                successful in the market. Porsche is also a leader in plug-in
                hybrid and electric vehicles, with the Porsche Taycan
                representing its cutting-edge all-electric technology in the
                performance segment.
              </p>
              <a href="{{ url('/porsche-cars') }}" class="btn btn custom-btn"
                >View Cars</a
              >
            </div>
          </div>
          <h4 id="simple-list-item-2">Audi</h4>
          <div class="card w-90">
            <br />
            <img
              class="card-img-top"
              src="{{ asset('CarsLogo/audi.png') }}"
              style="width: 140px; margin: 0 auto"
              alt="Logo of audi"
            />
            <div class="card-body">
              <p class="card-text">
                Audi stands as a prominent figure in the luxury automotive
                sector, famed for its blend of premium comfort, advanced
                technology, and engaging driving dynamics. The company has a
                heritage of innovation, including the introduction of the famed
                quattro all-wheel-drive system, which provided a performance
                edge in various forms of auto racing and improved vehicle
                handling in consumer models. Audi's vehicle lineup showcases a
                vast range, from the compact and urban-friendly A1 to the
                full-size luxury A8, along with performance-focused RS models
                and the progressive e-tron electric vehicle series. The brand's
                commitment to "Vorsprung durch Technik" also pushes it to
                constantly explore new frontiers in automotive technology, such
                as autonomous driving and connectivity features.
              </p>
              <a href="{{ url('/audi-cars') }}" class="btn btn custom-btn"
                >View Cars</a
              >
            </div>
          </div>
          <h4 id="simple-list-item-3">BMW</h4>
          <div class="card w-90">
            <br />
            <img
              class="card-img-top"
              src="{{ asset('CarsLogo/BMW.svg.png') }}"
              style="width: 100px; margin: 0 auto"
              alt="Logo of bmw"
            />
            <div class="card-body">
              <p class="card-text">
                BMW, an acronym for Bayerische Motoren Werke AG, is a German
                multinational company which produces luxury vehicles and
                motorcycles. The brand promotes the driving experience with its
                tagline “The Ultimate Driving Machine,” focusing on dynamic
                performance across its series of sedans, coupes, and SUVs, such
                as the 3 Series and X5. BMW also offers electric and hybrid
                vehicles under the BMW i and iPerformance labels. Beyond
                personal vehicles, BMW has a significant presence in motorsport,
                with a history in Formula 1, touring cars, and endurance racing.
              </p>
              <a href="{{ url('/bmw-cars') }}" class="btn btn custom-btn">View Cars</a>
            </div>
          </div>
          <h4 id="simple-list-item-4">Mercedes Benz</h4>
          <div class="card w-90">
            <br />
            <img
              class="card-img-top"
             src="{{ asset('carsLogo/Mercedes-Benz-Logo.png') }}"
              style="width: 240px; margin: 0 auto"
              alt="Logo of mercedes"
            />
            <div class="card-body">
              <p class="card-text">
                Mercedes-Benz, a division of the German company Daimler AG, is
                synonymous with luxury vehicles, buses, coaches, and trucks. The
                brand is known for pioneering numerous safety features such as
                anti-lock brakes, traction control, and airbags that have become
                common in modern vehicles. Mercedes-Benz's product range
                includes the compact A-Class, the mid-sized E-Class, and the
                flagship S-Class, along with a family of SUVs and
                high-performance AMG models. The company has also been investing
                heavily in electric mobility, with its EQ brand dedicated to
                electric vehicles.
              </p>
              <a href="{{ url('/mercedes-cars') }}"" class="btn btn custom-btn"
                >View Cars</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

    @include('components.footer')
</body>
<script src="js/bootstrap.min.js"></script>
</html>
