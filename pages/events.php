

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCIT Blog</title>
    <link rel="stylesheet" href="global/print.css"> <!-- Adjust if necessary -->
</head>

<div class="events-container">
    <h1>Upcoming Events</h1>
    <table class="events-table" id="events-table">
        <caption>FCIT Blog - Upcoming Events</caption>
        <thead>
            <tr>
                <th colspan="3">Event Details</th>
                <th colspan="2">Location and Description</th>
            </tr>
            <tr>
                <th>Event Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody id="events-tbody">
            <!-- Rows will be dynamically populated -->
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" style="text-align: center;">End of Events</td>
            </tr>
        </tfoot>
    </table>
    <button id="print-btn">Print Table</button>
</div>
