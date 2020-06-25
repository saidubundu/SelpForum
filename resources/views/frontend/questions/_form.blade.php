<div class="post">
    <form action="{{route('questions.store')}}" class="form newtopic" method="post">
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

                <div class="form-group">
                    <input type="text" name="title" value="{{old('title', $question->title)}}" placeholder="Enter Topic Title" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" />

                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            <strong>{{$errors->first('title')}}</strong>
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <select name="category" id="category"  class="form-control" >
                            <option value="" disabled selected>Select Category</option>
                            <option value="op1">Option1</option>
                            <option value="op2">Option2</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <select name="subcategory" id="subcategory"  class="form-control" >
                            <option value="" disabled selected>Select Subcategory</option>
                            <option value="op1">Option1</option>
                            <option value="op2">Option2</option>
                        </select>
                    </div>
                </div>

                <div>
                    <textarea name="body" id="desc" placeholder="Body"  class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}">{{old('body', $question->body)}}</textarea>

                    @if ($errors->has('body'))
                        <div class="invalid-feedback">
                            <strong>{{$errors->first('body')}}</strong>
                        </div>
                    @endif
                </div>
                <div class="row newtopcheckbox">
                    <div class="col-lg-6 col-md-6">
                        <div><p>Who can see this?</p></div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="everyone" /> Everyone
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="friends"  /> Only Friends
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div>
                            <p>Share on Social Networks</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="fb"/> <i class="fa fa-facebook-square"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="tw" /> <i class="fa fa-twitter"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="gp"  /> <i class="fa fa-google-plus-square"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="clearfix"></div>
        </div>
        <div class="postinfobot">

            {{--                                <div class="notechbox pull-left">--}}
            {{--                                    <input type="checkbox" name="note" id="note" class="form-control" />--}}
            {{--                                </div>--}}

            <div class="pull-left">
                <label for="note"> You will be notified when someone post a reply</label>
            </div>

            <div class="pull-right postreply">
                <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                <div class="pull-left"><button type="submit" class="btn btn-primary">Post</button></div>
                <div class="clearfix"></div>
            </div>


            <div class="clearfix"></div>
        </div>
    </form>
</div>
