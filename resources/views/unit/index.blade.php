<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Unit - Index</title>
  </head>
  <body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
           

            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Unit 
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Unit Add</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <form action="{{url('/unit')}}" method="POST">
      @csrf
            <div class="modal-body">
                <select name="types_id" id="typeSelect">
                    @if ($unitTypes)
                        <option value="">Select Unit Type</option>
                        @foreach ($unitTypes as $unitType)
                            <option value="{{$unitType->id}}">{{$unitType->name}}</option>
                        @endforeach
                        
                    @endif
                </select>


                    <div class="form-group row" id="specialUnitDiv">
                        <div class="col">
                            <label for="">Enter Special Unit</label><br>
                            <input type="text" name="name" id="">
                        </div>
                    </div>

                    <div class=" form-group row" id="rangeUnitDiv">
                        <input type="text" name="" placeholder="Range" id="">
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
              
        </form>
      </div>
    </div>
  </div>

  <h2> Unit List</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parent</th>
                    <th scope="col">Types</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @if ($units)
                    @foreach ($units as $key=>$unit)
                        <tr>
                        <th scope="row">{{++$key}}</th>
                            <td>{{$unit->name}}</td>
                            <td>{{$unit->description}}</td>
                            <td>Parent</td>
                            <td>Types</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    @endforeach

                @else

                <tr>
                    <td colspan="5">No Data Found</td>
                </tr>
                     
                 @endif
              
              
                </tbody>
              </table>
           
        </div>

    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <script>
        $(document).ready(function(){
            console.log('getting Jquery');
            $("#specialUnitDiv").hide();
            $("#rangeUnitDiv").hide()
            $("#typeSelect").change(function(){
                if(this.value == 1){
                    $("#rangeUnitDiv").show()
                    $("#specialUnitDiv").hide();
                   
                }else if(this.value == 2){
                    $("#specialUnitDiv").show();
                    $("#rangeUnitDiv").hide()
                }else{
                    $("#specialUnitDiv").hide();
                    $("#rangeUnitDiv").hide()
                }
               
            });
        });
    </script>
  </body>
</html>