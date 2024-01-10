<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h4>Sign Up Form</h4>
    <form method="POST" action="welcome.php">
    <p>First Name :</p>
    <input for="fname" name="nama_depan" required><br>
    <br>
    <p>Last Name</p>
     <input for="lname" name="nama_belakang" required>
     <p>Gender</p>
     <input type="radio" name="jenis_kelamin" value="Male"><b>Male</b><br>
     <input type="radio" name="jenis_kelamin" value="Female"><b>Female</b>
     <p>Nationality</p>
     <select name="negara"> 
        <Option value="Indonesia" selected>Indonesia</Option>
        <Option value="Germany">Germany</Option>
        <Option value="Japanese">Japanese</Option>
        <Option value="Vietnamese">Vietnamese</Option>
     </select>
     <p>Language Spoken</p>
     <input name="bahasa[]" type="checkbox" value="Bahasa Indonesia">Bahasa Indonesia<br>
     <input name="bahasa[]" type="checkbox" value="English">English<br>
     <input name="bahasa[]" type="checkbox" value="Other">Other<br>
     <p>Bio</p>
     <textarea name="bio" cols="30" rows="10" required></textarea>
     <button type="submit">Daftar</button>
    </form>
</body>
</html>
