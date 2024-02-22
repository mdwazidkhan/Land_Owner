<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Land</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('land.update', ['land' => $land])}}">
        @csrf 
        @method('put')
        <div>
            <label>Blockname</label>
            <input type="text" name="blockname" placeholder="Blockname" value="{{$land->blockname}}" />
        </div>
        <div>
            <label>Village</label>
            <input type="text" name="village" placeholder="Village" value="{{$land->village}}" />
        </div>
        <div>
            <label>Location</label>
            <input type="text" name="location" placeholder="Location" value="{{$land->location}}" />
        </div>
        <div>
            <label>Area</label>
            <input type="text" name="area" placeholder="Area" value="{{$land->area}}" />
        </div>
        <div>
            <label>Ownername</label>
            <input type="text" name="ownername" placeholder="Ownername" value="{{$land->ownername}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>
