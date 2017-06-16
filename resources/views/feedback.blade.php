@extends('layouts.app')


@section('content')


<div id="top" class="container-fluid text-center">
  <h2>Feedback</h2>
  <br>
    <div class="col-sm-12">
      <form action="/submitt" method="post">
        <div class="row">  
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="fname">Your Name:</label>
          <input type="text" class="form-control" placeholder="Enter name" name="fname">
        </div>
        </div>
        <div class="row">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>
        </div>
        <div class="row">
        <div class="form-group">
          <label for="wname">Workshop Name:</label>
          <select class="form-control" id="sel1" name="event_name">
            <option readonly>Select</option>
            <?php
              foreach ($workshop as $w) {
                echo '<option>'.$w->workshop.' - '.$w->date.'</option>';
              }
            ?>
          </select>
        </div>
        </div>
        <div class="row">
        Please rate the following between 1-5(5 being the highest):<br>
        <div class="radio">
          <label for="contentrate" class="col-sm-5">Content:</label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="content" value="1">1
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="content" value="2">2
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="content" value="3">3
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="content" value="4">4
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="content" value="5">5
          </label>
        </div>
        </div>
        <div class="row">
        <div class="radio">
          <label for="presentationrate" class="col-sm-5">Presentation:</label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="presentation" value="1">1
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="presentation" value="2">2
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="presentation" value="3">3
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="presentation" value="4">4
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="presentation" value="5">5
          </label>
        </div>
        </div>
        <div class="row">
        <div class="radio">
          <label for="speakerrate" class="col-sm-5">Speaker:</label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="speaker" value="1">1
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="speaker" value="2">2
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="speaker" value="3">3
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="speaker" value="4">4
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="speaker" value="5">5
          </label>
        </div>
        </div>
        <div class="row">
        <div class="radio">
          <label for="organizationrate" class="col-sm-5">Organization:</label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="organization" value="1">1
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="organization" value="2">2
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="organization" value="3">3
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="organization" value="4">4
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="organization" value="5">5
          </label>
        </div>
        </div>
        <div class="row">
        <div class="radio">
          <label for="overallrate" class="col-sm-5">Overall:</label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="overall" value="1">1
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="overall" value="2">2
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="overall" value="3">3
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="overall" value="4">4
          </label>
          <label class="radio-inline col-sm-1">
            <input type="radio" name="overall" value="5">5
          </label>
        </div>
      </div>
        <div class="row">
        <div class="form-group">
          <label for="suggestions">Suggestions:</label>
          <textarea class="form-control" rows="5" id="suggestions" name="suggestions"></textarea>
        </div> 
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
