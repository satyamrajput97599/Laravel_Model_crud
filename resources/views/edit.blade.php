<x-nav/>
<center style="background-color: forestgreen"><h1>Welcome to Edit Page</h1></center>
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color: gray">
        <form action="">
            ID
            <input type="text" name="i" class="form-control" value="{{$mydata['id']}}"><br>
            Name
            <input type="text" name="n" class="form-control" value="{{$mydata['name']}}">
            <br>
            Course
            <input type="text" name="c" class="form-control" value="{{$mydata['course']}}">
            <br>
            <input type="submit" name="submit" value="Update" class="btn btn-danger">
        </form>
    </div>
</div>