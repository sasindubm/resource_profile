document.addEventListener('DOMContentLoaded', () => {
    const gndUid = document.body.dataset.gndUid;

    // Goverment Figure Section
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
                                        <td class="px-6 py-4 border text-center">${index+1}</td>
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

    // Abondened Goverment Buildings Section

    function fetchAbGovBuildings() {
        fetch(`/api/get-agb/${gndUid}`)
            .then(res => res.json())
            .then(data => {
                let AbFigBody = '';
                data.forEach((item, index) => {
                    AbFigBody += `
                                    <tr>
                                        <td class="border px-3 py-1 text-center">
                                            <button class="px-2 py-0 mb-2 border rounded-lg bg-gray-200 edit-btn text-blue-600 hover:underline" data-id="${item.ab_id}">Edit</button>
                                            <button class="px-2 py-0 mb-1 border rounded-lg bg-gray-200 delete-btn text-red-600 hover:underline ml-4" data-id="${item.ab_id}">Delete</button>
                                        </td>
                                        <td class="px-6 py-4 border text-center">${index+1}</td>
                                        <td class="px-6 py-4 border text-center">${item.ab_name}</td>
                                        <td class="px-6 py-4 border text-center">${item.ab_used_for}</td>
                                        <td class="px-6 py-4 border text-center">${item.ab_is_retrievable}</td>
                                    </tr>
                                `;

                });
                document.getElementById('AbFigTable').innerHTML = AbFigBody;
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    fetchAbGovBuildings();

    document.getElementById('AbFig').addEventListener('submit', function (event) {
        event.preventDefault();

        const abData = new FormData();
        abData.append('ab_name', document.getElementById('ab_name').value);
        abData.append('ab_used_for', document.getElementById('ab_used_for').value);
        abData.append('ab_is_retrievable', document.querySelector('input[name="ab_is_retrievable"]:checked').value);
        abData.append('gnd_uid', gndUid);

        fetch(`/api/insert-agb/${gndUid}`,{
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: abData
        })
            .then(res => res.json())
            .then(() => {
                alert('Abondened Building inserted successfully!');
                this.reset();
                fetchAbGovBuildings();
            })
            .catch(error => console.error('Error:', error));
    });
});
