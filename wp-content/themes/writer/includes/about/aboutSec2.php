<div class="container-fluid aboutSecTwo text-center">

    <div class="container text-left py-4 px-4 bgWhite abSecTwoQuote">
        <?php if(get_field('quote')) {
            echo '<p>'.get_field('quote').'</p>'; 
        } else{
            echo '<p>“If you want to be a writer, you must do two things above all others: read a lot and write a lot.” ~ Stephen King</p>';
        }
            ?>
    </div>
</div>