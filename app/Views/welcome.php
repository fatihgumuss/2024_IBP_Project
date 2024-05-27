<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.min.css'); ?>">
    <style>
        body {
            background: url('<?= base_url('assets/images/background.jpg'); ?>') no-repeat center center fixed;
            background-size: cover;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            position: relative;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }
        .welcome-container {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
            text-align: center;
            width: 80%;
            max-width: 500px;
        }
        .welcome-container h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
        }
        .welcome-container p {
            margin-bottom: 30px;
            font-size: 1.2em;
        }
        .btn-primary {
            background-color: #2575fc;
            border-color: #2575fc;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #1b5db0;
            border-color: #1b5db0;
        }
        .login-button {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 3;
        }
    </style>
</head>
<body>
<div class="overlay"></div>
<div class="login-button">
    <a href="<?= site_url('/login') ?>" class="btn btn-primary btn-lg">Login</a>
</div>
<div class="welcome-container">
    <h1>Welcome to My Site!</h1>
    <p>This is a website for a library.</p>
</div>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>