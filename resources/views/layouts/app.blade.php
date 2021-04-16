<!DOCTYPE html>
<html lang="en">

<head>

  @include('includes.meta')

  <title>Demo Company</title>

  @include('includes.styles')
</head>

<body>
  <!-- Page Header -->
  @include('includes.header')

  <!-- display content -->
  @yield('content')

  <!-- Footer -->
  @include('includes.footer')

  @include('includes.scripts')
</body>

</html>