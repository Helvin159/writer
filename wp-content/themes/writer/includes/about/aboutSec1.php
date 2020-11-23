<div class="container py-5 mt-5">
    <div class="container text-center">
        <h1>
            <?php the_title()?>
            <hr class="w-25">
        </h1>
    </div>
<div class="row">
    <div class="col-sm-6">
        <p><?php the_content()?></p>
    </div>
    <div class="col-sm-6 ">
        <div class="row">
            <div class="col-md-6">
                <div class="container my-2 jobsCompleted borderOne">
                <h3 class="purple"><?php echo get_field('satisfied_clients')?></h3>
                <h6>Satisfied Clients</h6>
                </div>

            </div>
            <div class="col-md-6">
                <div class="container my-2 jobsCompleted borderTwo">
                <h3 class="purple"><?php echo get_field('articles')?></h3>
                <h6>Articles</h6>
                </div>

            </div>
            <div class="col-md-6">
                <div class="container my-2 jobsCompleted borderThree">
                <h3 class="purple"><?php echo get_field('projects')?></h3>
                <h6>Projects</h6>
                </div>

            </div>
            <div class="col-md-6">
                <div class="container my-2 jobsCompleted borderFour">
                <h3 class="purple"><?php echo get_field('meetings')?></h3>
                <h6>Cup of Coffee</h6>
                </div>

            </div>
        </div>
    </div>
</div>
</div>