<!doctype html>
<html>
<head>
    <title>stu-records</title>
</head>
<body>
    <form method="post" action="<?= base_url()?>crud/savedata">
    <table width="600" border="5" cellspacing="5" cellpadding="5">
        <tr>
            <td>student_id</td><td><input type="text" name= "student_id" size="10"/></td>
        </tr>
        <tr>
            <td>student_name</td><td><input type="text" name= "student_name"size="30"/></td>
        </tr>
        <tr>
            <td>student_age</td><td><input type="number" name= "student_age"size="2"/></td>
        </tr>
        <tr>
            <td>student_gender</td><td><input type="text" name= "student_gender"size="10"/></td></tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name= "save" value="save"/></td>
        </tr>
</body>
</html>



