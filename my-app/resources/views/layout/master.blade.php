<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        td[colspan="2"]{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #ccc;
            
        }
        table{
            background: #58249c;
        }
       
    </style>
</head>

<body>
    <table width=100% class="table ">
        <tr>    
            <td colspan="2" height="100" class="text-center fs-2 p-3 fw-bolder "> School Management System</td>
        </tr>
        <tr height="400">
            <td width=20% >
                <div class="list-group mt-5 text-center">
                    <a href="{{url('home')}}" class="list-group-item list-group-item-action list-group-item-success">Home</a>
                    <a href="{{url('about')}}" class="list-group-item list-group-item-action list-group-item-success">About</a>
                    <a href="{{url('services')}}" class="list-group-item list-group-item-action list-group-item-success">Services</a>
                    <a href="{{url('gallery')}}" class="list-group-item list-group-item-action list-group-item-success">Gallery</a>
                    <a href="{{url('contact')}}" class="list-group-item list-group-item-action list-group-item-success">Contact</a>
                </div>
            </td>
            <td width=80% style="background: white;">@yield('content')</td>
        </tr>
        <tr>
            <td colspan="2"  height="100" class="text-center fs-2">footer</td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>