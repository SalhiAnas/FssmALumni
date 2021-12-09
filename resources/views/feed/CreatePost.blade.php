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
        <a class="Job"><b style="color: black;">Internship/Job</b></a>
        <a class="Events"><b style="color: black;">Events</b></a>
        <a class="Stories"><b style="color: black;">Impact Stories</b></a>
    </div>
    <br />
    <br />
    <div style="display:none" class="InternSteps"> 
        @include('feed.Intern.Create')
    </div>
    <div style="display:none" class="EventsSteps"> 
        @include('feed.Events.Create')
    </div>
    <div style="display:none" class="StoriesSteps"> 
        @include('feed.Stories.Create')
    </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".Job").click(function(){
        $(".InternSteps").show();
        });
        $(".Events").click(function(){
        $(".EventsSteps").show();
        });
        $(".Stories").click(function(){
        $(".StoriesSteps").show();
        });
    });
</script>
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