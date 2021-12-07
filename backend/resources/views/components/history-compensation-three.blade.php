@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/history-compensation-3.css')" :generalClass="$name">
    <h2 class="title">Lịch sử bồi thường</h2>
    <div class="menu-select d-flex">
        <div class="menu-item menu-account ">
            <a href="{{ route('history-compensation-one') }}">Thông tin chung</a>
        </div>
        <div class="menu-item menu-history">
            <a href="{{ route('history-compensation-two') }}">Quá trình giải quyết</a>
        </div>
        <div class="menu-item menu-history active">
            <a href="{{ route('history-compensation-three') }}">Hồ sơ giấy tờ</a>
        </div>
    </div>
    <!-- info -->
    <div class="info">
        {{-- <a class="info-item" href="#">
            <img src="{{ asset('images/img-doc.png') }}" alt="">
        </a> --}}
        @php
        // dd(Crypt::decrypt($id));
        @endphp
        @foreach ($docs as $doc)
            {{-- <a class="info-item view_file" href="/upload/compensations-doc/{{$doc->file_name}}" filename="{{$doc->file_name}}"> --}}
            <a class="info-item view_file" filename="{{$doc->file_name}}">
                <img src="{{ asset('images/img-doc-2.png') }}" alt="">
            </a>
        @endforeach
    </div>
</x-PrimaryLayout>
<script>
    $(document).ready(function(){
      $("a.view_file").click(function(){
          const fileName = $(this).attr('filename');
          window.open('/upload/compensations-doc/'+fileName, '_blank').focus();
        //   $.ajax({
        //         url: "/download-docs",
        //         type: "POST",
        //         data: {
        //             '_token': $('meta[name="csrf-token"]').attr('content'),
        //             'file_name': fileName
        //         },
        //         contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        //         success: function (res) {
        //             const downloadURL = window.URL.createObjectURL(new Blob([res]));
        //             console.log(downloadURL);
        //             const link = document.createElement('a');
        //             link.href = downloadURL;
        //             link.download = fileName;
        //             link.click();
        //         },
        //         error: function(jqXHR, textStatus, errorThrown) {
        //            console.log(textStatus, errorThrown);
        //            alert('Không tìm thấy file');
        //         }
        //     });
        });
    });

</script>