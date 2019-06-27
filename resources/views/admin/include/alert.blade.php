 

    @if(Session::has('success'))
    @component('admin.components.alert')
              @slot('type')
                success
              @endslot 

              @slot('title')
              check-circle-o
              @endslot

              {{Session::get('success')}}
            @endcomponent @endif
            @if(Session::has('error'))
    @component('admin.components.alert')
              @slot('type')
                danger
              @endslot 

              @slot('title')
              times-circle-o
              @endslot

              {{Session::get('error')}}
            @endcomponent @endif