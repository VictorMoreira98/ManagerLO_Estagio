
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Manager LO</h3>
                <strong>ML</strong>
            </div>

            <ul class="list-unstyled components">
              
                <li >
                    <a href="areas" <?php if($_SESSION['tipoURL'] == 1): ?>
                    style="color: rgb(18, 148, 120);
                    background: #fff;";
                    <?php endif ?>
                    >
                    <i class="fas fa-chart-area"></i>
                        Áreas
                    </a>
                </li>
                <br>
                <li>
                    <a href="dragas" <?php if($_SESSION['tipoURL'] == 2): ?>
                    style="color: rgb(18, 148, 120);
                    background: #fff;";
                    <?php endif ?>>
                    <i class="fas fa-ship"></i>
                        Dragas
                    </a>
                </li>
                <br>
                <li>
                    <a href="terminais" <?php if($_SESSION['tipoURL'] == 3): ?>
                    style="color: rgb(18, 148, 120);
                    background: #fff;";
                    <?php endif ?>>
                    <i class="fas fa-wave-square"></i>
                        Terminais
                    </a>
                </li>
            </ul>

            
        </nav>

     

   
    <script type="text/javascript">
        $(document).ready(function () {
            $('#nav-icon1').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
