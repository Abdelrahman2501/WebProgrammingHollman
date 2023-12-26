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
            src="https://files.hollmann.international/vehicle/23G1159/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="Porsche 911 Dakar"
          />
          <div class="card-body">
            <h5 class="card-title">Porsche 911 Dakar</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €416,262.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €349,800.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 11.3 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 256 g/km*
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
            src="https://files.hollmann.international/vehicle/23G1269/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="Porsche 911 GT3 RS"
          />
          <div class="card-body">
            <h5 class="card-title">Porsche 911 GT3 RS</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €439,705.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €369,500.00
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
            src="https://files.hollmann.international/vehicle/23G1183/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="911 Targa 4S Heritage Design Edition"
          />
          <div class="card-body">
            <h5 class="card-title">911 Targa 4S Heritage Design Edition</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €285,005.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €239,500.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 9.9 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 227 g/km*
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
            src="https://files.hollmann.international/vehicle/22G1138/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="935"
          />
          <div class="card-body">
            <h5 class="card-title">935</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €2,380,000.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Gross: €2,380,000.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 11.8 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.):
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
            src="https://files.hollmann.international/vehicle/23G0513/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="911 Turbo S Coupe by Techart"
          />
          <div class="card-body">
            <h5 class="card-title">911 Turbo S Coupe by Techart</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €308,210.00</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €259,000.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 11.1 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 254 g/km*
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
            src="https://files.hollmann.international/vehicle/23G1256/images/compact/1.jpeg"
            class="card-img-top v-image"
            alt="911 Turbo S Coupe Customized<"
          />
          <div class="card-body">
            <h5 class="card-title">911 Turbo S Coupe Customized</h5>
            <p class="card-text">
              <span class="info-logo bi bi-cash"></span>
              <span> Gross: €225,862.000</span><br />
              <span class="info-logo bi bi-currency-exchange"></span>
              Net (Export): €189,800.00
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span class="info-logo bi bi-gear"></span>
              Drive: Petrol
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-speedometer"></span>
              Fuel Consumption (comb.): 12 l/100 km*
            </li>
            <li class="list-group-item">
              <span class="info-logo bi bi-cloud"></span>
              CO₂ Emissions (comb.): 254 g/km*
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
