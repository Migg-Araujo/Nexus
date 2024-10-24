<?php include 'header.php';?>
<main>
    <section id='home' class='home'>
        <h3>&#128075; Hey, Welcome to</h3>
        <h1>Math Blog</h1>
        <p>This blog exists to provide information to math lovers</p>
    </section>
    
    <section id='about' class="about">
        <div class="about-div">
            <h1>About Me</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>

        <div class="img-div">
            <img src="<?php echo INCLUDE_PATH; ?>/src/photo.jpg"/>
        </div>
    </section>
    <section class="post-area">
        <h1>New Posts</h1>
        <div class="posts">
            <div class="post">
                <img src="<?php echo INCLUDE_PATH; ?>/src/photo.jpg"/>
                <h3>Title Post</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <div class="stats-area">
                    <div class="categories">
                        <button>Category</button>
                        <button>Category</button>
                    </div>
                    <div class="stats">
                        <div class="views-icon"></div>
                        <p>7</p>
                        <div class="heart-icon"></div>
                        <p>7</p>
                    </div>
                </div>
            </div>

            <div class="post">
                <img src="<?php echo INCLUDE_PATH; ?>/src/photo.jpg"/>
                <h3>Title Post</h3>
                <p>Lorem ipshttp://localhost/BlogMath/#homeum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <div class="stats-area">
                    <div class="categories">
                        <button>Category</button>
                        <button>Category</button>
                    </div>
                    <div class="stats">
                        <div class="views-icon"></div>
                        <p>21</p>
                        <div class="heart-icon"></div>
                        <p>21</p>
                    </div>
                </div>
            </div>

            <div class="post">
                <img src="<?php echo INCLUDE_PATH; ?>/src/photo.jpg"/>
                <h3>Title Post</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <div class="stats-area">
                    <div class="categories">
                        <button>Category</button>
                        <button>Category</button>
                    </div>
                    <div class="stats">
                        <div class="views-icon"></div>
                        <p>213</p>
                        <div class="heart-icon"></div>
                        <p>213</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php';?>