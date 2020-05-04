</<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1>All Information About Users</h1>

@foreach ($users as $user)
    <li> {{ $user}}  </li>
@endforeach

<h1>Only Names Of Users</h1>

@foreach ($users as $user)

    <li> {{ $user->name}}  </li>

@endforeach

<h1>Only Email Of Users</h1>

@foreach ($users as $user)

    <li> {{ $user->email}}  </li>

@endforeach

<h1>Only contract ids Of Users</h1>

@foreach ($users as $user)

    <li> {{ $user->contract_id}}  </li>

@endforeach

<h1>Only Addresses Of Users</h1>

@foreach ($users as $user)

    <li> {{ $user->address}}  </li>

@endforeach

<h1>Only Telephones Of Users</h1>

@foreach ($users as $user)

    <li> {{ $user->telephone}}  </li>

@endforeach
</body>
</html>
