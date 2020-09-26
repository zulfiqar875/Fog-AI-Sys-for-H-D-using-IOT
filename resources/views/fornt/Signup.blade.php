<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>HC-Signup</title>
<link rel="icon" type="image/ico" href="https://i.pinimg.com/originals/16/aa/df/16aadf06716be2bb9c958b31ee1173a1.jpg" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>

</style>
<body>

<section class="text-gray-500 bg-gray-900 body-font">
    <a href="/working"><i class="fa fa-home fa-2x text-white " id="homeicon"></i></a>
  <div class="container px-5 py-4 mx-auto flex flex-wrap items-center ">
    <div class="lg:w-2/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-white"> <u>Registeration</u> </h1> <br><br><br>
      <h1 class="title-font font-medium text-3xl text-white">Heart Beat, Glucose Discreet and Painless</h1>
      <p class="leading-relaxed mt-4">Continuous Monitoring, Right on your Wrist</p>
    </div>
    <div class="lg:w-3/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
    <div class="form-group">
            <form action="/register" method="Post">
            @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="">First Name</label>
                        <input id="B" type="text" name="fname" id="" id="" required class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">Last  Name</label>
                        <input id="B" type="text" name="lname" id="" id="" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="">Date of Birth</label>
                        <input id="B" type="date" name="dob" id="" id="" required class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">Age</label>
                        <input id="B" type="text" name="age" id="" id="" required class="form-control">
                    </div>
    
                </div>
                <div class="row">

                    <div class="col-6">
                        <label for="">CNIC</label>
                        <input id="B" type="text" name="cnic" id="" id="" required class="form-control">
                    </div>
 
                    <div class="col-3">
                        <label for="">Address</label>
                        <input id="B" type="text" name="address" id="" id="" required class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="">Postal Code</label>
                        <input id="B" type="text" name="postalcode" id="" id="" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="">Contact no</label>
                        <input id="B" type="text" name="cn" id="" id="" required class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">Email</label>
                        <input id="B" type="email" name="email" id="" id="" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="">Diseases</label>
                        <select name="dieases" id="" class="form-control" required>
                            <option value="" required> -- Select Disease --</option>
                            <option value="Heart " required>Heart</option>
                            <option value="Diabetes" required >Diabetes</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="">Hospital</label>
                        <input id="B" type="text" name="hospital" id="" id="" required class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="">City</label>
                        <input id="B" type="text" name="city" id="" id="" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="">Others Diseases</label>
                        <input id="B" type="text" name="others" id="" id="" required class="form-control">
                    </div>

                </div>


                <div class="row">
                    <div class="col-6">
                        <label for="">Username</label>
                        <input id="B" type="text" name="username" id="" id="" required class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">Password</label>
                        <input id="B" type="password" name="password" id="" id="" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for=""></label>
                        <input type="submit" value="Register" class="form-control">
                    </div>
                </div>

            </form>
        </div>
        <h4>i have already account  <a href="/login" class="text-primary">Login </a></h4>
      <!-- <h4 class="text-xs text-gray-600 mt-3">i have already account. </h4> -->
    </div>
  </div>
</section>

</body>
</html