

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Please Enter Student ID </h2>
                <div class="container pt-lg-5">
                    <div class="row block-9">
                        <div class="col-md-12 pr-md-5">

                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Student ID" required name="id">
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="btnSubmit" value="Search Record" class="btn btn-primary py-3 px-5">
                                </div>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <?php
         require_once ("FindedStudent.php");
        ?>
    </div>
</section>
