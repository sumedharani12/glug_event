@extends('layouts.app')


@section('content')

<div id="top" class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-12">
      <center><img  class="img-responsive" src="{{ URL::asset('assets/img/logo.png') }} "></center><br>
        <h2>   About GLUG</h2><br>
      <h4> The GNU/Linux Users’ Group of NIT Durgapur is a community of GNU/Linux users and promoters of Free and Open Source Software.<br>

The Group was established in 2003 by a bunch of FOSS enthusiasts with the objective of spreading awareness about the world of Free and Open Source Softwares and popularising their use in the campus. Since then the group has evolved into a body that is now an active part of the open source community through numerous contributions to a wide range of open source projects. The group strives hard to introduce the philosophy and encourage the use of FOSS across all departments of study, here at NIT Durgapur.
<br>
We, the members, believe that Software freedom is as essential as the civil liberty of freedom of Speech.<br>
From organizing workshops on the latest market technologies to conducting the largest FOSS carnival of Eastern India, we do it all! </h4>
    </div>
  </div>
</div>

<div id="services" class="container-fluid text-center">
  <h2>Upcoming Workshops</h2>
  <br>
    <div class="col-sm-12">
        <table class="table table-responsive">
          <thead>
            <tr>
            <td>Workshop</td>
            <td>Date</td>
            <td>Venue</td>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($workshop as $w) {
                echo '<tr>';
                echo '<td>'.$w->workshop.'</td>';
                echo '<td>'.$w->date.'</td>';
                echo '<td>'.$w->loc.'</td>';
                echo '<tr>';
              }
            ?>          
          </tbody>
        </table>
    </div>
    </div>
</div>

@endsection

@section('myjs')
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#top']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
@endsection