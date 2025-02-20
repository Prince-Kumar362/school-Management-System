@extends('layouts.master_home')
@section('home_content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact US</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Contact US</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
   {{-- map  --}}
  
    <div class="map-section">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>
    <!-- ======= Contact Us Section ======= -->
    @include('layouts.body.contact')
@endsection
