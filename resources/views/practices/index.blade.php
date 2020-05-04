</<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1>All Information About Practices</h1>

@foreach ($practices as $practice)
    <li> {{ $practice}}  </li>
@endforeach

<h1>Only Names Of Practices</h1>

@foreach ($practices as $practice)

    <li> {{ $practice->name}}  </li>

@endforeach

<h1>Only Addresses Of Practices</h1>

@foreach ($practices as $practice)

    <li> {{ $practice->address}}  </li>

@endforeach

<h1>Only Telephones Of Practices</h1>

@foreach ($practices as $practice)

    <li> {{ $practice->telephone}}  </li>

@endforeach

</body>
</html>
