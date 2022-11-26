<html>

<body>
    Welcome
    <?php echo $_POST["nama"]; ?><br>
    Your Email Addres is:
    <?php echo $_POST["email"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pk2gita";
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }

    $sql = "INSERT INTO punyagita (nama, email, pesan)    
    VALUES ('$nama', '$email', '$pesan');";

    if ($conn->query($sql) === TRUE) {
        echo "New records created succesfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT nama, email, pesan FROM punyagita";
    ?>
</body>

</html>