@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">{{__('Cities')}}</h3>
            </div>
            <div class="col-md-6">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table align-self-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">City</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <div class="container">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>...</option>
                                            @foreach($city as $cities)
                                                <option value="1">{{ $cities->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
