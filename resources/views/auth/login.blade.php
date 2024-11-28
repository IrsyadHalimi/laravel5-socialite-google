<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Socialite</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4f8T3EpJ1vTwpDff2WILc/JbELtN/u9huAzIw4f2jpI93x9TfGkmV1ZZM3Ix1pqxL97Xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <div class="container mt-5">
    @if (session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <h1 class="text-center">Login With Socialite</h1>
    <div class="d-flex justify-content-center mt-4">
      <a href="{{ route('auth.google') }}" class="btn btn-primary me-3">
        Login with Google
      </a>
    </div>
    <div class="text-center mt-3">
      <p>&copy; {{ date('Y') }} Laravel Socialite App</p>
    </div>
  </div>
</body>

</html>