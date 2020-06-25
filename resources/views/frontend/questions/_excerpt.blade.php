<div class="post">
    <div class="wrap-ut pull-left">
        <div class="userinfo pull-left">
            <div class="avatar">
                <img src="images/avatar.jpg" alt="{{$question->user->name}}" />
                <div class="status green">&nbsp;</div>
            </div>

            <div class="icons">
                <img src="images/icon1.jpg" alt="" /><img src="images/icon4.jpg" alt="" />
            </div>
        </div>
        <div class="posttext pull-left">
            <h2><a href="{{$question->url}}">{{$question->title}}</a></h2>
            <p>{!! str_limit($question->body_html, 250) !!}</p>

            <div class="actionBtn pull-left">

                <form method="post" action="{{route('questions.destroy', $question->id)}}">

                    @method('DELETE')
                    @csrf
                    @can('update', $question)
                        <a href="{{route('questions.edit', $question->id )}}" class="btn btn-outline-secondary small">Edit</a>
                    @endcan

                    @can('delete', $question)
                        <button class="btn btn-outline-danger small">Delete</button>
                    @endcan
                </form>
            </div>
        </div>


        <div class="clearfix"></div>

    </div>
    <div class="postinfo pull-left">
        <div class="comments">
            <div class="commentbg answered">
                {{$question->answers_count}}
                <div class="mark"></div>
            </div>

        </div>
        <div class="views"><i class="fa fa-eye"></i> {{$question->views}}</div>
        <div class="time"><i class="fa fa-clock-o"></i> {{$question->created_date}}</div>
    </div>
    <div class="clearfix"></div>
</div>
