<div class="quick-info">
  <div class="container">      

  <div>
    @if(Request::is('/'))
      <nav class="level is-hidden-mobile">
        <div class="level-left">
          <p class="level-item subtitle"> 
            <span class="icon">
              <i class="fa fa-credit-card" aria-hidden="true"></i>
            </span> &nbsp;         
              No credit card fees
          </p>
        </div>
        <div class="level-center">
          <p class="level-item subtitle"> 
            <span class="icon">
              <i class="fa fa-handshake-o" aria-hidden="true"></i>
            </span> &nbsp; 
              Personalised service</p>
        </div>
        <div class="level-right">
          <p class="level-item subtitle">
            <span class="icon">
              <i class="fa fa-truck" aria-hidden="true"></i>
            </span> &nbsp; 
            Fast Delivery</p>
        </div>
      </nav>

      <!-- Mobile presentation -->
      <div class="usp-slider is-hidden-desktop">
        <p class="subtitle is-5 has-text-centered">
          <span class="icon">
            <i class="fa fa-credit-card" aria-hidden="true"></i>
          </span> &nbsp;   No Credit Card Fees
        </p>
        <p class="subtitle is-5 has-text-centered">
            <span class="icon">
              <i class="fa fa-handshake-o" aria-hidden="true"></i>
            </span> &nbsp;     
            Personalised Service
        </p>
        <p class="subtitle is-5 has-text-centered">
            <span class="icon">
              <i class="fa fa-truck" aria-hidden="true"></i>
            </span> &nbsp;    Fast Delivery
        </p>
      </div>       

     @else

       {!! Breadcrumbs::renderIfExists() !!}        

     @endif    
  </div>

  </div>
</div>