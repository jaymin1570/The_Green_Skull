<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">The Green Skull</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/The_Green_Skull/">Home <span class="sr-only">(current)</span></a>
            </li>

                <a class="nav-link " href="http://wahmodijiwah.ml/">Online-Quize</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/The_Green_Skull/feedback/">Feedback</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Shared Problems</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">About</a>
            </li>
        </ul>

        <button class="btn btn-success my-2 my-sm-0 mx-2" data-toggle="modal" data-target="#login"
            type="submit">Login</button>


        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login
                            Here</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="userid">User Id</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="userid" placeholder="Enter user id" required>
                                <small id="emailHelp" class="form-text
                                    text-muted">We'll never share your user id
                                    with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>




    </div>
</nav>