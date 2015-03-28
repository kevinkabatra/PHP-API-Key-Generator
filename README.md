# PHP-API-Key-Generator
Example for an API Key generator written in PHP. The key that is generated will be 32 non-cryptographic random characters long, and can contain 0-9, a-z (lowercase), A-Z (uppercase). Adding the option for the characters to repeat, creates over 450 quadrillion combinations.

To keep the code short, I generate a random number using rand(48, 122). This number will then be filtered for the ranges of 58 to 64, and 91 to 96. If the random number is present in the previous ranges, the number must be discarded and then recreated. This is done until a number is generated outside of the previous ranges, and this in turn must be completed 32 times. This is done so that the random number can convert into ASCII code (i.e. &#48 ; = 0, whitespace added the prevent conversion) to generate the characters mentioned above.

Another option would be to create a random number using rand(0, 61). Then using a switch statement append a string together based upon the result. This method results in code roughly 133 lines in length (excluding comments, but allowing whitespace), while the previous method is 27 lines in length (again excluding comments, but allowing whitespace).

Running example at: http://kevinkabatra.ignorelist.com/examples/api%20key%20generator/example_api_key_generator.php
