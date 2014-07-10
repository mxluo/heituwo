@if(count($cases))
<?php $i = 1; ?>
@foreach ($cases as $case)
    <div class="col-xs-{{isset($ratio) ? $ratio : 2 }} case-item">
        <a href="{{url('/case/detail', array('id' =>$case->id))}}">
            <div class="case-item-box" style="@if($i++ % (isset($num) ? $num : 6)  == 0) margin-right:0 @endif">
                <div class="case-img"><img src="{{$case->case_image()}}"></div>
                <div class="case-desc">
                    <h4>{{$case->case_title}}</h4>
                    <p>{{$case->service_content}}</p>
                </div>    
            </div>
        </a>
    </div>
@endforeach
@endif
