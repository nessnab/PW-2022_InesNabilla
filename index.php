<!DOCTYPE html>
<html lang="en">
    <?php
         include 'koneksi.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 Ines Nabilla WEB II</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>WEB II Ines Nabilla</h1>
    
    <form action="#">
        <table>
            <tr>
                <td>First Name</td>
                <td>:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>:</td>
                <td><input type="number"></td>
            </tr>
        </table>

        <button>Send</button>

        <table class="tabel">
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Phone Number</th>
            </tr>
            <tr>
              <td>Ines</td>
              <td>Nabilla</td>
              <td>081234567890</td>
            </tr>

          </table>
          
    </form>


</body>
</html>