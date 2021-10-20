{{-- @extends('layouts.user')
@section('title') Write an Answer @endsection

@section('content')
<div class="container">
    <div class="contact__wrapper shadow-lg mt-n9">
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">

                    <form method="POST" action="{{route('answer.store')}}" class="contact-form form-validate" novalidate="novalidate">
                    <div class="row">
                        @csrf
                        <input type="hidden" name="status" id="" value="0">
                        <input type="hidden" name="rate" id="" value="0">
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <input type="text" value="{{$forum->id}}">
                                <label class="required-field" for="firstName">Answer</label>
                                <textarea name="answer" id="" cols="30" rows="10"></textarea>
                                @error('answer')
                                    <small class="text-danger"> {{$message}} </small> 
                                    @enderror
                            </div>
                        </div>
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
@endsection --}}