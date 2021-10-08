<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h3>Tenancy Application not accepted</h3><br><br>
       <p>
        Hello {{isset($data['name'])?$data['name']:''}}, <br><br>
        We feel very sad informing you that your tenancy application for the {{isset($data['property'])?$data['property']:''}} is not accepted. But we have a large range of rental properties you may like. You are more that welcome to apply again through us.
        We are always here for your assistance.
        <br><br>
        Best regards,<br>
        Dream Choice Realty Team.
       </p>
</body>
</html>