@extends('layouts.app')


@section('content')


<div id="top" class="container-fluid text-center">
  <h2>Presentations</h2>
  <br>
    <div class="col-sm-12 table-responsive">
<table class="table table-bordered table-responsive">
        <thead>
          <tr>
          <td>Workshop</td>
          <td>Name</td>
          <td>Action</td>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($pres as $p) {
              echo '<tr>';
              echo '<td>'.$p->name.'</td>';
              echo '<td>'.$p->workshop.'</td>';
              echo '<td><a  href="download/presentations/'.$p->filename.'"> Download </a></td>';
              echo '<tr>';
            }
          ?>          
        </tbody>
      </table>  
      
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
