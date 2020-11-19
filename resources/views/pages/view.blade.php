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
        
  
 

  <h2> Page List</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Url</th>
                    <th scope="col">Range</th>
                    <th scope="col">District</th>
                    <th scope="col">P.Station</th>
                    <th scope="col">Bit</th>
                    <th scope="col">S.Unit</th>
                  </tr>
                </thead>
                <tbody>
                 @if ($pages)
                    @foreach ($pages as $key=>$page)
                        <tr>
                        <th scope="row">{{++$key}}</th>
                            <td>{{$page->name}}</td>
                            <td>{{$page->url}}</td>
                            @php
                            
                                $range ="";
                                $district="";
                                $pstation="";
                                $bit="";

                                $unit = DB::table('units')->where('id', $page->unit_id)->first();
                                if($unit->types_id ==1){
                                    $range = $unit->name;
                                }elseif($unit->types_id ==2){
                                    $abc = DB::table('units')->where('id', $unit->parent_id)->first();
                                    $range = $abc->name;
                                    $district =$unit->name;
                                }elseif($unit->types_id==3){
                                    $abcd = DB::table('units')->where('id', $unit->parent_id)->first();
                                    $district = $abcd->name;
                                    $abcde = DB::table('units')->where('id', $abcd->parent_id)->first();
                                    $range = $abcde->name;
                                    $pstation= $unit->name;
                                }elseif ($unit->types_id==4) {
                                    $bit=$unit->name;
                                    $abcdef = DB::table('units')->where('id', $unit->parent_id)->first();
                                    $pstation= $abcdef->name;
                                    $abcdefg = DB::table('units')->where('id', $abcdef->parent_id )->first();
                                    $district=$abcdefg->name;
                                    $abcdefgh = DB::table('units')->where('id', $abcdefg->parent_id )->first();
                                    $range = $abcdefgh->name;
                                }


                            @endphp
                            <td>{{$range}}</td>
                            <td>{{$district}}</td>
                            <td>{{$pstation}}</td>
                            <td>{{$bit}}</td>
                            <td>
                                @if ($unit->types_id==5)
                                    {{$unit->name}}
                                @endif
                                
                            </td>
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

  </body>
</html>