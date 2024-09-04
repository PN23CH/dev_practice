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

    .icon-edit {
        background: url("../public/svg/icon-edit.svg");
        width: 1.5rem;
        height: 1.5rem;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>
    <div class="w-full box-border mx-auto">
        <div class="bg-sky-200 h-16">NAVBAR</div>
        <div class="flex justify-between items-center w-full">
            <div class="flex min-w-[200px] w-[350px] max-w-[400px] h-screen bg-pink-200 hidden">SIDEMENU</div>
            <div class="flex flex-col w-full h-screen px-10 py-8 gap-y-5">
                <div class="text-2xl font-semiblod">ระบบ จัดการภาพสไลด์</div>
                <div class="flex justify-end items-center bg-yellow-50 gap-x-5 p-3">
                    <div>REFRESH</div>
                    <div>SAVE</div>
                    <div>
                        <input type="checkbox" name="select-all" select-all>
                        <label for="select-all">SELECT ALL</label>
                    </div>
                    <button type="button" class="bg-rose-700 hover:bg-rose-500 rounded-lg p-2 invisible" delete-slide>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>
                </div>
                <table data-practice="practice" class="w-full">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FILENAME</th>
                            <th>LINK</th>
                            <th>DATE ADD</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody data-table-slide></tbody>
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
    document.addEventListener('DOMContentLoaded', () => {
        const selectAllcheckbox = document.querySelector('[select-all]');
        const tableBody = document.querySelector('[data-table-slide]');
        const buttonDelete = document.querySelector("button[delete-slide]");

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

                //TODO EDIT COLLUM
                const editCell = document.createElement('td');
                const button = document.createElement('button');
                const iconDiv = document.createElement('div');
                iconDiv.classList.add('icon-edit');
                button.appendChild(iconDiv);

                button.addEventListener('click', () => {
                    window.location.href = '/';
                });
                editCell.appendChild(button);
                row.appendChild(editCell);

                const selectCell = document.createElement('td');
                const checkbox = document.createElement('input');

                checkbox.type = 'checkbox';
                checkbox.classList.add('slide-checkbox');

                selectCell.appendChild(checkbox);
                row.appendChild(selectCell);

                tableBody.appendChild(row);

            }

        }

        function handleSelectAll() {
            const checkboxes = tableBody.querySelectorAll('.slide-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllcheckbox.checked;
            });
        }

        function handleCheckboxClick() {
            const checkboxes = tableBody.querySelectorAll('.slide-checkbox');
            const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
            selectAllcheckbox.checked = allChecked;
        }

        selectAllcheckbox.addEventListener('change', () => {
            handleSelectAll();
            toggleButtonDelete();
        });

        tableBody.addEventListener('change', (event) => {
            if (event.target.classList.contains('slide-checkbox')) {
                handleCheckboxClick();
                toggleButtonDelete();
            }
        });

        //TODO TRASH HANDLE AND DELETE FUNCTION
        function toggleButtonDelete() {
            const checkboxes = tableBody.querySelectorAll('.slide-checkbox');
            const button = document.querySelector("button[delete-slide]");

            const anyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

            if (anyChecked) {
                button.classList.remove('invisible');
            } else {
                button.classList.add('invisible');
            }
        }

        buttonDelete.addEventListener('click', () => {
            const checkboxes = tableBody.querySelectorAll('.slide-checkbox:checked');
            const idsToDelete = Array.from(checkboxes).map(checkbox => checkbox.dataset.itemId);

            console.log(idsToDelete.length);

            if (idsToDelete.length > 0) {
                const confirmDelete = window.confirm('Are you sure you want to delete the selected items?');
                if (confirmDelete) {
                    deleteItems(idsToDelete);
                }
                console.log('No items selected for deletion.');
            }

        })

        function deleteItems(ids) {
            fetch('../api/slide_api.php', {
                    method: 'POST',
                    header: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        action: 'delete',
                        ids: ids
                    }),
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(result => {
                    console.log('Backend response:', result);
                    const data = result.data.info;
                    console.log('data :', data);
                })
                .catch(error => console.error('There was a problem with the delete operation:', error));

        }


    })
</script>

</html>