@extends('layout')

@section('content')
<style>
    body {
        background: #e07575ff;
        color: #fff; 
    }

    .home-container {
        background: none; /* No gradient */
        padding: 4rem 2rem;
        max-width: 900px;
        margin: 3rem auto;
        text-align: center;
    }

    .profile-img {
        width: 260px;
        height: 260px;
        border-radius: 50%;
        object-fit: cover;
        border: 6px solid white;
        box-shadow: 0 8px 20px rgba(216, 183, 205, 0.5);
        margin-bottom: 3rem;
    }

    .names a {
        display: block;
        font-size: 1.25rem; /* ≈ H4 size */
        color: #fff;
        margin: 10px 0;
        text-decoration: none;
        transition: color 0.3s, transform 0.3s;
    }

    .names a:hover {
        color: #ff5e5e;
        transform: scale(1.05);
    }

    h1, h3 {
        color: #241818ff;
    }
</style>

<div class="home-container">
    <h1 class="display-4 fw-bold mb-3">Welcome Group Cheater</h1>
    <h3 class="text-secondary mb-5">BSIT 3-A</h3>

    <img src="{{ asset('images/group-photo.jpg') }}" alt="Group Photo" class="profile-img">

    <div class="names mt-5">
        <a href="https://ella351.github.io/MY-PROFILE/" target="_blank">Ella Estella</a>
        <a href="https://sandy052005.github.io/sandy/" target="_blank">Sandy Micua</a>
        <a href="https://rorymb19.github.io/Biography/" target="_blank">Rory Barnachea</a>
    </div>
</div>
@endsection
