<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>MMB</title>
</head>
<style>
  body, html {
    height: 100%;
    text-align: center;
}

body {
  background-color: #242F3F;
}

  .loader {
    display: inline-block;
    width: 30px;
    height: 30px;
    position: relative;
    border: 4px solid #Fff;
    top: 50%;
    animation: loader 2s infinite ease;
  }

  .loader-inner {
    vertical-align: top;
    display: inline-block;
    width: 100%;
    background-color: #fff;
    animation: loader-inner 2s infinite ease-in;
  }

  @keyframes loader {
    0% {
      transform: rotate(0deg);
    }
    
    25% {
      transform: rotate(180deg);
    }
    
    50% {
      transform: rotate(180deg);
    }
    
    75% {
      transform: rotate(360deg);
    }
    
    100% {
      transform: rotate(360deg);
    }
  }

  @keyframes loader-inner {
    0% {
      height: 0%;
    }
    
    25% {
      height: 0%;
    }
    
    50% {
      height: 100%;
    }
    
    75% {
      height: 100%;
    }

    100% {
      height: 0%;
    }
  }

  .load-wrapper
  {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: #242f3f;
    display: flex;
    justify-content: center;
    align-items:center;
  }

</style>
<body>
    <div class="text-center">
      <p class="text-danger display-4 ">Loading...</hi>
      <span class="spinner-grow spinner-grow-sm text-danger display-4" style="width: 3rem; height: 3rem;"  role="status" aria-hidden="true"></span>
      <hr class="border-danger mr-5 ml-5">
    </div>
    <div class="load-wrapper"></div>
    <span class="loader"><span class="loader-inner"></span></span>
    </div>
</div>
</body>
<script>
  $(window).on("load",function()
  {
    $("load-wrapper").fadeout("slow");
  });
</script>
</html>
