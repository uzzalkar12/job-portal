<div class="col-lg-4 col-md-4 col-xs-12">
    <div class="right-sideabr">
        <h4>Manage Account</h4>
        <ul class="list-item">
            <li><a href="{{ route('company-profile') }}">Profile</a></li>
            <li><a href="{{ route('jobs.index') }}">Manage Jobs</a></li>
            <li><a href="{{ route('jobs-applicant') }}">Manage Applications</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Sing Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
