@extends('layout')

@section('content')
<div class="sandy-wrapper">
    <!-- Top Navigation -->
    <nav class="sandy-nav">
        <a href="#profile">Profile</a>
        <a href="#motto">Motto</a>
        <a href="#facts">Facts</a>
        <a href="#hobbies">Hobbies</a>
    </nav>

    <div class="sandy-container">
        <!-- Profile Card -->
        <div id="profile" class="sandy-card sandy-header">
            <img src="{{ asset('images/sandy.jpg') }}" alt="Sandy Micua" class="sandy-photo">
            <h2>Sandy Micua</h2>
            <p><strong>Age:</strong> 20</p>
            <p><strong>Birthday:</strong> May 15, 2005</p>
            <p><strong>Status:</strong> Single</p>
            <p><strong>Address:</strong> Rissing Luna, La Union</p>
        </div>

        <!-- Motto -->
        <div id="motto" class="sandy-card">
            <h3>My Motto</h3>
            <p>"The destination is still far, but I've made great progress."</p>
        </div>

        <!-- Facts -->
        <div id="facts" class="sandy-card">
            <h3>Facts About Me</h3>
            <ul>
                <li>A girl who loves coffee dates.</li>
                <li>I enjoy spending time alone and embracing my own company.</li>
                <li>I believe in slow but steady progress.</li>
            </ul>
        </div>

        <!-- Hobbies -->
        <div id="hobbies" class="sandy-card">
            <h3>My Hobbies</h3>
            <ul>
                <li>Visiting my favorite places for peace and inspiration</li>
                <li>Watching movies</li>
                <li>Exploring new spots and making quiet memories</li>
            </ul>
        </div>
    </div>
</div>

<style>
    body {
        background: #f1f1f1;
        font-family: Arial, sans-serif;
    }

    /* Wrapper */
    .sandy-wrapper {
        max-width: 900px;
        margin: 0 auto;
    }

    /* Top Nav */
    .sandy-nav {
        display: flex;
        justify-content: center;
        background: #6a0dad;
        padding: 15px;
        border-radius: 0 0 10px 10px;
        position: sticky;
        top: 0;
        z-index: 1000;
    }
    .sandy-nav a {
        color: white;
        text-decoration: none;
        margin: 0 20px;
        font-weight: bold;
        transition: color 0.3s;
    }
    .sandy-nav a:hover {
        color: #ddd;
    }

    /* Card Styles */
    .sandy-container {
        padding: 30px 15px;
    }
    .sandy-card {
        background: #ddd;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 25px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .sandy-card h3 {
        margin-bottom: 15px;
    }
    .sandy-card ul {
        padding-left: 20px;
    }

    /* Profile Card */
    .sandy-header {
        text-align: center;
    }
    .sandy-photo {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #6a0dad;
        margin-bottom: 15px;
    }
</style>
@endsection
