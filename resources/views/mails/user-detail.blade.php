<!DOCTYPE html>
<html>
<head>
    <title>User detail</title>
</head>
<body>
    <h1>Welcome to Dream-Choice-Realty<h1>
    <h4>
        hello :{{isset($data['name'])?$data['name']:''}} </h4>
    {{-- <h6>Please proceed to login at <a href="www.google.com">Dream-Choice-Realty</a> </h6> --}}
    Property name : {{isset($data['property'])? $data['property']:''}} Rent : {{isset($data['rent'])? $data['rent']:''}} 
    <h5> please attach document</h5>
    <p>Thank you</p>
</body>
</html>