@extends('header')

@section('content')

<style> 
  .img0 {
        position: relative;
        overflow: hidden;
        margin-top: 30px;
  margin-left: 0%;
}
    

    .img0 img {
        width: 100%;
        filter: brightness(70%);
    }
 

  
 .txt1 p{
position: absolute;
top: 54%;
left: 0%; 
font-family: 'pluto' , Arial,sans-serif;
z-index: 1;
color: white;
font-size: 2rem;
font-weight: bold;
text-align: center;
box-shadow: 0 0 5px rgb(245, 241, 241);
font-style: italic;
background-color: rgba(0, 0, 0, 0.301);
}
</style>


@if(session('status'))
        <div class="alert alert-success">
        {{session('status')}}
        </div>
        @endif



       

    
<br><br>










        @endsection
