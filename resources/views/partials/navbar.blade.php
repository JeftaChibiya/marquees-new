
<nav class="navbar is-transparent"> <!-- background-color: medium blue in contrast to logo -->  
    <div class="container">

       <div class="navbar-brand">             
            <!-- logo -->
            <a href="/" class="navbar-brand-img" data-pjax>
                  <img src="/images/branding/19.svg" alt="logo" style="width: 77px; height: auto; opacity: .93">         
            </a> 
            
            <div class="div-right is-hidden-desktop">
              <div class="navbar-item contact-phone is-hidden-desktop">
                <a href="tel:+44-777-925-91"><i class="fa fa-phone fa-2x"></i></a>
              </div>           

              <!-- hamburger menu -->
              <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
       </div>                                       

      <div id="navMenu" class="navbar-menu">
      <!-- left-hand side of navbar -->
        <div class="navbar-start">
            @foreach($categories as $category)
              <a class="navbar-item white" href="/category/{{ $category->id }}/products">
                {{ strtoupper($category->name) }}
              </a>
            @endforeach              
        </div>

      <!-- right-hand side of navbar  -->
        <div class="navbar-end">  
          <a class="navbar-item white" href="/contact-us">
            Contact
          </a>
          <a class="navbar-item white" href="/help">
            <span class="icon">
              <i class="fa fa-info-circle"></i>
            </span> Help
          </a>     
        </div>
    </div> 
  </div>
</nav>     