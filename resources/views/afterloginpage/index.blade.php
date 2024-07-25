@include('layouts.header')

@include('layouts.navbar')
<style>
    .service-item {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        min-height: 200px;
        /* Adjust as needed */
    }

    .service-item .p-4 {
        flex-grow: 1;
    }
</style>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Flavor Packed<br>Culinary Innovations</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Welcome to Kitchen Chronicles, where culinary creativity comes alive! Discover innovative, delicious recipes from home cooks and chefs worldwide. Whether you’re an expert or a beginner, our easy-to-follow guides and tips make cooking a joy.
                    Explore a variety of dishes, share your own creations, and join a community passionate about food. Start your culinary adventure with us today. Happy cooking!
                </p>
                <a href="{{url('recpie')}}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Our Recipes</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>


<!-- service start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-bowl-food text-primary mb-4"></i>
                        <h5>Recipe Database</h5>
                        <p>A large collection of recipes categorized by cuisine, meal type, dietary restrictions, difficulty level.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>User Profiles</h5>
                        <p>Allowing users to create profiles, save favorite recipes, and follow other users.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cloud-arrow-up text-primary mb-4"></i>
                        <h5>Recipe Upload</h5>
                        <p>Users can upload their own recipes, including ingredients, instructions, and photos.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa-brands fa-3x fa-searchengin text-primary mb-4"></i>
                        <h5>Search and Filter</h5>
                        <p>Search and filter options to find recipes on criteria like ingredients, cook time, dietary needs, etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-comment text-primary mb-4"></i>
                        <h5>Reviews and Ratings</h5>
                        <p>Users can rate and review recipes, providing feedback and suggestions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa-brands fa-3x fa-instagram text-primary mb-4"></i>
                        <h5>Social Media Integration</h5>
                        <p>Easy sharing of recipes on social media platforms enabling users to showcase their culinary creations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-tablet text-primary mb-4"></i>
                        <h5>Responsive Design</h5>
                        <p>Compatibility with smart kitchen devices like ovens and refrigerators.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa-brands fa-3x fa-nutritionix text-primary mb-4"></i>
                        <h5>Nutritional Information</h5>
                        <p>Detailed nutritional breakdowns of recipes. Displaying various nutrients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')