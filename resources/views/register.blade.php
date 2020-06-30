<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Buat Account baru!</h1>
    </header>
    <div>
    <form action="/welcome1" method="get">
        <h3 >Sign Up Form</h3>
        <p>First name :</p>
      <input type="text" name="Fname" id="Fname">
      <p>Last name:</p>
      <input type="text" name="Lname" id="Lname">
      <p>Gender :</p>
      <div>
            <input type="radio" name="optradio">Male
      </div>
       <div>
            <input type="radio" name="optradio">Female
      </div>
      <div>
            <input type="radio" name="optradio">Other
      </div>
      <p>Nationality</p>
      <div>
        <select name="negara" id="">
            <option value="">Indonesia</option>
            <option value="">Inggris</option>
            <option value="">Amerika</option>
        </select>
      </div>
      <p>Language Spoken :</p>
      <div>
          <div>
              <input type="checkbox">Bahasa Indonesia
          </div>
          <div>
            <input type="checkbox">English
          </div>
          <div>
            <input type="checkbox">Other
          </div>
      </div>
      <p>Bio :</p>
      <textarea name="" id="" cols="30" rows="10"></textarea>
      <div>
        <button type="submit" name="signup">Signup</button>
      </div>
    </form>
    
      
   
    </div>
</body>
</html>