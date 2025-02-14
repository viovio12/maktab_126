@extends('layout.template')
@section('content')
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Students</h6>
              <h2>Welcome to SCHOOL-126</h2>
              <p>School 126, located in the Chilonzor region of Tashkent, is a specialized public scho
                ol with a strong focus on mathematics. While the school offers a standard curriculum for all
                 students, it is unique in that each grade has one specialized class that receives more in-depth
                  teaching in mathematics compared to the other classes. 
                  This specialized math class is designed to nurture and enhance students' mathematical abilities,
                   preparing them for advanced studies, competitions, and careers in STEM fields.
              </p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          <!-- adabiyot -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/adabustoz.jpg" alt="" style="border-radius: 60%;">
              </div>
              <div class="down-content">
                <h4>Literature Teacher </h4>
                <p>Umida Zakirova</p>
              </div>
            </div>
            <!-- diriktor -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/headteacher.jpg" alt="" style="border-radius: 60%;">
              </div>
              <div class="down-content">
                <h4>School Counselor</h4>
                <p>Jamshidbek Abdullayev</p>
              </div>
            </div>
            <!-- ingliz -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/englishustoz.jpg" alt="" style="border-radius: 60%;">
              </div>
              <div class="down-content">
                <h4>English Teacher</h4>
                <p>Mrs. Margomafrfrn</p>
              </div>
            </div>
            <!-- math -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/math_ustoz.jpg" alt="" style="border-radius: 60%;">
              </div>
              <div class="down-content">
                <h4>Math Teacher</h4>
                <p>Toxir Akmalovich</p>
              </div>
            </div>
            <!-- fizika -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/fizikaustoz.jpg" alt="" style="border-radius: 60%;">
              </div>
              <div class="down-content">
                <h4>Physics Teacher</h4>
                <p>Farangiz Anvarova</p>
              </div>
            </div>
            
            <!-- tarix -->
            <div class="item">
              <div class="icon">
                <img src="assets/images/tarixustoz.jpg" alt="" style="border-radius: 60%;">
              </div>
              <div class="down-content">
                <h4>History Teacher</h4>
                <p>Nilufar Jamalova</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Upcoming Clubs</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Clubs List</h4>
            <ul>
              <li><a href="#">Debate club</a></li> <br>
              <li><a href="#">Quiz club</a></li> <br>
              <li><a href="#">IELTS club</a></li> <br>
              <li><a href="#">SAT club</a></li><br>
              <li><a href="#">and more</a></li>
            </ul>
            <div class="main-button-red">
              <a href="meetings.html">All Upcoming Clubs</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>Free</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>10</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Debate club</h4></a>
                  <p>Members engage in structured debates on a variety of topics, learning how to present persuasive arguments.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>Free</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>24</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Quiz club</h4></a>
                  <p>The Quiz Club encourages curiosity and general knowledge.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>Free</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>26</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>IELTS club</h4></a>
                  <p>The club provides resources and practice sessions to improve the key skills tested in the exam.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>Free</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>30</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>SAT club</h4></a>
                  <p>Our goal is to boost students' confidence and scores in a supportive group environment.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our Popular Courses</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <!-- algebra -->
            <div class="item">
              <img src="assets/images/algebra.jpg" alt="Course One" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Algebra</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                       
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- adabiyot -->
            <div class="item">
              <img src="assets/images/adabiyot.jpg" alt="Course Two" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Adabiyot</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>

                      </ul>
                    </div>
                    <div class="col-4">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/biology.webp" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Bioogiya</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>

                      </ul>
                    </div>
                    <div class="col-4">
                
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- english -->
            <div class="item">
              <img src="assets/images/english.jpeg" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>English</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- fizika -->
            <div class="item">
              <img src="assets/images/fizika.jpg" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Fizika</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        
                      </ul>
                    </div>
                    <div class="col-4">
                
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- geog -->
            <div class="item">
              <img src="assets/images/geografiya.jpg" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Geoografiya</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>

                       
                      </ul>
                    </div>
                    <div class="col-4">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- geom -->
            <div class="item">
              <img src="assets/images/geom.jpg" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Geometriya</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      
                      </ul>
                    </div>
                    <div class="col-4">
                  
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- huquq -->
            <div class="item">
              <img src="assets/images/huquq.jpg" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">

                <h4>Huquq</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- info -->
            <div class="item">
              <img src="assets/images/info.webp" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Informatika</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- kimyo -->
            <div class="item">
              <img src="assets/images/kimyo.jpg" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Kimyo</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- onatili -->
            <div class="item" >
              <img src="assets/images/onatili.jpg" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Ona tili</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ozbtarix -->
            <div class="item">
              <img src="assets/images/ozbhistory.png" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
  
                <h4>O'zbekiston tarixi</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ruski -->
            <div class="item">
              <img src="assets/images/rustili.jpg" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Rus tili</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Jismoniy -->
            <div class="item">
              <img src="assets/images/sport.jpg" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Jismoniy tarbiya</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          <!-- jahontarixi -->
            <div class="item">
              <img src="assets/images/worldhistory.jpg" alt="" style="width: 301.5px; height: 200px; object-fit: fit;">
              <div class="down-content">
                <h4>Jahon tarixi</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our School</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">85</div>
                    <div class="count-title">Succesed Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">89</div>
                    <div class="count-title">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2500</div>
                    <div class="count-title">Students</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div style="  color: white;">
            <img src="assets/images/person1.jpg" alt="" style="width: 62%; border-radius: 20%;margin-left: 18%;">
            
            <h5 style="text-align: center;margin-top: 1%;">School President</h5>
            
            <p style="color: white;text-align: center; margin-top: 1%;">Duschanova Dilnura</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  