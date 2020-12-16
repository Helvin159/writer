<!-- Thumbnail Overlay -->
<div id="thumbOverlay" class="overlay p-5">
    <i id="closeOverlayBtn" class="searchExit far fa-window-close"></i>
    <div class="container text-center overlayContent py-5">


    </div>
</div>

<!-- Testimonial Overlay -->
<div id="testimonialOverlay" class="testimonialOverlay p-5">
        <i id="closeTestOverlayBtn" class="searchExit far fa-window-close"></i>
    <div id="leaveReviewHeading" class="container text-center d-none pt-5 ">
        <h1>Leave a review!</h1>
    </div>
    <div class="row py-5">
        <div class="col-6  d-none d-sm-none d-md-block d-lg-block">
            <?php require_once('svg/1.php')?>
        </div>
        <div class="col-sm-12 text-center col-md-6 col-lg-6 pt-5">
            <form action="#" id="testimonialForm">
            <input type="text" name="firstName" placeholder="First Name">
            <input type="text" name="lastName" placeholder="Last Name">
            <br>
            <input type="email" name="emailAddr" placeholder="Email">
            <!-- <br>
            <label class="white ">
                Rating: <br>
                <input id="starone" class="star mx-2" type="checkbox" value="1">
                <input class="star mx-2" type="checkbox" value="2">
                <input class="star mx-2" type="checkbox" value="3">
                <input class="star mx-2" type="checkbox" value="4">
                <input class="star mx-2" type="checkbox" value="5">
            </label> -->
            
            <!-- <br>
            <label class="py-2 white text-left" for="">
                Upload an image: <br>
                <input type="file" name="testimonialPic" id="testimonialPicture">
                <input type="hidden" name="testimonialPicId" value="">
            </label> -->
            <br>
            <textarea name="comment" id="" rows="5" placeholder="Comment" ></textarea>
            <br>
                <input type="submit" name="submit" value="Submit Review" class="btn btn-md btnPurple lightGrey josefinLight fontSize18 my-2">

            </form>
        </div>
    </div>
    <div class="container text-center overlayContent py-5">
        
    </div>
</div>


<!-- BEFORE LOAD Overlay -->
<div id="beforeLoad" class="beforeLoadOverlay p-5">
    <div class="container text-center beforeLoadText py-5 ">
        <h1>welcome!</h1>
    </div>
</div>

