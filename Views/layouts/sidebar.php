<aside class="left-sidebar" data-sidebarbg="skin5">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="pt-4">
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
            <i class="mdi mdi-account"></i>
            <span class="hide-menu">
            <?php echo (session()->login_session['name_user']? session()->login_session['name_user'] : 'Belum login'); ?>
            </span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url(); ?>/dashboard" aria-expanded="false"><i
              class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url(); ?>/logout" aria-expanded="false">
          <i class="mdi mdi-logout"></i><span class="hide-menu">Logout</span></a>
        </li>
        
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>