<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LFI</title>
</head>
<body>
    <h3>Enter file name (File with .txt or .md example: file1.txt )</h3>
    <form method="POST" action="/lfi">
        @csrf
        <label for="file">File:</label>
        <input type="text" name="file" >
        <button type="submit">Submit</button>
    </form>
</body>
</html>