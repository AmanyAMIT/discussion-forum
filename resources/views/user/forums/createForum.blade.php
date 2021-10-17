@extends('layouts.user')
@section('title') Create Forum @endsection

@section('content')
<div class="container">
    <div class="contact__wrapper shadow-lg mt-n9">
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                <form method="POST" action="{{route('post.store')}}" class="contact-form form-validate" novalidate="novalidate">
                    
                    <div class="row">
                        @csrf
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="firstName">Forum Title</label>
                                <input type="text" class="form-control" id="firstName" name="title" placeholder="Title Goes Here">
                                @error('title')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">
                                    Topic <em>(select at most one)</em> <span class="symbol required"></span>
                                </label>
                                @foreach ($categories as $category)
                                <div class="checkbox clip-check check-primary">
                                    <input type="radio" value="{{$category->id}}" name="cat_id" id="service1">
                                    <label for="service1">
                                        {{$category->cat_name}} - Version: {{$category->version_no}}
                                    </label>
                                    @error('cat_id')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="message">Forum Body</label>
                                <textarea class="form-control" id="message" name="body" rows="4" placeholder="Hi there, I would like to ask about....."></textarea>
                                @error('body')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                            </div>
                        </div>
                        <input type="hidden" name="user_id" id="" value="{{Auth::user()->id}}">
                        <div class="col-sm-12 mb-3">
                            <input type="submit" name="submit" class="btn btn-primary" value="Post">
                        </div>
    
                    </div>
                </form>
            </div>
            <!-- End Contact Form Wrapper -->
    
        </div>
    </div>
</div>
@endsection