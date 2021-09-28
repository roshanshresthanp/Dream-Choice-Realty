<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Welcome to Dream-Choice-Realty<h1>
    <h4>You have successfully booked :{{isset($booking['property'])?$booking['property']:''}} and price : {{isset($booking['price'])? $booking['price']:''}} </h4>
    {{-- <h6>Please proceed to login at <a href="www.google.com">Dream-Choice-Realty</a> </h6> --}}
   
    <p>Thank you</p>
</body>
</html>