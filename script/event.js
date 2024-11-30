async function populateTable() {
    try {
        console.log("Fetching events..."); // Step 1: Log before fetch
        const response = await fetch('/CPCS403-Final/admin/event.php'); // Absolute path
        const events = await response.json(); // Parse JSON response
        console.log("Events fetched:", events); // Step 2: Log fetched data

        const tbody = document.getElementById('events-tbody');
        tbody.innerHTML = ''; // Clear existing rows

        if (events.length > 0) {
            console.log("Populating table..."); // Step 3: Log before populating
            events.forEach(event => {
                const row = `
                    <tr>
                        <td>${event.event_name}</td>
                        <td>${event.event_date}</td>
                        <td>${event.event_time}</td>
                        <td>${event.location}</td>
                        <td>${event.description}</td>
                    </tr>
                `;
                tbody.innerHTML += row;
            });
        } else {
            console.log("No events found."); // Step 4: Log no events
            tbody.innerHTML = '<tr><td colspan="5">No events found.</td></tr>';
        }
    } catch (error) {
        console.error('Error fetching events:', error); // Log any errors
    }
}

window.onload = populateTable;
