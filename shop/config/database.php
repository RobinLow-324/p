<head>
    <title>PDO - Create a Record - PHP CRUD Tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto text-center">
        <form id="signInForm" method="POST">
            <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyxgAv7kkuH0aAy2xNOtC4zMDX-jVnJmgsuw&s" alt="Logo" width="72" height="72">

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email address" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
                <label for="emailInput">Email address</label>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['email'])) {
                    $mail = $_POST['email'];
                    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        echo '<small class="text-danger">Invalid email address.</small>';
                    }
                }
                ?>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="age" placeholder="Age" value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>" required>
                <label for="ageInput">Age</label>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['age'])) {
                    $age = $_POST['age'];
                    if (!is_numeric($age) || $age < 18 || $age > 100) {
                        echo '<small class="text-danger">Age must be a number between 18 and 100.</small>';
                    }
                }
                ?>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>
    </main>
</body>

<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        background-color: #f8f9fa;
    }

    .form-signin {
        max-width: 350px;
        padding: 1.5rem;
        border-radius: 8px;
        background-color: white;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-signin img {
        border-radius: 50%;
        margin-bottom: 1rem;
    }

    .form-signin .btn-primary {
        background-color: #0000FF;
        border: none;
    }

    .form-signin .btn-primary:hover {
        background-color: #0040FF;
    }

    .form-control {
        border-radius: 8px;
        font-size: 1rem;
    }

    .text-danger {
        font-size: 0.875rem;
        margin-top: 5px;
        display: block;
    }
</style>