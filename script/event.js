async function populateTable() {
    try {
        const response = await fetch('../admin/event.php');
        const events = await response.json();

        const tbody = document.getElementById('events-tbody');
        tbody.innerHTML = ''; // Clear existing rows

        if (events.length > 0) {
            let currentEventDate = null; // Track the current event date
            let rowspanCount = 0;

            events.forEach((event, index) => {
                let row = '';

                // If it's a new date, use rowspan
                if (event.event_date !== currentEventDate) {
                    // Count occurrences of the same date
                    rowspanCount = events.filter(e => e.event_date === event.event_date).length;

                    row += `
                        <tr>
                            <td rowspan="${rowspanCount}">${event.event_date}</td>
                            <td>${event.event_name}</td>
                            <td>${event.event_time}</td>
                            <td>${event.location}</td>
                            <td>${event.description}</td>
                        </tr>
                    `;
                } else {
                    // Normal row without rowspan for date
                    row += `
                        <tr>
                            <td>${event.event_name}</td>
                            <td>${event.event_time}</td>
                            <td>${event.location}</td>
                            <td>${event.description}</td>
                        </tr>
                    `;
                }

                currentEventDate = event.event_date; // Update current date
                tbody.innerHTML += row;
            });
        } else {
            tbody.innerHTML = '<tr><td colspan="5">No events found.</td></tr>';
        }
    } catch (error) {
        console.error('Error fetching events:', error);
    }
}

document.getElementById('print-btn').addEventListener('click', () => {
    window.print();
});

window.onload = populateTable;
