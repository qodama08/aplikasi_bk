 <div class="row">
     <div class="col-4">
         <div class="d-grid">
             <a href="{{ route('sso.redirect', ['provider' => 'google']) }}" type="submit"
                 class="btn mt-2 btn-light-primary bg-light text-muted">
                 <img src="../assets/images/authentication/google.svg" alt="img"> <span
                     class="d-none d-sm-inline-block"> Google</span>
             </a>
         </div>
     </div>
     <div class="col-4">
         <div class="d-grid">
             <a href="{{ route('sso.redirect', ['provider' => 'github']) }}" type="button"
                 class="btn mt-2 btn-light-secondary bg-light text-muted">
                 <img width="20" height="20" src="../assets/images/authentication/github.png" alt="img">
                 <span class="d-none d-sm-inline-block"> Github</span>
             </a>
         </div>
     </div>
     <div class="col-4">
         <div class="d-grid">
             <a href="{{ route('sso.redirect', ['provider' => 'facebook']) }}" type="button"
                 class="btn mt-2 btn-light-primary bg-light text-muted">
                 <img src="../assets/images/authentication/facebook.svg" alt="img">
                 <span class="d-none d-sm-inline-block"> Facebook</span>
             </a>
         </div>
     </div>

 </div>
