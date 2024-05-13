<x-nav/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <center><h1 style="color:darkgoldenrod">Geting Database </h1></center><hr>
            <div class="col-md-3"></div>
            <div class="col-md-7">
                <a href="/insert" class="btn btn-primary">Add Record</a> <br><br>
                <table class="table table-bordered table-dark table-danger table-hover">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Course</td>
                        <td>Action</td>
                    </tr>
                    @foreach ( $mydata as $res )
                        <tr>
                            <td>{{$res['id']}}</td>
                            <td>{{$res['name']}}</td>
                            <td>{{$res['course']}}</td>

                            <td>
                                <a href="/delete?delid={{$res['id']}}" class="btn btn-danger">Delete</a>
                                &emsp;
                                <a href="/edit?editid={{$res['id']}}" class="btn btn-success">Edit</a>
                            </td>
                            
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</body>
</html>