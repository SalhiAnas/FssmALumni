@extends('layouts.app')
@section('content')

<div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">Let's talk about everything!</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas debitis, fugit natus?</p>

              <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" method="post" id="contactForm" name="contactForm" action="{{route('cursusstore')}}">
              @csrf  
              <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="titre_cursus" id="titre_cursus" placeholder="title">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="année" id="année" placeholder="Year">
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="description" id="description" cols="30" rows="7" placeholder="Write your description"></textarea>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="enregistrer" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

@endsection