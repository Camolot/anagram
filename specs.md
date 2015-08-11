

----------FIRST CASE--------
WHAT IT DOES:It compares two simple letters that are equal and returns the match.

INPUT WORD: a
INPUT LIST: a
OUTPUT LIST: ["a"]

--------SECOND CASE--------
WHAT IT DOES: It compares words with multiple letters and returns a match.  

INPUT WORD: to
INPUT LIST: to
OUTPUT LIST: ["to"]

--------THIRD CASE=---------
WHAT IT DOES: It detects numeric characters and sends an error message instead of an input.

INPUT WORD: t0
INPUT LIST: to
OUTPUT: Input is invalid; please input only letters.

--------FOURTH CASE----------
WHAT IT DOES: It compares the input words and displays an error message if no matches are found.

INPUT WORD: be
INPUT LIST: to
OUTPUT: Sorry, no matches found.


--------FIFTH CASE----------
WHAT IT DOES: It compares input words and puts matching words into an array.

INPUT WORD: be
INPUT LIST: to, be
OUTPUT: ["be"]

--------SIXTH CASE----------
WHAT IT DOES: It compares words and returns equal length words with all matching letters.

INPUT WORD: rat
INPUT LIST: tar, art, tap
OUTPUT: ["tar, art"]

------SEVENTH CASE---------
WHAT IT DOES: It finds anagram matches of mixed cases and returns the matching words in lowercase.

INPUT WORD: rat
INPUT LIST:rAt
OUTPUT: ["rat"]
