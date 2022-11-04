<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Static Login</title>
</head>
<body>
    <?php
        $users = array(
                    array(
                        'UserType' => 'Admin',
                        'Username' => 'admin',
                        'Password' => 'pass1234'
                        ),
                    array(
                        'UserType' => 'Admin',
                        'Username' => 'renmark',
                        'Password' => 'pogi1234'
                        ),
                    array(
                        'UserType' =>'Content Manager',
                        'Username' => 'pepito',
                        'Password' => 'manaloto'
                        ),
                    array(
                        'UserType' => 'Content Manager',
                        'Username' => 'juan',
                        'Password' => 'delacruz' 
                        ),
                    array(
                        'UserType' => 'System User',
                        'Username' => 'pedro',
                        'Password' => 'penduko'
                        ));
                    if (isset($_POST['btnsignin'])) {
                        $type = $_POST['usertype'];
                        $username = $_POST['inputusername'];
                        $password = $_POST['inputpassword'];
                        
                        for($i = 0; $i <= count($users); $i++)
                            if ($i < count($users)){
                                if($type === $users[$i]['UserType']){
                                    if($username === $users[$i]['Username']){
                                        if($password === $users[$i]['Password']){
                                            
                                            echo '<div class="container-fluid text-center pt-3 mx-auto"  style="width: 380px">
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Welcome to the System: '. $username .'
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            </div>';
                                            break;
                                        }
                                    }
                                }
                            }
                            else{
                                echo'<div class="container-fluid text-center pt-3 mx-auto" style="width: 380px">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        Invalid Username / Password
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        </div>';
                            }
                    }
    ?>
    <div class="container">
        <div class="card card-container">
            <form class="form-signin" method ="post">
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <select name="usertype"  class="form-control" id="usertype">
                        <option value="Admin">Admin</option>
                        <option value="Content Manager">Content Manager</option>
                        <option value="System User">System User</option>
                    </select><br>
                
                    <input type="text" name="inputusername" id="inputusername" class="form-control" placeholder="User Name" required autofocus>
                    <input type="password" name="inputpassword" id="inputpassword" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="btnsignin">Sign in</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>