@extends('layouts.admin')
@section('title') All Asnwers @endsection

@section('content')
<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <h3 class="over-title margin-bottom-15 text-center">All <span class="text-bold">Answers</span></h3>
            <div class="container-fluid container-fullw">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover" id="sample-table-2">
                            <thead>
                                <tr>
                                    <th class="center">Answer</th>
                                    <th class="center">Related Forum</th>
                                    <th class="hidden-xs">Written By</th>
                                    <th class="hidden-xs">Status</th>
                                    <th>Rate</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($answers as $answer)
                                <tr>
                                    <td class="center">{{$answer->answer}}</td>
                                    <td class="center">{{$answer->forum->body}}</td>
                                    <td class="hidden-xs">{{$answer->user->name}}</td>
                                    @if ($answer->status == 0)
                                    <td class="hidden-xs">Not marked yet</td>
                                    @else
                                    <td class="best-answer"><i class="fas fa-check"></i> Best Answer</td>
                                    @endif
                                    

                                    @if ($answer->rate == 0)
                                    <td class="hidden-xs">No rates yet</td>
                                    @else
                                    {{-- <td class="hidden-xs best-answer font-weight-bold">Best Answer</td> --}}
                                    @endif

                                    <td class="justify-content-center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <form method="POST" action="{{route('answers.update' , $answer->id)}}">
                                                @csrf
                                                {{method_field('PUT')}}
                                                @if ($answer->status == 0)
                                                <input type="hidden" value="1" name="status">
                                                <input type="submit" class="btn btn-success m-1" value="Best Answer">
                                                @else
                                                <input type="hidden" value="0" name="status">
                                                <input type="submit" class="btn btn-danger m-1" value="Remove Mark">
                                                @endif
                                                
                                            </form>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection