<!doctype html>
<html>
<head>
    <title>stu-records</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<style>
    label.error {
  color: red;
}

</style>
</head>
<body>
    <form id="myForm" method="post" action="<?= base_url()?>crud/savedata">
    <table width="600" border="5" cellspacing="5" cellpadding="5">
        <tr>
            <td>student_id</td><td><input type="text" name="student_id" size="10"/></td>
        </tr>
        <tr>
            <td>student_name</td><td><input type="text" id="stu_name" name="stu_name"size="30"/></td>
        </tr>
        <tr>
            <td>student_age</td><td><input type="number" name= "student_age"size="2"/></td>
        </tr>
        <tr>
            <td>student_gender</td><td><input type="text" name= "student_gender"size="10"/></td></tr>
        
        <tr>
            <td>Email</td>
            <td><input id="email"
                       name="email"
                       type="email"/></td>
        </tr>
        <tr>
            <td>address</td>
            <td><input type="text" name="address" col="30" row="3"/>
        </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="number" name= "phno" size="10"/></td>
        </tr>
        <tr>
        
            <td colspan="2" align="center"><input type="submit" id="submit" value="save"/></td>
        </tr>
       
    
    </body>
    
    <script>
    $(document).ready(function() {
  $("#myForm").validate({
    rules: {
        student_id: "required",
				stu_name: "required",
				student_age: "required",
				student_gender: "required",
				address: "required",
				phno: "required",
      email: "required"
    },
     messages: {
			student_id:"Please enter stu_id",
			stu_name: "Please enter name",
			student_age:"Please enter age",
			student_gender: "enter gender",
			address: "enter address",
				phno: "enter mobile_no",
       email: {
         required: "Please enter email address",
        email: "Please enter a valid email address"
      }
     },
    
  });
});

        </script>
    </html>



