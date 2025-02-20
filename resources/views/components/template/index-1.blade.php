@include('components.template.base.start')


@include('components.template.base.navbar')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
  @include('components.template.base.sidebar')

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 

    <!-- congrats & summary -->
    <div class="grid grid-cols-3 lg:grid-cols-1 gap-5">
      @include('components.template.index.congrats')
      @include('components.template.index.summary')      
    </div>
    <!-- end congrats & summary -->

    <!-- status -->
    @include('components.template.index.status')
    <!-- end status -->

    <!-- best seller & traffic -->
    <div class="grid grid-cols-2 lg:grid-cols-1 gap-5 mt-5">
      @include('components.template.index.bestSeller')
      @include('components.template.index.recent_order')      
    </div>
    <!-- end best seller & traffic -->
        

  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

@include('components.template.base.end')
