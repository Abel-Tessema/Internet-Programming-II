<?php

$fullName = $birthDate = $gender = $country = $email = $biography = "";
$birthDateArray = [];

function test_input($data): string {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$fullNameError = $birthDateError = $genderError = $countryError = $emailError = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST['fullName'])) $fullNameError = "Full name is required.";
    else {
        $fullName = test_input($_POST['fullName']);
        if (!preg_match("/^[A-Za-z' ]*$/", $fullName))
            $fullNameError = "Only letters, whitespaces, and apostrophes are allowed.";
    }

    if (empty($_POST['birthDate'])) $birthDateError = "Birth date is required.";
    else {
        $birthDate = strtotime($_POST['birthDate']);
        $minAge = 18 * 365 * 24 * 60 * 60;
        if (time() - $birthDate < $minAge)
            $birthDateError = "You a pedo?";
    }
//    else {
//        $birthDate = test_input($_POST['birthDate']);
//        if (!preg_match("/^\d\d/\d\d/\d\d\d\d$/", $birthDate))
//            $birthDateError = "Birth date should be in the format dd/mm/yyyy.";
//        else {
//            $birthDateArray = explode('/', $birthDate);
//            $day = (int) $birthDateArray[0];
//            $month = (int) $birthDateArray[1];
//            $year = (int) $birthDateArray[2];
//            if (!(
//                    $day > 0 && $day <= 31 &&
//                    $month > 0 && $month <= 12 &&
//                    $year > 0 && $year <= 2024
//            ))
//                $birthDateError = "Invalid date.";
//        }
//    }

    if (empty($_POST['gender'])) $genderError = "Gender is required.";
    else $gender = test_input($_POST['gender']);

    $country = test_input($_POST['country']);
    if (!preg_match("/^[A-Za-z ]*$/", $country))
        $countryError = "Only letters and whitespaces are allowed.";

    if (empty($_POST['email'])) $emailError = "Email is required.";
    else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $emailError = "Invalid email format.";
    }
}

//if (
//        empty($birthDateError) &&
//        empty($emailError) &&
//        empty($countryError) &&
//        empty($genderError) &&
//        empty($fullNameError)
//) {
//    echo "Your full name is: " . $fullName . ". <br>";
//    echo "Your birth date is: " . $birthDate . ". <br>";
//    echo "Your gender is: " . $gender . ". <br>";
//    echo "Your country is: " . $country . ". <br>";
//    echo "Your email is: " . $email . ". <br>";
//    echo "Your biography is: " . $biography;
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IP II Lab Day 2</title>
</head>
<body>
    <form
            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
            method="post">
        <h2>User Registration</h2>
        <p>* required</p>
        <label for="fullName">Full Name* : </label>
        <input type="text" id="fullName" name="fullName">
        <?php echo $fullNameError ?>
        <br> <br>

        <label for="birthDate">Birth Date* : </label>
        <input type="date" id="birthDate" name="birthDate">
        <?php echo $birthDateError ?>

        <br> <br>

        <label for="female">Gender* : </label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>
        <?php echo $genderError ?>
        <br> <br>

        <label for="country">Country: </label>
        <input type="text" id="country" name="country">
        <?php echo $countryError ?>
        <br> <br>

        <label for="email">Email* : </label>
        <input type="text" id="email" name="email">
        <?php echo $emailError ?>
        <br> <br>

        <label for="biography">Biography: </label>
        <br>
        <textarea id="biography" rows="7" cols="40" name="biography"></textarea>
        <br> <br>

        <input type="submit">

    </form>
</body>
</html>

<?php

?>










<!--//echo $_POST['fullName'];-->
<!--//echo "<br>";-->
<!--//echo $_POST['birthDate'];-->
<!--//echo "<br>";-->
<!--//echo $_POST['gender'];-->
<!--//echo "<br>";-->
<!--//echo $_POST['country'];-->
<!--//echo "<br>";-->
<!--//echo $_POST['email'];-->
<!--//echo "<br>";-->
<!--//echo $_POST['biography'];-->