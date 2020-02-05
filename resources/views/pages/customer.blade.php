@if (count($customer)>0)
    @foreach ($customer as $item)
   
  <li>  {{$item}}</li>
    @endforeach
@else
    No Customer Yet
@endif
{{-- ac --}}
{{-- @if (count($resultCustomer)>0)
    @foreach ($resultCustomer as $item)
   
  <li>{{$item}}</li>
    @endforeach
@else
    No Customer Yet
@endif --}}