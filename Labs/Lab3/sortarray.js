
    function Numeric_sort(ar) {
         
        var i = 0, j;
         
        while (i < ar.length) {
            j = i + 1;
            while (j < ar.length) {
                 
                if (ar[j] < ar[i]) {
                    var temp = ar[i];
                    ar[i] = ar[j];
                    ar[j] = temp;
                }
                j++;
            }
            i++;
        }
    }    
    var arr = [1, 15, 10, 45, 27, 100];
    console.log("Original Array");
    console.log(arr);
         
    Numeric_sort(arr);
         
    console.log("Sorted Array");
         
    console.log(arr);