



  
  <?php
    $csvHandleOne = fopen('OriginalInventory.csv', "r");
    $original = $updated = array();
    while($data = fgetcsv($csvHandleOne, 0, ",")) {
        $original[] = $data;
    }
    fclose($csvHandleOne);

    $csvHandleTwo = fopen('UpdatedInventory.csv', "r");
    while($data = fgetcsv($csvHandleTwo, 0, ",")) {
        $updated[] = $data;
    }
    fclose($csvHandleTwo);

    
    $newfile = array_merge($original, $updated);
    echo implode($newfile[0]);

    $csvHandleResult = fopen('result.csv', "w");
    foreach ($newfile as $value) {
        fputcsv($csvHandleResult, $value, ',');
    }
    fclose($csvHandleResult);
  ?>