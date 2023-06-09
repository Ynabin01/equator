{{-- <div class="heading text-center">
    <h1 class="mb--18">Adds On Newspaper</h1>
    <hr class="delimeter mx-auto mb--22">
</div> --}}
<div class="section-header text-center" id="dev" >
    <!-- <p>Our Services</p> -->
    <h2>Find JOBS IN NEWSPAPER</h2>
</div>
    @if (isset($newsbanner))
    <section class="section-padding">
        <div class="container">
            <div class="gallery-view">
                <div class="row" id="lightgallery">
                    @foreach ($newsbanner as $photo)
                    <div class="item col-md-4" data-src="{{$photo->banner_image ?? ''}}"
                        data-sub-html="<h4>{{$photo->caption ?? ''}}</h4>">
                        <a href="">
                            <img src="{{$photo->banner_image ?? ''}}" alt="Login Int'l" />
                        </a>
                          <span style="width: 100% !important; display: inline-grid; /* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
                       box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
                       margin-top: 7px;
                       padding: 7px; background-color:rgb(175, 175, 202);">

                        {!! htmlspecialchars_decode($photo->short_content ?? '') !!}
                    </span>
                    </div> 
                    {{-- <h4 style="margin-left:170px;  border: -10px solid powderblue;  padding: 10px; ">{{$photo->caption}} </h4> --}}
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

 