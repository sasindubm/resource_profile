document.addEventListener('DOMContentLoaded', () => {
    const gndUid = document.body.dataset.gndUid;

    fetch(`/api/gnd-by-uid/${gndUid}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById('gnd_name').innerHTML = data[0].gnd_name;
            document.getElementById('gnd_named').innerHTML = data[0].gnd_name;
        });

    fetch(`/api/gnd-number-by-uid/${gndUid}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById('gnd_number').innerHTML = data['gnd_number'];
            document.getElementById('gnd_numberd').innerHTML = data['gnd_number'];
        });

    fetch(`/api/ds-by-gnd/${gndUid}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById('ds_name').innerHTML = data['ds_name'];
            document.getElementById('ds_named').innerHTML = data['ds_name'];
        });

    fetch(`/api/district-by-gnd/${gndUid}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById('d_name').innerHTML = data['d_name'];
            document.getElementById('d_named').innerHTML = data['d_name'];
        });
});
