@extends('layout.template')
@section('content')
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Here are our newly opened clubs</h6>
          <h2>Upcoming Clubs</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="filters">
                <ul>
                  <li data-filter="*"  class="active">All Meetings</li>
                  <li data-filter=".soon">Soon</li>
                  <li data-filter=".imp">Important</li>
                  <li data-filter=".att">Popular</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row grid"> 
                <!-- debate club -->
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="debate.html"><img src="assets/images/debate_club.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>12</span></h6>
                      </div>
                      <a href="#"><h4>Debate club</h4></a>
                      <p> Members engage in structured debates on a variety of topics, learning how to present persuasive arguments and respond to opposing views effectively.</p>
                    </div>
                  </div>
                </div>
<!-- ILTS -->

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                    
                      <a href="ielts.html"><img src="assets/images/ielts_club.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>14</span></h6>
                      </div>
                      <a href="#"><h4>IELTS club</h4></a>
                      <p>The club provides resources and practice sessions to improve the key skills tested in the exam</p>
                    </div>
                  </div>
                </div>
<!-- sat -->
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      
                      <a href="sat.html"><img src="assets/images/sat_club.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>16</span></h6>
                      </div>
                      <a href="#"><h4>SAT club</h4></a>
                      <p>Our goal is to boost students' confidence and scores in a supportive group environment.

                      </p>
                    </div>
                  </div>
                </div>

                <!-- quiz -->
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      
                      <a href="quiz.html"><img src="assets/images/quizbal2_picture.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>18</span></h6>
                      </div>
                      <a href="#"><h4>Quiz club</h4></a>
                      <p>The Quiz Club encourages curiosity and general knowledge. </p>
                    </div>
                  </div>
                </div>
                <!-- cooking -->
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="cooking.htm"><img src="assets/images/cooking.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>22</span></h6>
                      </div>
                      <a href="#"><h4>Cooking club</h4></a>
                      <p>The club promotes creativity, teamwork, and a love for food.</p>
                    </div>
                  </div>
                </div>
                <!-- eco -->
                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                     
                      <a href="eco.html"><img src="assets/images/eco_club.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>24</span></h6>
                      </div>
                      <a href="#"><h4>Eco club</h4></a>
                      <p>The Eco Club is dedicated to promoting environmental awareness and sustainable practices. </p>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-4 templatemo-item-col all imp att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$52.00</span>
                      </div>
                      <a href="#"><img src="assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>27</span></h6>
                      </div>
                      <a href="#"><h4>Online Teaching Techniques</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all soon imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$64.00</span>
                      </div>
                      <a href="#"><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>28</span></h6>
                      </div>
                      <a href="#"><h4>Instant Lecture Design</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-lg-4 templatemo-item-col all att soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>$74.00</span>
                      </div>
                      <a href="#"><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>30</span></h6>
                      </div>
                      <a href="#"><h4>Online Social Networking</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="pagination">
                <ul>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
   