<!-- Scripts -->
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<!--  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script> -->
<script type="text/javascript" src="assets/js/isInViewport.jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.particleground.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/js/scrollReveal.min.js"></script>
<script src="assets/js/custom.js"></script>
<!-- SLICK GALLERY -->
<script type="text/javascript" src="/slick/slidergallery.js"></script>
<script type="text/javascript" src="/slick/slick.min.js"></script>
<!-- CONTACT FORM MODAL GALLERY -->
<script src="/js/contactmodal.js"></script>
<!-- SLICK SLIDER THUMB GALLERY -->
<script src="/js/slickinthumb.js"></script>
<!-- SCROLL LOGO -->
<script src="/js/scrolllogo.js"></script>

<script>
function myMap() {
  var icon = {
    url: "../assets/img/orangemarker.png",
    scaledSize: new google.maps.Size(50, 50)
    };
  var cord = document.getElementById("cord");
  var myCenter = new google.maps.LatLng(53.586707,-1.238251);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 10};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({
    position:myCenter,
    animation:google.maps.Animation.BOUNCE,
    icon: icon
  });
  marker.setMap(map);
  google.maps.event.addListener(marker,'click',function() {
    var infowindow = new google.maps.InfoWindow({
      content:"The Long Barn, Wakefield Road, Hampole, Doncaster, DN6 7EU"
    });
  infowindow.open(map,marker);
  map.setZoom(16);
  map.setCenter(marker.getPosition());
  });
  $(document).ready(function()
  {
    $("#cord").on('click', function ()
    {
      map.setZoom(16);
      map.setCenter(marker.getPosition());
    });
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKEzL8SPU49cTvEWBXROXAyIgrfLbZ6vw&callback=myMap"></script>
