<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h3>Tenancy Confirmation Mail</h3><br>
<h5>
Congratulations:{{isset($booking['name'])?$booking['name']:''}}you have been successfully selected for the tenancy of :{{isset($booking['property'])?$booking['property']:''}}<br>
What’s the next step?<br>
Just follow the following simple steps:</h5>

<h3>Step 1: Pay the 4 weeks bond for the property within 3 days.<br></h3>

Payment Details:<br>
BSB: 0123 456<br>
Account number: 12345678<br>
Account Name: Dream Choice Realty<br>
Reference: Your Name<br>

<h3>Step 2: Visit us in our office after the bond payment within 7 days.<br></h3>

•	Why do you want to visit the office?<br>
To sign the Agreement papers.<br>
To receive the keys of the property.<br>

•	What do you need while visiting us?<br>
Just your ID card (For E.g., Driving License or Passport)<br>

<h3>Step 3: Move to your new home right away.<br></h3>

Important notice: Your rent is going to start after the seventh day of receiving this message.<br>
Thank you for giving us chance to serve you.<br>
Any change of mind??<br><br><br>
Please contact our friendly staff.<br>
Dream Choice Realty Team.<br>
</body>
</html>