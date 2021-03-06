<!DOCTYPE html>
<html>
<head>
<title>Animals</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/animal.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class='signup-container'>
  <div class='left-container'>
  <h1>
    <i class='fas fa-paw'></i>
    ANIMAL-SHELTER
  </h1>
  <div class='puppy'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png'>
  </div>
  </div>
  <form action="/animals" method="post" enctype="multipart/form-data">
  <div class='right-container'>
  <header>
    <div class='set'>
      <div class='pets-name'>
        <label for='name'>Name</label>
        <input id='name' placeholder="Pet's name" type='text' name='name'>
      </div>
      <div class='pets-type'>
        <label for='type'>Type</label>
        <input id='type' placeholder="Pet's type" type='text' name='type'>
      </div>
    </div>
    <div class='set'>
      <div class='pets-breed'>
        <label for='breed'>Breed</label>
        <input id='breed' placeholder="Pet's breed" type='text' name='breed'>
      </div>
      <div class='pets-birthday'>
        <label for='age'>Age</label>
        <input id='age' placeholder="Pet's age" type='text' name='age'>
      </div>
    </div>
    <div class='set'>
      <div class='pets-gender'>
        <label for='pet-gender-female'>Gender</label>
        <div class='radio-container'>
          <input checked='' id='pet-gender-female' name='sex' type='radio' value='0'>
          <label for='pet-gender-female'>Female</label>
          <input id='pet-gender-male' name='sex' type='radio' value='1'>
          <label for='pet-gender-male'>Male</label>
        </div>
      </div>
      <div class='pets-spayed-neutered'>
        <label for='pet-spayed'>Pet's status</label>
        <div class='radio-container'>
          <input checked='' id='pet-spayed' name='status' type='radio' value='0'>
          <label for='pet-spayed'>Free</label>
          <input id='pet-neutered' name='status' type='radio' value='1'>
          <label for='pet-neutered'>Sheltered</label>
        </div>
      </div>
    </div>
    <br>

    <div class='pets-photo'>

      <label for="photo">Photo:</label>
      <input type="file" id="photo" name="photo">
    </div>
  </header>
  <footer>
    <div class='set'>
      <input type="submit" id='next' value="Add">
    </div>
  </footer>
  </div>
  @csrf
  </form>
  </div>
</body>
</html>
