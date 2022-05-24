<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome To the Movie Database Rating System</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- CSS only -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<section>
<div class="container">
  <div id="content" class="main-content">
      <div class="layout-px-spacing">
                    <div class="col-lg-12 col-12  layout-spacing">
                              <div class="statbox widget box box-shadow">
                                  <div class="widget-header">
                                      <div class="row">
                                          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                              <h1 class="text-center">Add New Movie</h1>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="widget-content widget-content-area">

                                    <form method="POST" action="{{route('savenewmovie')}}" enctype="multipart/form-data">
                                   @csrf
                                       <div class="card-body">
                                         <div class="form-group">
                                            <label class="form-label" for="basic-addon-title">Enter Movie Name</label>
                                           <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" maxlength="100">
                                                 <span>@if ($errors->has('title'))
                                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                                @endif</span>
                                         </div>


                                 <div class="row">
                                   <div class="col-xl-12">
                                       <div class="form-group">
                                         <label class="form-label" for="basic-addon-rdate">Release Date</label>
                                         <input type="date" class="form-control" id="rdate" placeholder="Please select Date" name="rdate">
                                           <span>@if ($errors->has('rdate'))
                                                  <span class="text-danger">{{ $errors->first('rdate') }}</span>
                                              @endif</span>
                                       </div>
                                   </div>
                                 <div class="col-xl-12">
                                     <div class="form-group">
                                       <label class="form-label" for="basic-addon-rating">Rating</label>
                                         <input onkeypress="isInputNumber(event)" class="form-control" maxlength="2" type="text" placeholder="Enter Rating" name="rating">

                                         <span>@if ($errors->has('rating'))
                                         <span class="text-danger">{{ $errors->first('rating') }}</span>
                                     @endif</span>
                                     </div>
                                 </div>
                               </div>

                               <div class="form-group">
                               <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                               <div class="input-group">

                                 <input id="thumbnail" class="form-control" type="file" name="photo" value="{{old('photo')}}">
                               </div>
                               <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                 @error('poster')
                                 <span class="text-danger">{{$message}}</span>
                                 @enderror
                               </div>
                              <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                   <input type="checkbox" class="custom-control-input" id="validationCheckBootstrap" required />
                                   <label class="custom-control-label" for="validationCheckBootstrap"
                                      >Agree to our terms and conditions</label
                                      >
                                   <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                              </div>
                                       </div>
                                       <!-- /.card-body -->

                                       <div class="card-footer">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                       </div>
                                     </form>
                                      </div>


                                  </div>
                              </div>
                          </div>
                        </div>
</div>

</section>
<h1 class="text-center"><a href="{{'/'}}">Back To Home</a></h1>
<script>
           function isInputNumber(evt){
               var ch = String.fromCharCode(evt.which);
               if(!(/[0-9]/.test(ch))){
                   evt.preventDefault();
               }
           }
       </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
