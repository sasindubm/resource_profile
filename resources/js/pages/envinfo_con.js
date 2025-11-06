document.addEventListener('DOMContentLoaded', () => {
    const gndUid = document.body.dataset.gndUid;

    //Water Source Section
    function fetchWaterSources() {
        fetch(`/api/get-ws/${gndUid}`)
            .then(res => res.json())
            .then(data => {
                let wsBody = '';
                data.forEach((item, index) => {
                    wsBody += `
                        <tr>
                            <td class="border px-3 py-1 text-center">
                                            <button class="px-2 py-0 mb-2 border rounded-lg bg-gray-200 edit-btn text-blue-600 hover:underline" data-id="${item.ws_id}">Edit</button>
                                            <button class="px-2 py-0 mb-1 border rounded-lg bg-gray-200 delete-btn text-red-600 hover:underline ml-4" data-id="${item.ws_id}">Delete</button>
                                        </td>
                            <td class="px-6 py-6 border text-center">${index + 1}</td>
                            <td class="px-6 py-6 border text-center">${item.water_source_name}</td>
                            <td class="px-6 py-6 border text-center">${item.water_type}</td>
                        </tr>
                    `;
                });
                document.getElementById('waterSourceTableBody').innerHTML = wsBody;
            })
            .catch(error => {
                console.error('Error fetching water sources:', error);
            });
    }

    fetchWaterSources();

    document.getElementById('waterSourceForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);
        formData.append('water_source_name', document.getElementById('water_source_name').value);
        formData.append('water_type', document.getElementById('water_type').value);
        formData.append('gnd_uid', gndUid);

        fetch(`/api/insert-ws/${gndUid}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            alert('Water source information saved successfully!');
            this.reset();
            fetchWaterSources();
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while saving water source information.');
        });
    });
});