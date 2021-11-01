@extends('layouts.user')
@section('title') Answer @endsection
    
@section('content')

<div class="container">
<div class="main-body p-0">
    <div class="inner-wrapper">
        

        <!-- Inner main -->
        <div class="inner-main">


            <!-- Inner main body -->

            <!-- Forum List -->
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                            <div class="media-body">
                                <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">{{$answer->forum->user->name}}</a></h6>
                                <p class="text-secondary">
                                    {{$answer->forum->title}}
                                </p>
                                <p class="text-secondary">
                                    {{$answer->forum->body}}
                                </p>
                                </div>
                            </div>
                            @if ($answer->status == 1)
                            <div class="media forum-item mt-5 right-answer answer-body">
                                <div class="d-flex">
                                    <p class="best-answer"><i class="fas fa-check"></i> Best Answer</p>
                                </div>
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">{{$answer->user->name}}</a></h6>
                                    <p class="answer">{{$answer->answer}}</p>
                                </div>
                            </div>
                                
                            @else
                            <div class="media forum-item mt-5 answer-body">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">{{$answer->user->name}}</a></h6>
                                    <p class="answer">{{$answer->answer}}</p>
                                </div>
                            
                            </div>
                            @endif
                            
                        </div>
                    </div>
                        
                </div>
            </div>
            <!-- /Forum List -->

            <!-- /Inner main body -->
        </div>
        <!-- /Inner main -->
    </div>
    
<script type="text/javascript">

</script>
</body>
</html>

@endsection