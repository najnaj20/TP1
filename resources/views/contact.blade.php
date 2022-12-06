@extends('layouts.main')

@section('container')
   
<!DOCTYPE html>
<html>
  <head>
    <title>Hubungi Kami</title>
    <style>
      body {
        font-family: sans-serif;
      }
      .container {
        width: 800px;
        margin: 0 auto;
      }
      .form-group {
        margin-bottom: 20px;
      }
      .form-group label {
        display: block;
        font-weight: bold;
        font-size: 14px;
      }
      .form-group input, .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        font-size: 14px;
      }
      .form-group textarea {
        height: 200px;
      }
      .form-group input[type="submit"] {
        background-color: #0099ff;
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        padding: 10px;
        border: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Hubungi Kami</h1>
      <form action="">
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="message">Pesan</label>
          <textarea name="message" id="message"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Kirim">
        </div>
      </form>
    </div>
  </body>
</html>
   


    
@endsection 