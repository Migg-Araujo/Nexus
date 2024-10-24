<header id="header" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
    <nav>
        <div class="nav-icon">
          <div class="logo" onclick="<?php echo "window.location.href = '".INCLUDE_PATH."'";?>"></div>
          <div class="name" onclick="<?php echo "window.location.href = '".INCLUDE_PATH."'";?>"></div>
        </div>
          <div class='menu-user'>
            <?php
              $isStudent = isset($_SESSION['student'])?'student':'loginStudent';
              $isTeacher = isset($_SESSION['teacher'])?'teacher':'loginTeacher';
            ?>
            <div class="nav-student" onclick="<?php echo "window.location.href = '".INCLUDE_PATH.$isStudent."'";?>"><div></div>Área do Aluno</div>
            <div class="nav-teacher" onclick="<?php echo "window.location.href = '".INCLUDE_PATH.$isTeacher."'";?>"><div></div>Área do Professor</div>
            </div>
    </nav>
</header>