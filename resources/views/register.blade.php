<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
<div class="container mt-4">
    <div class="m-auto" style="width: 400px">
        <h1 class="text-light">Register Now</h1>
        @if($errors->any())
        @foreach($errors->all() as $error)
        <p style="color:red;">{{ $error }}</p>
        @endforeach
        @endif
        
        @if(Session::has('error'))
        <p style="color:red;">{{ Session::get('error') }}</p>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="Name" class="form-label text-light">Name</label>
              <input type="text" class="form-control" name="name">
            </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-light">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-light">Role</label>
             <select name="role" class="form-control">
              <option value="1">Super Admin</option>
              <option value="2">Admin</option>
              <option value="3">Sub Admin</option>
              <option value="4">User</option>
              <option value="5">Sub User</option>
             </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </form>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

