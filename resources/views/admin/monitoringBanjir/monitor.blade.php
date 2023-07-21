@extends('admin.layouts.app')

@section('content')
    <div class="row align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center" id="total">0</h4>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('style')
@endpush

@push('script')

    <script>
        $(document).ready(function() {


            function fetchData() {
                $.ajax({
                    url: '/monitoring/fetchData',
                    type: 'GET',
                    dataType: 'json',
                    success: (data) => {
                      console.log(data);
                      $('#total').text(data);
                    }
                })
            }


            fetchData()
            setInterval(() => {
                fetchData()
            }, 60000); // 1 menit
        })
    </script>
@endpush
