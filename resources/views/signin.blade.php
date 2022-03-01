<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <!-- css -->
   <link rel="stylesheet" href="css/signin.css">

   <!-- font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>

<body>
   <section>
      <div class="container">
         <!-- sign in -->
         <div class="user signinBx">
            <div class="imgBx">
               <img src="images/signin.jpg" alt="">
            </div>
            <div class="formBx">
               <form action="{{ route('signin.custom') }}" method="POST">

                  @csrf

                  <h2>Sign in</h2>

                  <input type="text" name="email" placeholder="test@gmail.com" id="email" class="form-control" required autofocus>
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif

                  <input type="password" name="password" placeholder="Password" id="password" class="form-control" required>
                  @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif


                  <input type="submit" value="Sign in">
                  <p class="signup">don't have an account? <a href="{{ url('/register') }}" onclick="toggleForm();">Sign up</a> </p>

               </form>
            </div>
         </div>
      </div>
   </section>
</body>

</html>