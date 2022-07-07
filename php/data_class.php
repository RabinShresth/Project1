<!-- yo file use garincha data save garna ko lai  -->
<!-- yesma class banaunchau -->

<?php
include("db.php");

//db db.php ko class ho so that yesko attributes pani yo file ma aawos
class data extends db
{


    function __construct()
    {
        // echo "Working";
    }

    function admin_login($t1, $t2)
    {


        $q = "SELECT * FROM admin where Username='$t1' and Password='$t2'";
        $recordSet = $this->connection->query($q);
        $result = $recordSet->rowCount();


        // yesma forgot password same username ko functionality rakhna milxa jun aile socheko chainau.
        if ($result > 0) {
            header("Location:admin_dashboard.php"); // login bhayesi dash board ma direct garxa
        } elseif ($result <= 0) {
            header("Location:Admin_log_error/err.html");
        }
    }
}
