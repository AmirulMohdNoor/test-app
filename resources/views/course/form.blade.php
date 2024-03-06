<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>

<h1>INDEX</h1>

<div class="table-container">
    <form action="#" method="post">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="id" placeholder="Enter ID"></td>
                    <td><input type="text" name="name" placeholder="Enter Name"></td>
                    <td><input type="text" name="code" placeholder="Enter Code"></td>
                    <td><button class="styled-button" type="submit">Submit</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>

</body>
</html>
