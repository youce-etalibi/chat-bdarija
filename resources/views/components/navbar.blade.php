<div class="parentNavbar">
    <div class="parentLeftNav">
        <div class="paprentLogoBrand">
            <a href="{{ route('welcome.home') }}">
                <img src="./chatBdaija-logo.png" alt="Chat Bdarija">
            </a>
        </div>
        <div class="parentSearchbar">
            <form action="">
                <input type="text" name="searchbar">
                <button type="submit"><i class='bx bx-search'></i></button>
            </form>
        </div>
    </div>
    <div class="parentUl">
        <ul>
            <li>
                <a href=""><i class='bx bxs-home'></i></a>
            </li>
            <li>
                <a href=""><i class='bx bxs-user-plus'></i></a>
            </li>
            <li>
                <a href=""><i class='bx bxs-store'></i></a>
            </li>
            <li>
                <a href=""><i class='bx bxs-dice-5'></i></a>
            </li>
        </ul>
    </div>
    <div class="parentUlUser">
        <ul>
            <li>
                <a href=""><i class='bx bxs-message-alt-detail'></i></a>
            </li>
            <li>
                <a href=""><i class='bx bx-bell'></i></a>
            </li>
            <li>
                <a href="" class="ProfileBtn">
                    <img src="{{ asset("storage/".$compte->image) }}" alt="" class="imgProfile">
                </a>
            </li>
        </ul>
    </div>

    <div class="parentSetteing"  style="display: none;">
        <ul>
            <li>
                <a href="{{ route('settings') }}"><i class='bx bx-cog'></i> Settings</a>
            </li>
            <li>
                <a href="{{ route('welcome.logout') }}"><i class='bx bx-log-out'></i> Logout</a>
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.ProfileBtn').hover(
            function() {
                $('.parentSetteing').slideDown('fast');
            },
        );
        $('.ProfileBtn').click(
            function() {
                $('.parentSetteing').slideUp('fast');
            },
        );
    });
</script>
