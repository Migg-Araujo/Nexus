<header id="header" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
    <nav>
        <div class="nav-icon">
          <div class="logo" onclick="<?php echo "window.location.href = '".INCLUDE_PATH."'";?>"></div>
          <div class="name" onclick="<?php echo "window.location.href = '".INCLUDE_PATH."'";?>"></div>
        </div>
          <div class='menu-user'>
            <?php
              if(isset($_SESSION['user'])){
                echo '<div onclick = "window.location.href = '."'".INCLUDE_PATH."logout'".'" style="margin-right: 20px; font-size: 10px">Desconectar</div>';
            }
            ?>
            <div class="nav-student" onclick="<?php echo "window.location.href = '".INCLUDE_PATH."loginStudent'";?>"><div></div>Área do Aluno</div>
            <div class="nav-teacher" onclick="<?php echo "window.location.href = '".INCLUDE_PATH."loginTeacher'";?>"><div></div>Área do Professor</div>
            </div>
    </nav>
</header>