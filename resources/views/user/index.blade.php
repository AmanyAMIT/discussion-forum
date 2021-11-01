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
                                <p class="text-secondary">
                                    {{$forum->body}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{route('answer.store')}}" class="contact-form form-validate" novalidate="novalidate">
                        @csrf
                        <input type="hidden" name="status" id="" value="0">
                        <input type="hidden" name="rate" id="" value="0">
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <input type="hidden" name="forum_id" value="{{$forum->id}}">
                                <label class="required-field" for="firstName">Answer</label>
                                <textarea name="answer" id="" cols="90" rows="7"></textarea>
                                @error('answer')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <input type="submit" name="submit" class="btn btn-primary" value="Post">
                        </div>
                        @foreach ($answers as $answer)
                            @if ($answer->forum->id == $forum->id)
                            <p class="text-muted mx-3 text-secondary font-weight-bold"><a href="{{route('answer.show' , $answer->id)}}">See Answers!</a></p>
                            @endif
                        @endforeach
                </form>
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