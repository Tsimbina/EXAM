<?php
require("../inc/function.php");
if (isset($_GET['dept_no'])) {
    $dept_no=$_GET['dept_no'];
}
$employes=get_employes_in($dept_no);
foreach($employes as $employe){
    ?>
    <tr>
        <td><h2><?=$employe['first_name'].$employe['last_name']?></h2></td>
    </tr>
<?php
}
?>