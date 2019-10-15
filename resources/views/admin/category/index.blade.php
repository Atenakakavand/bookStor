@extends('Layouts.adminLayouts')

@section('content')

    <div class="middle"><!-- start middle -->
        <h1 class="text-center my-4 title-box">نمایش دسته ها</h1>

        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        لیست دسته ها
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>نام دسته</th>
                                    <th>نام دسته اصلی</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                @foreach($category as $cat)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->getParent['name']}}</td>
                                    <td>
                                        <a href="{{route('category.edit',['id'=>$cat->id])}}" class="btn btn-primary">ویرایش</a>
                                    </td>
                                    <td>
                                        <form action="{{route('category.destroy',['id'=>$cat->id])}}" method="post">
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
