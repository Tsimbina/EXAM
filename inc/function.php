<?php
require("connect.php");

function afficher_Departement()
{
    $db = dbconnect();
    $sql = "SELECT * FROM departments";
    $result = mysqli_query($db, $sql);

    while ($request = mysqli_fetch_assoc($result)) {
        $reponse[] = $request;
    }

    if (!empty($reponse)) {
        return $reponse;
    } else {
        return null;
    }

}

function get_manager()
{
    $db = dbconnect();
    $now = date('Y-m-d');
    $sql = "SELECT departments.dept_no, departments.dept_name, employees.first_name, employees.last_name FROM dept_manager
            JOIN departments ON dept_manager.dept_no = departments.dept_no JOIN employees ON dept_manager.emp_no = employees.emp_no
            WHERE '%s' < dept_manager.to_date";
    $sql = sprintf($sql, $now);

    $result = mysqli_query($db, $sql);

    while ($request = mysqli_fetch_assoc($result)) {
        $reponse[] = $request;
    }

    if (!empty($reponse)) {
        return $reponse;
    } else {
        return null;
    }
}
function get_employes_in($isdepartement)
{
    $sql = "SELECT employees.* FROM employees JOIN dept_emp ON dept_emp.dept_no=employees.dept_no WHERE dept_emp.dept_no='%s'";
    $sql = sprintf($sql, $isdepartement);
    $resultat = mysqli_query(dbconnect(), $sql);
    $reponse = [];
    while ($request = mysqli_fetch_assoc($resultat)) {
        $reponse[] = $request;
    }
}
?>