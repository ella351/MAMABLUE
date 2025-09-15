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
@endsection
