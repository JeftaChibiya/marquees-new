<div class="quick-info">
  <div class="container">      
  <div>
    @if(Request::is('/'))
      <nav class="level is-hidden-mobile">
        <div class="level-left">
          <p class="level-item quick-detail"> 
            <span class="icon">
              <i class="fa fa-credit-card" aria-hidden="true"></i>
            </span> &nbsp;         
              NO CREDIT CARD FEES
          </p>
        </div>
        <div class="level-center">
          <p class="level-item quick-detail"> 
            <span class="icon">
              <i class="fa fa-handshake-o" aria-hidden="true"></i>
            </span> &nbsp; 
              PERSONALISED SERVICE</p>
        </div>
        <div class="level-right">
          <p class="level-item quick-detail">
            <span class="icon">
              <i class="fa fa-truck" aria-hidden="true"></i>
            </span> &nbsp; 
            FAST DELIVERY</p>
        </div>
      </nav>

      <!-- Mobile presentation -->
      <div class="usp-slider is-hidden-desktop">
        <p class="has-text-centered quick-detail">
          <span class="icon">
            <i class="fa fa-credit-card" aria-hidden="true"></i>
          </span> &nbsp;   NO CREDIT CARD FEES
        </p>
        <p class="has-text-centered quick-detail">
            <span class="icon">
              <i class="fa fa-handshake-o" aria-hidden="true"></i>
            </span> &nbsp;     
            PERSONALISED SERVICE
        </p>
        <p class="has-text-centered quick-detail">
            <span class="icon">
              <i class="fa fa-truck" aria-hidden="true"></i>
            </span> &nbsp;    FAST DELIVERY
        </p>
      </div>       

     @else

       {!! Breadcrumbs::renderIfExists() !!}        

     @endif    
  </div>

  </div>
</div>