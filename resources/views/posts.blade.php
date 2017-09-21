@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Subject</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $post) {   ?>                   
                              <tr>
                                <td><?php echo $post->id; ?> </td>
                                <td><?php echo $post->title; ?> </td>
                                <td><?php echo $post->excerpt; ?> </td>
                              </tr>
                           <?php }?>                          
                        </tbody>
                    </table>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
