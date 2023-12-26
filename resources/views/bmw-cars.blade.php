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
            src="https://files.hollmann.international/vehicle/23G1306/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="XM"
          />
          <div class="card-body">
            <h5 class="card-title">XM</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €192,780.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €162,000.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Hybrid
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 1.6 l/100 km*<br /><span
                class="info-logo bi bi-speedometer"
              ></span>
              Electricity Consumption (comb.): 29.5 kWh/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 6 g/km*
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
            src="https://files.hollmann.international/vehicle/23G1346/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="X4 M Competition"
          />
          <div class="card-body">
            <h5 class="card-title">X4 M Competition</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €100,912.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €84,800.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 10.8 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 246 g/km*
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
            src="https://files.hollmann.international/vehicle/23G0051/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="X7 M60i xDrive"
          />
          <div class="card-body">
            <h5 class="card-title">X7 M60i xDrive</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €151,725.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €127,500.00
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
              CO₂ Emissions (comb.): 278 g/km*
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
            src="https://files.hollmann.international/vehicle/23G1010/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="Alpina XB7"
          />
          <div class="card-body">
            <h5 class="card-title">Alpina XB7</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €225,505.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Gross: €189,500.00
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
              CO₂ Emissions (comb.): 289 g/km*
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
            src="https://files.hollmann.international/vehicle/23G1018/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="X5 xDrive 30d"
          />
          <div class="card-body">
            <h5 class="card-title">X5 xDrive 30d</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €117,572.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €98,800.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Diesel
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 7.4 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 195 g/km*
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
            src="https://files.hollmann.international/vehicle/23G0901/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="740d xDrive"
          />
          <div class="card-body">
            <h5 class="card-title">740d xDrive</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €149,821.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €125,900.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Diesel
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 6.2 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 163 g/km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-bar-chart"></span>
              CO₂ Efficiency Rating: B
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
