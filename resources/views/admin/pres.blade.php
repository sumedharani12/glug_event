@extends('layouts.adminapp')


@section('content')


<div id="top" class="container-fluid text-center">
  <h2>Add Presentation</h2>
  <br>
    <div class="col-sm-12">
      <form action="/padd" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="wname">Workshop Name:</label>
          <input type="text" class="form-control" placeholder="Enter name" name="wname">
        </div>
        <div class="form-group">
          <label for="wdate">Workshop Date:</label>
          <input type="date" class="form-control" placeholder="YYYY-MM-DD" name="wdate">
        </div>
        <div class="form-group">
          <label for="pname">Presentation Name:</label>
          <input type="text" class="form-control" placeholder="Enter name" name="pname">
        </div>
        <div class="form-group">
          <label for="prname">Presentation:</label>
          <input type="file" class="form-control" name="presen">
        </div>
         
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
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
  
  
})
</script>
@endsection
