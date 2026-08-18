<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @isset($loader)
       <p>Loading....</p>
    @endisset   
    <ul>
        <li>Item-1</li>
        <li>Item-2</li>
        <li>Item-3</li>
        <li>Item-4</li>
        <li>
            @if($auth)
               <span>welcome to app</span><button>Logout</button>
            @else
               <button>Login</button>   
            @endif   
        </li>
    </ul>

    @empty($product)
        <p>No records found</p>
    @endempty 
    
    <hr>
    <h2>Loop example</h2>
    @for($i=1;$i<=10;$i++)
       <p>i={{$i}}</p>
    @endfor   
</body>
</html>