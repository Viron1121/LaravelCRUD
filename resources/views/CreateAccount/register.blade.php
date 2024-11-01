<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Register</h1>
        
        <form method="post" action="{{ route('sendOTP') }}">
            @csrf
            @method('post')
            @if($errors->first('error') == 'Email already exists. Please use a different email address.')
            <script>
                   let audio = new Audio("/emailuse.mp3");
                    audio.play()
            </script>
            
            <div class="alert alert-danger">
                {{ $errors->first('error') }}
            </div>
            
            @elseif($errors->first('error') == 'Password not matched')
                <script>
                    let audio = new Audio("/notmatched.mp3");
                     audio.play()
             </script>
             
             <div class="alert alert-danger">
                 {{ $errors->first('error') }}
             </div>
            
             @endif
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" required name="lastname" value="" placeholder="Lastname">
            </div>

            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" class="form-control" required name="firstname" placeholder="Firstname">
            </div>

            <div class="form-group">
                <label for="middlename">Middlename</label>
                <input type="text" class="form-control" name="middlename" placeholder="Middlename">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" required name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" required name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" required name="confirmpassword" placeholder="Confirm password">
            </div>

            <input type="hidden" value="staff" name="usertype">

            <button type="submit" class="btn btn-primary">Register</button>
            <a href="login" class="btn btn-dark">Back to login page</a>

           
        </form>

        <script>
            let audio = new Audio("reg.mp3");
            audio.play();
        </script>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>