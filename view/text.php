<?php

// Biến lưu trữ thông tin địa chỉ
$country = "UNITED STATES";
$firstName = "";
$lastName = "";
$companyName = "";
$address1 = "";
$address2 = "";
$zip = "";
$city = "";
$state = "";
$phone1 = "";
$phone2 = "";
$email = "";

// Xử lý dữ liệu khi submit
if (isset($_POST["submit"])) {
  // Lấy dữ liệu từ form
  $country = $_POST["country"];
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $companyName = $_POST["companyName"];
  $address1 = $_POST["address1"];
  $address2 = $_POST["address2"];
  $zip = $_POST["zip"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $phone1 = $_POST["phone1"];
  $phone2 = $_POST["phone2"];
  $email = $_POST["email"];

  // Lưu trữ dữ liệu (ví dụ: vào database)
  // ...

  // Hiển thị thông báo thành công
  echo "<p>Thông tin địa chỉ đã được lưu.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shipping Address</title>
</head>
<body>
  <h1>Shipping Address</h1>

  <form method="post">
    <label for="country">Country:</label>
    <select name="country" id="country">
      <option value="UNITED STATES">United States</option>
      </select>

    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>">

    <label for="lastName">Last Name:</label>
    <input type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>">

    <label for="companyName">Company Name (Optional):</label>
    <input type="text" name="companyName" id="companyName" value="<?php echo $companyName; ?>">

    <label for="address1">Address 1:</label>
    <input type="text" name="address1" id="address1" value="<?php echo $address1; ?>">

    <label for="address2">Address 2 (Optional):</label>
    <input type="text" name="address2" id="address2" value="<?php echo $address2; ?>">

    <label for="zip">Zip:</label>
    <input type="text" name="zip" id="zip" value="<?php echo $zip; ?>">

    <label for="city">City:</label>
    <input type="text" name="city" id="city" value="<?php echo $city; ?>">

    <label for="state">State:</label>
    <select name="state" id="state">
      <option value="">Select State</option>
      </select>

    <label for="phone1">Phone Number:</label>
    <input type="text" name="phone1" id="phone1" value="<?php echo $phone1; ?>">

    <label for="phone2">Phone Number 2 (Optional):</label>
    <input type="text" name="phone2" id="phone2" value="<?php echo $phone2; ?>">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo $email; ?>">

    <br>

    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
