<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'dashboard') ? "" : "collapsed" ?>" href="dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'order') ? "" : "collapsed" ?>" href="order">
                <i class="bi bi-cart-check"></i>
                <span>Kelola Order</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'pesan') ? "" : "collapsed" ?>" href="pesan">
                <i class="bi bi-chat-dots"></i>
                <span>Kelola Pesan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'quote') ? "" : "collapsed" ?>" href="quote">
                <i class="bi bi-envelope"></i>
                <span>Kelola Quote</span>
            </a>
        </li>
    
    </ul>

</aside><!-- End Sidebar-->