<nav class="navbar sm:navbar-expand bg-1 fg-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WebBelanja.com</a>

    <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" aria-hidden="true"></span>
    </button>

    <dialog class="drawer drawer-end" tabindex="-1" id="navbarNav" aria-labelledby="navbarNavLabel">
      <div class="drawer-body">
    <ul class="navbar-nav w-100 flex-row align-items-center gap-3">

        <!-- Menu kiri -->
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Kategori</a>
        </li>

        <!-- Search bar tengah -->
              <li class="nav-item search-item">
          <form class="search-form" role="search">
              <input
                  class="form-control"
                  type="search"
                  placeholder="Cari produk..."
                  aria-label="Search">

              <button class="search-button" type="submit">
                  <svg width="18" height="18" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor"
                      stroke-width="2">
                      <circle cx="11" cy="11" r="7"></circle>
                      <line x1="16" y1="16" x2="21" y2="21"></line>
                  </svg>
              </button>
          </form>
      </li>

        <!-- Menu kanan -->
        <li class="nav-item right-menu">
            <a class="nav-link" href="#">Pesan</a>
            <a class="nav-link"
                href="/WebBelanja.com/public/index.php?url=auth/login">
                Login
            </a>
        </li>

    </ul>
</div>

    </dialog>
  </div>
</nav>