<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h1>User registration Details<h1><br>
    <h4>Welcome to Dream Choice Realty</h4><br>
       <p> Your sign in detail is:<br>
        Username: :{{isset($data['email'])?$data['email']:''}}<br>
        Password:  {{isset($data['password'])? $data['password']:''}}<br>
        
        You can login to our website using these credentials.<br>
        Our website: www.dreamchoicereal.com<br>
        Thank you.<br>
        Dream Choice Realty Team.<br>
           
        
        
       </p>
</body>
</html>