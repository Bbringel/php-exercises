          
       <?php
       
        $numbers = array(6, 4, 2, 22, 11, 25, 1, 23);

        // Slice the array from index 2 to index 5
        $slice1 = array_slice($numbers, 2, 4);
        
        // Slice the array from index 0 to index 3
        $slice2 = array_slice($numbers, 0, 3);
        
        // Slice the array from index 4 to the end
        $slice3 = array_slice($numbers, 4);
        
        // Slice the array from index -3 to index -1
        $slice4 = array_slice($numbers, -3);
        
        // Print the slices
        print_r($slice1);
        print_r($slice2);
        print_r($slice3);
        print_r($slice4);
        
        $numbers = array(6, 4, 2, 22, 11, 25, 1, 23);
        
        // Get the first two elements of the array without modifying the original array
        $firstTwoElements = array_slice($numbers, 0, 2);
        
        // Print the first two elements
        print_r($firstTwoElements);
        
        // Get the last three elements of the array without modifying the original array
        $lastThreeElements = array_slice($numbers, -3);
        
        // Print the last three elements
        print_r($lastThreeElements);

        $age = array("Tomas" => "35", "Jerry" => "37", "John" => "43");

        // 1. Display the first two elements of the array keeping the original array intact:
        $first_Two_Elements = array_slice($age, 0, 2, true);
        print_r($first_Two_Elements);
        echo "<br>";

        // 2. Display the last three elements of the array keeping the original array intact:
        $last_Three_Elements = array_slice($age, -3, 3, true);
        print_r($last_Three_Elements);
        echo "<br>";
        
        // 3. Display two elements of the array starting from the 3rd element, keeping the original array intact:
        $element_Third_Fourth = array_slice($age, 2, 2, true);
        print_r($element_Third_Fourth);

        $numbers = array(16, 14, 12, 21, 11, 25, 1, 33);
        $new = array(6, 4, 2, 1);


        //Array SPLICE: 

        // 1. Remove and display the first two elements of the $numbers array:
        $removeElements = array_splice($numbers, 0, 2);
        print_r($removeElements);
        echo "<br>";
        
        // 2. Insert the $new array in the place of the removed elements:
        array_splice($numbers, 0, 0, $new);

        // 3. Display $numbers array before and after the operation:
        print_r($numbers);
        echo "<br>";

        $age = array("Tomas"=>"35", "Jerry"=>"37", "John"=>"43" , "Robin"=>"22");
        $old = array("Donald"=>"70", "Goofy"=>"80");

        // 1. Remove and display the first two elements of the $numbers array:
        $removeElements = array_splice($age, 0, 2);
        print_r($removeElements);
        echo "<br>";
        
        // 2. Insert the $new array in the place of the removed elements:
        array_splice($age, 0, 0, $old);

        // 3. Display $numbers array before and after the operation:
        print_r($age);
        echo "<br>";
       ?>

