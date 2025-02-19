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
          @foreach($teach_names as $tech)
            <div class="item">
              <div class="icon">
                <img src="{{ asset('storage/' . $tech->image) }}" alt="" style="border-radius: 60%;">
              </div>
              <div class="down-content">
                <h4>{{$tech->subject}} </h4>
                <p>{{$tech->name}}</p>
              </div>
            </div>
            @endforeach
            <!-- add/delete/edit -->
           


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

            <!-- Sidebar: Club List -->
            <div class="col-lg-4">
                <div class="categories">
                    <h4>Clubs List</h4>
                    <ul>
                        @foreach($clubs as $club)
                            <li><a href="#">{{ $club->name }}</a></li> <br>
                        @endforeach
                    </ul>
                    <div class="main-button-red">
                        <a href="meetings.html">All Upcoming Clubs</a>
                    </div>
                </div>
            </div>

            <!-- Club Details -->
            <div class="col-lg-8">
                <div class="row">
                    @foreach($clubs as $club)
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>${{ $club->fee }}</span> <!-- Fee from DB -->
                                    </div>
                                    <a href="meeting-details.html">
                                        <img src="{{ asset('storage/' . $club->image) }}" alt="{{ $club->name }}">
                                    </a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>{{ date('M', strtotime($club->date)) }} <span>{{ date('d', strtotime($club->date)) }}</span></h6>
                                    </div>
                                    <a href="meeting-details.html"><h4>{{ $club->name }}</h4></a>
                                    <p>{{ $club->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                @foreach ($courses as $course)
<div class="item">
    <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->name }}" style="width: 301.5px; height: 200px; object-fit: cover;">
    <div class="down-content">
        <h4>{{ $course->name }}</h4>
        <div class="info">
            <div class="row">
                <div class="col-8">
                    <ul>
                        @for ($i = 0; $i < $course->rating; $i++)
                            <li><i class="fa fa-star"></i></li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
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

  