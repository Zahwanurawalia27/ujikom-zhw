

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boxicons -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}"/>
    <title>Document</title>
</head>
<body>
    <div class="bodyLog">

        <div class="wrapper">
            <form action="">
                <h1>Register</h1>
                <div class="inputLog">
                    <input type="text" name="" id="" placeholder="Username" required>
                    <i class="bx bxs-user"></i>
                </div>
                <div class="inputLog">
                    <input type="password" placeholder="Password" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="inputLog">
                    <input type="text" name="" id="" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="inputLog">
                    <input type="text" name="" id="" placeholder="Nama Lengkap" required>
                    <i class="bx bxs-user"></i>
                </div>
                <div class="inputLog">
                    <input type="text" name="" id="" placeholder="Alamat" required>
                    <i class='bx bxs-home'></i>
                </div>
                
                <button type="submit" class="btnLog">Register</button>

                <div class="register-link">
                    <p>Have any account? <a href="/login">Login</a></p>
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>


