<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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

.card {
  background-color: #1c1c1c;
  border: 1px solid #333;
  border-radius: 15px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
}

.card-body {
  padding: 30px;
}

.card-title {
  color: #dba808;
  font-size: 2rem;
  margin-bottom: 20px;
}

.form-label,
.form-control {
  color: #dba808;
}

.form-control {
  background-color: #333;
  border: 1px solid #555;
  border-radius: 8px;
  padding: 15px;
  margin-bottom: 20px;
}

/* Set white color for placeholder text */
.form-control::placeholder {
  color: #fff;
}

.btn-primary {
  background-color: #dba808;
  color: #000;
  border: 1px solid #dba808;
  border-radius: 8px;
  padding: 15px 30px;
  font-size: 1.4rem;
  transition: background-color 0.3s, color 0.3s;
}

.btn-primary:hover {
  background-color: #000;
  color: #dba808;
}

a {
  color: #dba808;
}

a:hover {
  color: #fff;
  text-decoration: underline;
}

.text-center a {
  text-decoration: none;
  font-weight: bold;
}

.text-center a:hover {
  text-decoration: underline;
}

        </style>
    </head>
    <body>
        @include('components.navbar')
        <div class="d-flex flex-column min-vh-100">
            <main class="my-auto">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">Login to Hollmann!</h3>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{ route('login') }}">
    @csrf
                                    <div class="mb-3">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="inputEmail"
                                            placeholder="Email"
                                            name="email"
                                            required
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputPassword" class="form-label">Password</label>
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="inputPassword"
                                            placeholder="Password"
                                            name="password"
                                            required
                                        />
                                    </div>
                                    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>
                                    <p class="text-center mt-3">
                                        <a href="{{ url('/register') }}">Don't have an account? Sign up!</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @include('components.footer')
        <script src="js/bootstrap.min.js"></script>
    </body>
    <script src="js/bootstrap.min.js"></script>
</html>
