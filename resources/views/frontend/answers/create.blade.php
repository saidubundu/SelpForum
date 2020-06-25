@if(Auth::user())

    <div class="post">
        <form action="{{route('questions.answers.store', $question->id)}}" class="form" method="post">
            @csrf
            <div class="topwrap">
                <div class="userinfo pull-left">
                    <div class="avatar">
                        <img src="images/avatar4.jpg" alt="{{Auth::user()->name}}" />
                        <div class="status red">&nbsp;</div>
                    </div>

                    <div class="icons">
                        <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                    </div>
                </div>
                <div class="posttext pull-left">
                    <div class="textwraper">
                        <div class="postreply">Post a Reply</div>
                        <textarea name="body" id="reply" placeholder="Type your message here" class="{{$errors->has('body') ? 'is-invalid' : ''}}"></textarea>
                        @if($errors->has('body'))
                            <div class="invalide-feedback">
                                <strong>{{$errors->first('body')}}</strong>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="postinfobot">

                {{--            <div class="notechbox pull-left">--}}
                {{--                <input type="checkbox" name="note" id="note" class="form-control" />--}}
                {{--            </div>--}}

                {{--            <div class="pull-left">--}}
                {{--                <label for="note"> Email me when some one post a reply</label>--}}
                {{--            </div>--}}

                <div class="pull-right postreply">
                    <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                    <div class="pull-left"><button type="submit" class="btn btn-primary">Post Reply</button></div>
                    <div class="clearfix"></div>
                </div>


                <div class="clearfix"></div>
            </div>
        </form>
    </div>

    @endif
