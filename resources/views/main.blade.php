@extends('layouts.nav')

@section('content')
@include('layouts.search')
<div class="container">
    <h3>Public Data</h3>
    <div class="row bg-info">
        <div class="col-sm-3 my-3">
        <div class="card h-100">
            <img src="{{asset('images/home/users.png')}}" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">Number of Users</h5>
            <p>{{$usersCount}}</p>
            </div>
        </div>
        </div>

        <div class="col-sm-3 my-3">
        <div class="card h-100">
            <img src="{{asset('images/home/generes.jpg')}}" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">Number of Genres</h5>
            <p>{{$genresCount}}</p>
            </div>
        </div>
        </div>

        <div class="col-sm-3 my-3">
        <div class="card h-100">
            <img src="{{asset('images/home/books.png')}}" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">Number of Books</h5>
            <p>{{$booksCount}}</p>
            </div>
        </div>
        </div>

        <div class="col-sm-3 my-3">
        <div class="card h-100">
            <img src="{{asset('images/home/active-books.png')}}" class="card-img-top">
            <div class="card-body">
            <h5 class="card-title">No of active books rentals <br>(In accepted status)</h5>
            <p>{{$activeRentals}}</p>
            </div>
        </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-6 my-6">
            <div class="card h-100">
                <div class="card-body">
                <h5 class="card-title">List of Geners</h5>
                <ol class="list-group list-group-numbered">
                    @foreach ($genres as $genre)
                        <li class="list-group-item"> <a href="{{route('genre.books', $genre->id)}}"> {{$genre->name}} </a> </li>
                    @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>

          <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->

       <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

          <div class="section-title">
            <h2>About</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>

          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="data:image/jpeg;base64,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" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>Digital library.</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Date of Eistblish  :</strong> <span>1 May 1995</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Budapest , HU</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>online avalible:</strong> <span>Available</span></li>
                  </ul>
                </div>
              </div>
              <p>
                Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
              </p>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

</div>
@endsection
