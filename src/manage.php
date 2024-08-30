<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>News - slide - manage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body {
        font-family: "Sarabun", sans-serif;
    }
</style>

<body>
    <div class="w-full box-border mx-auto">
        <div class="bg-sky-200 h-16">NAVBAR</div>
        <div class="flex justify-between items-center w-full">
            <div class="flex min-w-[200px] w-[350px] max-w-[400px] h-screen bg-pink-200">SIDEMENU</div>
            <div class="flex flex-col w-full h-screen px-10 py-8 gap-y-5">
                <div class="text-2xl font-semiblod">ระบบ จัดการภาพสไลด์</div>
                <div class="flex justify-end items-center bg-orange-300 gap-x-5">
                    <div>REFRESH</div>
                    <div>SAVE</div>
                    <div>SELECT ALL</div>
                    <div>DELETE</div>
                </div>
                <table data-practice="practice" class="w-full">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FILENAME</th>
                            <th>LINK</th>
                            <th>DATE ADD</th>
                        </tr>
                    </thead>
                    <tbody dataSlideRow></tbody>
                    <tfoot>FOOTER TABLE</tfoot>
                </table>
                <div class="flex justify-between items-center  bg-slate-300">
                    <div>ADD</div>
                    <div>PAGINATION</div>
                </div>
            </div>
        </div>
        <div class="bg-rose-200">FOOTER</div>
    </div>
</body>

<script>
    fetch('../api/slide_api.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Data fetched:', data);
            displaySlideData(data);
        })
        .catch(error => console.error('There was a problem with the fetch operation:', error));

    function trCell() {
        const table = document.querySelector('[data-practice="practice"]');
        const tableBody = table.querySelector(`tbody`);
        const rowCell = document.getElementById('dataSlide');

        for (let i = 0; i < 2; i++) {
            const row = document.createElement("tr");
            const tdCell = document.createElement("td");
            row.innerHTML = `<div>test test</div>`
            row.appendChild(row);
        }
    };
    trCell();


    // const dataSlide = {
    //     "result": true,
    //     "data": {
    //         "total": 3,
    //         "info": [{
    //                 "id": 112,
    //                 "sequent": 1,
    //                 "filename": null,
    //                 "link": "55fgfdgdgdfg",
    //                 "dateAdd": "2024-08-21 14:34:31"
    //             },
    //             {
    //                 "id": 114,
    //                 "sequent": 2,
    //                 "filename": "1724225851_114_sld.jpg",
    //                 "link": null,
    //                 "dateAdd": "2024-08-21 14:37:31"
    //             },
    //             {
    //                 "id": 113,
    //                 "sequent": 3,
    //                 "filename": "1724225801_113_sld.jpg",
    //                 "link": null,
    //                 "dateAdd": "2024-08-21 14:36:41"
    //             }
    //         ]
    //     },
    //     "csrf": "4ea0101bec1f804e906168f4a727a34abe0981d0551c427aab791de11d1ccfca",
    //     "lastActivity": 1724826488
    // }

    function displaySlideData(data) {
        const tbodyslide = document.querySelector('[dataSlideRow]');
        data.data.info.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
            <td>${item.id}</td>
            <td>${item.filename ? item.filename : 'No Filename'}</td>
            <td>${item.link ? item.link : 'No Link'}</td>
            <td>${item.dateAdd}</td>`;
            tbodyslide.appendChild(row);
        });
    }
    // function displaySlide() {
    //     const tbodyslide = document.getElementById('dataSlide');
    //     const dataSlideJson = dataSlide.data.info;

    //     dataSlideJson.forEach(item => {
    //         const itemSlide = document.createElement('div');
    //         itemSlide.innerHTML = `
    //                 <p>Filename: ${item.filename ? item.filename : 'No Filename'}</p>
    //                 <p>Link: ${item.link ? item.link : 'No Link'}</p>
    //                 <p>Date Added: ${item.dateAdd}</p>
    //                 <hr>`;
    //         tbodyslide.appendChild(itemSlide);
    //     })
    // }
    // displaySlide();
</script>

</html>