@extends('Layouts.adminLayouts')

@section('content')

    <div class="middle"><!-- start middle -->
        <h1 class="text-center my-4 title-box">نمایش کتاب ها</h1>

        <div class="row">
            <div class="col-lg-15 text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        لیست کتاب ها
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>نام کتاب</th>
                                    <th>مولف</th>
                                    <th>ناشر</th>
                                    <th>فصل</th>
                                    <th>دسته ها</th>
                                    <th>شابک</th>
                                    <th>چکیده</th>
                                    <th>تصویر کتاب</th>
                                    <th>دانلود فایل</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                @foreach($book as $book)
                                    <tr class="text-center">
                                    <td>{{$i++}}</td>
                                    <td>{{$book->name}}</td>
                                    <td>{{$book->auther}}</td>
                                    <td>{{$book->pname}}</td>
                                    <td>{{$book->pyear}}</td>
                                    <td>{{$book->category_id}}</td>
                                    <td>{{$book->lshn}}</td>
                                    <td>{{$book->abstract}}</td>
                                    <td><img  style="width: 80px;"src="{{Url('upload/images').'/'.$book->image}}" /></td>
                                    <td style="width: 1000px;"><a href="{{url('upload/source').'/'.$book->pdf}}"
                                        style="font-size: 15px;">{{$book->pdf}}</a> </td>
                                        <td>
                                            <a href="{{route('book.edit',['id'=>$book->id])}}" class="btn btn-primary">ویرایش</a>
                                        </td>
                                        <td>
                                            <form action="{{route('book.destroy',['id'=>$book->id])}}" method="post">
                                                {{method_field('delete')}}
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger">حذف</button>
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

        <div class="clear"></div>
    </div><!-- end middle -->

@endsection
