<!DOCTYPE html>
<html lang="fr">
  @include('layout.head')
  <body>
    @include('layout.nav')
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
         @yield('content')
       <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
         <div class="list-group">
           <a href="#" class="list-group-item active">Link</a>
           <a href="#" class="list-group-item">Link</a>
           <a href="#" class="list-group-item">Link</a>
           <a href="#" class="list-group-item">Link</a>
           <a href="#" class="list-group-item">Link</a>
           <a href="#" class="list-group-item">Link</a>
           <a href="#" class="list-group-item">Link</a>
           <a href="#" class="list-group-item">Link</a>
           <a href="#" class="list-group-item">Link</a>
           <a href="#" class="list-group-item">Link</a>
         </div>
       </div><!--/span-->
     </div><!--/row-->
      <hr>
      @include('layout.footer')
    </div>
      @include('layout.foot')
    </body>
  </html>
