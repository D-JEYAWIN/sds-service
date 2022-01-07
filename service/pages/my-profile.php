<?php
	session_start(); 
	$username = $_SESSION['username'];
	
	require_once "connect.php";
	$msg = "";
	$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
	if(isset($_REQUEST['btnSubmit'])) 
	{

		$mobile = $_REQUEST['mobile'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$address = $_REQUEST['address'];

		$query1 = "update employee set mobile='$mobile',email='$email',password='$password',address='$address' where username='$username'";
		if(mysql_query($query1))
		{
		echo '<script language="javascript">';
		echo 'alert("Record Updated!")';
		echo '</script>';
		header('Refresh: 3; URL = my-profile.php');
		} 
		else 
		{
		echo '<script language="javascript">';
		echo 'alert("Unable to Update!")';
		echo '</script>';
		}
	}
	$query = "select * from employee where username='$username'";
	$data = mysql_query($query);
	$rec = mysql_fetch_array($data);
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Service</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <?php include 'menu.php'; ?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">My Profile </h2>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card">
                                   
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Employee Name</label>
                                                <input type="text" class="form-control" name="empname" value="<?php echo $rec['empname']; ?>" required readonly="readonly">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Mobile Number</label>
                                                <input type="number" class="form-control" name="mobile" value="<?php echo $rec['mobile']; ?>" required maxlength="10" pattern="^[6-9][0-9]{9}$">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail">Email address</label>
                                                <input type="email" class="form-control" name="email" value="<?php echo $rec['email']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">User Name</label>
                                                <input type="text" class="form-control" name="username" value="<?php echo $rec['username']; ?>" required readonly="readonly">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Password</label>
                                                <input type="password" class="form-control" name="password" value="<?php echo $rec['password']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Designation</label>
                                                <input type="text" class="form-control" name="designation" value="<?php echo $rec['designation']; ?>" required readonly="readonly">
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Address</label>
                                               <input type="text" class="form-control" name="address" value="<?php echo $rec['address']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Date of Birth</label>
                                                <input type="text" class="form-control" name="dob" value="<?php echo $rec['dob']; ?>" required readonly="readonly">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Date of Joining</label>
                                                <input type="text" class="form-control" name="doj" value="<?php echo $rec['doj']; ?>" required readonly="readonly">
                                            </div>
                                            <div class="form-group">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary" name="btnSubmit">Submit</button>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
                        <!-- ============================================================== -->
                        
                       
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        
                     <?php include 'footer.php'; ?>   
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    <script>
    $(function(e) {
        "use strict";
        $(".date-inputmask").inputmask("dd/mm/yyyy"),
            $(".phone-inputmask").inputmask("(999) 999-9999"),
            $(".international-inputmask").inputmask("+9(999)999-9999"),
            $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
            $(".purchase-inputmask").inputmask("aaaa 9999-****"),
            $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
            $(".ssn-inputmask").inputmask("999-99-9999"),
            $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
            $(".currency-inputmask").inputmask("$9999"),
            $(".percentage-inputmask").inputmask("99%"),
            $(".decimal-inputmask").inputmask({
                alias: "decimal",
                radixPoint: "."
            }),

            $(".email-inputmask").inputmask({
                mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                greedy: !1,
                onBeforePaste: function(n, a) {
                    return (e = e.toLowerCase()).replace("mailto:", "")
                },
                definitions: {
                    "*": {
                        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                        cardinality: 1,
                        casing: "lower"
                    }
                }
            })
    });
    </script>
</body>
 
</html>
