@extends('layouts.adminLayouts')

@section('content')
    <div class="middle"><!-- start middle -->
        <h1 class="text-center my-4 title-box">افزودن کتاب ها</h1>

        <form action="{{route('book.store') }}" method="post" class="text-right mr-5 mb-3" enctype="multipart/form-data">
            {{csrf_field()}}
            @include('layouts.errors')
            <div class="form-group mt-3">
                <label>نام کتاب را وارد کنید</label>
                <input type="text" class="form-control ml-2" id="name" name="name"
                       value="{{old('name')}}" placeholder="نام کتاب را وارد کنید">
            </div>
            <div class="form-group mt-3">
                <label>مولف</label>
                <input type="text" class="form-control ml-2" id="auther" name="auther"
                       value="{{old('auther')}}" placeholder="نام مولف را وارد کنید">
            </div>
            <div class="form-group mt-3">
                <label>ناشر</label>
                <input type="text" class="form-control ml-2" id="pname" name="pname"
                       value="{{old('pname')}}" placeholder="نام ناشر را وارد کنید">
            </div>
            <div class="form-group mt-3">
                <label>فصل</label>
                <input type="text" class="form-control ml-2" id="pyear" name="pyear"
                       value="{{old('pyear')}}" placeholder="فصل...">
            </div>
            <div class="form-group mt-3">
                <label> دسته بندی</label>
                <select name="category_id" class="form-control border selectpicker" title="دسته بندی مورد نظر را انتخاب کنید" multiple>
                    <option value="0">---</option>
                    @foreach($cat as $key=>$value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-3">
                <label> شابک</label>
                <input type="text" class="form-control ml-2" id="lshn" name="lshn"
                       value="{{old('lshn')}}" placeholder="شابک را وارد کنید">
            </div>

            <div class="form-group mt-3">
                <label>چکیده کتاب</label>
                <textarea rows="5" class="form-control ml-2" id="article-ckeditor" name="abstract"
                         value="{{old('abstract')}}">
                </textarea>
            </div>

            <div class="form-group mt-3">
                <label> تصویر کتاب</label>
                <input type="file" class="form-control ml-2" id="image" name="image"
                       value="{{old('image')}}" placeholder="شابک را وارد کنید">
            </div>
            <div class="form-group mt-3">
                <label> فایل ضمیمه</label>
                <input type="file" class="form-control ml-2" id="pdf" name="pdf"
                       value="{{old('pdf')}}">
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
