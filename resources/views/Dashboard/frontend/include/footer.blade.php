<style>
    footer a {
          color: rgba(255, 255, 255, 0.5);
          text-decoration: none;
      }
      footer a:hover, footer a:active, footer a:focus {
          color: rgba(255, 255, 255, 0.75);
          text-decoration: underline;
      }
</style>
<footer class="bg-black text-center py-5" style="background-color: #000 !important; margin: 11% 0% 0% 0%;" >
  <div class="container px-5">
      <div class="text-white-50 small" style="--bs-text-opacity: 1;
                                                color: rgba(255, 255, 255, 0.5) !important;
                                                font-size: 0.875em;">
          <div class="mb-2">&copy; Developed by CODETREE DEVELOPERS. All Rights Reserved.</div>
          <a href="#!">Privacy</a>
          <span class="mx-1">&middot;</span>
          <a href="#!">Terms</a>
          <span class="mx-1">&middot;</span>
          <a href="#!">FAQ</a>
      </div>
  </div>
</footer>


</main>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<script src="{{asset('Dashboard/assets_kayes/js/bootstrap.bundle.min.js')}}"></script>
<!-- Custom script To make row clickable -->
<script>
// if new row is created
function addRow(){
           document.querySelector("tbody").insertAdjacentHTML("beforeend",`
           <tr data-href="https://www.google.com/">
                   <td>new</td>
                   <td>5%</td>
                   <td> 10000</td>
           </tr>
           `)
       }
       $(document).ready(function () {
           $(document.body).on("click", "tr[data-href]", function() {
               window.location.href = this.dataset.href;
           });
       });
</script>
