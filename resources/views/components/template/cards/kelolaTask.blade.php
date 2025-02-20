@include('components.template.base.start')


@include('components.template.base.navbar')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
  @includeIf('components.template.base.sidebar')

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

    
    <!-- General Report -->
    @include('components.template.cards.kelolaTask')
    <!-- End General Report -->   

  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
