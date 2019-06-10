<!DOCTYPE html>
<html>
<head>

    <title>Registartion Page</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div class="container">

     <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-title text-center">
                    <h2 class="title">Registration Form</h1>
                        <hr />
                </div>
                <div class="panel-body">

                    <form role="Form" method="POST" action="register.php" enctype='mutlipart/form-data'>

                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" name="user_name" id="fname" class="form-control"  placeholder="Example: John">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="user_surname" class="form-control" placeholder="Example: Doe">
                        </div>
                        <div class="form-group">
                            <label for="usrname">UserName</label>
                            <input type="text" id="user_nick" name="user_nick" class="form-control"  placeholder="Username Must Be Unique">
                        </div>

                        <div class="form-group">
                            <label for="states">Select your State</label>
                            <select id="states" class="form-control" name="user_state">
                                <option value="unknown">Unknown</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Description1"> CHOOSE PROFILE PICTURE</label>
                            <input type="file" name="foto"  id="blah" >

                        </div>

                        <div class="form-group">
                            <label for="gender">Your Gender</label>
                            <select id="gender" class="form-control" name="user_gender">
                                <option value="unknown">Karta</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="emailaddr">Email Address</label>
                            <input type="text" id="emailaddr" name="user_email" class="form-control" placeholder="Example: john.doe@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="interest">Interest's</label>
                            <input type="text" id="interest" name="user_interest" class="form-control"  placeholder="Tell us what you like...">
                        </div>

                        <div class="form-group">
                            <label for="password">Address</label>
                            <input type="text" id="address" name="user_address" class="form-control"  placeholder="Current living address">
                        </div>
                        <div class="form-group">
                            <label for="password">Hobbies</label>
                            <input type="text" id="address" name="user_hobbies" class="form-control"  placeholder="We love to know about you...">
                        </div>
                        <div class="form-group">
                            <label for="password">Contact No</label>
                            <input type="text" id="address" name="user_contact" class="form-control"  placeholder="+91..(Sample)">
                        </div>
                        <div class="form-group">
                            <label for="password">City</label>
                            <input type="text" id="address" name="user_city" class="form-control"  placeholder="Home City">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="user_password" class="form-control" name="password" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="password">Skill</label>
                            <input type="text" id="address" name="user_skill" class="form-control"  placeholder="Your area of expertise">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" id="address" name="user_desc" class="form-control"  placeholder="Describe yourself in a few words.">
                        </div>

                        <!-- Heading for image -->

                            <label for="verifypass">Register As: </label>
                            <select id="user" class="form-control" name="user_type">
                                <option value="User">User</option>
                                <option value="Artist">Artist</option>
                            </select>
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-lg" id="submitbtn" name="submit">Sign up!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>