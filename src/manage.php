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

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        overflow: hidden;
        min-width: 28rem;
        margin-top: 1.25rem;
    }

    thead {
        background-color: #99F6E4;
        text-align: center;
        vertical-align: middle;
        border-top-left-radius: 1.5rem;
        border-top-right-radius: 1.5rem;
        box-shadow: inset 0px 1px 0px #e5e7eb, inset 1px 0px 0px #e5e7eb,
            inset 0px -1px 0px #e5e7eb, inset -1px 0px 0px #e5e7eb;
    }

    thead th:first-child {
        border-top-left-radius: 1.5rem;
    }

    thead th:last-child {
        border-top-right-radius: 1.5rem;
    }

    thead th {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    td {
        text-align: center;
        vertical-align: middle;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }
</style>

<body>
    <div class="w-full box-border mx-auto">
        <div class="bg-sky-200 h-16">NAVBAR</div>
        <div class="flex justify-between items-center w-full">
            <div class="flex min-w-[200px] w-[350px] max-w-[400px] h-screen bg-pink-200 hidden">SIDEMENU</div>
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
                    <tfoot>
                        <tr>
                            <td>FOOTER TABLE</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="flex justify-between items-center bg-slate-300">
                    <div>ADD</div>
                    <div>PAGINATION</div>
                </div>
            </div>
        </div>
        <div class="bg-rose-200">FOOTER</div>
    </div>
</body>

<script>
    const tableSlide = document.querySelector('[dataSlideRow]');
    const tableBody = document.querySelector('tbody');

    function getData() {
        fetch('../api/slide_api.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(result => {
                displaySlideData(result.data.info, tableBody);
            })
            .catch(error => console.error('There was a problem with the fetch operation:', error));
    }

    const action = "edit";

    if (action == "edit") {
        getData();
    }

    function displaySlideData(data, table) {

        const infoArray = data;

        for (let key in infoArray) {
            const item = infoArray[key];
            const row = document.createElement('tr');

            const idCell = document.createElement('td');
            // idCell.textContent = item.id;
            idCell.innerHTML = `<div>My : ${item.id}</div>`;
            row.appendChild(idCell);

            const filenameCell = document.createElement('td');
            filenameCell.textContent = item.filename ? item.filename : '';
            row.appendChild(filenameCell);

            const linkCell = document.createElement('td');
            linkCell.textContent = item.link ? item.link : 'No link';
            row.appendChild(linkCell);

            const dateCell = document.createElement('td');
            dateCell.textContent = item.dateAdd;
            row.appendChild(dateCell);

            //TODO SELECT AND SELECT ALL

            tableBody.appendChild(row);

        }

    }
</script>

</html>