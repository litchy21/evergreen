<?php

require_once 'header.php';
require_once 'menu.php';

?>

<body>

    <!-- Page Content -->
    <div class="container">

        <div>

            <div>
            	<hr>
                <h1>Le scénario d'Evergreen</h1>

                <p class="lead">
                    by Louise Roussel
                </p>

                <hr>

                <p><span class="glyphicon glyphicon-time"></span> Posté le 15 mai 2017 à 12h45</p>

                <hr>

                <img class="img-responsive" src="images/typewriter.png" alt="" style="margin: 0 auto;">

                <hr>


				<div class="graph-outline">
					<object data="images/scenario.pdf" type="application/pdf" width="100%" height="600px"> 
						<p>It appears you don't have a PDF plugin for this browser.
					       No biggie... you can <a href="resume.pdf">click here to
					       download the PDF file.</a></p>  
					</object>
				</div>
                


                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well commentaire">
                    <h4>Laissez un commentaire :</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->
    <hr>
    </div>


<?php

require_once 'footer.php';

?>
