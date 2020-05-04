</<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1>All Information About Reports</h1>

@foreach ($reports as $report)
    <li> {{ $report}}  </li>
@endforeach

<h1>Only Types Of Reports</h1>

@foreach ($reports as $report)

    <li> {{ $report->type}}  </li>

@endforeach

<h1>Only Descriptions Of Reports</h1>

@foreach ($reports as $report)

    <li> {{ $report->description}}  </li>

@endforeach

<h1>Only contract ids Of Reports</h1>

@foreach ($reports as $report)

    <li> {{ $report->contract_id}}  </li>

@endforeach

</body>
</html>
