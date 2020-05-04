</<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1>All Information About Contracts</h1>

@foreach ($contracts as $contract)
    <li> {{ $contract}}  </li>
@endforeach

<h1>Only Names Of Contracts</h1>

@foreach ($contracts as $contract)

    <li> {{ $contract->name}}  </li>

@endforeach

<h1>Only Types Of Contracts</h1>

@foreach ($contracts as $contract)

    <li> {{ $contract->type}}  </li>

@endforeach

<h1>Only practice ids Of Contracts</h1>

@foreach ($contracts as $contract)

    <li> {{ $contract->practice_id}}  </li>

@endforeach

</body>
</html>
