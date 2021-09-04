@extends('layouts.app')

@section('content')
    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->

    <!-- Slider Start -->
    @include('pages/home/index')
    @include('pages/home/dashboard')


    <!-- Call to Action End -->
@endsection

@push('scripts')
    <script type="text/javascript">
        $('document').ready(function() {

            if (student_id != null) {
                user_profile();
            }

            
            $("input[name='date_of_birth']").flatpickr({
                enableTime: false,
                dateFormat: "d-M-Y",
                allowInput: true,
            });

        })
    </script>
@endpush
