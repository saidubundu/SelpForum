@foreach($question->answers as $answer)
<div class="post {{$answer->status}}">
    <div class="topwrap">
        <div class="userinfo pull-left">
            <div class="avatar">
                <img src="images/avatar2.jpg" alt="{{$answer->user->name}}" />
                <div class="status red">&nbsp;</div>
            </div>

            <div class="icons">
                <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
            </div>
        </div>
        <div class="posttext pull-left">
            <p>{!! $answer->body_html !!}</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="postinfobot">

        <div class="likeblock pull-left">
            <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>10</a>
            <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>1</a>
        </div>

        @can('accept', $answer)
        <div class="prev pull-left">
            <a title="Mark This Answer As Best Answer" class="answered-accepted"
               onclick="event.preventDefault(); document.getElementById('accept-answer-{{$answer->id}}').submit()">
                <i class="fa fa-check"></i></a>
            <form id="accept-answer-{{$answer->id}}" action="{{route('answers.accept', $answer->id)}}" method="POST" style="display: none">
                @csrf
            </form>
        </div>
        @endcan

        <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : 20 Nov @ 9:45am</div>

        <div class="actionBtn next pull-right">
                    @can('update', $answer)
                        <a href="{{route('questions.answers.edit', [$question->id, $answer->id])}}" class="btn btn-sm btn-outline-info">Edit</a>
                    @endcan

                     @can('delete', $answer)
                            <form method="post" action="{{route('questions.answers.destroy', [$question->id, $answer->id])}}">
                            @method('DELETE')
                            @csrf
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure')">Delete</button>
                            </form>
                     @endcan

        </div>

        <div class="clearfix"></div>
    </div>
</div>
    @endforeach
