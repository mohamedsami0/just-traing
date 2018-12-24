@extends('layouts.app')

@section('content')
    <!-- start write post-->
    <div class="write-post">
        <div class="container">
            <h1 class=" text-capitalize text-center">admin panel</h1>
            <div class="the-post">
                <h2 class=" text-capitalize">add a new post</h2>
                <form method="post" action="/posts/store" enctype=" multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control " name="title" type="text"  placeholder="Post Title..">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"  name="body" placeholder="What's on you're mind, mohamed"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="file" name="url">
                    </div>
                    <div class="form-group">
                        <input class="form-control btn-primary" type="submit" name="">
                    </div>
                </form>
            </div>
            <!-- end write post-->

            <!--start table-->
            <div class="t-admin">
                <h2 class=" text-capitalize">admin roules</h2>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--end table-->

        </div>
    </div>
    @stop