<link rel="stylesheet" href="{{asset('vendor/hystModal/dist/hystmodal.min.css')}}">
{{-- <link rel="stylesheet" href="{{asset('vendor/wtolk/crud/css/adfm-panel.css')}}"> --}}
<div class="hystmodal" id="{{$id}}" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="hystmodal__window" role="dialog" aria-modal="true">
            <button data-hystclose class="hystmodal__close">Закрыть</button>
            <div class="feedback-form form">
                @foreach($fields as $field)
                <div class="col col-12 col-md-8 col-md-offset-2 field-feedbackform">
                {!! $field !!}
                </div>
                @endforeach
                <div class="col col-12 col-md-8 col-md-offset-2">
                    <button class="button-form">Отправить </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('vendor/hystModal/dist/hystmodal.min.js')}}"></script>
<script>
    const myModal = new HystModal({
    linkAttributeName: "data-hystmodal",   
});
</script>

{{-- <script>
    $('#{{$id}} .sendfeedback').on('click', function (){
        let fields = $('#{{$id}} .field-feedbackform');
        let data = new Object;
        data['fields'] = new Object;
        data['_token'] = $('meta[name="csrf-token"]').attr('content');
        $.map(fields, function (field, index) {
            data['fields'][$(field).find('.form-control').attr('name')] = $(field).find('.form-control').val();
            // console.log($(field).find('.form-control').val(), $(field).find('.form-control'))
        });
        // console.log(data);
        // $.ajax({
        //     type: "POST",
        //     url: "{{ route('adfm.feedbacks.store') }}",
        //     data: data
        // }).done(function( msg ) {
        //     alert( "Data Saved: " + msg );
        // });
    });


</script> --}}
