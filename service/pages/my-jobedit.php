<?php
	session_start(); 
	$username = $_SESSION['username'];
	
	require_once "connect.php";
	$msg = "";
	$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
	if(isset($_REQUEST['btnSubmit'])) 
	{

		$service = $_REQUEST['service'];
		$status = $_REQUEST['status'];
		

		$query1 = "update jobcard set service='$service',status='$status' where id='$id'";
		if(mysql_query($query1))
		{
		echo '<script language="javascript">';
		echo 'alert("Record Updated!")';
		echo '</script>';
		header('Refresh: 3; URL = my-jobcard.php');
		} 
		else 
		{
		echo '<script language="javascript">';
		echo 'alert("Unable to Update!")';
		echo '</script>';
		}
	}
	$query = "select * from jobcard where id='$id'";
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
                                    <h2 class="pageheader-title">Edit My Job </h2>
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
                                                <label for="inputText3" class="col-form-label">Customer ID</label>
                                                <input type="text" class="form-control" name="cusid" required value="<?php echo $rec['id']; ?>" readonly="readonly">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Machine Model</label>
                                                <input type="text" class="form-control" name="machine" required value="<?php echo $rec['machine']; ?>" readonly="readonly">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Serial Number</label>
                                                <input type="text" class="form-control" name="sno" required  readonly value="<?php echo $rec['sno']; ?>" readonly="readonly">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Problem Analysis</label>
                                                <input type="text" class="form-control" name="problem" required value="<?php echo $rec['problem']; ?>" readonly="readonly">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Service Done</label>
                                                <input type="text" class="form-control" name="service" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Service Status</label>
                                                <select class="form-control" name="status" required>
                                                	<option value="">Select</option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Reject">Reject</option>
                                                </select>
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
