<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="QuizHunt is a quiz website that offers quizzes on programming languages such as C, C++, Java, Linux, and operating systems." />
    <meta name="keywords" content="quiz, website, programming languages, C, C++, Java, Linux, operating systems" />
    <meta name="author" content="QuizHunt" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Welcome to QuizHunt - Your Quiz Hub</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/style.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/favicon.png" />
    

    <!-- Internal CSS -->
    <style>
        body {
            font-family: 'Rubik', sans-serif;
        }

        .navbar {
            background-color: #343a40;
        }

        #logg {
            color: rgb(58, 128, 87);
            font-weight: bolder;
            font-size: 30px;
            font-family: 'Courier New', Courier, monospace;
        }

        .header {
            height: 500px;
            background: #343a40;
            color: white;
        }

        .header .headtext {
           
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 4rem;
        }

        .header .text-white {
            max-width: 50%;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .btn {
            width: 200px;
            padding: 12px;
            background-color: #465c70;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin: 0 10px;
            text-align: center;
            text-decoration: none;
        }

        .btn:hover {
            background-color: rgb(43, 48, 53);
        }

        .btn:active {
            background-color: #85271e;
        }

        footer {
            background-color: #343a40;
            color: #6c757d;
            text-align: center;
            padding: 20px 0;
        }

        footer h1 {
            font-family: 'Courier New', Courier, monospace;
            font-weight: bolder;
            font-size: 50px;
        }

        @media screen and (max-width: 680px) {
            .btn-container {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                margin-bottom: 10px;
            }

            .header img {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <p id="logg"><span>Q</span>uizHunt</p>
        </nav>
        <div class="header d-flex align-items-center justify-content-center">
            <div class="headtext">
                <div class="text-white">
                    <h1 class="mb-3" style="text-shadow: 4px 4px 8px #000000">Be ready. Be smart. Be noticed!</h1>
                    <h3 class="mb-2" style="color: rgb(58, 128, 87)">Where a smart answer won't get you fired!</h3>
                    <p class="mb-3">QuizHunt brings you quizzes to simplify tech learning.<br />Just play a quiz.</p>
                </div>
                <div class="image">
                    <img src="assets/image1.png" alt="Quiz Hunt Vector" />
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="btn-container">
            <a href="pages/login.php" class="btn">Lets Play</a>
        </div>
    </main>

    <footer>
        <div>
            <h1><span>Q</span>uizHunt</h1>
            <p>© QuizHunt 2024 | All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <script src="scripts/jquery-3.2.1.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="scripts/popper.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="scripts/bootstrap.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
