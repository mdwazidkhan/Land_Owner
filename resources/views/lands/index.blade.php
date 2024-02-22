<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
     table {
  border-collapse: collapse;
  width: 100%;
}

th {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
td {
  height: 50px;
  vertical-align: bottom;
}

tr:hover {background-color: coral;
         color:blue;
}

th {
  background-color: #04AA6D;
  color: black;
}
h1{
    color:green;
    text-align:center;
}
a {
  color:#b30000;
}

      </style>
</head>
<body>
    
    <h1>Land</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif  
    </div>
    <div>
        <div>
            <a href="{{route('land.create')}}">Create a Land Details</a>
        </div>
      
        <table class="table" border="1">
  <thead class="table-dark">   
  <tr class="table-light">
                <th>ID</th>
                <th>Blockname</th>
                <th>Village</th>
                <th>Location</th>
                <th>Area</th>
                <th>Ownername</th>
                <th>Edit</th>
                <th>Delete</th>
</tr>
</thead>
            @foreach($lands as $land  )
                <tr>
                    <td>{{$land->id}}</td>
                    <td>{{$land->blockname}}</td>
                    <td>{{$land->village}}</td>
                    <td>{{$land->location}}</td>
                    <td>{{$land->area}}</td>
                     <td>{{$land->ownername}}</td>
                    <td>
                        <a href="{{route('land.edit', ['land' => $land])}}">Edit</a>
                        
                       
                    </td>
                    <td>
                        <form method="post" action="{{route('land.destroy', ['land' => $land])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
