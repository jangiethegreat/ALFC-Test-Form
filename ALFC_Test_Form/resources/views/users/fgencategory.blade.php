@extends('layouts.app')

@section('content')

<style>
    .card {
        border-radius: 10px;
        background: #CC2E2E;
        width: 200px;
        height: 125px; /* Adjusted height */
        flex-shrink: 0;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-size: auto;
        margin:5px;
    }

    /* Override Bootstrap's default column padding */
 
    
    .cardView .card {
        width: 100px; /* Set your preferred width */
        height: 65px; /* Set your preferred height */
        background-size: 70px 45px;

    }
    .cardView .card:hover {
        transform: scale(1.1); /* Increases the size of the card on hover */
        transition: transform 0.3s ease; /* Adds a smooth transition effect */
    }
    .card:hover {
        transform: scale(1.1); /* Increases the size of the card on hover */
        transition: transform 0.3s ease; /* Adds a smooth transition effect */
    }
    
    
</style>

<h2 style="text-align: center; color: #332727; font-family: Montserrat; font-size: 40px; font-weight: 700; margin-top: 45px; margin-bottom: 50px;">
    Insurances for FGEN
</h2>
<?php
// Assuming $images is an array of image paths or objects with image properties.
$images = [
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    ['image' => 'assets/fgen.png'],
    // ... more items
];

// Split the array into chunks of 5.
$rows = array_chunk($images, 5);
?>

<!-- Iterate over each row -->
<?php foreach ($rows as $row): ?>
    <div class="row justify-content-center">
        <!-- Iterate over each image within the row -->
        <?php foreach ($row as $item): ?>
            <div class="col-md-2 col-sm-2 mb-3 d-flex justify-content-center">
                <div class="card" style="background-image: url({{ asset('<?= $item['image'] ?>') }});"></div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>

@endsection