
<div class="myHeader">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" class="myBtn" value="Logout"/>
    </form>
</div>


