@extends('layouts.adminLayouts')

@section('content')
    <div class="middle"><!-- start middle -->
        <h1 class="text-center my-4 title-box">افزودن کاربر</h1>

        <form action="{{route('user.store') }}" method="post" class="text-right mr-5 mb-3" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('layouts.errors')
            <div class="form-group mt-3">
                <label>نام کاربری را وارد کنید</label>
                <input type="text" class="form-control ml-2" id="name" name="name"
                       value="{{old('name')}}" placeholder="نام کاربری را وارد کنید">
            </div>
            <div class="form-group mt-3">
                <label>ایمیل کاربر</label>
                <input type="email" class="form-control ml-2" id="email" name="email"
                       value="{{old('email')}}" placeholder="ایمیل کاربر را وارد کنید">
            </div>
            <div class="form-group mt-3">
                <label> نقش کاربر</label>
                <select name="role" id="role" class="form-control border">
                    <option value="admin">مدیر</option>
                    <option value="user">کاربر</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <label> تصویر کاربر</label>
                <input type="file" class="form-control ml-2" id="image" name="image"
                       value="{{old('image')}}">
            </div>

            <button type="submit" class="btn btn-outline-primary">ارسال</button>

        </form>

        <div class="clear"></div>
    </div><!-- end middle -->
@endsection


@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>

    <script type="text/javascript">
        $('.selectpicker').selectpicker();
    </script>

@endsection
<!-- -->
