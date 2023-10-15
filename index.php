

<?php get_header() ?> 
  <main class="main">
    <section class="welcome">
      <img class="welcome__background-img" src="<?php echo get_template_directory_uri(); ?>\assets\images\img\welcome_bg.png" alt="">
      <div class="welcome__container container text-uppercase">
        <div class="title display-3">
          <h1 class="title display-3"><strong>Welcome </strong></h1><span class="font-weight-light"> to tahiti</span>
        </div>
        <div class="font-weight-lighter">Your vacation starts here</div>
      </div>
    </section>

    <section class="discover-tahiti">
      <div class="discover-tahiti__container container">
        <div class="discover-tahiti__title">
          <div class="title text-uppercase">
            <h2 class="font-weight-bold display-4">DISCOVER </h2><span class="font-weight-normal ">tahiti</span>
          </div>
          <div>Surrounded by sand-fringed motus  and a turquoise lagoon protected by a coral reef, Bora Bora is known...</div>
        </div>

        <div class="discover-tahiti__cards-list">
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>\assets\images\img\bora-bora.jfif" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-title font-weight-normal text-uppercase">Bora bora</div>
            <p class="card-text">Mo'orea is a South Pacific island, part of French Polynesia's Society Islands archipelago. It's known for...</p>
          </div>
          <div class="addition-info-card text-uppercase">
            <div>
              <span class="font-weight-light"> from</span> 
              <span class="font-weight-lighter price"> $2,500</span> 
            </div> 
            <img src="<?php echo get_template_directory_uri(); ?>\assets\images\icon\arrow-right.svg" alt="">
          </div>
        </div>
        
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>\assets\images\img\moorea.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-title font-weight-normal text-uppercase">Moorea</div>
            <p class="card-text">Ra'iātea, is the second largest of the Society Islands in French Polynesia. The island is widely regarded as...</p>
          </div>
          <div class="addition-info-card text-uppercase">
            <div>
              <span class="font-weight-light"> from</span> 
              <span class="font-weight-lighter price"> $2,500</span> 
            </div> 
            <img src="<?php echo get_template_directory_uri(); ?>\assets\images\icon\arrow-right.svg" alt="">
          </div>
        </div>

        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>\assets\images\img\raiatea.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-title font-weight-normal text-uppercase">Ra'iātea</div>
            <p class="card-text">Taha’a is an island located among the western group, the Leeward Islands, of the Society Islands in...</p>
          </div>
          <div class="addition-info-card text-uppercase">
            <div>
              <span class="font-weight-light"> from</span> 
              <span class="font-weight-lighter price"> $2,500</span> 
            </div> 
            <img src="<?php echo get_template_directory_uri(); ?>\assets\images\icon\arrow-right.svg" alt="">
          </div>
        </div>

        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>\assets\images\img\taha.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-title font-weight-normal text-uppercase">TAHA</div>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="addition-info-card text-uppercase">
            <div>
              <span class="font-weight-light"> from</span> 
              <span class="font-weight-lighter price"> $2,500</span> 
            </div> 
            <img src="<?php echo get_template_directory_uri(); ?>\assets\images\icon\arrow-right.svg" alt="">
          </div>
        </div>
        </div>

        <div class="discover-search text-center">
          <div class="font-weight-normal">Discover all Tahiti has to offer.</div>
          
          <div id="select">
            <select name="" label="Select an island">
              <option value="1">Select an island</option>
              <option value="2">One</option>
              <option value="3">Two</option>
              <option value="4">Three</option>
            </select>
            <button class="button">Explore</button>
          </div>
        </div>
      </div>
    </section>

    <section class="experience">
      <img class="bg" src="<?php echo get_template_directory_uri(); ?>\assets\images\img\experience.png" alt="">

      <div class="experience__container container">
        <div>
          <div class="experience__title title font-weight-bold text-uppercase">
            Experience <span class="font-weight-light">tahiti</span>
          </div>
          <p>Immerse yourself in Tahiti’s unique culture</p>

        </div>
        <div>
          <p class="text-center experience__info-text">
            The beauty, drama, and power of today’s Tahitian dance testify to its resilience in Polynesian culture. In ancient times, dances were directly linked with all aspects of life. One would dance for joy, to welcome a visitor, to pray to a god, to challenge an enemy, and to seduce a mate.
          </p>
          <button class="button text-center font-weight-light">Learn more</button>
        </div>
      </div>
    </section>

    <section class="why-tahiti">
      <div class="why-tahiti__container container">
      <div class="container px-4 py-5" id="featured-3">
        <div class="text-center display-3 why-tahiti__title text-uppercase font-weight-bold">Why <span class="font-weight-light">tahiti?</span></div>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature text-center col">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie sollicitudin nibh, nec iaculis est luctus sit amet.</p>
      </div>

        <div class="feature text-center col">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie sollicitudin nibh, nec iaculis est luctus sit amet.</p>
        </div>

        <div class="feature text-center col">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie sollicitudin nibh, nec iaculis est luctus sit amet.</p>
        </div>
      </div>
    </div>
      </div>
    </section>

    <section class="unique-vacation">
      <img class="bg" src="<?php echo get_template_directory_uri(); ?>\assets\images\img\unique_bg.png" alt="">
      <div class="unique-vacation__container container">
        <div class="unique-vacation__info-box text-center">
          <h2>Unique vacations, tailored to your desires</h2>
          <div>Our travel experts will take care of everything. Whether choosing from our packaged vacations or customizing your own, extraordinary service and exceptional value are just a call or click</div>
          <button class="text-center button">Book now</button>
        </div>
      </div>
    </section>

  </main>
<?php get_footer() ?>
