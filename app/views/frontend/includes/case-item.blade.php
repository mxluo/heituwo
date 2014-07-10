@if(count($cases))
@foreach ($cases as $case)
    <div class="col-xs-{{isset($ratio) ? $ratio : 4 }} case-item">
        <a href="{{url('/case/detail', array('id' =>$case->id))}}">
            <div class="case-img"><img src="{{$case->case_image()}}"></div>
            <div class="case-desc">
                <h4>{{$case->case_title}}</h4>
                <p>{{$case->service_content}}</p>
            </div>
        </a>
    </div>
@endforeach
@endif