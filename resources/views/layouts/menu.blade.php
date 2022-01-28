
<li class="nav-item">
    <a href="{{ route('equipes.index') }}"
       class="nav-link {{ Request::is('equipes*') ? 'active' : '' }}">
        <p>Equipes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('joueurs.index') }}"
       class="nav-link {{ Request::is('joueurs*') ? 'active' : '' }}">
        <p>Joueurs</p>
    </a>
</li>


