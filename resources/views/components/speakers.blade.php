@extends('master')
@section('content')
<style>
   .speaker-grid-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 16px 18px;
      list-style: none;
      padding: 0;
      margin: 0 auto 20px;
      align-items: stretch;
   }

   .speaker-grid-list li {
      position: relative;
      box-sizing: border-box;
      min-width: 0;
      text-align: center;
      margin: 0;
      padding: 6px;
      display: flex;
      flex: 0 0 calc((100% - 54px) / 4);
      min-height: 560px;
      align-items: stretch;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 1px 6px rgba(0, 0, 0, 0.06);
      border: 1px solid rgba(44, 58, 100, 0.08);
   }

   .speaker-grid-list li::after {
      position: absolute;
      inset: 5px;
      border: 1px solid rgba(44, 58, 100, 0.12);
      border-radius: 9px;
      content: '';
      pointer-events: none;
   }

   .speaker-card {
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      padding: 12px 12px 16px;
      z-index: 1;
   }

   .speaker-card img {
      width: 100%;
      height: 290px;
      object-fit: cover;
      object-position: top center;
      border-radius: 10px;
      margin-bottom: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
   }

   .speaker-card h5 {
      font-size: 22px;
      min-height: 66px;
      margin-bottom: 10px;
   }

   .speaker-card .speaker-company {
      font-size: 20px;
      line-height: 1.35;
      min-height: 108px;
      margin-bottom: 10px;
   }

   .speaker-card .speaker-bio {
      margin-top: auto;
      margin-bottom: 0;
      font-size: 16px;
   }

   @media (max-width: 1199px) {
      .speaker-grid-list li {
         flex-basis: calc((100% - 36px) / 3);
      }
   }

   @media (max-width: 991px) {
      .speaker-grid-list li {
         flex-basis: calc((100% - 18px) / 2);
      }
   }

   @media (max-width: 576px) {
      .speaker-grid-list li {
         flex-basis: 100%;
         min-height: 520px;
      }

      .speaker-card img {
         height: 260px;
      }

      .speaker-card h5 {
         font-size: 20px;
      }

      .speaker-card .speaker-company {
         font-size: 18px;
      }
   }
</style>
<section class="page-section pt-pb-100 bg-white">
         <div class="container">
            		
               	
<div class="k_cheading">
		<h1>ISUW 2026<span class="k_greencolor"> Speakers</span> </h1>
		<img src="/public/uploads/images/kborder_bottom.png" alt=""> 
	</div> 
			   
            <ul class="speaker-grid-list">
			@foreach ($speakersr24 as $speaker24)
			@if ($speaker24->isActive==1)
               <li>
                  <div class="speaker-card">
                     <img src="{{$speaker24->imageUrl}}" class="img-fluid " alt="{{$speaker24->imageAlt}}">
                     <h5>{{$speaker24->name}}</h5>
                     <p class="speaker-company">{!! nl2br(e($speaker24->company)) !!}</p>
                     <p class="speaker-bio"><a href="/speaker24/{{$speaker24->id}}" class="text-warning">Read bio...</a></p>
                  </div>
               </li>
				  @endif
				  @endforeach			 
            </ul>
            <p style="text-align:center; font-size:16px;"><a href="https://www.isuw.in/2025/speakers" class="getstartedd " target="_blank">ISUW Speakers 2025</a></p> 
            <p style="text-align:center; font-size:16px;"><a href="https://www.isuw.in/2024/speakers-2024" class="getstartedd " target="_blank">ISUW Speakers 2024</a></p> 
            <p style="text-align:center; font-size:16px;"><a href="https://www.isuw.in/speakers-2023" class="getstartedd " target="_blank">ISUW Speakers 2023</a></p>
            <p style="text-align:center; font-size:16px;"><a href="https://www.isuw.in/speakers" class="getstartedd " target="_blank">ISUW Speakers 2022</a></p>
         </div>
      </section>
@endsection