<?php

if (isset($_POST["id"])) {
    // if(1){

    //promocode page 
    if ($_POST["id"] == "promocode")
    // if(1)
    {

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }
        if ($_POST["action"] == "r")
        // if(1)
        {


            // datatable css and js

            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
            <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
            <!-- buttons for Export datatable -->
            <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
            <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
            <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
            <!-- Datatable Setting js -->
            <script src="vendors/scripts/datatable-setting.js"></script>';


            $sql = "select * from tblpromocode";
            $result = $conn->query($sql);

            $output = "";

            // echo 'include "adminsidebar.php"';






            if (mysqli_num_rows($result) > 0) {
                $output = '

    <table class="data-table table hover multiple-select-row nowrap" >
								<thead>
                                <tr>
                                <th class="table-plus datatable-nosort">PromoCode</th>
                                <th>Discount</th>
                                <th>Branch Code</th>
                                <th>Expertion Date</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                                
                            </tr>
								</thead>
								<tbody>
    
    
    ';

                while ($row = mysqli_fetch_array($result)) {

                    // $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";
                    $output .= "<tr>
        <td class=\"table-plus\">{$row[1]}</td>
        <td>{$row[2]}</td>
        <td>{$row[3]}</td>
        <td>{$row[4]}</td>
        ";

                    if ($row[5]) {
                        $output .= "<td>
                                                                
            <div class=\"bootstrap-badge\">

            <a href=\"javascript:void()\" id=\"bbb\" class=\"badge badge-rounded badge-success\" style=\"font-weight:560;border-radius:35px;\">Active</a>
            
           
            </div>
            
            </td>";
                    } else {
                        $output .= "<td>
                                                                    
            <div class=\"bootstrap-badge\">
            <a href=\"javascript:void()\" id=\"bbb\" class=\"badge badge-rounded badge-danger\" style=\"font-weight:560;border-radius:35px;\">Deactive</a>

              
               </div>
               </td>";

                    }
                    $output .= '<td>
        <button  data-toggle="modal" id="edit" data-target="#bd-example-modal-lg';
                    $output .= "$row[0]";
                    $output .= '"
                    data-eeid="';
                    $output .= "$row[0]";
                    $output .= '" class="dropdown-item" class="btn-block"  >
                 <i class="dw dw-edit2" ></i>Edit</button></td>
                                                            
                 <td>
                 <a class="btn-block" data-toggle="modal" data-target="#success-modal';
                    $output .= "$row[0]";

                    $output .= '"type="button" >
                
                 <a
        href="#"
        class="btn-block"
        data-toggle="modal"
        data-target="#confirmation-modal';
                    $output .= "$row[0]";
                    $output .= '"
        data-eid="';
                    $output .= "$row[0]";
                    $output .= '"

        type="button" 
    >
    <i class="dw dw-delete-3" id="del" ></i> Delete

    </a>
             </td>

                                                                    ';

                    $output .= "</tr>";
                    ;


                    // Update Model

                    $output .= ' <div class="col-md-4 col-sm-12 mb-30">
                    <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg';
                    $output .= "$row[0]";
                    $output .= '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-updialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel" >
                                        Update
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">
                                        ×
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="form-edit-cr">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Promo Code</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input type="hidden" id="hiddencode"  value="';
                    $output .= "$row[0]";
                    $output .= '">
                                                <input class="form-control" type="text" name="promocodename" id="editpromocodename';
                    $output .= "$row[0]";
                    $output .= '" value="';
                    $output .= "$row[1]";
                    $output .= '" required/>
                                                <div class="form-group has-danger">
                                                                <div class="form-control-feedback" id="error5">

                                                                </div>
                                                            </div>
                                               
                                            </div>  
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Discount</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input class="form-control" type="text" type="number"onkeypress="return event.keyCode === 8 || event.charCode >= 48 && event.charCode <= 57" id="editdiscountpercentage';
                    $output .= "$row[0]";
                    $output .= '" name="discountpercentage" value="';
                    $output .= "$row[2]";
                    $output .= '" required/>
                                                <div class="form-group has-danger">
                                                                <div class="form-control-feedback" id="error6">

                                                                </div>
                                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Branch Name</label>
                                            <div class="col-sm-12 col-md-10">

                                            ';
                    $sql_branch = "select * from tblbranch";
                    $result_branch = $conn->query($sql_branch);
                    $output .= '<select class="custom-select col-12" name="branchcode" id="branchcode';
                    $output .= "$row[0]";
                    $output .= '"
                                                    required>';


                    while ($row_branch = mysqli_fetch_array($result_branch)) {
                        if ($row[3] == $row_branch[0]) {
                            $output .= "<option value=\"$row_branch[0]\" selected>$row_branch[1]</option>";
                        } else {
                            //  echo $row[3];   
                            $output .= "<option value=\"$row_branch[0]\" id=\"$row[3]\">$row_branch[1]</option>";

                        }



                    }
                    //    mysqli_close($conn);
                    $output .= '</select>';

                    $output .= '
                                         
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Expiration Date</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input class="form-control" type="date" min="';
                    $output .= date('Y-m-d');
                    $output .= '"  value="';
                    $output .= "$row[4]";
                    $output .= '"  name="date" id="editdate';
                    $output .= "$row[0]";
                    $output .= '" required/>
                          
                                                                                                                                        

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Status :</label>
                                            <div class="col-sm-12 col-md-10">
                                            
                                            <!--  -->
                                          



<div class="mb-30">
';


                    if ($row[5] == 1) {




                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="optradio" id="status-ac';
                        $output .= "$row[0]";
                        $output .= '" value="1"  data-check="1"required/> Active</label>';
                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="optradio" id="status-dc';
                        $output .= "$row[0]";
                        $output .= '" value="0" required/ > Deactive</label>';








                    } else {
                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="optradio"  id="status-ac';
                        $output .= "$row[0]";
                        $output .= '" value="1"   data-check="0"> Active</label>';

                        $output .= '<label class="radio-inline mr-3"><input type="radio" name="optradio" id="status-dc';
                        $output .= "$row[0]";
                        $output .= '"  value="0" checked="checked"> Deactive</label>';

                    }


                    $output .= '
</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="title">
                                                    <!-- <h4>Image Dropzone</h4> -->
                                                </div>
                                                <nav aria-label="breadcrumb" role="navigation">

                                                </nav>
                                            </div>

                                            <!-- Submit button -->

                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">

                                        Close
                                    </button>
                                    <button name="editpromo" class="btn btn-primary" type="submit" id="editme';
                    $output .= $row[0];
                    $output .= '">
                                        Save changes
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>';


                    $output .= '<div class="col-md-4 col-sm-12 mb-30">

                <div class="modal fade" id="confirmation-modal';
                    $output .= $row[0];
                    $output .= '" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h4 class="padding-top-30 mb-30 weight-500">
                                    Are you sure you want to continue?
                                </h4>
                                <input type="hidden" id="hide"  value="';
                    $output .= "$row[0]";
                    $output .= '">
                                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        NO
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
                                            <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" id="yes" data-dismiss="modal">
                                                <i class="fa fa-check" ></i>
                                            </button>
                                            YES
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <!-- </div> -->
            </div>';







                }
                $output .= "</tbody></table>";

                echo $output;



            } else {
                $output .= '
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                            <th class="table-plus datatable-nosort">PromoCode</th>
                            <th>Discount</th>
                            <th>Branch Code</th>
                            <th>Expertion Date</th>
                            <th>Status</th>
                            <th>Update</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        </table>
                        </div>';
                echo $output;
            }
        }
        // delete data
        if ($_POST["action"] == "d") {
            $id = $_POST["eid"];
            $sql = "DELETE FROM tblpromocode where `promoId`=$id";
            echo $sql;
            $result = $conn->query($sql);
            if ($result) {
                echo 1;
            }
        }
        // create
        if ($_POST["action"] == "c") {


            $validate = false;
            $validiscount = false;

            // $id=$_POST["eid"];
            $promocodename = $_POST["promocode"];
            $discountpercentage = $_POST["discount"];
            $branchcode = $_POST["branchcode"];
            $date = $_POST["date"];
            $check = 0;
            $sql = "select * from tblpromocode where `promoCode`='$promocodename' and `branchCode`=$branchcode";
            $result = mysqli_query($conn, $sql);
            // echo $result;
            $row = mysqli_num_rows($result);
            // echo $row;
            // check weather duplicate avaliable or not
            if ($row > 0) {
                $check = 11;
            } else {
                // echo 2;
            }

            if ($date >= $date_now) {
                $validate = true;

            }
            if (filter_var($discountpercentage, FILTER_VALIDATE_FLOAT)) {
                $validiscount = true;
            }
            if ($validate && $validiscount) {

                if ($check != 11) {
                    $sql = "INSERT INTO `tblpromocode`( `promoCode`, `discount`, `branchCode`, `ExpDate`, `status`) VALUES ('$promocodename','$discountpercentage','$branchcode','$date','1')";


                    $result = $conn->query($sql);
                    if ($result) {
                        echo 1;
                    } else {
                        echo 0;
                    }
                } else {
                    echo 123;
                }
            }
        }

        // edit 
        if ($_POST["action"] == "e") {

            $er = "";
            $validate = false;
            $validiscount = false;

            $id = $_POST["eid"];
            $promocodename = $_POST["promocodename"];
            $discountpercentage = $_POST["discountpercentage"];
            $branchcode = $_POST["branchcode"];
            $date = $_POST["date"];
            $status = $_POST["status"];


            $date_now = date("Y-m-d");
            if ($date >= $date_now) {
                $validate = true;

            } else {
                $er .= "Invalid Date";
            }
            if (filter_var($discountpercentage, FILTER_VALIDATE_FLOAT)) {
                $validiscount = true;
            } else {
                $er .= "Invalid Percentage";

            }
            if ($validate && $validiscount) {



                $sql = "UPDATE `tblpromocode` SET `promoCode`='$promocodename',`discount`='$discountpercentage',`branchCode`='$branchcode',`ExpDate`='$date',`status`='$status' WHERE `promoId`='$id'";

                $result = $conn->query($sql);
                if ($result) {
                    echo 1;
                } else {
                    echo "not hello";
                }
            } else {
                echo $er;
            }
        }

    }










    // manage expense
    if ($_POST["id"] == "expense") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }
        if ($_POST["action"] == "r")
        // if(1)
        {


            // datatable css and js

            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <!-- buttons for Export datatable -->
        <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
        <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
        <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
        <!-- Datatable Setting js -->
        <script src="vendors/scripts/datatable-setting.js"></script>';


            $sql = "select * from tblexpense";
            $result = $conn->query($sql);

            $output = "";

            // echo 'include "adminsidebar.php"';






            if (mysqli_num_rows($result) > 0) {
                $output = '

                    <table class="data-table table hover multiple-select-row nowrap" >
                            <thead>
                            <tr>
                            <th class="table-plus datatable-nosort">Expense Type</th>
                            <th>Expense Value</th>
                            <th>Branch Code</th>
                            <th>Description</th>
                            <th>Date</th>
                            
                            <th>Delete</th>
                            
                        </tr>
                            </thead>
                            <tbody>


';

                while ($row = mysqli_fetch_array($result)) {

                    // $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";
                    $output .= "<tr>
    <td class=\"table-plus\">{$row[1]}</td>
    <td>{$row[3]}</td>
    <td>{$row[4]}</td>
    <td>{$row[2]}</td>
    <td>{$row[5]}</td>

    ";



                    $output .= '
                                                        
             <td>
             <a class="btn-block" data-toggle="modal" data-target="#success-modal';
                    $output .= "$row[0]";

                    $output .= '"type="button" >
            
             <a
    href="#"
    class="btn-block"
    data-toggle="modal"
    data-target="#confirmation-modal';
                    $output .= "$row[0]";
                    $output .= '"
    data-eid="';
                    $output .= "$row[0]";
                    $output .= '"

    type="button" 
>
<i class="dw dw-delete-3" id="del" ></i> Delete

</a>
         </td>

                                                                ';

                    $output .= "</tr>";

                    $output .= '<div class="modal fade" id="confirmation-modal';
                    $output .= $row[0];
                    $output .= '" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h4 class="padding-top-30 mb-30 weight-500">
                                    Are you sure you want to continue?
                                </h4>
                                <input type="hidden" id="hide"  value="';
                    $output .= "$row[0]";
                    $output .= '">
                                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        NO
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn-block" data-toggle="modal" data-target="#success-modal" type="button">
                                            <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" id="yes" data-dismiss="modal">
                                                <i class="fa fa-check" ></i>
                                            </button>
                                            YES
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>';










                }

                $output .= "</tbody></table>";

                echo $output;



            } else {
                $output .= '
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                <thead>
                <tr>
                <th class="table-plus datatable-nosort">Expense Type</th>
                <th>Expense Value</th>
                <th>Branch Code</th>
                <th>Description</th>
                <th>Date</th>
                
                <th>Delete</th>
                
            </tr>
                </thead>
                    <tbody>
                    </tbody>
                    </table>
                    </div>';
                echo $output;
            }
        }
        // delete data
        if ($_POST["action"] == "d") {
            $id = $_POST["eid"];
            $sql = "DELETE FROM tblexpense where `expenseId`=$id";
            // echo $sql;
            $result = $conn->query($sql);
            if ($result) {
                echo 1;
            }
        }
        // create
        if ($_POST["action"] == "c") {




            $branchcode = $_POST["branchcode"];
            $evalue = $_POST["evalue"];
            $expensetype = $_POST["expensetype"];
            $description = $_POST["description"];


            $validvalue = true;
            $date = date("Y-m-d");



            if (filter_var($evalue, FILTER_VALIDATE_FLOAT)) {
                $validiscount = true;
            }
            if ($validvalue) {


                $sql = "INSERT INTO `tblexpense`(`expenceType`, `expenseDetail`, `expenceValue`, `branchcode`, `date`)  VALUES ('$expensetype','$description',$evalue,$branchcode,'$date')";
                // echo $sql;

                $result = $conn->query($sql);
                if ($result) {
                    echo 1;
                } else {
                    echo 0;
                }

            }
        }

        // edit 
        if ($_POST["action"] == "e") {


            // $validate = false;
            // $validiscount = false;

            // $id = $_POST["eid"];
            // $promocodename = $_POST["promocodename"];
            // $discountpercentage = $_POST["discountpercentage"];
            // $branchcode = $_POST["branchcode"];
            // $date = $_POST["date"];
            // $status = $_POST["status"];


            // $date_now = date("Y-m-d");
            // if ($date >= $date_now) {
            //     $validate = true;

            // }
            // if (filter_var($discountpercentage, FILTER_VALIDATE_FLOAT)) {
            //     $validiscount = true;
            // }
            // if ($validate && $validiscount) {



            //     $sql = "UPDATE `tblpromocode` SET `promoCode`='$promocodename',`discount`='$discountpercentage',`branchCode`='$branchcode',`ExpDate`='$date',`status`='$status' WHERE `promoId`='$id'";

            //     $result = $conn->query($sql);
            //     if ($result) {
            //         echo 1;
            //     } else {
            //         echo "not hello";
            //     }
            // } else {
            //     echo 123;
            // }
        }

    }

    if ($_POST["id"] == "index") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }
        if ($_POST["action"] == "c") {
            $check = 0;
            $name = $_POST["name"];
            $number = $_POST["number"];
            $message = $_POST["message"];

            // check string is not empty with regex

            //check string is not empty with regex

            if (preg_match("/^[a-zA-Z]*$/", $name)) {
                $check = 1;
            } else {
                $check = 0;

            }
            if (preg_match("/^[a-zA-Z ]*$/", $message)) {
                $check = 1;
            } else {
                $check = 0;

            }
            if (preg_match("/^[6-9][0-9]{9}$/", $number)) {
                $check = 1;
            } else {
                $check = 0;

            }

            if ($check == 1) {
                $sql = "INSERT INTO `tblcontactus`(`c_name`, `c_mobile`, `c_message`,`c_date`) VALUES ('$name','$number','$message',NOW())";
                $result = $conn->query($sql);

            }

            // check mobilenumber is valid or not with regex
            echo $check;
        }
    }
    if ($_POST["id"] == "contactus") {

        if ($_POST["action"] == "r")
        // if(1)
        {


            // datatable css and js

            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <!-- buttons for Export datatable -->
        <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
        <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
        <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
        <!-- Datatable Setting js -->
        <script src="vendors/scripts/datatable-setting.js"></script>';
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "rms";

            $conn = new mysqli($host, $username, $password, $database);

            if (!$conn) {
                echo "Database connection failed. Error:" . $conn->error;
                exit;
            }

            $sql = "select * from tblcontactus";
            $result = $conn->query($sql);

            $output = "";

            // echo 'include "adminsidebar.php"';






            if (mysqli_num_rows($result) > 0) {
                $output = '

                    <table class="data-table table hover multiple-select-row nowrap" >
                            <thead>
                            <tr>
                            <th class="table-plus datatable-nosort">Name</th>
                            <th>Contact Number</th>
                            <th>Message</th>
                            <th>Time Stamp</th>
                          
                            
                        </tr>
                            </thead>
                            <tbody>


';

                while ($row = mysqli_fetch_array($result)) {

                    // $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";
                    $output .= "<tr>
                    <td>{$row[1]}</td>
              
                <td>{$row[2]}</td>
                <td>{$row[3]}</td>
                <td>{$row[4]}</td>
                

                ";




                    $output .= "</tr>";












                }

                $output .= "</tbody></table>";

                echo $output;



            } else {
                $output .= '
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                <thead>
                <tr>
                <th class="table-plus datatable-nosort">Expense Type</th>
                <th>Expense Value</th>
                <th>Branch Code</th>
                <th>Description</th>
                <th>Date</th>
                
                <th>Delete</th>
                
            </tr>
                </thead>
                    <tbody>
                    </tbody>
                    </table>
                    </div>';
                echo $output;
            }
        }
    }


    //feedback data retrive
    if ($_POST["id"] == "feedback") {

        if ($_POST["action"] == "r")
        // if(1)
        {


            // datatable css and js

            echo '<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <!-- buttons for Export datatable -->
        <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
        <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
        <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
        <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
        <!-- Datatable Setting js -->
        <script src="vendors/scripts/datatable-setting.js"></script>';
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "rms";

            $conn = new mysqli($host, $username, $password, $database);

            if (!$conn) {
                echo "Database connection failed. Error:" . $conn->error;
                exit;
            }

            $sql = "select * from tblfeedback";
            $result = $conn->query($sql);

            $output = "";

            // echo 'include "adminsidebar.php"';






            if (mysqli_num_rows($result) > 0) {
                $output = '

                    <table class="data-table table hover multiple-select-row nowrap" >
                            <thead>
                            <tr>
                            <th class="table-plus datatable-nosort">User Name</th>
                            <th>Branch Name</th>
                            <th>FeedbackText</th>
                            <th>date Time</th>
                          
                            
                        </tr>
                            </thead>
                            <tbody>


';

                while ($row = mysqli_fetch_array($result)) {

                    // $output .="<tr><td>{$row[0]}</td><td>{$row[2]}</td><td><button class='delete-btn' data-id='{$row[0]}'>delete</button></td></tr>";
                    $output .= "<tr>";
                    $sql2 = "select * from tbluser where `userid`={$row[1]}";
                    $result2 = $conn->query($sql2);
                    while ($row2 = mysqli_fetch_array($result2)) {
                        $output .= " <td>{$row2[2]}</td>";

                    }
                    $sql3 = "select * from tblbranch where `branchcode`={$row[2]}";
                    $result3 = $conn->query($sql3);
                    while ($row3 = mysqli_fetch_array($result3)) {
                        $output .= " <td>{$row3[1]}</td>";

                    }

                    $output .= "
                <td>{$row[3]}</td>
                <td>{$row[4]}</td>
                

                ";




                    $output .= "</tr>";












                }

                $output .= "</tbody></table>";

                echo $output;



            } else {
                $output .= '
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                <thead>
                <tr>
                <th class="table-plus datatable-nosort">Expense Type</th>
                <th>Expense Value</th>
                <th>Branch Code</th>
                <th>Description</th>
                <th>Date</th>
                
                <th>Delete</th>
                
            </tr>
                </thead>
                    <tbody>
                    </tbody>
                    </table>
                    </div>';
                echo $output;
            }
        }
    }

    if ($_POST["id"] == "managegallery") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "rms";

        $conn = new mysqli($host, $username, $password, $database);

        if (!$conn) {
            echo "Database connection failed. Error:" . $conn->error;
            exit;
        }

        if ($_POST["action"] == "c")
        // if(1)
        {
            //check weather string contain space or not with regex
            $pattern = "/^[a-zA-Z ]*$/";
            if (!preg_match($pattern, $_POST["name"])) {
                echo 0;
                exit;
            }
            $name = $_POST["name"];
            $sql = "select * from tblgallerycategory where `categoryName`='$name'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($result);

            if ($row > 0) {
                echo 2;
                exit;
            }

            $sql = "INSERT INTO `tblgallerycategory`(`categoryName`, `status`) VALUES ('$name','1')";
            $result = $conn->query($sql);

            if ($result) {
                echo 1;
            } else {
                echo 0;
            }

        }
        if ($_POST["action"] == "d")
        // if(1)
        {
            //check weather string contain space or not with regex
            $name = $_POST["name"];

            $sql = "DELETE FROM `tblgallerycategory` WHERE `galleryCatagoryId` = '$name'";
            $result = $conn->query($sql);

            if ($result) {
                echo 1;
            } else {
                echo 0;
            }

        }
        if ($_POST["action"] == "re")
        // if(1)
        {
            //check weather string contain space or not with regex
            // $name = $_POST["name"];

            

            // store $result into combobox

           


                // $sql_branch = "select * from tblgallerycategory ";
                
                $sql = "select * FROM `tblgallerycategory` WHERE `status` = '0'";
            $result = $conn->query($sql);
                if($result){
                echo '<select  class="custom-select col-12" name="branchcode" id="endcinput"
																			required>';
                echo '<option value="" selected disabled hidden>Choose here</option>';

                while ($row = mysqli_fetch_array($result)) {
                    echo " 
																			<option value=\"$row[0]\">$row[1]</option>";



                                                                            // mysqli_close($conn);
                                                                        }
                                                                        echo "</select>";

            } else {
                echo 0;
            }

        }
        if ($_POST["action"] == "rd")
        // if(1)
        {
            //check weather string contain space or not with regex
            $sql = "select * FROM `tblgallerycategory` WHERE `status` = '1'";
            $result = $conn->query($sql);
                if($result){
                echo '<select  class="custom-select col-12" name="branchcode" id="endcinput"
																			required>';
                echo '<option value="" selected disabled hidden>Choose here</option>';

                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value=\"$row[0]\">$row[1]</option>";



                    // mysqli_close($conn);
                }
                echo "</select>";

            } else {
                echo 0;
            }

        }

        // enable category
        if ($_POST["action"] == "en")
        // if(1)
        {
            //check weather string contain space or not with regex
            $data = $_POST["data"];

            $sql = "UPDATE `tblgallerycategory` SET `status`='1' where `galleryCatagoryId`=$data";
            // echo $sql;
            $result = $conn->query($sql);
                if($result){
                    echo 1;
                }
               
             else {
                echo 0;
            }

        }



        // disable category
        if ($_POST["action"] == "di")
        // if(1)
        {
            //check weather string contain space or not with regex
            $data = $_POST["data"];
            $sql = "UPDATE `tblgallerycategory` SET `status`='0' where `galleryCatagoryId`='$data'";
            $result = $conn->query($sql);
                if($result){
                    echo 1;
                }
               
             else {
                echo 0;
            }
        

        }



       
        

    }



}




?>