<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #000 !important;
            color: rgb(171, 141, 63) !important;
        }

    </style>
</head>

<body>
    @include('components/navbar')

    <main class="container mt-5">
        <h1 class="text-center mb-4"></h1>

        {{-- Display validation errors --}}
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <form method="post" action="{{ route('purchase.process') }}">
            @csrf
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" required />
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" required />
            </div>
            <div class="mb-3">
                <label for="nationalId" class="form-label">National ID</label>
                <input type="text" class="form-control" id="nationalId" name="national_id" required />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required />
            </div>
            <div class="mb-3">
                <label for="contactNumber" class="form-label">Contact Number</label>
                <input type="tel" class="form-control" id="contactNumber" name="contact_number" required />
            </div>
            <div class="row">
                <div class="col-sm">
                    <label for="manufacturer" class="form-label">Manufacturer</label>
                    <select class="form-select" id="manufacturer" name="manufacturer" required>
                        <option selected>Choose...</option>
                        <option value="Porsche">Porsche</option>
                        <option value="BMW">BMW</option>
                        <option value="Audi">Audi</option>
                        <option value="Mercedes">Mercedes</option>
                    </select>
                </div>
                <div class="col-sm">
                    <label for="model" class="form-label">Model</label>
                    <select class="form-select" id="model" name="model" required>
                        <option selected>Choose...</option>
                        <option value="911 Turbo S Coupe Customized">911 Turbo S Coupe Customized</option>
                        <option value="911 Turbo S Coupe by Techart">911 Turbo S Coupe by Techart</option>
                        <option value="935">935</option>
                        <option value="911 Targa 4S Heritage Design Edition">911 Targa 4S Heritage Design Edition</option>
                        <option value="Porsche 911 GT3 RS">Porsche 911 GT3 RS</option>
                        <option value="Porsche 911 Dakar">Porsche 911 Dakar</option>
                    </select>
                </div>
                <div class="col-sm">
                    <label for="year" class="form-label">Year</label>
                    <select class="form-select" id="year" name="year" required>
                        <option selected>Choose...</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
            </div>
            <br />
            <div class="text-center">
                <button type="submit" class="btn btn" style="padding: 10px 30px; font-size: 18px; color: rgb(171, 141, 63)">
                    Purchase
                </button>
            </div>
            <br />
        </form>
    </main>

    @include('components/footer')
</body>
<script src="js/bootstrap.min.js"></script>

</html>
