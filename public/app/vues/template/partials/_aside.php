<?php

/*
    ./app/vues/template/partials/_aside.php
  */

?>

<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="#">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                        <div class="input-group-append">
                            <button class="btns" type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
            </form>
        </aside>

        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Category</h4>

            <?php 
                $ctrl = new App\Controleurs\CategoriesControleur();
                $ctrl->indexAction();
            ?>

            <!-- <ul class="list cat-list">
                <li>
                    <a href="#" class="d-flex">
                        <p>Restaurant food</p>
                        <p>(37)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Travel news</p>
                        <p>(10)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Modern technology</p>
                        <p>(03)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Product</p>
                        <p>(11)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Inspiration</p>
                        <p>21</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Health Care (21)</p>
                        <p>09</p>
                    </a>
                </li>
            </ul> -->
        </aside>

        <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title">Tag Clouds</h4>
            <ul class="list">
                <li>
                    <a href="#">project</a>
                </li>
                <li>
                    <a href="#">love</a>
                </li>
                <li>
                    <a href="#">technology</a>
                </li>
                <li>
                    <a href="#">travel</a>
                </li>
                <li>
                    <a href="#">restaurant</a>
                </li>
                <li>
                    <a href="#">life style</a>
                </li>
                <li>
                    <a href="#">design</a>
                </li>
                <li>
                    <a href="#">illustration</a>
                </li>
            </ul>
        </aside>

        <aside class="single_sidebar_widget newsletter_widget">
            <h4 class="widget_title">Newsletter</h4>

            <form action="newsletter" method="post">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                    <div id="confirmation"></div>
                </div>
                <button id="subscribersAdd" class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>

            </form>

        </aside>
    </div>