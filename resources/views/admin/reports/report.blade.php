<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center my-auto">
        <div class="row w-100">
            <!-- Chart Column -->
            <div class="col-md-7 d-flex justify-content-center">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
            <!-- Card with Labels Column -->
            <div class="col-md-5 d-flex justify-content-center" style="margin-top: 25px;">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Report Details
                    </div>
                    <!-- Updated Report Details Section with unique IDs -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label class="badge text-dark" for="label1">Report Month:</label>
                            <span id="report-month">Value 1</span>
                        </li>
                        <li class="list-group-item">
                            <label class="badge text-dark" for="label1">New Applied Permits:</label>
                            <span id="new-applied-permits">Value 1</span>
                        </li>
                        <li class="list-group-item">
                            <label class="badge text-dark" for="label2">Pending Permits:</label>
                            <span id="pending-permits">Value 2</span>
                        </li>
                        <li class="list-group-item">
                            <label class="badge text-dark" for="label3">Approved Permits:</label>
                            <span id="approved-permits">Value 3</span>
                        </li>
                        <li class="list-group-item">
                            <label class="badge text-dark" for="label3">Permits for Renewal:</label>
                            <span id="renewal-permits">Value 3</span>
                        </li>
                        <li class="list-group-item">
                            <label class="badge text-dark" for="label3">Archived Permits:</label>
                            <span id="archived-permits">Value 3</span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Newly Applied Permits', 'Approved', 'Pending', 'Archived', 'Renewal'],
                datasets: [{
                    label: '# of Votes',
                    data: [1, 2, 3, 4, 5],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script> --}}
</body>

</html>
