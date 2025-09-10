@extends('layout')

@section('content')
<div class="profile-wrapper">
    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <a href="#about">About Me</a>
        <a href="#motto">Motto</a>
        <a href="#hobbies">Hobbies</a>
        <a href="#contact">Contact Me</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="card header-card">
            <img src="{{ asset('images/ella.jpg') }}" alt="Ella Estrella" class="photo">
            <h1>ELLA RAGMA. ESTRELLA</h1>
        </div>

        <div id="about" class="card">
            <h2>About Me</h2>
            <p>Hi! I’m Ella Estrella. I’m 21 years old and I live in Casilagan, Santa Cruz, Ilocos Sur. I am 3rd year college of BS Information Technology.</p>
        </div>

        <div id="motto" class="card">
            <h2>Motto</h2>
            <p>I believe kindness can change the world, one small act at a time. I hold on to this thought:
            “Even the smallest act of kindness can leave the biggest impact on someone's life.”</p>
        </div>

        <div id="hobbies" class="card">
            <h2>Hobbies</h2>
            <ul>
                <li><i class="fas fa-table-tennis-paddle-ball"></i> Playing lawn tennis</li>
                <li><i class="fas fa-gamepad"></i> Playing online games</li>
                <li><i class="fas fa-tv"></i> Watching Anime, GL Series, and Kdrama</li>
            </ul>
        </div>

        <div id="contact" class="card contact">
            <h2>Contact Me</h2>
            <p><i class="fab fa-facebook"></i><strong> Facebook:</strong>
                <a href="https://www.facebook.com/share/1Du2AUua2w/" target="_blank">facebook.com/ellaestrella</a>
            </p>
            <p><i class="fab fa-instagram"></i><strong> Instagram:</strong>
                <a href="https://www.instagram.com/ellang_estrella?igsh=MWxnejQ0d2ZhY255aA==" target="_blank">@ellang_estrella</a>
            </p>
        </div>
    </div>
</div>

<style>
    html { scroll-behavior: smooth; }
    body { background: #d9c7b5; margin: 0; font-family: 'Fredoka', sans-serif; }

    .profile-wrapper {
        display: flex;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Sidebar */
    .sidebar {
        width: 200px;
        background: #6e4f4f;
        min-height: 100vh;
        padding-top: 40px;
        position: sticky;
        top: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .sidebar a {
        color: #fff;
        text-decoration: none;
        margin: 20px 0;
        font-weight: bold;
        font-size: 18px;
        transition: color 0.3s;
    }
    .sidebar a:hover { color: #e0cfc2; }

    /* Main Content */
    .content {
        flex: 1;
        padding: 40px;
    }

    .card {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 2px 4px 10px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }

    .header-card {
        text-align: center;
        background: url('{{ asset("images/cardheader.jpg") }}') center/cover no-repeat;
        position: relative;
        color: white;
        padding: 40px 20px;
    }

    .header-card::after {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.3); /* Overlay for text visibility */
        border-radius: 10px;
    }

    .header-card img.photo {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        object-fit: cover;
        border: 8px solid white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }

    .header-card h1 {
        margin: 0;
        font-size: 28px;
        color: #fff;
        position: relative;
        z-index: 1;
    }

    h2 {
        color: #6e4f4f;
        border-bottom: 2px solid #e0cfc2;
        padding-bottom: 5px;
        margin-bottom: 15px;
        font-size: 22px;
    }

    p, li { color: #3a2d2d; line-height: 1.6; }

    ul { list-style: none; padding: 0; }
    li i { margin-right: 10px; color: #6e4f4f; }

    .contact a {
        color: #933f3f; text-decoration: none;
        transition: color 0.3s ease;
    }
    .contact a:hover { color: #c95b5b; text-decoration: underline; }
</style>

<!-- FontAwesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
@endsection
