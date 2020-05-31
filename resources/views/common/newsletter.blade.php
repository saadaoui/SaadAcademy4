<div class="bg-dark pt-5 pb-5">

    <div class="container">

        <div class="row ">

          <div class="col-sm-12 text-center newsletter-wrapper">

            <img class="mb-2" width="60 " src="{{ asset('images/logo2.png') }}" alt="site logo">
              <p class="mb-2">Subscribe to Our Newsletter for latest news</p>
              <form action="" class="form-inline">
                  @csrf
                  <input type="text" class="form-control newsletter-form-control mr-4 pl-4 pr-4 mb-2" placeholder="Your Email">
                  <button class="btn newsletter-btn mb-2" type="submit">
                     SUBSCIBE
                  </button>

              </form>

          </div>

        </div>

    </div>

</div>
