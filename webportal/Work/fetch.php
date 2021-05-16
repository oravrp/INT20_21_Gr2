<?php

//fetch.php

$api_url = "http://localhost/rest-api/api/test_api.php?action=fetch_all";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';

if(count($result) > 0)
{
    foreach($result as $row)
    {
        $output .= '
            <tr>
                <td>'.$row->id.'</td>
                <td>'.$row->id_wasp.'</td>
                <td>'.$row->id_secret.'</td>
                <td>'.$row->frame_type.'</td>
                <td>'.$row->frame_number.'</td>
                <td>'.$row->sensor.'</td>
                <td>'.$row->value.'</td>
                <td>'.$row->timestamp.'</td>
                <td>'.$row->sync.'</td>
                <td>'.$row->raw.'</td>
                <td>'.$row->parser_type.'</td>
            </tr>
            ';
    }
}
else
{
    $output .= '
        <tr>
            <td colspan="4" align="center">No Data Found</td>
        </tr>';
}

echo $output;
