<?
session_start();
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <title>Strong Password Generator</title>

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- FontAwesome library import link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- My CSS -->
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <header>
        <div class="container mt-5 text-center">
            <h1>Strong Password Generator</h1>
            <h5>A stronger and more reliable password generator than what we've previously created 
                <i class="fa-regular fa-face-smile-wink"></i>
            </h5>
        </div>
    </header>
    <main>
        <div class="container mt-5" id="main-container">
            <div class="d-flex flex-column align-items-center">
                <div class="d-flex gap-5 align-items-center mt-3">
                    <p>
                        Lunghezza password: 
                    </p>
                    <form method="GET" class="d-flex" action="landingPage.php">
                        <div class="col">
                            <div class="mb-3">
                                <input type="number" 
                                name="password_length" 
                                id="password_length" 
                                class="form-control" 
                                value="" 
                                min="1">
                            </div>
                        </div>
                        <div class="button-group d-flex gap-2">
                            <button type="submit" class="btn btn-primary" name="submit">
                                Generate
                            </button>
                            <button type="reset" class="btn btn-danger" id="reset_button">
                                <a href="http://localhost:8888/php-strong-password-generator/">Reset</a>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="d-flex gap-5 align-items-center mt-3">
                    <p>
                        Consenti ripetizioni di uno o più caratteri: 
                    </p>
                    <form class="d-flex">
                        <div class="col">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" 
                                    type="radio" 
                                    name="permission" 
                                    id="permission_yes" 
                                    value="yes">
                                    <label class="form-check-label" for="permission_yes"> Yes </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" 
                                    type="radio" 
                                    name="permission" 
                                    id="permission_no" 
                                    value="no">
                                    <label class="form-check-label" for="permission_no"> No </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <?php
                    echo '<p>Your new password is: ' . $newPass . '</p>';
                ?>
            </div> -->
        </div>
    </main>
</body>
</html>

