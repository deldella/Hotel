<!doctype html>
<html lang="en">
  <head>

  </head>

<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #9ab973;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #96a53c;
}

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer; }

.square{
  width: 50%;
  margin-left: 25%;
}

</style>

<body>
<ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#news">Hotel</a></li>
</ul>
<center><h3>Tambah Hotel</h3></center>

<div class="square">
<form action="/home" method="POST">
@csrf
    <label for="fname">Nama Hotel</label>
    <input type="text" id="fname" name="nama_hotel" placeholder="Your name..">

    <label for="lname">Lokasi</label>
    <input type="text" id="lname" name="lokasi" placeholder="Your last name..">

    <label for="lname">Harga Permalam</label>
    <input type="text" id="lname" name="harga" placeholder="Your last name..">

    <label for="lname">Image</label><br>
    <input type="file" id="lname" name="image" placeholder="Your last name.."><br>

    <br><label for="lname">Fasilitas</label>
    <input type="text" id="lname" name="fasilitas" placeholder="Your last name..">


    <br><label for="lname">Synopsis</label>
    <textarea name="sinopsis"></textarea>

    <input type="submit">
  </form>
</div>

  </body>
</html>
