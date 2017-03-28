@extends('layouts.app')

@push('scripts')
    <script src="practice-revenue.js"></script>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Practice Revenue</div>
                    <div class="panel-body">
                        <h2>Cost Share Calculator</h2>
                        {{ Form::open(array('url'=>'practice-revenue/upload','files'=>true)) }}

                        {{ Form::label('file','File',array('id'=>'','class'=>'')) }}
                        {{ Form::file('upload-file','',array('id'=>'','class'=>'')) }}

                        {{ Form::label('extra','Text',array('id'=>'','class'=>'')) }}
                        {{ Form::text('extra') }}

                        {{ Form::token() }}
                        <br/>
                        <!-- submit buttons -->
                        {{ Form::submit('Save') }}

                        <!-- reset buttons -->
                        {{ Form::reset('Reset') }}

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if('uploadFile')
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Results</div>
                        <div class="panel-body">
                            @if(Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error')}}
                            </div>
                            @endif

                            @if(Session('success'))
                            <div class="alert alert-success">
                                {{ Session('success')}}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection