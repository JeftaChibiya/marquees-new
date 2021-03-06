
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>

<script type="text/javascript">
    $('#todaysDate').html(moment().format('ddd, D MMMM YYYY'));
</script>  

<script type="text/javascript">
    function update() {
        $('#todaysTime').html(moment().format('hh:mm:ss'));
    }
    setInterval(update, 1000);
</script> 


<!-- First instance of slideout menu -->
<script>
    window.Slideout;

    document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
    });

    function close(event) {
        event.preventDefault();
        slideout.close();
    } 

// slideout panel - admin
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 230,
        'tolerance': 70,
        'side': 'left'
    });

    // adding an overlay
    slideout
        .on('beforeopen', function() {
        this.panel.classList.add('panel-open');
        })
        .on('open', function() {
        this.panel.addEventListener('click', close);
        })
        .on('beforeclose', function() {
        this.panel.classList.remove('panel-open');
        this.panel.removeEventListener('click', close);
    });           
</script>