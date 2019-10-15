@extends('Layouts.adminLayouts')

@section('content')

    <div class="middle"><!-- start middle -->
        <h1 class="text-center my-4 title-box">نمایش کاربران</h1>

        <div class="row">
            <div class="col-lg-15 text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        لیست کاربران
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>نام کاربری</th>
                                    <th>ایمیل</th>
                                    <th>نقش</th>
                                    <th>تصویر کاربر</th>
                                    <th>تغییرات</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr class="text-center">

                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role}}</td>
                                        <td><img  style="width: 80px;" src="{{Url('upload/Userimages').'/'.$user->image}}" /></td>
                                        <td>
                                            <a href="{{route('user.edit',['id'=>$user->id])}}" class="btn btn-primary">ویرایش</a>
                                            <form action="{{route('user.destroy',['id'=>$user->id])}}" method="post">
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

