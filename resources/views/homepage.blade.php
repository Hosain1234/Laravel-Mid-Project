@extends('layouts.app')
@section('content')
<br><br>
    <!-- part after navbar -->
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="company-name">SHIKHTE <span>CHAI</span></h1>
                    <h2 class="company-moto">A place where learners are always welcome</h2>
                    <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad voluptatum ab temporibus cumque ullam recusandae qui dicta cum? Ratione blanditiis accusamus perspiciatis saepe quod, cupiditate nam autem tempora ex nemo!</p>
                    <button type="button" class="btn btn-outline-success">Join Now</button>
                </div>
                <div class="col-md-6">
                    <img src="https://hosain1234.github.io/laravel-website/asset/first-image.jpg" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section><br><br><br>
    <!-- part for cards that will contain cards -->
    <section class="section-3">
        <div class="container">
            <h2 class="d-flex justify-content-center container-name">TOP SELLED COURSES</h2><br><br>
            <div class="row">
                <div class="col-md-4 col-sm-12" id="course-1">
                    <img src="https://hosain1234.github.io/laravel-website/asset/slider/image-1.jpg" alt="" class="w-100"><br>
                    <p class="course-heading">Lorem ipsum dolor sit amet.</p>
                    <p class="course-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quo veritatis mollitia nulla voluptatum aliquid culpa! Illo, voluptatem officia? Similique!</p>
                    <div class="course-button d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-success">Course Details</button>
                        <button type="button" class="btn btn-outline-success">Add To Cart</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="https://hosain1234.github.io/laravel-website/asset/slider/image-2.png" id="course-2" alt="" class="w-100"><br>
                    <p class="course-heading">Lorem ipsum dolor sit amet.</p>
                    <p class="course-details">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora quibusdam repellendus animi quam vitae dicta error, ex distinctio qui porro!</p>
                    <div class="course-button d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-success">Course Details</button>
                        <button type="button" class="btn btn-outline-success">Add To Cart</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="https://hosain1234.github.io/laravel-website/asset/slider/image-3.jpg" id="course-3" alt="" class="w-100"><br>
                    <p class="course-heading">Lorem ipsum dolor sit amet.</p>
                    <p class="course-details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam repellendus ut quo voluptatum cum ipsa quidem vel, autem animi dolores.</p>
                    <div class="course-button d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-success">Course Details</button>
                        <button type="button" class="btn btn-outline-success">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div><br><br><br>
    </section>
    <!-- other 3 courses -->
    <section class="section-4">
        <div class="container">
            <h2 class="d-flex justify-content-center container-name">ADVANCED COURSES</h2><br><br>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <img src="https://hosain1234.github.io/laravel-website/asset/slider/image-1.jpg" id="course-4" alt="" class="w-100"><br>
                    <p class="course-heading">Lorem ipsum dolor sit amet.</p>
                    <p class="course-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quo veritatis mollitia nulla voluptatum aliquid culpa! Illo, voluptatem officia? Similique!</p>
                    <div class="course-button d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-success">Course Details</button>
                        <button type="button" class="btn btn-outline-success">Add To Cart</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="https://hosain1234.github.io/laravel-website/asset/slider/image-2.png" id="course-5" alt="" class="w-100"><br>
                    <p class="course-heading">Lorem ipsum dolor sit amet.</p>
                    <p class="course-details">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora quibusdam repellendus animi quam vitae dicta error, ex distinctio qui porro!</p>
                    <div class="course-button d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-success">Course Details</button>
                        <button type="button" class="btn btn-outline-success">Add To Cart</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <img src="https://hosain1234.github.io/laravel-website/asset/slider/image-3.jpg" id="course-6" alt="" class="w-100"><br>
                    <p class="course-heading">Lorem ipsum dolor sit amet.</p>
                    <p class="course-details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam repellendus ut quo voluptatum cum ipsa quidem vel, autem animi dolores.</p>
                    <div class="course-button d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-success">Course Details</button>
                        <button type="button" class="btn btn-outline-success">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div><br><br><br>
    </section>
    <!-- frequently asked questions here -->
    <section class="section-5">
        <h2 class="d-flex justify-content-center container-name">Frequently Asked Questions?</h2><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- accordian -->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Who are these courses intended for?
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Those who aspire to be web developers.For people who wish to study web programming from the ground up and eventually work as a web developer for a software firm.For individuals who are unfamiliar with programming or web development.Even those who haven't figured it out after four years of CSE and haven't learnt much will be able to apply for jobs by studying Complete Web Development from this course.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What are the prerequisites for taking these courses?
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Because we are starting from scratch.So you don't need to know much ahead of time.However, if you have the time, you can do these three tasks.You simply need to be more selective in the assistance you provide to others.Joining the course will not turn you become an automatic web developer.You must have the attitude to work hard and stick with it.If you are stuck anywhere, you must have the attitude to seek help as well as the will to persist with it.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How will we obtain the videos for these courses?
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Pre-recorded course videos will be used.You registered for this course and created an account.From the start of the course, the videos will be sent one module every day.Each module typically includes 10 to 12 movies. You must view and complete these videos on the same day they are released.As a result, you must set aside time each day for the course.And during that time, you may watch the film laying down, standing, leaning, shaking your legs, dancing, or hiding under the bed if you wish.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            What will the course material be?
                            </button>
                          </h2>
                          <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Only by looking at the course curriculum will you be able to grasp this.But, in a nutshell, this course has everything you need to become a serious web developer right now.In a nutshell, HTML, CSS, bootstrap, JavaScript, Git, ES6, REST API, server, and JSON are all there.Simultaneously, there is a method for creating a comprehensive website with the React, sophisticated React framework that is now the most popular. There are many more things to consider, such as node, database (mongodb), debug, problem solving, and interview questions.You will also be shown 11 websites during the course.As part of your homework, you will need to visit 11 more websites.There is no chance you will be able to accomplish this without becoming a decent grade junior web developer.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How long will it take to finish the course?
                            </button>
                          </h2>
                          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                It will take roughly three months if you watch 1 to 1.5 hours of video every day and practice 4 to 6 hours additional.However, you may need to set aside additional time for schoolwork and assignments from time to time.We must introduce a workaholic mindset.There is no way to cheat or cut corners.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Why isn't this course offered for free?
                            </button>
                          </h2>
                          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                This isn't just a video-watching course.Because this training is supported by 30 skilled developers.There are 11 assignments.Marks Plus will provide feedback.Within 24 hours, seven additional web engineers will be available to answer any of your inquiries. If there is an issue with your code, a specialized developer will address it through screenshare.Along with establishing a course website, developers, video editors, course moderators, live conceptual sessions, and job placement help, everyone who works together will no longer be able to manage their families for free.As a result, we must maintain a minimum cost for this course.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            What will we do if we are unable to complete the course study?
                            </button>
                          </h2>
                          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We've set up a private Facebook group for the course.We will have 14 competent web developers where I will be, as well as a few other team members in different occupations to lead you in some additional work and to help you.Our goal is to respond to all of your queries within 24 hours. The majority of the time, immediate responses are provided.You will acquire all of the answers in about 7-8 hours on average.Furthermore, if you can't solve the problem by working within the code (except on Friday), there will be a few parallel meet sessions at three o'clock every day.Where you may use screenshare to fix your problem.If you do not understand something, it will be explained to you.What more is required?
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-md-6">
                    <img src="https://hosain1234.github.io/laravel-website/asset/think.jpg" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section><br><br><br>
    <!-- footer -->
    <section class="section-6">
        <div class="footerr">
            <div class="foot-head">
                <p>Stay Connected With Us</p>
            </div><br>
            <div class="row">
                <div class="col-md-6 col-sm-2">
                    <ul>
                        <li><a href="" class="foot-li">Home</a></li>
                        <li><a href="" class="foot-li">Courses</a></li>
                        <li><a href="" class="foot-li">Join Now</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-2">
                    <ul>
                        <li><a href="" class="foot-li">TOP</a></li>
                        <li><a href="" class="foot-li">Contact Us</a></li>
                        <li><a href="" class="foot-li">FAQ</a></li>
                    </ul>
                </div>
            </div><br>
            <div class="foot-text">
                <small>&copy;2022 All Right Reserved SHIKHTE CHAI</small>
            </div>
        </div>
    </section>
    @endsection