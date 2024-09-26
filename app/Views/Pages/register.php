<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .signup-title {
            color: #71A430;
        }
        .signup-button {
            background-color: #71A430;
        }
        .signup-input {
            padding: 0.75rem;
            border-radius: 0.5rem;
        }
        .error-message {
            color: red;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        /* Tambahkan style untuk shadow merah pada error */
        .signup-input.error {
            border: 2px solid red !important;
            box-shadow: 0 0 0 0.2rem rgba(255, 0, 0, 0.25) !important;
        }
    </style>
</head>
<body>
    <nav class="container">
        <div class="col-2">
            <img src="<?=base_url('assets/images/logo.jpg') ?>" class="img-fluid" alt="Logo">
        </div>
    </nav>
    <div class="container d-flex flex-column align-items-center signup-container">
        <div class="row w-100">
            <div class="col-12 col-md-6 d-flex flex-column align-items-center text-center mb-4 mb-md-0">
                <h1 class="fw-bold signup-title">Sign Up</h1>
                <div class="mt-5 w-75">
                    <form id="signupForm" method="POST" action="/auth/registerUser">
                        <input style="outline: none;" class="signup-input w-100 mb-3" type="text" placeholder="Name" name="nama" required>
                        <input style="outline: none;" class="signup-input w-100 mb-3" type="email" placeholder="Your Email" name="email" required>
                        <div class="input-group mb-3">
                            <input style="outline: none;" id="password" name="password" class="col-10 signup-input" type="password" placeholder="Password" required>
                            <button type="button" class="btn btn-outline-secondary col-2" id="togglePassword">Show</button>
                        </div>
                        <div class="input-group mb-3">
                            <input style="outline: none;" id="confirmPassword" name="confirmPassword" class="col-10 signup-input" type="password" placeholder="Confirm Password" required>
                            <button type="button" class="btn btn-outline-secondary col-2" id="toggleConfirmPassword">Show</button>
                        </div>
                        <div id="passwordMismatch" class="error-message"></div>
                        <button type="submit" class="signup-button text-white fw-bold w-100 p-2 my-3">Create Account</button>
                    </form>
                    <p class="fw-bold">Sudah Punya Akun? <a href="/" class="fw-bold text-primary">Sign In</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img src="<?=base_url('assets/images/register.svg') ?>" class="img-fluid signup-img" alt="Register Illustration">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('#signupForm');
            const passwordInput = document.querySelector('#password');
            const confirmPasswordInput = document.querySelector('#confirmPassword');
            const passwordMismatchError = document.querySelector('#passwordMismatch');
            const togglePassword = document.querySelector('#togglePassword');
            const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');

            togglePassword.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    togglePassword.textContent = 'Hide';
                } else {
                    passwordInput.type = 'password';
                    togglePassword.textContent = 'Show';
                }
            });

            toggleConfirmPassword.addEventListener('click', function() {
                if (confirmPasswordInput.type === 'password') {
                    confirmPasswordInput.type = 'text';
                    toggleConfirmPassword.textContent = 'Hide';
                } else {
                    confirmPasswordInput.type = 'password';
                    toggleConfirmPassword.textContent = 'Show';
                }
            });

            confirmPasswordInput.addEventListener('input', function() {
                if (confirmPasswordInput.value !== passwordInput.value) {
                    confirmPasswordInput.classList.add('error');
                    passwordMismatchError.textContent = 'Password and Confirm Password do not match';
                } else {
                    confirmPasswordInput.classList.remove('error');
                    passwordMismatchError.textContent = '';
                }
            });

            form.addEventListener('submit', function(event) {
                if (confirmPasswordInput.value !== passwordInput.value) {
                    event.preventDefault();
                    confirmPasswordInput.classList.add('error');
                    passwordMismatchError.textContent = 'Password and Confirm Password do not match';
                }
            });
        });
    </script>
</body>
</html>
