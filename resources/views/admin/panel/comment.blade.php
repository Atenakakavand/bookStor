@extends('layouts.adminLayouts')

@section('content')
    @foreach($comments as $comment)
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    مدیریت نظرات
                </div>
                <div class="card-body">
                    <form action="/admin/agree" method="post">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">شماره کاربر</span>
                                <input type="text" id="username3" value="{{$comment -> user_id}}" name="username3" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-user"></i>
                                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">متن نظر</span>
                                <input type="text" id="email3" value="{{$comment->context}}" name="context" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i>
                                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">تایید</button>
                        <input type="hidden" name="comment_id" value="{{$comment->id}}">
                    </form>
                    <form action="/admin/remove" method="post">
                        <input type="hidden" value="{{$comment->id}}" name="comment_id">
                        {{ csrf_field() }}
                        {{ @method_field('delete') }}
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endforeach
@endsection

@section('script')
    <script src="/js/sweetalert2.js"></script>
    @include('sweet::alert')
@endsection
