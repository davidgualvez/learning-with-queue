<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body> 
        <h1>{{ $arr['request_type'] }}</h1>
        <table class="table"> 
            <tbody>
                <tr>
                    <th scope="row">Title</th>
                    <td>: {{ $arr['title'] }}</td> 
                </tr>
                <tr>
                    <th scope="row">Sender Email</th>
                    <td>: {{ $arr['email'] }}</td> 
                </tr>
                <tr>
                    <th scope="row">Message</th>
                    <td>: {{ $arr['message'] }}</td> 
                </tr>
            </tbody>
            </table>
    </body>
</html>
