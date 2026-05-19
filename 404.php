<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>This Page Does Not Exist - Fath Creative</title>
    <meta name="description" content="Oops, looks like the page is lost.">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <style>
        body {
            color: #1d1e20;
            background: #f4f5ff;
            margin: 0;
            font-size: 14px;
            font-family: "DM Sans", "Roboto", sans-serif !important;
            font-weight: 400;
            -ms-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .page-not-found {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 0 16px;
        }

        .page-not-found img {
            vertical-align: middle;
            border-style: none;
        }

        .page-not-found .image {
            max-width: 100%;
            margin-bottom: 32px;
            height: auto;
            object-fit: contain;
        }

        .page-not-found .title {
            text-align: center;
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 24px;
            line-height: 32px;
            font-weight: 700;
        }

        .page-not-found .text {
            text-align: center;
            max-width: 650px;
            margin-bottom: 24px;
            font-size: 16px;
            line-height: 24px;
            font-weight: 400;
            color: #6D7081;
        }

        .back-btn {
            display: inline-block;
            background-color: #6a3bec;
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .back-btn:hover {
            background-color: #552ecc;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="page-not-found">
        <img class="image" alt="Page Not Found" src="assets/img/page_not_found.svg" />
        <h1 class="title">This Page Does Not Exist</h1>
        <p class="text">
            Sorry, the page you are looking for could not be found. It's just an
            accident that was not intentional.
        </p>
        <a href="index.php" class="back-btn">Back to Home</a>
    </div>
</body>
</html>
