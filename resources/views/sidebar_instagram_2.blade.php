@php
    $access_token = 'IGQVJVMnkwdlN2bW9NREdfYkVKWGlMeW1yWFZAVQ3ExVGsyT1FvTFQ1d0pFX1JaVEtMbEtxR1k3cWRLbzFTT1J2VUg1Vi1QRzdMU0hKOFhVY2duR2NKOXo1Y0dha3hlaUhod1laN0ln';
        $url = 'https://graph.instagram.com/me/media?fields=id,media_type,media_url,username,timestamp,caption&access_token='.$access_token;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        $obj = json_decode($result);
        $data = $obj->data;
        $cont = 1;
@endphp
<!-- Instagram -->
<div class="single-widget-area mb-100 clearfix">
    <h4 class="widget-title mb-30"><i class="fa fa-instagram"></i> Instagram</h4>
    <!-- Instagram Feeds -->
    <div class="instagram-feeds overflow-auto" style="max-height: 400px;">
        @foreach($data as $o)
            @if($o->media_type == 'IMAGE' && $cont <= 9)
                <div style="border-bottom: 1px solid #ebebeb;">
                    <div class="pull-right">
                        <i class="fa fa-instagram" style="color:#A92562;"></i>
                    </div>
                    <p style="color:#000;font-size:0.9em;">{{ isset($o->caption)? $o->caption : '#Cosae2020' }}</p>
                    <a href="https://instagram.com/cosae2020" target="_blank" class="text-center">
                        <img src="{{$o->media_url}}" alt="" style="width:80%;">
                    </a>
                    <div class="pull-right">
                        <p style="color: #000;font-size:0.8em;">{{\Carbon\Carbon::create($o->timestamp)->format('d M Y')}}</p>
                    </div>
                </div>
                @php $cont++; @endphp
            @endif
        @endforeach
        {{-- <li><a href="#"><img src="{{asset('')}}img/bg-img/34.jpg" alt=""></a></li>
        <li><a href="#"><img src="{{asset('')}}img/bg-img/35.jpg" alt=""></a></li>
        <li><a href="#"><img src="{{asset('')}}img/bg-img/36.jpg" alt=""></a></li>
        <li><a href="#"><img src="{{asset('')}}img/bg-img/37.jpg" alt=""></a></li>
        <li><a href="#"><img src="{{asset('')}}img/bg-img/38.jpg" alt=""></a></li> --}}
    </div>
</div>