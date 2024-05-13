<x-nav/>
<center><h1>Crud Operation in laravel login Page</h1></center><hr>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 border border-dark mt-5 p-2 ">
        <form action="">
            Enter Email
            <input type="text" name="e" class="form-control mb-3"/><br>

            Enter Password
            <input type="text" name="p" class="form-control mb-3"/><br>

            <input type="submit" name="submit" class="btn btn-primary mt-2" value="submit" type="submit">
            <br>
                    <a href="register">Registered !! here</a>
            <center>
                <h3>{{$msg}}</h3>
            </center>
        </form>
    </div>
</div>