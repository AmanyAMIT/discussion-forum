@extends('layouts.user')
@section('title') Welcome | @endsection
    
@section('content')

<div class="container">
<div class="main-body p-0">
    <div class="inner-wrapper">
        

        <!-- Inner main -->
        <div class="inner-main">


            <!-- Inner main body -->

            <!-- Forum List -->
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                @foreach ($forums as $forum)
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                            <div class="media-body">
                                <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">{{$forum->user->name}}</a></h6>
                                <p class="text-secondary">
                                    {{$forum->title}}
                                </p>
                                <p class="text-muted"><a href="javascript:void(0)">drewdan</a> replied <span class="text-secondary font-weight-bold">13 minutes ago</span></p>
                            </div>
                            <div class="text-muted small text-center align-self-center">
                                <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                <span><i class="far fa-comment ml-2"></i> 3</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <ul class="pagination pagination-sm pagination-circle justify-content-center mb-0">
                    <li class="page-item disabled">
                        <span class="page-link has-icon"><i class="material-icons">chevron_left</i></span>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item active"><span class="page-link">2</span></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item">
                        <a class="page-link has-icon" href="javascript:void(0)"><i class="material-icons">chevron_right</i></a>
                    </li>
                </ul>
            </div>
            <!-- /Forum List -->

            <!-- Forum Detail -->
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content">
                <a href="#" class="btn btn-light btn-sm mb-3 has-icon" data-toggle="collapse" data-target=".forum-content"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="media forum-item">
                            <a href="javascript:void(0)" class="card-link">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" width="50" alt="User" />
                                <small class="d-block text-center text-muted">Newbie</small>
                            </a>
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-secondary">Mokrani</a>
                                <small class="text-muted ml-2">1 hour ago</small>
                                <h5 class="mt-1">Realtime fetching data</h5>
                                <div class="mt-3 font-size-sm">
                                    <p>Hellooo :)</p>
                                    <p>
                                        I'm newbie with laravel and i want to fetch data from database in realtime for my dashboard anaytics and i found a solution with ajax but it dosen't work if any one have a simple solution it will be
                                        helpful
                                    </p>
                                    <p>Thank</p>
                                </div>
                            </div>
                            <div class="text-muted small text-center">
                                <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                <span><i class="far fa-comment ml-2"></i> 3</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="media forum-item">
                            <a href="javascript:void(0)" class="card-link">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" width="50" alt="User" />
                                <small class="d-block text-center text-muted">Pro</small>
                            </a>
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-secondary">drewdan</a>
                                <small class="text-muted ml-2">1 hour ago</small>
                                <div class="mt-3 font-size-sm">
                                    <p>What exactly doesn't work with your ajax calls?</p>
                                    <p>Also, WebSockets are a great solution for realtime data on a dashboard. Laravel offers this out of the box using broadcasting</p>
                                </div>
                                <button class="btn btn-xs text-muted has-icon"><i class="fa fa-heart" aria-hidden="true"></i>1</button>
                                <a href="javascript:void(0)" class="text-muted small">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Forum Detail -->

            <!-- /Inner main body -->
        </div>
        <!-- /Inner main -->
    </div>

    <!-- New Thread Modal -->
    <div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header d-flex align-items-center bg-primary text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="threadTitle">Title</label>
                            <input type="text" class="form-control" id="threadTitle" placeholder="Enter title" autofocus="" />
                        </div>
                        <textarea class="form-control summernote" style="display: none;"></textarea>

                        <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                            <input type="file" class="custom-file-input" id="customFile" multiple="" />
                            <label class="custom-file-label" for="customFile">Attachment</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">

</script>
</body>
</html>

@endsection