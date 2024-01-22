<div class="parentSide">
    <div class="parentSidebar">
        <div class="profile">
            <a href="{{ route('settings') }}">
                <img src="{{ asset("storage/".$compte->image) }}" alt="Profile" class="imgProfileSide">
            </a>
                <h4>{{$compte->prenom ." ". $compte->nom}} </h4>
    </div>
    <div class="profileUl">
        <ul>
            <li>
                <a href=""><i class='bx bxs-contact'></i> Amies</a>
            </li>
            <li>
                <a href=""><i class='bx bx-calendar-event' ></i> Événements</a>
            </li>
            <li>
                <a href=""><i class='bx bxs-group' ></i> Groupes</a>
            </li>
            <li>
                <a href=""><i class='bx bxs-store'></i> Store</a>
            </li>
            <li>
                <a href=""><i class='bx bxs-down-arrow-circle'></i> voir plus</a>
            </li>
        </ul>
    </div>
</div>
<div class="parentSidebar2">
    <div class="profile">
            <h4>Vos raccourcis</h4>
        </div>
        <div class="profileUl">
            <ul>
                <li>
                    <a href=""><i class='bx bxs-contact'></i> Amies</a>
                </li>
                <li>
                    <a href=""><i class='bx bx-calendar-event' ></i> Événements</a>
                </li>
            <li>
                <a href=""><i class='bx bxs-group' ></i> Groupes</a>
            </li>
            <li>
                <a href=""><i class='bx bxs-store'></i> Store</a>
            </li>
            <li>
                <a href=""><i class='bx bxs-down-arrow-circle'></i> voir plus</a>
            </li>
        </ul>
    </div>
</div>
</div>
