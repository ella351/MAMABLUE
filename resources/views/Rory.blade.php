@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Me - Rory Murao Barnachea</title>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Fredoka', sans-serif;
      background: #d9c7b5;
      padding: 20px;
    }

    .container {
      max-width: 900px;
      margin: auto;
      background: #f5f1eb;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.15);
      border-radius: 12px;
      position: relative;
    }

    .header {
      display: flex;
      gap: 20px;
      align-items: center;
      flex-wrap: wrap;
    }

    .photo {
      width: 200px;
      border: 8px solid white;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .info h1 {
      margin: 0;
      font-size: 48px;
      color: #3a2d2d;
    }

    .info p {
      font-size: 16px;
      margin: 5px 0;
      color: #933f3f;
    }

    .about {
      margin-top: 30px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 2px 4px 10px rgba(0,0,0,0.1);
    }

    .about h2 {
      margin-top: 0;
      font-size: 24px;
    }

    .section {
      margin-top: 40px;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
    }

    .facts {
      flex: 1;
    }

    .facts h2 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    ul {
      list-style-type: disc;
      padding-left: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="{{ asset('images/rory.jpg') }}" alt="Rory Murao Barnachea" class="photo">
      <div class="info">
        <h2>RORY MURAO BARNACHEA</h2>
      </div>
    </div>

    <div class="about">
      <h2>About Me</h2>
      <p>I’m Rory Murao Barnachea, 19 years old from Pudoc East, Tagudin, Ilocos Sur. 
         I am a 3rd year college student of BS Information Technology.</p>
    </div>

    <div class="section">
      <div class="facts">
        <h2>Hobbies</h2>
        <ul>
          <li>Swimming</li>
          <li>Listening to music</li>
          <li>Watching K-drama</li>
        </ul>
      </div>
    </div>

    <div class="section">
      <div class="facts">
        <h2>Personality</h2>
        <ul>
          <li>I am a quiet person and helpful, I also enjoy working independently. 
              I work to support myself, but I also value doing things on my own 
              and learning through experience.</li>
        </ul>
      </div>
    </div>

    <div class="section">
      <div class="facts">
        <h2>Educational Background</h2>
        <ul>
          <li><strong>Elementary School:</strong> Pudoc Old Alzate Elementary School (2011-2017)</li>
          <li><strong>High School:</strong> Pudoc West Integrated School (2018-2022)</li>
          <li><strong>College:</strong> Ilocos Sur Polytechnic State College, 
              BS Information Technology (2025-Present)</li>
        </ul>
      </div>

      <div class="facts">
        <h2>Social Media</h2>
        <ul>
          <li><strong>Facebook:</strong> 
            <a href="https://www.facebook.com/your_profile_name" target="_blank">Rory Murao Barnachea</a>
          </li>
          <li><strong>Instagram:</strong> 
            <a href="https://www.instagram.com/pretty_ror05" target="_blank">@pretty_ror05</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
@endsection
