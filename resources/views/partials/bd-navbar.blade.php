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
          <a class="navbar-item is-hidden-mobile white" href="/show-categories">
            Party
          </a>
          <a class="navbar-item is-hidden-mobile white" href="/show-categories">
            Arcum
          </a>
          <a class="navbar-item is-hidden-mobile white" href="/show-categories">
            High Peak
          </a>
          <a class="navbar-item is-hidden-mobile white" href="/show-categories">
            Polygon
          </a> 
          <a class="navbar-item is-hidden-mobile white" href="/show-categories">
            Curved
          </a>                                    

        {{-- show accordion --}}
        <a class="navbar-item accordion is-hidden-desktop">Products</a>
          <div class="accordion-panel is-hidden-desktop">
             @foreach($categories as $category)
                <a class="navbar-item" href="/category/{{ $category->id }}/products">
                  {{ $category->name }}
                </a>
             @endforeach  
          </div>        
      </div>

     {{-- right-hand side of navbar --}}
      <div class="navbar-end">
        <a class="navbar-item white" href="/help">
          <span class="icon">
            <i class="fa fa-info-circle"></i>
          </span> Help
        </a>     
      </div>
    </div>      
</nav>     