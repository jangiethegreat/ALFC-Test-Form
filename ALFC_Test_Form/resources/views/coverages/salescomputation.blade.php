<!-- salescomputation.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Sales Computation</title>
    <style>
        /* Add CSS styles for your table here */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Sales Computation</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sales Agent ID</th>
                <th>Provider ID</th>
                <th>Service Category ID</th>
                <th>Coverage ID</th>
                <th>ODT Computation</th>
                <th>BI Computation</th>
                <th>PD Computation</th>
                <th>APFS Computation</th>
                <th>AOG Computation</th>
                <th>Net Rate</th>
                <th>SA Rate</th>
                <th>AOG Net Rate</th>
                <th>AOG Rate</th>
                <th>Net Premium</th>
                <th>DST</th>
                <th>VAT</th>
                <th>LGT</th>
                <th>RAP</th>
                <th>Gross Premium</th>
                <!-- Add other table headers for the fields you want to display -->
            </tr>
        </thead>
        <tbody>
            @foreach($salesComputations as $salesComputation)
            <tr>
                <td>{{ $salesComputation->id }}</td>
                <td>{{ $salesComputation->sales_agent_id }}</td>
                <td>{{ $salesComputation->provider_id }}</td>
                <td>{{ $salesComputation->service_category_id }}</td>
                <td>{{ $salesComputation->coverage_id }}</td>
                <td>{{ $salesComputation->odt_computation }}</td>
                <td>{{ $salesComputation->bi_computation }}</td>
                <td>{{ $salesComputation->pd_computation }}</td>
                <td>{{ $salesComputation->apfs_computation }}</td>
                <td>{{ $salesComputation->aog_computation }}</td>
                <td>{{ $salesComputation->net_rate }}</td>
                <td>{{ $salesComputation->sa_rate }}</td>
                <td>{{ $salesComputation->aog_net_rate }}</td>
                <td>{{ $salesComputation->aog_rate }}</td>
                <td>{{ $salesComputation->net_premium }}</td>
                <td>{{ $salesComputation->dst }}</td>
                <td>{{ $salesComputation->vat }}</td>
                <td>{{ $salesComputation->lgt }}</td>
                <td>{{ $salesComputation->rap }}</td>
                <td>{{ $salesComputation->gross_premium }}</td>
                <!-- Add other table cells for the fields you want to display -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
