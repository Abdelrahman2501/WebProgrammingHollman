<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        #vehicles .card {
  height: 100%;
}

.v-image {
  width: 100%;
  height: auto;
  object-fit: cover; /* or use 'contain' based on your preference */
}

.v {
  display: flex;
  flex-direction: column;
  height: 100%;
  text-decoration: none;
  color: inherit;
}

.v-title {
  margin-bottom: 1rem;
}

.v-text {
  flex-grow: 1;
}

.list-group-item {
  border: none;
}

body {
  background-color: #000 !important;
  color: rgb(171, 141, 63) !important;
}

.card {
  background-color: rgb(124, 124, 124); /* White background color */
  color: rgb(171, 141, 63); /* Text color */
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden; /* Ensure the border-radius is applied to the image */
}

.card img {
  max-width: 100%;
  height: auto;
}

.card-body {
  background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black layer */
  padding: 20px; /* Adjust as needed */
}

.card-title,
.card-text {
  color: rgb(171, 141, 63); /* Text color for the title and text */
}

.list-group-item {
  background-color: rgba(
    0,
    0,
    0,
    0.5
  ); /* Semi-transparent black background for list items */
  color: rgb(171, 141, 63); /* Text color for list items */
}

    </style>
</head>

<body>
    @include('components/navbar')
  <div id="vehicles" class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img
            src="https://files.hollmann.international/vehicle/23G1287/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="R8 V10 Plus"
          />
          <div class="card-body">
            <h5 class="card-title">R8 V10 Plus</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span>Total price, VAT not applicable</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              €123,300.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 12.3 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 287 g/km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-bar-chart"></span>
              CO₂ Efficiency Rating: G
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img
            src="https://files.hollmann.international/vehicle/23G1038/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="RS e-tron GT"
          />
          <div class="card-body">
            <h5 class="card-title">RS e-tron GT</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €146,132.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €122,800.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Electric
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Electricity Consumption (comb.): 22.5 kWh/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 0 g/km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-bar-chart"></span>
              CO₂ Efficiency Rating: A+
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img
            src="https://files.hollmann.international/vehicle/23G0844/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="RSQ8"
          />
          <div class="card-body">
            <h5 class="card-title">RSQ8</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €172,550.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €145,000.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 13.4 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 305 g/km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-bar-chart"></span>
              CO₂ Efficiency Rating: G
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img
            src="https://files.hollmann.international/vehicle/23G0875/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="Q5 Sportback S line 40 TDI"
          />
          <div class="card-body">
            <h5 class="card-title">Q5 Sportback S line 40 TDI</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €77,350.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Gross: €65,000.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Diesel
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 6.8 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 177 g/km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-bar-chart"></span>
              CO₂ Efficiency Rating: C
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img
            src="https://files.hollmann.international/vehicle/23G0876/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="RS Q3"
          />
          <div class="card-body">
            <h5 class="card-title">RS Q3</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €85,680.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €72,000.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 9 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 205 g/km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-bar-chart"></span>
              CO₂ Efficiency Rating: E
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img
            src="https://files.hollmann.international/vehicle/23G0124/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="RS6 Avant"
          />
          <div class="card-body">
            <h5 class="card-title">RS6 Avant</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €161,483.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €135,700.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 12.9 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 294 g/km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-bar-chart"></span>
              CO₂ Efficiency Rating: G
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
    @include('components/footer')
</body>
<script src="js/bootstrap.min.js"></script>

</html>
