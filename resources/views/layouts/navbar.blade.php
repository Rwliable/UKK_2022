<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">

    {{-- Search Bar --}}
    <form class="form-inline mr-auto" method="GET" action="/cari">
        @csrf

        <ul class="navbar-nav mr-3">
            {{-- Sidebar Toggle --}}
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>

        {{-- Old Search Bar Input --}}
        {{-- <div class="search-element">
        <input class="form-control" type="search" placeholder="Cari data perjalanan anda" aria-label="Search" data-width="365" name="searching">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
      </div> --}}

        <div class="col-auto">
            {{-- Search Category Selector --}}
            <select onchange="searchSelector(this);" class="form-control form-select" type="search">
                <option value="lokasi">Lokasi</option>
                <option value="tanggal">Tanggal</option>
                <option value="jam">Jam</option>
                <option value="suhu">Suhu</option>
            </select>
        </div>

        <div class="col">
            {{-- Search Textinput Lokasi --}}
            <div class="form-group">
                <input type="search" name="lokasi" id="lokasi" class="form-control"
                    aria-label="Search" data-width="250">
                <button class="btn my-2 my-sm-0" id="lokasiBtn" type="submit"><i
                        class="fas fa-search"></i></button>
            </div>

            {{-- Search Textinput Tanggal --}}
            <div class="form-group">
                <input type="date" style="display: none;" name="tanggal" id="tanggal" class="form-control"
                    aria-label="Search" data-width="250">
                <button class="btn my-2 my-sm-0" id="tanggalBtn" style="display: none;"
                    type="submit"><i class="fas fa-search"></i></button>
            </div>

            {{-- Search Textinput Jam --}}
            <div class="form-group">
                <input type="time" style="display: none;" name="jam" id="jam" class="form-control" aria-label="Search"
                    data-width="250">
                <button class="btn my-2 my-sm-0" id="jamBtn" style="display: none;" type="submit"><i
                        class="fas fa-search"></i></button>
            </div>

            {{-- Search Textinput Suhu --}}
            <div class="form-group">
                <input type="number" style="display: none;" name="suhu" id="suhu" class="form-control"
                     aria-label="Search" data-width="250">
                <button class="btn my-2 my-sm-0" id="suhuBtn" style="display: none;" type="submit"><i
                        class="fas fa-search"></i></button>
            </div>
        </div>
    </form>

    <ul class="navbar-nav navbar-right">
        {{-- Profile Dropdown --}}
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">
                    @if (!empty(auth()->user()->name))
                        Hi, {{ auth()->user()->name }}
                    @else
                        Hi, User
                    @endif
                </div>
            </a>

            {{-- Profile Dropdown Menu --}}
            <div class="dropdown-menu dropdown-menu-right">

                {{-- Dropdown Title --}}
                <div class="dropdown-title">Logged in 5 min ago</div>

                {{-- Dropdown Logout --}}
                <div class="dropdown-divider"></div>
                <a href="logout" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<script>
    function searchSelector(that) {
        if (that.value == "tanggal") {
            // Selected
            document.getElementById("tanggal").style.display = "block";
            document.getElementById("tanggalBtn").style.display = "block";

            document.getElementById("lokasi").style.display = "none";
            document.getElementById("lokasiBtn").style.display = "none";

            document.getElementById("jam").style.display = "none";
            document.getElementById("jamBtn").style.display = "none";

            document.getElementById("suhu").style.display = "none";
            document.getElementById("suhuBtn").style.display = "none";

        } else if (that.value == "jam") {
            document.getElementById("tanggal").style.display = "none";
            document.getElementById("tanggalBtn").style.display = "none";

            document.getElementById("lokasi").style.display = "none";
            document.getElementById("lokasiBtn").style.display = "none";

            // Selected
            document.getElementById("jam").style.display = "block";
            document.getElementById("jamBtn").style.display = "block";

            document.getElementById("suhu").style.display = "none";
            document.getElementById("suhuBtn").style.display = "none";

        } else if (that.value == "suhu") {
            document.getElementById("tanggal").style.display = "none";
            document.getElementById("tanggalBtn").style.display = "none";

            document.getElementById("lokasi").style.display = "none";
            document.getElementById("lokasiBtn").style.display = "none";

            document.getElementById("jam").style.display = "none";
            document.getElementById("jamBtn").style.display = "none";

            // Selected
            document.getElementById("suhu").style.display = "block";
            document.getElementById("suhuBtn").style.display = "block";

        } else {
            document.getElementById("tanggal").style.display = "none";
            document.getElementById("tanggalBtn").style.display = "none";

            // Selected
            document.getElementById("lokasi").style.display = "block";
            document.getElementById("lokasiBtn").style.display = "block";

            document.getElementById("jam").style.display = "none";
            document.getElementById("jamBtn").style.display = "none";

            document.getElementById("suhu").style.display = "none";
            document.getElementById("suhuBtn").style.display = "none";
        }
    }
</script>
