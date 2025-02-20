@include('components.template.base.start')

@include('components.template.base.navbar')


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
  @include('components.template.base.sidebar')

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16">
    
    @include('components.template.ui.alert.head')
    @include('components.template.ui.alert.alert_1')
    @include('components.template.ui.alert.alert_2')
    @include('components.template.ui.alert.alert_3')

  </div>
  <!-- end content -->

  </div>
<!-- end wrapper --> 

  

@include('components.template.base.end')
