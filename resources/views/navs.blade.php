 <ul class="nav nav-tabs card-header-tabs">
 
    <li class="nav-item">
    <a class="nav-link {{ Route::is('normal') ? 'active':'' }}" href="{{ route('normal') }}">Normal Request</a>
    </li>
    <li class="nav-item">
    <a class="nav-link {{ Route::is('queued') ? 'active':'' }}" href="{{ route('queued') }}">Queued Request</a>
    </li>

</ul>