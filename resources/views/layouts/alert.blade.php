@if($message = session('message'))
    <div class="alert alert-success message" role="alert">
        {{ $message }}
    </div>
@endif

@push('script')
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.alert.message').hide();
            }, 2000);
        });
    </script>
@endpush