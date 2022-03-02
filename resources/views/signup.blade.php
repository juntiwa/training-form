<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign up - Course</title>

   <!-- css -->
   <link rel="stylesheet" href="{{asset('css/signup.css')}}">
   <link rel="stylesheet" href="{{asset('css/app.css')}}">


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
            <div class="formBx">
               <form action="{{ route('user.regis') }}" method="POST">
                  @csrf

                  <h2>Sign up</h2>

                  <input type="text" name="username" placeholder="Username" id="username" class="form-control">
                  @error('username')
                  <label class="text-red-500">{{ $message }}</label>
                  @enderror

                  <input type="text" name="email" placeholder="Email" id="email_address" class="form-control" value="{{ old('email')}}">
                  @error('email')
                  <label class="text-red-500">{{ $message }}</label>
                  @enderror

                  <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                  @error('password')
                  <label class=" text-red-500">{{ $message }}</label>
                  @enderror

                  <input type="submit" value="Sign up">
                  <p class="signup">Already have an account? <a href="{{ url('/login') }}" onclick="toggleForm();">Sign in</a> </p>

               </form>
            </div>
            <div class="imgBx">
               <img src="images/signup.jpg" alt="">
            </div>
         </div>
      </div>
   </section>

</body>

</html>