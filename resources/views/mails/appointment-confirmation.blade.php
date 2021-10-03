<!DOCTYPE html>
<html>
<head>
    <title>Appointment Confirmation</title>
</head>
<body>
    <h1>Appointment Confirmation Mail</h1>
    <p>  Dear {{isset($data['name'])?$data['name']:''}}, you have requested an inspection on {{isset($data['property'])? $data['property']:''}}.
            We are glad to say that your request has been accepted. You can visit the property on {{isset($data['appointment_date'])?$data['appointment_date']:''}} for inspection.
    <p>Thank you</p><br>
    <p>Regards, Dream Choice Realty Team</p>
</body>
</html>