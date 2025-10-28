document.addEventListener('DOMContentLoaded', () => {
    const gndUid = document.body.dataset.gndUid;

    function fetchGovFigures() {
        fetch(`/api/get-gf/${gndUid}`)
            .then(res => res.json())
            .then(data => {
                let govFigBody = '';
                data.forEach((item, index) => {
                    govFigBody += `
                                    <tr>
                                        <td class="border px-3 py-1 text-center">
                                            <button class="px-2 py-0 mb-2 border rounded-lg bg-gray-200 edit-btn text-blue-600 hover:underline" data-id="${item.gf_id}">Edit</button>
                                            <button class="px-2 py-0 mb-1 border rounded-lg bg-gray-200 delete-btn text-red-600 hover:underline ml-4" data-id="${item.gf_id}">Delete</button>
                                        </td>
                                        <td class="px-6 py-4 border text-center">${item.gf_id}</td>
                                        <td class="px-6 py-4 border text-center">${item.gf_name}</td>
                                        <td class="px-6 py-4 border text-center">${item.gf_type}</td>
                                        <td class="px-6 py-4 border text-center">${item.gf_address}</td>
                                    </tr>
                                `;

                });
                document.getElementById('govFigTable').innerHTML = govFigBody;
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    fetchGovFigures();

    document.getElementById('govFig').addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData();
        formData.append('gf_name', document.getElementById('gf_name').value);
        formData.append('gf_type', document.getElementById('gf_type').value);
        formData.append('gf_address', document.getElementById('gf_address').value);
        formData.append('gnd_uid', gndUid);

        fetch(`/api/insert-gf/${gndUid}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: formData
        })
            .then(res => res.json())
            .then(data => {
                alert('Government Figure inserted successfully!');
                this.reset();
                fetchGovFigures();
            })
            .catch(error => console.error('Error submitting form:', error));
    });
});
