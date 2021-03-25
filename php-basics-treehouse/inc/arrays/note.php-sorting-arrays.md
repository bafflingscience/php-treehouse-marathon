## Sorting Arrays

1.
Question:
Which function is used to sort an associative array by value while maintaining key association?

Answer: asort ()

2.
$colors = array("Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Black");

Question:
Which function will sort the array so the first element is "Yellow"?

**array_multisort( )**
sorts by value, maintains key association on associative arrays, not numeric.

**asort( )** 
sort an array and maintain index association
This function sorts an array such that array indices maintain their correlation with the array elements they are associated with.

This is used mainly when sorting associative arrays where the actual element order is significant.

**sort ( )**
sort normal

**rsort ( )**
reverse order

**shuffle ( )**
random shuffle

**ksort**
sorts alphabetically by key

**krsort**
sort an array by key in reverse order

Sorts an array by key in reverse order, maintaining key to data correlations. This is mainly useful for associative arrays.

Capital Letters before Lower Case

---

**Sorting Arrays**
What makes grouping variables in an array so useful? 
One of the extra tools arrays give us is the ability to sort. Sorting allows us to organize large amounts of data. We can sort by key or value, increasing the usefulness of our data.

PHP has several functions that deal with Sorting Arrays. 
The main differences are:

Some sort based on the array keys, whereas others by the values: `$array['key'] = 'value';`

Whether or not the correlation between the keys and values are maintained after the sort, which may mean the keys are reset numerically `(0,1,2 ...)`
The order of the sort: 
1. alphabetical 
2. low to high (ascending)
3. high to low (descending)
4. numerical
5. natural 
6. random
7. user defined

*Note: All of these sort functions act directly on the array variable itself, as opposed to returning a new sorted array
If any of these sort functions evaluates two members as equal then the order is undefined (the sorting is not stable).*

[Sorting Functions](https://www.php.net/manual/en/array.sorting.php)

