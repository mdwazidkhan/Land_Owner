<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      h1{
        color:blue;
        text-align:left;
      }
      
      </style>
</head>
<body>
    <h1>Create a Land</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('land.store')}}">
        @csrf 
        @method('post')
        <div>
            <label>Blockname</label>
            <input type="text" name="blockname" placeholder="Blockname" />
        </div>
        <div>
            <label>Village</label>
            <input type="text" name="village" placeholder="Village" />
        </div>
        <div>
            <label>Location</label>
            <input type="text" name="location" placeholder="Location" />
        </div>
        <div>
            <label>Area</label>
            <input type="text" name="area" placeholder="Area" />
        </div>
        <div>
            <label>Ownername</label>
            <input type="text" name="ownername" placeholder="Ownername" />
        </div>
        <div>
            <input type="submit" value="Save a New Land" />
        </div>
    </form>
</body>
</html>
