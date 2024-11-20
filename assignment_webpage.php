<!DOCTYPE html>
<html lang="en">
    <title>Assignment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <body>
        <form method="post" action="">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter your name"required /><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your Email"required /><br>
            <label for="phone">Phone:</label><br>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"required /><br>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" placeholder="Enter your address" required/><br>
            <h3>Gender:</h3>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>
            <h3>Age:</h3><br>
            <input type="range" id="age" name="age" min="18" max="65" required><br>
            <label for="grade">Grade:</label><br>
            <select id="grade" name="grade" required>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select><br>
            <h3>Lessons:</h3>
            <input type="checkbox" id="math" name="lessons[]" value="math">
            <label for="math">Math</label><br>
            <input type="checkbox" id="science" name="lessons[]" value="science">
            <label for="science">Science</label><br>
            <input type="checkbox" id="english" name="lessons[]" value="english">
            <label for="english">English</label><br>
            <input type="checkbox" id="history" name="lessons[]" value="history">
            <label for="history">History</label><br>
            <input type="checkbox" id="geography" name="lessons[]" value="geography">
            <label for="geography">Geography</label><br>
            <label for="description">Description of your Journey as a Student:</label><br>
            <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>
        <button class="Submit">Submit</button><br>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $gender = $_POST["gender"];
            $age = $_POST["age"];
            $grade = $_POST["grade"];
            $lessons = implode(", ", $_POST["lessons"]);
            $description = $_POST["description"];
            echo "<h2>Submitted Data</h2>";
            echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Grade</th>
                    <th>Lessons</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td>$address</td>
                    <td>$gender</td>
                    <td>$age</td>
                    <td>$grade</td>
                    <td>$lessons</td>
                    <td>$description</td>
                </tr>
                </table>";
        }
        ?>
    </body>
</html>