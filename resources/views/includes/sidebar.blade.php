<div class="stretch sidebar-nav">
<!-- sidebar nav -->
    <nav class="sidebar-nav">
    @if (Auth::guest())
    @else
        <ul class="nav nav-pills nav-stacked">
        	<li><h3>PROFILE SETTINGS</h3></li>
            <li><a href="support">Dashboard</a></li>
            <li><a href="upload">Send Us Your Content</a></li>
            <li><a href="#">Check Your Stats</a></li>
        @endif
        </ul>
    </nav>
</div>