<!DOCTYPE html>
<html>
<head>
    <title>User detail</title>
</head>
<body>
    <h1>Tenancy Form Email:</h1>
    <p>Dear {{isset($data['name'])?$data['name']:''}} , you have visited the {{isset($data['property'])? $data['property']:''}} on {{isset($data['appointment_date'])? $data['appointment_date']:''}}</p>
   <p>If you liked the property and want to continue the further process, please fill up the following form:</p>
        <p>
    •	Name:<br>
    •	Email:<br>
    •	Phone Number:<br>
    •	Recent Address:<br>
    •	Monthly Income:<br>
    •	Monthly Expenditure (Excluding recent rent):<br>
    •	Job description:<br>
    •	Position:<br>
    
        </p>
        <p>Also please attach the following proof of documents:<br>
            1.	Identity document (For E.g., Driving license or Passport)<br>
            2.	Income proof (For E.g., Bank statement up to 3 months)<br>
            3.	Address proof (For E.g., Recent electricity receipt or NBN receipt or any type of receipt mentioning your name and address)<br>
            </p><br><p>
            Please reply this email with details filled up and attachments to continue the further proceedings.<br>
            If you don’t want continue the further process kindly ignore this email.<br>
            
            Thank you.<br>
            
            Dream Choice Realty Team.</p>
            
</body>
</html>