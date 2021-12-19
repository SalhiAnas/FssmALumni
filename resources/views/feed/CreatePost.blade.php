<div class="Post">
    <div class="renderImage">
       <a><img class="avatar" src="image/profile.jpg"/></a>
    </div>
    <br />
    <div class="CreatePost">
    Create your own post
    </div>
    <br />
    <div class="line">
    <hr >
    <div class="fieldPost">
        <!--Routing to Intern folder -->
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter1">
        <a class="Job"><b style="color: black;">Internship/Job</b></a>
        </button>
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter2">
        <a class="Events"><b style="color: black;">Events</b></a>
        </button>
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter3">
        <a class="Stories"><b style="color: black;">Impact Stories</b></a>
        </button>
    </div>
    <br />
    <br />
    <div class="modal fade"  id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <center>
                <h5 class="modal-title" id="exampleModalLongTitle">Internship Job post</h5>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            @include('feed.Intern.Create')
            </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <center>
                <h5 class="modal-title" id="exampleModalLongTitle">Events post</h5>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            @include('feed.Events.Create')
            </div>
            </div>
        </div>
        </div>
        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <center>
                <h5 class="modal-title" id="exampleModalLongTitle">Story post</h5>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            @include('feed.Stories.Create')
            </div>
            </div>
        </div>
        </div>

    </div>
</div>
<style>
hr {
    width:560;
}
.CreatePost{
    position : absolute;
    left : 460;
}
.line {
    position : absolute;
    left : 250;
}
.renderImage{
    position : absolute;
    left : 250;
}
.avatar{
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
}
.fieldPost{
}
.Job{
    position: absolute;
    left : 20;
}
.Events{
    position : absolute;
    left : 250;
}
.stories{
    position:absolute;
    left :500;
}
</style>