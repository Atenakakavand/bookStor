
@extends('layouts.userLayouts')

                @section('content')
                    <div id="contact">
                        <div id="message"></div>
                        <fieldset>
                            <h2>مشخصات کاربری</h2>
                            <hr>
                            @foreach($profile as $profile)
                                <p>
                                    <label for="name">تصویر کاربر
                                    </label>
                                    <img  style="width: 80px;" src="{{Url('upload/images').'/'.$profile->image}}" />
                                </p>
                                <p>
                                    <label for="name">نام کاربری:
                                        <span>(اجباری)</span>
                                    </label>
                                    <input name="username" type="text" id="username-input" size="30" value="{{ Auth::user()->name }}" />
                                </p>
                                <p>
                                    <label for="name">نام:
                                        <span>(اجباری)</span>
                                    </label>
                                    <input name="fname" type="text" id="fname-input" size="30" value="{{ $profile->fname }}" />
                                </p>
                                <p>
                                    <label for="name">نام خانوادگی:
                                        <span>(اجباری)</span>
                                    </label>
                                    <input name="lname" type="text" id="lname-input" size="30" value="{{ $profile->lname }}" />
                                </p>
                                <p>
                                    <label for="name">موبایل:
                                        <span>(اجباری)</span>
                                    </label>
                                    <input name="mobile" type="text" id="mobile-input" size="30" value="{{ $profile->mobile }}" />
                                </p>
                                <p>
                                    <label for="name">تحصیلات:
                                    </label>
                                    <input name="tahsilat" type="text" id="tahsilat-input" size="30" value="{{ $profile->tahsilat }}" />
                                </p>
                                <p>
                                    <label for="name">آدرس: <span>(اجباری)</span>
                                    </label>
                                    <input name="address" type="text" id="address-input" size="30" value="{{ $profile->address }}" />
                                </p>
                                <p>
                                    <label for="name">ایمیل: <span>(اجباری)</span>
                                    </label>
                                    <input name="email" type="text" id="email-input" size="30" value="{{ $profile->email }}" />
                                </p>
                                <p>
                                    <label for="name">عنوان:</label>
                                    <input name="subject" type="text" id="subject-input" size="30" value="{{ $profile->subject }}" />
                                </p>
                                <p>
                                    <label for="name">درباره من:</label>
                                    <textarea name="description" data-value="{{$profile->description}}" cols="60" rows="10" id="description-textarea" class="mcinput yes"></textarea>
                                </p>
                            @endforeach
                                <p>
                                    <a href="{{route('profile.edit',['id'=>$profile->id])}}" class="btn btn-primary">ویرایش</a>
                                <div id="form-loader"></div>
                                </p>
                            </form>
                        </fieldset>
                    </div>
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


                @endsection
