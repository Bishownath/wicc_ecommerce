@extends('frontend.master')

@section('content')
    <div class="justify-contents-center d-flex" style=" background: lightgray">
        <div style="margin-left: 400px;">
            <div class="" style="width: 600px">
                <form class="form-group" method="post" action="{{ route('vendors.applied') }}">
                    @csrf
                    <h4 class="mb-4 mt-5">Apply For Vendor</h4>
                    <div class="form-group">
                        <div class="form-input-group">
                            <input class="form-control" type="text" placeholder="Your Name" name="name"><i
                                class="icofont-user-alt-3"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group">
                            <input class="form-control" type="text" placeholder="Your Email" name="email"><i
                                class="icofont-email"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group">
                            <input class="form-control" type="password" placeholder="your password" name="password"><i
                                class="icofont-book-mark"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-input-group">
                            <textarea class="form-control" placeholder="Explain Your Business" name="description"></textarea><i class="icofont-paragraph"></i>
                        </div>
                    </div>
                    <div class="form-group">

                        <button type="submit" class="form-btn-group "><i class="fas fa-paper-plane"></i><span>Apply</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
