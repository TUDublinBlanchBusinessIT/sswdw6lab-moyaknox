<?php

include("dbcon.php");

$sql = "SELECT visit.visit_date, visit.visit_time, patient.Firstname AS PatientFirstname,
patient.Surname AS PatientSurname, doctor.Firstname AS DoctorFirstname, doctor.Surname AS DoctorSurname, doctor.Specialism AS DoctorSpecialism 
FROM visit
INNER JOIN patient ON
visit.patient_id = patient.id
INNER JOIN doctor ON 
visit.doctor_id = doctor.id ";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) {
    $vdate = $row['visit_date'];
    $vtime = $row['visit_time'];
    $pfn = $row['PatientFirstname'];
    $psn = $row['PatientSurname'];
    $dfn = $row['DoctorFirstname'];
    $dsn = $row['DoctorSurname'];
    $ds = $row['DoctorSpecialism'];

    echo "<TR><TD>$vdate</TD><TD>$vtime</TD><TD>$pfn</TD><TD>$psn</TD><TD>$dfn</TD><TD>$dsn</TD><TD>$ds</TD>";
}
mysqli_close($conn);
?>