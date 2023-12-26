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
            src="https://files.hollmann.international/vehicle/23G1361/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="S 580 4MATIC LONG BY LORINSER S 60"
          />
          <div class="card-body">
            <h5 class="card-title">S 580 4MATIC LONG BY LORINSER S 60</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span>Gross: €201,110.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €169,000.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 10.5 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 238 g/km*
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
            src="https://files.hollmann.international/vehicle/23G1392/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="G 63 4x4 BRABUS XLP"
          />
          <div class="card-body">
            <h5 class="card-title">G 63 4x4 BRABUS XLP</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €648,312.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €544,800.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 20.1 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 456 g/km*
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
            src="https://files.hollmann.international/vehicle/23G1011/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="SL 63 AMG 4MATIC+ by MANSORY"
          />
          <div class="card-body">
            <h5 class="card-title">SL 63 AMG 4MATIC+ by MANSORY</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €356,405.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €299,500.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 20.1 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 293 g/km*
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
            src="https://files.hollmann.international/vehicle/23G1242/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="G 63 AMG BY MANSORY P720"
          />
          <div class="card-body">
            <h5 class="card-title">G 63 AMG BY MANSORY P720</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €577,150.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Gross: €485,000.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 16.4 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 373 g/km*
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
            src="https://files.hollmann.international/vehicle/23G1273/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="AMG GT Black Series"
          />
          <div class="card-body">
            <h5 class="card-title">AMG GT Black Series</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €451,605.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €379,500.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 12.8 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 292 g/km*
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
            src="https://files.hollmann.international/vehicle/23G1001/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="G 63 AMG 6x6 BRABUS 700"
          />
          <div class="card-body">
            <h5 class="card-title">G 63 AMG 6x6 BRABUS 700</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €1,249,500.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €1,050,000.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 13.8 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 334 g/km*
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
