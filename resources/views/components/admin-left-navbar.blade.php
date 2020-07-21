
<!--------------------POSTS-------------------->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts" aria-expanded="true" aria-controls="collapsePosts">
        <i class="fas fa-fw fa-cog"></i>
        <span>Posts</span>
    </a>
    <div id="collapsePosts" class="collapse" aria-labelledby="headingPosts" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Post Components:</h6>
        <a class="collapse-item" href="{{ route('admin.posts.index') }}">View Posts</a>
        <a class="collapse-item" href="{{ route('admin.posts.create') }}">Create Post</a>
        </div>
    </div>
</li>
<!--------------------CONCERTS-------------------->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConcerts" aria-expanded="true" aria-controls="collapseConcerts">
        <i class="fas fa-fw fa-cog"></i>
        <span>Concerts</span>
    </a>
    <div id="collapseConcerts" class="collapse" aria-labelledby="headingConcerts" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Concert components</h6>
        <a class="collapse-item" href="{{ route('admin.concerts.index') }}">View Concerts</a>
        <a class="collapse-item" href="{{ route('admin.concerts.create') }}">Create Concert</a>
        </div>
    </div>
</li>
<!--------------------MEDIA-------------------->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMedia" aria-expanded="true" aria-controls="collapseMedia">
        <i class="fas fa-fw fa-cog"></i>
        <span>Media</span>
    </a>
    <div id="collapseMedia" class="collapse" aria-labelledby="headingMedia" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Media Components:</h6>
            <a class="collapse-item" href="{{ route('admin.media.edit',1) }}">Edit Media Page</a>
        </div>
    </div>
</li>
