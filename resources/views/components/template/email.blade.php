@include('components.template/base/start')


@include('components.template/base/navbar')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
  @include('components.template/base/sidebar')

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16 grid grid-cols-8"> 
    
    @include('components.template/email/email-links')
    @include('components.template/email/email-body')

  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template/base/end')
