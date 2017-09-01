
<nav class="navbar is-transparent container">
     <div class="navbar-brand">
         {{-- logo --}}
         <a href="/" class="navbar-brand-img">
              <img src="/images/brand/logo.svg" alt="logo" style="width: 115px; height: auto">         
         </a>        
        {{-- hamburger menu --}}
        <div class="navbar-burger burger" data-target="navMenuExample">
          <span></span>
          <span></span>
          <span></span>
        </div>                                    
     </div>        

    <div id="navMenuExample" class="navbar-menu">
     {{-- left-hand side of navbar --}}
      <div class="navbar-start">

       {{-- dropdown --}}
        <div class="navbar-item has-dropdown is-hoverable is-hidden-mobile">
          <a class="navbar-link white" href="/show-categories">
            Products
          </a>
          <div class="navbar-dropdown is-boxed">
             @foreach($categories as $category)
                <a class="navbar-item" href="/category/{{ $category->id }}/products">
                  {{ $category->name }}
                </a>
             @endforeach        
          </div>
        </div>

        {{-- show accordion --}}
        <a class="navbar-item accordion is-hidden-desktop">Products</a>
          <div class="accordion-panel is-hidden-desktop">
             @foreach($categories as $category)
                <a class="navbar-item" href="/category/{{ $category->id }}/products">
                  {{ $category->name }}
                </a>
             @endforeach  
          </div> 
              
        <a class="navbar-item white" href="/byo">
          Build Your Marquee
        </a>         
      </div>

     {{-- right-hand side of navbar --}}
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
</nav>     