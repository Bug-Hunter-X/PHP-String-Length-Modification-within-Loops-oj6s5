# PHP String Length Modification Bug
This repository demonstrates a common, subtle bug in PHP related to modifying the length of a string while iterating over it within a loop.  This can lead to unexpected behavior and infinite loops. The code examples highlight this issue and provide a solution.

## Bug Description
The issue arises when functions like `strlen()` are used to determine the loop's bounds, while the string being iterated is modified within the loop itself.  The string's length changes, making the loop counter inaccurate and resulting in skipped or duplicated iterations.

## Solution
The solution avoids modifying the string's length during iteration, using a different approach to iterate through the original string data. For array modification in `foreach`, it is best to create a copy and manipulate that instead of modifying the original array during iteration. 
