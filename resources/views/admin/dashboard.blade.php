@extends('admin.layouts')

@section('content')

            <!-- Content Area -->
            <div class="content-area">
                <!-- Overview Tab -->
                @include('admin.overview')
                
                <!-- Home Tab -->
                @include('admin.home')

                <!-- About Tab -->
                @include('admin.about')

                <!-- Projects Tab -->
                @include('admin.projects')

                <!-- Header Tab -->
                @include('admin.headerTab')

                <!-- Footer Tab -->
                @include('admin.footerTab')

                <!-- Bookings Tab -->
                @include('admin.booking')


                <!-- reports Tab -->
                 @include('admin.reports')

               <!-- setting Tab -->
                @include('admin.setting')

            </div>


@endsection