<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello Bulma!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Hello World
      </h1>
      <p class="subtitle">
        <strong>All USERS</strong>!
        @foreach($users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
      </p>
      <h2>Add User</h2>
      <form action="/users" method="post" class="col-md-6">
      @csrf
        <p>
          <input class="input" type="text" name="name" placeholder="name" required>
        </p>
        <p>
          <input class="input" type="email" name="email" placeholder="email" required>
        </p>
        <p>
          <input class="input" type="password" name="password" placeholder="password" required>
        </p>
        <button class="btn btn-info" type="submit">submit</button>
      </form>

    </div>
  </section>
</body>

</html>