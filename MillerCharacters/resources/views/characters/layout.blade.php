
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
 </head>
        <title>
            Characters
        </title>

        <body>
            <div class ="container">
            <h1>Characters App</h1>
            @if (session()-> get ('success'))
            <div class="toast toast-success">
                {{session()->get ('success')}}

            </div>
            @endif
            <div class="mt-1">
            @yield('content')
            </div>
          
            </div>
        </body>
</html>