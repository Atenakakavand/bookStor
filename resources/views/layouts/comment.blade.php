



<section id="comments">
    <div id="comments-bubble"><span></span>
    </div>
    <div class="line"></div>
    @foreach($comments as $comment)
    <ol class="commentlist">
        <li class="comment">
            <div class="comment-container">
                <div class="row-fluid">
                    <div class="comment-entry">
                        <div class="avatar span2">
                            <a href="#">
                                <img alt='' src='/bellum/img/assets/avatar.png' height='62' width='62' />
                            </a>
                        </div>
                        <!-- end avatar -->
                        <div class="comment-body span10">
                            <h4>{{ $comment->name }}</h4>
                            <p class="georgia">25 March 2012 at 3:15 - <a class="reply" href="#">پاسخ</a>
                            </p>
                            <div class="clear"></div>
                            <p>{{ $comment->context }}</p>
                        </div>
                        <!-- end comment-body -->
                    </div>
                    <!-- end comment-entry -->
                </div>
                <!-- end row-fluid -->
            </div>
            <!-- /.comment-container -->
        </li>
    </ol>
    @endforeach
</section>
<!-- end comments -->
