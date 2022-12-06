@extends('layouts.main')

@section('container')
    <h1>Beranda</h1>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/belajar.jpg"  class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/belajar2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/belajar3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!DOCTYPE html>
<html>
  <head>
    <title>Kursus Mengemudi</title>
    <style>
      body {
        font-family: sans-serif;
      }
      .container {
        width: 800px;
        margin: 0 auto;
      }
      .row {
        display: flex;
        flex-wrap: wrap;
      }
      .column {
        flex: 33.33%;
        padding: 10px;
      }
      .column img {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Kursus Mengemudi</h1>
      <div class="row">
        <div class="col-md-4">
            <div class="box">
            <img src="img/cari.JPEG" alt="Cari">
            <figcaption>Kamu bisa memilih mobil dengan transmisi matic, manual ataupun memilih trainer sesuai keinginanmu</figcaption>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
            <img src="img/penawaran.JPEG" alt="Penawaran">
            <figcaption>Dapatkan Penawaran Terbaik Dari Kami</figcaption>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
            <img src="img/jadwal.JPEG" alt="Jadwal">
            <figcaption>Kamu bisa memilih jadwal sesuai keinginan kamu</figcaption>
            </div>
         </div>
        </div>
    </div>
  </body>
</html>



@endsection